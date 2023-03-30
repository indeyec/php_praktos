	<div class="centres">
		<div class="avatar">
			<p>AVATAR</p> 
		</div>

	</div>
	<div class="bloc">
				<?php

					foreach ($users as $User) {

						echo '<h5>Фамилия</h5>' . '<b>' . $User->FirstName .' '.'<h5>Имя</h5>' . $User->LastName .' '.'<h5>Отчество</h5>'. $User->MiddleName .
						 ' '.'<h5>Дата рождения</h5>'. $User->Birthday . '</b>' ;
					}
				?>
			</div>
	<style>
.avatar{
	width: 260px;
	height: 142px;
	background-color: #D9D9D9;
	text-align: center;
	font-size: 24px;
}
.avatar > p{
	margin: 0;
	padding-top: 50px;
}
.blocki{
	width: 947px;
	height: 112px;
	background-color: #D9D9D9;	
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding-left: 20px;
	padding-right: 20px;
}
.podraz{
	width: 1178px;
	height: 85px;
	background-color: #D9D9D9;	
	font-size: 30px;
	padding-left: 40px;
}
		</style>
