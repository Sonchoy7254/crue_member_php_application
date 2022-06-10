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
    <h1>User Profile update : <b> <?php echo $user['name']; ?> </b></h1>
</div>

<form action="" enctype="multipart/form-data" method="post">

<div class="form-grup">
    <label for="">Name</label>
    <input type="text" name="name" value="<?php echo $user['name'] ?>" class="form-control">
</div>
<div class="form-grup">
    <label for="">age</label>
    <input type="text" name="age" value="<?php echo $user['age'] ?>" class="form-control">
</div>
<div class="form-grup">
    <label for="">email</label>
    <input type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control">
</div>
<div class="form-grup">
    <label for="">password</label>
    <input type="text" name="password" value="<?php echo $user['password'] ?>" class="form-control">
</div>
<div class="form-grup">
    <label for="">website</label>
    <input type="text" name="website" value="<?php echo $user['website'] ?>" class="form-control">
</div>
<div class="form-grup">
    <label for="">Image</label>
    <input type="file" name="picture" class="form-control-file">
</div>

<input type="submit" class="btn-sm btn btn-primary mt-3" value="Submit">

</form>
</div>

