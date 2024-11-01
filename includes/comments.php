<h2>Comments received: <a href="edit-comments.php"><?php echo $comments_count->total_comments; ?></a></h2>
<table class="wp-list-table widefat">
    <thead>
        <tr>
            <th>In Moderation</th>
            <th>Approved</th>
            <th>In Spam</th>
            <th>In Trash</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="edit-comments.php?comment_status=moderated"><?php echo $comments_count->moderated; ?></a></td>
            <td><a href="edit-comments.php?comment_status=approved"><?php echo $comments_count->approved; ?></a></td>
            <td><a href="edit-comments.php?comment_status=spam"><?php echo $comments_count->spam; ?></a></td>
            <td><a href="edit-comments.php?comment_status=trash"><?php echo $comments_count->trash; ?></a></td>
            <td><a href="edit-comments.php?comment_status=approved"><?php echo $comments_count->total_comments; ?></a></td>
        </tr>
    </tbody>
</table>