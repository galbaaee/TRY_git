<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profil</title>
</head>
<body>
	<div class="main">
		<h1>Ghaniy Albar Rasyidi Kusuma</h1>
		<div class="txt"> Mahasiwa <strong> Universitas Trunojoyo Madura</strong></div>
		<p>Saya Ghaniy Albar Rasyidi Kusuma, Mahasiswa semester 5 Universitas Trunojoyo Madura.</p>
		<br>
		<?php

          echo 'Today is '.date('l.'); 
         ?>
		
	</div>
	
</body>
<style type="text/css">
	body{
		padding: 100px;
		text-align: center;
		background-image: linear-gradient(-20deg,#6495ed 0%, #dc143c 100%);
	}
	.main{
		width: 800px;
		height: 520px;
		background-color: #fafafa;
		margin: 0 auto;
		padding-top:20px ;
		border-radius: 10px;
		border: 2px solid #eeeeee;
	}
	h1{
		text-align: center;
		font-size: 30px;
		margin: 0;
	}
	.txt{
		text-align: center;
		font-size: 15px;
		margin: 0;
	}
	p{
		margin: 0 auto;
		padding-top: 20px;
		width: 450px;
		height: auto;
	}
	.item{
		color: black;
		font-size: 50px;

	}
</style>
</html>

