<form action="" method="POST" enctype="multipart/form-data"> 
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $user['name']?>"> <br>
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $user['username']?>"><br>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $user['email']?>"><br>
    <label>Website</label>
    <input type="text" name="website" value="<?php echo $user['website']?>"><br>
    <label>Picture</label>
    <input type="file" name="picture"><br>
    <button>Submit</button>

</form>