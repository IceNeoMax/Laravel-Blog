<html>
<h1>
    Create Post
</h1>
<body>
<?php echo Form::open(array(
    'url'=>'post',
));?>
<?php echo Form::label("title","Title");echo Form::text('title');?>
<br>
<?php echo Form::label("content","Content");echo Form::textArea('content');?>
<?php echo Form::submit("Create");?>
</body>
</html>