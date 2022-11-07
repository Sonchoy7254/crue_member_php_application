<?php

include 'header.php';

require '../users/function.php';

if(!isset($_GET['id'])) {
    include "Not-found.php";
    exit;
}

$userID = $_GET['id'];

$user = getUsersById($userID);

if(!$user) {
    include "Not-found.php";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $user = updateuser ($_POST, $userID); 
    uploadeimage($_FILES['picture'], $user);
    header('Location: ../index.php');
}















?>




























<?php require "form.php"; ?>
































<?php include "footer.php" ; ?>