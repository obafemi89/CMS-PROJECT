<?php 
$id = $_GET["id"];
if($id){
include("../connect.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "post deleted sucessfully";
    header("Location:index.php");
}else{
    die("something is not write. Data is not deleted");
}

}else{
    echo "post not found";
}

?>