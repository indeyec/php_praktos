<h3><?= $message ?? ''; ?></h3>
	

	<div class="main">
		<div class="blocks">
		<?php
if (app()->auth::User()->id_role === 1):
    ?>
			<div class="podraz">
				<p>Подразделение</p> 
			</div>
			<div class="create">
			
		<button><a href="subdivision_add">создать</a></button>
<?php		
endif;
?>
			</div>
			<?php
if (app()->auth::User()->id_role === 1):
    ?>
			<div class="vidpodraz">
				<p>Вид подразделения</p> 
			</div>
			<div class="create">
			
		<button><a href="vid_subdivision_add">создать</a></button>
<?php		
endif;
?>
			</div>
		</div>
		<div class="bloc">
			<?php

foreach ($subdivisions as $Subdivision) {
    echo '<tr>';
    echo '<td>' .'<h5>Подразделение</h5>' . '<b>' . $Subdivision->id .' ' . $Subdivision->Name .' '. $Subdivision->Vid .  '</b>' . '</td>';
}
?>
</div>
	</div>

<style>
.blocks{
	display: flex;
	align-items: center;
	text-align: center;	
	margin-top: -19px;
}
.podraz{
	width: 279px;
	height: 56px;
	background-color: #D9D9D9;
	margin-right: 20px;
	font-size: 20px;
	
}
.vidpodraz{
	width: 279px;
	height: 56px;
	background-color: #D9D9D9;
	margin-right: 20px;
	font-size: 20px;
	margin-left: 40px;
	
}

.create{
	width: 236px;
	height: 56px;
	background-color: #D9D9D9;
}

.bloc{
	margin-top: 100px;
	width: 1032px;
	height: 637px;
	background-color: #D9D9D9;
}

button{
   background-color: grey;
   width: 200px;
   height: 35px;
   color: pink;
   font-size: 25px;
   border-radius: 10px;
   margin-top: 10px;
}

button > a{
	text-decoration: none;
	color: pink;
}

</style>