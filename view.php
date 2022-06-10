<?php

require __DIR__ .'/inc/header.php';
require __DIR__ .'/users.php';









 if(!isset($_GET['id'])) {
    echo "<h1>User dosen't Exist<h1>";
    exit;
 }
 $userID = $_GET['id']; 

 $user = getUserById($userID);

 if(!$user) {
    echo "<h1>User dosen't Exist<h1>";
    exit;
 }

?>










<div class="container">
    <div class="card">
        <h3 class="bg-dark text-white ">View-user: <?php echo $user['name']; ?></h3>
    </div>
<table class="table">
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $user['name']; ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $user['age']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $user['email']; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $user['password']; ?></td>
        </tr>
        <tr>
            <th>Website</th>
            <td>
                <a target="_blank" href="http://<?php echo $user['website'];?>"><?php echo $user['website'];?>
            </a>
                
               
            </td>
        </tr>
       
    </tbody>
    

 </table>
 <a href="index.php" class="btn-sm btn btn-primary p-sm">Back</a>

</div>


 

 <?php require __DIR__.'/inc/footer.php';?>