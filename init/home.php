<div class="container">
    <a href="init/create.php">Create User</a>
</div>

<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td>
            <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users/image/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
            </td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><a target="_blank" href="http://<?php echo $user["website"]; ?>"><?php echo $user["website"]; ?></a></td>
            <!-- for actions buttons  -->
            <td>
                <a href="init/single.php?id=<?php echo $user['id'] ?>">View</a>
                <a href="init/update.php?id=<?php echo $user['id'] ?>">Update</a>
                <form action="init/delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button>Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>