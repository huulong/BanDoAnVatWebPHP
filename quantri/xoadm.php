<?php
session_start();
if($_SESSION['email']== "phunghuulong@gmail.com" && $_SESSION['pass'] == "long2002"){
    $id_dm=$_GET['id_dm'];
    include_once './ketnoi.php';
    $sql = "delete from dmsanpham where id_dm='$id_dm'";
    $query = mysqli_query($conn,$sql);
    header('location:quantri.php?page_layout=danhsachdm');
}
else header('location:index.php');
?>
