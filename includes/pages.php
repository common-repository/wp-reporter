<h2>Total Pages: <a href="edit.php?post_type=page"><?php echo $total_pages; ?></a></h2>
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
            <td><a href="edit.php?post_status=publish&amp;post_type=page"><?php echo $count_pages->publish; ?></a></td>
            <td><a href="edit.php?post_status=future&amp;post_type=page"><?php echo $count_pages->future; ?></a></td>
            <td><a href="edit.php?post_status=draft&amp;post_type=page"><?php echo $count_pages->draft; ?></a></td>
            <td><a href="edit.php?post_status=pending&amp;post_type=page"><?php echo $count_pages->pending; ?></a></td>
            <td><a href="edit.php?post_status=private&amp;post_type=page"><?php echo $count_pages->private; ?></a></td>
            <td><a href="edit.php?post_status=trash&amp;post_type=page"><?php echo $count_pages->trash; ?></a></td>
            <td><a href="edit.php?post_status=auto-draft&amp;post_type=page"><?php echo $count_pages->{'auto-draft'}; ?></a></td>
            <td><a href="edit.php?post_status=inherit&amp;post_type=page"><?php echo $count_pages->inherit; ?></a></td>
        </tr>
    <tbody>
</table>