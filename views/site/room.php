<h3><?= $message ?? ''; ?></h3>
	

	<form method="post">
		<div class="bloco">
			<div class="podraz">
				<p>Помещение</p> 
			</div>
			<div class="create">
				<button><a href="room_add">создать</a></button>
			</div>
		</div>
		<div class="forma">
			<div class="bloc">
				<?php

					foreach ($rooms as $Room) {
						echo '<tr>';
						echo '<td>' .'<h5>Помещение</h5>' . '<b>' . $Room->id .' ' . $Room->Name .' '. $Room->Vid . ' '. $Room->Subdivision . '</b>' . '</td>';
					}
				?>
			</div>
		
		</div>

</form>

	<style>
.bloco{
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
