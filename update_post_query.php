<?php
include("connection_db.php");
if (isset($_POST["update"])) {
    date_default_timezone_set("Asia/Karachi");
    $post_id = $_POST["post_id"];
    $post_privacy = $_POST["post_privacy"];
    $get_post_emp_fullname = "username";
    $post_designation = "abc";
    $post_heading = $_POST["post_heading"];
    $post_description = $_POST["post_description"];
    $totalfiles = count($_FILES['post_image']['name']);
    if(is_uploaded_file($_FILES['post_image']['name'])){
        
        $insertdel = "delete FROM table_post WHERE post_id='$post_id' ";                   
        $rquerydel1 = mysqli_query($connection,$insertdel);
    }
    $insert = "UPDATE ats_post SET ats_post_privacy='$post_privacy',ats_post_heading='$post_heading',ats_post_description='$post_description' WHERE ats_post_id='$post_id'";
    $query = mysqli_query($connection,$insert); 

    if($query)
    {
        for($i=0;$i<$totalfiles;$i++){
            $filename = $_FILES['post_image']['name'][$i];
            // Upload files and store in database
            if(move_uploaded_file($_FILES["post_image"]["tmp_name"][$i],'post_images/'.$filename)){
            // Image db insert sql
            $insert1 = "INSERT INTO `table_post`(`post_images`, `post_id`) VALUES ('$filename','$post_id')";
            $iquery = mysqli_query($connection,$insert1);
            }
            else{
                echo 'Error in uploading file - '.$_FILES['post_image']['name'][$i].'<br/>';
            }
        }
        header("Location: index.php");

    }
}
?>