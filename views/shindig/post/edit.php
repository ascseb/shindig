<dl>
<?php foreach ($post->inputs() as $label => $input): ?>
    <dt><?php echo $label ?></dt>
    <dd><?php echo $input ?></dd>

<?php endforeach ?>
</dl>
