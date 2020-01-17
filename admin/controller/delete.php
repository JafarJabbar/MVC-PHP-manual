 <?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/22/2019
 * Time: 8:01 PM
 */
$table=get('table');
$column=get('column');
$id=get('id');
if (!permission($table,'delete')){
    die("<div style='padding: 100px 0 0 0; height: 80%; background:#cccccc;' class='permission_denied'><h1 style='font-size:100px;text-align: center;'>🚫</h1><h3 style='text-align: center; '>Bu əməliyyatı yerinə yetirmək üçün icazəniz yoxdur...!!!</h3></div>
");
}
$query=$db->prepare('DELETE FROM ' . $table . ' WHERE ' . $column . ' = :id');
$query->execute([
    'id'=>$id
]);

if ($table='posts'){
    //commentlerini silme
    $deleteComments=$db->delete('comments')
        ->where('comment_user_id',$id)
        ->done();
    //taglari silme
    $deleteTags=$db->delete('post_tags')
        ->where('post_tag_id',$id)
        ->done();
}
if ($table=='tags'){
    if ($query){
        //commentlerini silme
        $deletePostTags=$db->delete('post_tags')
            ->where('tag_id',$id)
            ->done();
    }
}
header('Location:'.$_SERVER['HTTP_REFERER']);
exit;