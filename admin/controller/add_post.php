<?php

if (!permission('posts','add')){
    permission_page();
    exit;
}

$categories=$db->from('categories')
            ->all();

$tags=$db->from('tags')
    ->orderBy('tag_id','DESC')
    ->all();
$tagArr=[];
foreach ($tags as $tag){
    $tagArr[]=trim(htmlspecialchars($tag['tag_name']));
}
if (post('submit')){
    $post_name=post('post_name');
    $post_content=post('post_content');
    $post_short_content=post('post_short_content');
    $post_categories= post('post_categories');
    $post_status=post('post_status');
    $post_tags=post('post_tags');
    $post_url=permalink(post('post_name'));
    if (!$post_url){
        $post_url=permalink($post_name);
    }
    if (!$post_name || !$post_content || !$post_categories || !$post_status){
        $error="Xanaları tam doldurun.";
    }else{
        $post_seo=json_encode(post('post_seo'));
        // bele bir sehife var?
        $query=$db->from('posts')->where('post_url',$post_url)->first();
        if ($query){
            $error="Bu adda post artıq mövcuddur.";
        }else {
            $query = $db->insert('posts')
                ->set([
                    'post_name' => $post_name,
                    'post_url' => $post_url,
                    'post_content' => $post_content,
                    'post_short_content' => $post_short_content,
                    'post_categories' => $post_categories,
                    'post_status' => $post_status,
                    'post_seo' => $post_seo
                ]);
            if ( $query ) {
                $postLastId = $db->lastId();
                $tags = explode(",", $post_tags);
                $tags = array_filter($tags);
                if ( $tags > 0 ) {
                    foreach ($tags as $tag) {
                        $tag_url = permalink($tag);
                        $queryTag = $db->from('tags')
                            ->where('tag_url', $tag_url)
                            ->first();
                        if ( !$queryTag ) {
                            $query = $db->insert('tags')
                                ->set([
                                    'tag_name' => $tag,
                                    'tag_url' => $tag_url
                                ]);
                            $tagId = $db->lastId();
                        } else {
                            $tagId = $queryTag['tag_id'];
                        }
                        $queryPostTag = $db->from('post_tags')
                            ->where('tag_id', $tagId)
                            ->where('post_tag_id', $postLastId)
                            ->first();
                        if ( !$queryPostTag ) {
                            $queryInsertPostTag = $db->insert('post_tags')
                                ->set([
                                    'tag_id' => $tagId,
                                    'post_tag_id' => $postLastId
                                ]);
                        }
                    }
                    header('Location:' . admin_url('posts'));
                } else {
                    $error = "Bir problem var.";
                }
            }
        }


    }
}

require admin_view('add_post');