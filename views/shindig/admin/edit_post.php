
<h2><?php echo $form_title ?></h2>

<?php echo form::open() ?>

<?php include Kohana::find_file('views', 'errors') ?>

<dl>
 <dt><?php echo $post->label('title') ?></dt>
 <dd><?php echo $post->input('title') ?></dd>
</dl>

<dl>
 <dt><?php echo $post->label('slug') ?></dt>
 <dd><?php echo $post->input('slug') ?></dd>
</dl>
<div class="clear"></div>  
<div>
 <?php echo $post->label('post_content') ?>
 <?php echo $post->input('post_content') ?>
</div>

<dl>
 <dt><?php echo $post->label('status') ?></dt>
 <dd><?php echo $post->input('status') ?></dd>
</dl>

<dl>
 <dt><?php echo $post->label('post_excerpt') ?></dt>
 <dd><?php echo $post->input('post_excerpt') ?></dd>
</dl>


<dl>
 <dt><?php echo $post->label('created_on') ?></dt>
 <dd><?php echo $post->input('created_on') ?></dd>
</dl>

<dl>
 <dt><?php echo $post->label('type') ?></dt>
 <dd><?php echo $post->input('type') ?></dd>
</dl>

<?php echo $post->input('updated_on', array('type'=>'hidden')) ?>
 
<?php echo form::button('shindig_post', __('Submit')) ?>

<?php echo form::close() ?>
