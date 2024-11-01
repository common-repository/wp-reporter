<h2>Top level categories: <a href="edit-tags.php?taxonomy=category"><?php echo $total_categories; ?></a></h2>
<p>Covers top level categories only.</p>

<table class="wp-list-table widefat">
    <thead>
        <tr>
            <th>Category</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($categories as $category): ?>
        <tr>
            <td><a href="term.php?taxonomy=category&amp;tag_ID=<?php echo $category->term_id; ?>&amp;post_type=post"><?php echo $category->name; ?></a></td>
            <td><a href="edit.php?s&amp;post_status=all&amp;post_type=post&amp;action=-1&amp;m=0&amp;cat=<?php echo $category->term_id; ?>&amp;filter_action=Filter&amp;paged=1&amp;action2=-1"><?php echo $category->count; ?></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
