<?php 
include "header.php";
require "../users/function.php";


if(!isset($_POST['id'])) {
    include "not-found.php";
    exit;
}
$userId = $_POST['id'];

deleteUser($userId);

header('Location: ../index.php');


?>