<?php
function getUsers() {

    return json_decode(file_get_contents('users.json'), true);
   
 }
 function getUserById($Id) {
 
    $users = getUsers();
    foreach($users as $user) {
        if($user['id'] == $Id) {
            return $user;
        }
    }
    return null;
 }
 function createuser($data) {
 
 }
 function UpdateUser ($data, $Id) {
 
 }
 function deleteuser($id) {
 
 }
?>
