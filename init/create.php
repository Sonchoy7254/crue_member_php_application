<?php 
include "header.php";
require "../users/function.php";

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'website' => '',
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

  


        $user = createUser($_POST);

        uploadeimage($_FILES['picture'], $user);

        header('Location: ../index.php');

}



?>

<?php include "form.php"; ?>

