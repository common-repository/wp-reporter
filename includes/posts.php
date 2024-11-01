<h2>Total Posts: <a href="edit.php"><?php echo $total_posts; ?></a></h2>
<table class="wp-list-table widefat">
    <thead>
        <tr>
            <th>Publish</th>
            <th>Future</th>
            <th>Draft</th>
            <th>Pending</th>
            <th>Private</th>
            <th>Trash</th>
            <th>Auto-Draft</th>
            <th>Inherit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="edit.php?post_status=publish&amp;post_type=post"><?php echo $count_posts->publish; ?></a></td>
            <td><a href="edit.php?post_status=trash&amp;post_type=post"><?php echo $count_posts->future; ?></a></td>
            <td><a href="edit.php?post_status=draft&amp;post_type=post"><?php echo $count_posts->draft; ?></a></td>
            <td><a href="edit.php?post_status=pending&amp;post_type=post"><?php echo $count_posts->pending; ?></a></td>
            <td><a href="edit.php?post_status=private&amp;post_type=post"><?php echo $count_posts->private; ?></a></td>
            <td><a href="edit.php?post_status=trash&amp;post_type=post"><?php echo $count_posts->trash; ?></a></td>
            <td><a href="edit.php?post_status=auto-draft&amp;post_type=post"><?php echo $count_posts->{'auto-draft'}; ?></a></td>
            <td><a href="edit.php?post_status=inherit&amp;post_type=post"><?php echo $count_posts->inherit; ?></a></td>
        </tr>
    </tbody>
</table>