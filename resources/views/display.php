<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 9/27/2016
 * Time: 12:51 PM
 */
?>

<!--DISPLAY View -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/site.css"/>
    <title>Laravel 5 Blog Tutorial</title>
</head>
<body>
<div id="header">Laravel Blogger</div>
<div>
    <table border="0">
        <tr class="tbl_header">
            <th>Title</th>
            <th>Entry</th>
            <th>Posted On</th>
            <th>Action</th>
        </tr>
        <?php
        $stripe = false;
        foreach ($blogs as $entry) {
            $stripe = !$stripe;

            if ($stripe) {
                echo '<tr class="odd"> ';
            } else {
                echo '<tr class="even"> ';
            }
            echo '<td>' . $entry->title . '</td>';
            echo '<td>' . $entry->entry . '</td>';
            echo '<td>' . $entry->posted_on . '</td>';
            echo '</div>';
            echo '<td>';
            echo '<div class="tbl_header">';
            echo "<a href='/blog/edit/" . $entry->id . "'> Edit</a> |";
            echo "<a href='/blog/delete/" . $entry->id . "'> Delete</a> ";
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <p><a href="/blog/add">Add a NEW blog entry</a></p>
</div>
<div>
    <li><a	href="/login">Login</a></li>
    <li><a	href="/register">Register</a></li>
</div>

</body>
</html>