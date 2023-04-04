<!doctype html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Главная страница</title>
   <style>
	body {
	margin: 0;
	padding: 0;
}
.header{
    margin-top: -20px;
	height: 100px;
	background-color: #B7F0B6;
}
.nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin-left: 40px;
	margin-right: 40px;
    padding-top: 40px;
    
}
.logo >a {
	font-size: 32px;
    text-decoration: none;
	color: #000;
	padding: 20px;
}
.link >a {
	text-decoration: none;
	color: #000;
	padding: 20px;
	font-size: 24px;
}
.link >a:hover{
	color: pink;
}
.center{
	margin-top: 100px;
	display: flex;
	justify-content: center;
}
.block{
	background-color: #000;
	width: 824px;
	height: 726px;
}
</style>
</head>
<body>
	<div class="header">
		<div class="nav">
			<div class="logo">
                <a href="<?= app()->route->getUrl('/hello')?>">Телефонный узел связи ТОМСК</a>
			</div>
			<div class="link">
			<?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/signup')?>">SIGN UP</a>
            <a href="<?= app()->route->getUrl('/login')?>">LOGIN</a>	 
		<?php
        else:
            ?>
			<?php
if (app()->auth::User()->id_role === 1 || 2):
    ?>
			<a href="<?= app()->route->getUrl('/add_user')?>">ADD_ABONENT</a>
			<a href="<?= app()->route->getUrl('/profile')?>">ABONENT</a>
			<?php
        endif;
        ?>
			<a href="<?= app()->route->getUrl('/room')?>">ROOM</a>
			<a href="<?= app()->route->getUrl('/subdivision')?>">SUBDIVISION</a>	 
			<a href="<?= app()->route->getUrl('/logout')?>">LOGOUT(<?= app()->auth::User()->login ?>)</a>
		<?php
        endif;
        ?>
			</div>
		</div>
	</div>
	<main>
		<?= $content ?? '' ?>
		
	</main>
</body>
</html>

	




