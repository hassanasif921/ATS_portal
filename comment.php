<?php 
include("connection_db.php");
if(isset($_POST['btn_submit_comment']))
{
$form_post_id=$_POST['form_post_id'];
$comment=$_POST['comments_for_post'];
$username=$_POST['form_post_username'];
$role=$_POST['form_post_role'];
$comment=$_POST['comments_for_post'];
$querycomment=mysqli_query($connection,"INSERT INTO tbl_comment(comment, username_id, comment_role,post_id) VALUES ('$comment','$username','$role','$form_post_id')");
if($querycomment)
{
    header("Location: index.php");

}
}
?>