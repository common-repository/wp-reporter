<h2>Users and roles: <a href="users.php"><?php echo $users['total_users']; ?></a></h2>
<p>List of users.</p>

<table class="wp-list-table widefat">
    <thead>
        <tr>
            <?php foreach($users['avail_roles'] as $role => $count): ?>
                <th><?php echo $role; ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($users['avail_roles'] as $role => $count): ?>
                <td><a href="users.php?role=<?php echo $role; ?>"><?php echo $count; ?></a></td>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>