<div class="centres">
    <div class="avatar">
        <p>AVATAR</p>
    </div>

</div>
<div class="main_block">
	<div class="bloc">

		<?php
		foreach ($users as $User) {
			echo '<h5>Фамилия</h5>' . ' ' . $User->LastName;
		}
		?>
	</div>
	<div class="bloc">
		<?php
		foreach ($users as $User) {
			echo '<h5>Имя</h5>' . ' ' . $User->FirstName;
		}
		?>
	</div>

	<div class="bloc">
		<?php
		foreach ($users as $User) {
			echo '<h5>Отчество</h5>' . ' ' . $User->MiddleName;
		}
		?>
	</div>

	<div class="bloc">
		<?php
		foreach ($users as $User) {
			echo '<h5>Дата рождения</h5>' . ' ' . $User->Birthday;
		}
		?>
	</div>
</div>
<style>

    .main_block{
        display: flex;
        align-items: center;
        margin-left: 20px;
		width: 600px;
		border: 2px solid black;
    }

    .bloc {
        width: 200px;
        margin-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .avatar {
        width: 260px;
        height: 142px;
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 40px;
    }

    .avatar > p {
        margin: 0;
        padding-top: 50px;
    }
</style>
