<h3><?= $message ?? ''; ?></h3>
	

	<form method="post">
	
		<div class="bloco">
		<?php
if (app()->auth::User()->id_role === 1):
    ?>
			<div class="podraz">
				<p>Помещение</p> 
			</div>
			<div class="create">
			
		<button><a href="room_add">создать</a></button>
<?php		
endif;
?>
		</div>
		<?php
if (app()->auth::User()->id_role === 1):
    ?>
		<div class="vidpodraz">
				<p>Вид Помещения</p> 
			</div>
			<div class="create2">
			
		<button><a href="vid_room_add">создать</a></button>
<?php		
endif;
?>
		</div>
		</div>
		<div class="forma">
            <div class="bloc">
                <div class="block_room">
                    <?php

                    foreach ($rooms as $Room) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Помещения</h5>' . '<b>' . 'имя помещения - ' . $Room->NameRoom . '</b>' . '</td>' . '</div>';

                    }
                    ?>
                </div>

                <div class="block_room">
                    <?php

                    foreach ($users as $User) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Пользователи</h5>' . '<b>' . 'пользователь - ' . $User->login . '<br>' . 'помещение - ' . $User->NameRoom . '<br>' . '</b>' . '</td>' . '</div>';
                    }
                    ?>

                </div>
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
.bloc {
        display: flex;
        justify-content: space-around;
        margin-top: 100px;
        width: 1032px;
        height: 637px;
        background-color: #AD8B79;
    }
.forma {
        display: flex;
        justify-content: center;
    }

    .inside_block {
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    .block_room {
        display: flex;
        flex-direction: column;
        width: 200px;
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
