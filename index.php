<?php require "inc/header.php";?>
<?php require "users.php"; 
$users = getUsers();
?>



<div class="container">
<table class="table">
    <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Password</th>
        <th>Website</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>

            <tr>
                    <td><?php  echo $user['name'] ?></td>
                    <td><?php  echo $user['age']; ?></td>   
                    <td><?php  echo $user['email']; ?></td>
                    <td><?php  echo $user['password']; ?></td>
                    <td><a target="_blank" href="http://<?php echo $user['website'];?>"><?php echo $user['website'];?></td>
                    <td><a href="view.php?id=<?php echo $user['id']; ?>  " class="btn-sm btn btn-primary">View</a></td>
                    <td><a href="update.php?id=<?php echo $user['id']; ?>" class="btn-sm btn btn-primary">Update</a></td>
                    <td><a href="" class="btn-sm btn btn-danger">Delete</a></td>
                
            </tr>

            <?php endforeach; ?>
    </tbody>
</table> 
</div>





<!-- Footer file adding  -->
<?php require "inc/footer.php" ?>