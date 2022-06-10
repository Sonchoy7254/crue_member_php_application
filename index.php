<?php require "inc/header.php";?>
<?php require "users.php"; 
$users = getUsers();
?>




<table class="table">
    <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Password</th>
        <th>Website</th>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>

            <tr>
                    <td><?php  echo $user['name'] ?></td>
                    <td><?php  echo $user['age']; ?></td>   
                    <td><?php  echo $user['email']; ?></td>
                    <td><?php  echo $user['password']; ?></td>
                    <td><?php  echo $user['website']; ?></td>
                
            </tr>

            <?php endforeach; ?>
    </tbody>
</table>




<!-- Footer file adding  -->
<?php require "inc/footer.php" ?>