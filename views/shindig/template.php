<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Kohana::$charset ?>"/>

<title><?php echo $title ? __($title).' | ' : '' ?><?php echo Kohana::config('shindig.blog.title')?></title>

<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
<?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>

</head>
<body>

<div id="header"><div class="container">
<?php echo HTML::anchor('', Kohana::config('shindig.blog.title'), array('id' => 'logo')) ?>
</div></div>

<?php if ( ! empty($menu)): ?>
<div id="menu"><div class="container">
<ul class="menu">
<?php foreach ($menu as $link => $title): ?>
<li><?php echo HTML::anchor($link, $title) ?></li>
<?php endforeach ?>
<li class="logout"><?php echo HTML::anchor(Request::instance()->route->uri(array('action' => 'logout')), 'Logout') ?></li>
</ul>
</div></div>
<?php endif ?>

<div id="content"><div class="container">
<?php echo $content ?>
</div></div>

<div id="footer"><div class="container">
<p class="copyright"><?php echo html::anchor('http://kohanaphp.com', __('Shindig is powered by Kohana 3.0')) ?></p>
</div></div>


</body>
</html>
