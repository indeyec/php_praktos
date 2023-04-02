<h3><?= $message ?? ''; ?></h3>

<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <div class="centr">
		<div class="blocks">
			<div class="block">
         <input type="text" name="Name"required placeholder="Название">
			</div>
			
			
         <div class="block">
				<button>Создать</button>
			</div>
		</div>
        </div>
</form>
	

<style>
.centr{
    display: flex;
    align-items: center;
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
}

.block{
	background-color: #D9D9D9;
	width: 450px;
	height: 70px;	
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 175px;
   border-radius: 20px;
}

.block > p {
	font-size: 24px;
}
</style>