	<div class="center">
		<div class="blocks">
			<div class="block">
				<p>Фамилия</p>
			</div>
			<div class="block">
				<p>Имя</p>
			</div>
			<div class="block">
				<p>Дата рождения</p>
			</div>
		</div>
	</div>

<style>
    body {
	margin: 0;
	padding: 0;
}

.center{
	margin-top: 110px;
	display: flex;
	justify-content: center;
}
.blocks{
	background-color: #D9B5B5;
	width: 772px;
	height: 739px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}
.block{
	background-color: #D9D9D9;
	width: 533px;
	height: 100px;	
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top:100px;
}
.block > p {
	font-size: 24px;
}
</style>