<h2><?php echo __('Posts') ?></h2>

<table>
<?php foreach($posts as $i=>$post) : ?>

<tr>
 <td><?php echo $post->id ?></td>
 <td><?php echo $post->title ?></td>
 <td><?php echo $post->created_on ?></td>
 <td><?php echo $post->verbose('status') ?></td>
</tr>

<?php endforeach; ?>

</table>