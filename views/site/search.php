<?php

$connect = mysqli_connect("localhost", "root", "", "mvc") or die("Error");

?>

<!doctype html>
<html>
<head>
    <title>Document</title>
</head>

<body>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="text" name="search" class="search"><input type="submit" name="submit" value="поиск">
</form>
<hr>
<?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $query = mysqli_query($connect, "SELECT * FROM users WHERE 'login' LIKE '%$search%' ");
    while ($row = mysqli_fetch_assoc($query)) echo " " . $row['login'];
}

?>