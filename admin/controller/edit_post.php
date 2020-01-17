<?php

if (!permission('posts','edit')){
    permission_page();
    exit;
}

$id=get('post_id');
if (!$id){
    header("Location:".admin_url('posts'));
    exit;
}

$query=$db->from('posts')
    ->where('post_id',$id)
    ->first();
$tagArr=[];
$allTags=$db->from('tags')
    ->orderBy('tag_id','DESC')
    ->all();
foreach ($allTags as $tag){
    $tagArr[]=trim(htmlspecialchars($tag['tag_name']));
}



$categories=$db->from('categories')
            ->all();

$postTags=$db->from('post_tags')
    ->join('tags','%s.tag_id=%s.tag_id')
    ->where('post_tag_id',$id)
    ->all();
$tagPost=[];
foreach ($postTags as $tag){
    $tagPost[]=trim(htmlspecialchars($tag['tag_name']));
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
        $query=$db->from('posts')
            ->where('post_url',$post_url)
            ->where('post_id',$id,'!=')
            ->first();
        if ($query){
            $error="Bu adda post artıq mövcuddur.";
        }else {
            $query = $db->update('posts')
                ->where('post_id', $id)
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
                $postLastId = $id;
                $tagsFromPost = explode(",", $post_tags);
                $tagsFromPost = array_filter($tagsFromPost);
                if ( $tagsFromPost > 0 ) {
                    foreach ($tagsFromPost as $tag) {
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
                    $diffs = array_diff($tagPost, $tagsFromPost);
                    if ( $diffs > 0 ) {
                        foreach ($diffs as $diff) {
                            foreach ($allTags as $tag) {
                                if ( $tag['tag_name'] == $diff )
                                    $delete = $db->delete('post_tags')
                                        ->where('tag_id', $tag['tag_id'])
                                        ->where('post_tag_id', $id)
                                        ->done();
                            }

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
$seo=json_decode($query['post_seo'],true);
require admin_view('edit_post');