<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 9/27/2016
 * Time: 11:53 AM
 */
?>
<!-- EDIT View -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blog Edit Page</title>
</head>
<body>
<form name="blog_form" action="/blog/save/<?php	echo $blog->id;?>" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
    <p>Enter the title:<input name="title" type="text" value="<?php	echo $blog->title;?>">
    <p>Enter your text: <input name="entry"	type="text"	value="<?php echo $blog->entry;	?>">
        <input value="Post	it!" type="submit"></p>
    <div id="result"></div>
</form>
</body>
</html>