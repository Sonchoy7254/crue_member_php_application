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


?>

<table>
    <thead>

    </thead>
    <tbody>
    <tr>
            <th>Picture: </th>
            <td>
            <?php if(isset($user['extension'])): ?>

               <img style="height: 200px" src="<?php echo "../users/image/${user['id']}.${user['extension']}"; ?>" alt=""> 

            <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>Name: </th>
            <td><?php echo $user["name"]; ?></td>
        </tr>
        <tr>
            <th>Username: </th>
            <td><?php echo $user["username"]; ?></td>
        </tr>
        <tr>
            <th>Email: </th>
            <td><?php echo $user["email"]; ?></td>
        </tr>
        <tr>
            <th>Website: </th>
            <td>  <a target="_blank" href="http://<?php echo $user["website"]; ?>"><?php echo $user["website"]; ?></a> </td>
        </tr>
       

    </tbody>
</table>
<div class="container">
    <?php echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";?>
</div>

<?php include "footer.php"; ?>