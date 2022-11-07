<?php
// show all users is font page 
function getusers() {
    return json_decode(file_get_contents(__DIR__."/userdata.json"), true);
}


// show indivisual page 
function getUsersById($id) {
    $users = getUsers();
        foreach ($users as $user) {
            if($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
// update information and add image 
function updateuser($data, $id) {
 $updateUser = [];
 $users = getUsers();
 foreach ($users as $i => $user) {
    if ($user['id'] == $id) {
        $users[$i] = $updateUser = array_merge($user, $data);
    }
 }
 putJson($users);
 return $updateUser;
}

function putJson ($users) {
    file_put_contents(__DIR__.'/userdata.json', json_encode($users, JSON_PRETTY_PRINT));
}

function uploadeimage($file, $user) {

    if(isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if(!is_dir(__DIR__."/image"))
        {
            mkdir(__DIR__."/image");
        }
    }

    $fileName = $file['name'];
    $dotPosition = strpos($fileName, '.');
    $extension = substr($fileName, $dotPosition + 1 );

    move_uploaded_file($file['tmp_name'],__DIR__."/image/${user['id']}.$extension" );
    $user['extension'] = $extension;
    updateuser($user, $user['id']);

}




function createUser($data) {
    $users = getusers();
    $data['id'] = rand(100000, 20000000);
    $users[] = $data;
    putJson($users);
    return $data;
}


function deleteUser($id)

{
    $users = getusers();

    foreach ($users as $i => $user) {
        if($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }
    putJson($users);
}



function userinputFilter ($user, &$errors) {
    $isValid = true;

if(!$user['name']) {
    $isValid = false;
    $errors['name'] = "name is mandatory";
}

if(!$user['username'] || strlen($user['username']) < 6 || strlen($user['username']) > 16 ) {
    $isValid = false;
    $errors['username'] = "username is is require must me 6 and under 16 leters";
}

if(!$user['email'] && !filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
    $errors['email'] = "This must be a valid email address";
}

return $isValid;

}



?>