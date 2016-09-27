<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 9/27/2016
 * Time: 11:44 AM
 */
?>

<!--ADD	View	-->
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 5 Blog</title>
    </head>
    <body>
        ADD	VIEW
        <form name="blog_form" action="/blog/save" method="POST">
            <input type="hidden" name="_token" value="<?php	echo csrf_token()?>"/>
            <p>Enter the title: <input name="title" type="text">
            <p>Enter your text: <input name="entry"	type="text">
                <input value="Post it!" type="submit"></p>
            <div id="result"></div>
        </form>
    </body>
</html>