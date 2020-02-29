<!DOCTYPE html>
<html>
<head>
	<title>Travel to Bali</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" /> -->
	<style type="text/css">
	body{
      position: relative;
      min-height:100%;
      background: url(media/home.png) no-repeat;
      background-size: cover;

      }
      .overlay {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 10;
      background: rgba(42, 38, 61, 0.82) no-repeat;
      }
      .content{
      	margin-top: 50px;
      	position: relative;
	    text-align: center;
	    margin-left: auto;
      }
      .content img{
      	height: 165px;
      	width: 165px;
      	display: block;
		margin-left: auto;
		margin-right: auto;
      }
      .text1{
      	font-family: Pacifico;
		font-size: 35pt;
		text-align: center;
		color: #FFFFFF;
      }
      .text2{
      	font-family: Roboto Condensed;
		font-style: normal;
		font-weight: normal;
		font-size: 12pt;	
		text-align: center;
		color: #FFFFFF;
      }
      .btn_about{
      	width: 100pt;
		height: 25pt;
		font-family: Pacifico;
		border-color: #ff9800;
		border: 2px solid #FCB371;
		background:transparent;
		text-decoration:none;
	  	border-radius:6px;
		align-items: center;
		text-align: center;

		color: #FCB371;
      }
      .btn_reserv{
      	width: 100pt;
		height: 25pt;
		font-family: Pacifico;
		border-color: #FCB371;
		background: #FCB371;
		text-decoration:none;
	  	border-radius: 6px;
		align-items: center;
		text-align: center;

		color: white;
      }
	</style>

</head>
<body>	
	<div class="overlay">
		<div class="content">
			<img src="media/IconBali.png">
			<p class="text1">A Better way to <br> Travel to Bali</p>
			<p class="text2">Cheapest and Easier</p>
			<div id="button">
				<a href="about.php" ><button  class="btn_about">About Us</button></a>
				<a href="reservation.php" ><button class="btn_reserv">Reservation</button></a>
			</div>
			
		</div>
		
	</div>
</body>
</html>