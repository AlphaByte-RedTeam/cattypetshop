<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

// also check for isAdmin
if (empty($_GET['id']) || empty($_SESSION['isAdmin'])){
   header("location: ../list/user_list.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$id_member = $_GET['id'];

$sql = "";
$sql = "DELETE FROM tb_member WHERE id_member = '$id_member' ";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/user_list.php');
?>
