
<h2>Регистрация нового Абонента</h2>

<h3><?= $message ?? ''; ?></h3>
<div class="center">
<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
		<div class="blocks">
			<div class="block">
         <input type="text" name="FirstName"required placeholder="Фамилия">
			</div>
			<div class="block">
         <input type="text" name="LastName" required placeholder="Имя">
			</div>
			<div class="block">
         <input type="text"name="MiddleName" required placeholder="Отчество">
			</div>
			<div class="block">
         <input type="date"name="Birthday" required placeholder="Дата рождения">
			</div>
			

			<div class="block">
                <?php
                echo('Выбор помещения:');
                echo '<select id="" name="NameRoom">';
                foreach ($rooms as $Room) {
                    echo "<option value=\"$Room->NameRoom\">"
                        . $Room->NameRoom.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <div class="block">
                <?php
                echo('Выбор подразделения:');
                echo '<select id="" name="NameSubdivision">';
                foreach ($subdivisions as $Subdivision) {
                    echo "<option value=\"$Subdivision->NameSubdivision\">"
                        . $Subdivision->NameSubdivision.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <div class="block">
                <?php
                echo('Выбор номера:');
                echo '<select id="" name="number">';
                foreach ($usernums as $Usernum) {
                    echo "<option value=\"$Usernum->number\">"
                        . $Usernum->number.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

			<div class="block">
         <input type="text"name="login" required placeholder="login">
			</div>
         <div class="block">
         <input type="password"name="password" required placeholder="password">
			</div>
         
		<div class="block">
			<select name="id_role" id="id_role">
							<option value="1">Администратор</option>
                     <option value="2">Менеджер</option>
                     <option value="3">Абонент</option>
                            
                            
            </select>
		</div>
		<div class="block">
				<button>REGISTER</button>
			</div>
		</div>
</form>
	</div>
   <style>
   .center{
	margin-top: 50px;
	display: flex;
	justify-content: center;
}

.signup{
	color: #fff;
	font-size: 20px;
}
button{
   background-color: grey;
   width: 420px;
   height: 50px;
   color: pink;
   font-size: 25px;
   border-radius: 10px;
}
input{
   padding: 10px;
   width: 400px;
   border: 0;
   color: pink;
   border-radius: 10px;
   font-size: 20px;
}
.blocks{
	background-color: #D9B5B5;
	width: 772px;
	height: 739px;
	display: flex;
	flex-direction: column;
	align-items: center;
   margin: 0;
   border-radius: 30px;
	/* justify-content: center; */
}

.block{
	background-color: #D9D9D9;
	width: 450px;
	height: 70px;	
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 20px;
   border-radius: 20px;
}
select {
        background-color: grey;
        width: 420px;
        height: 40px;
        color: pink;
        font-size: 25px;
        border-radius: 10px;
		align-items: center;
		justify-content: center;
        
    }

.block > p {
	font-size: 24px;
}
</style>
