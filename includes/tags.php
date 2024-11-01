<h2>Tags: <a href="edit-tags.php?taxonomy=post_tag"><?php echo count($tags); ?></a></h2>

<p>Following tags are in use:</p>

<div class="post_tags">
<?php
#print_r($tags);
function tagify($tag)
{
    $tag_link = get_tag_link($tag->term_id);
    echo "
<strong>{$tag->name}</strong>
(
    <a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>View</a>, 
    <a href='term.php?taxonomy=post_tag&tag_ID={$tag->term_id}&post_type=post'>Edit</a>
)
";
    // term.php?taxonomy=post_tag&tag_ID=5&post_type=post
}
array_walk($tags, "tagify");

if(count($tags)<=0)
{
    echo "Tags are not in use.";
}
?>
</div>
