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
      background: url(media/reservation.png) no-repeat;
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
      	position: relative;
	    text-align: center;
	    margin-left: auto;
      }
      .btn_back{
      	position: absolute;
      	z-index: 11; 
      	margin-left: 30pt;
      	margin-top: 30pt;
      }
      .text1{
      	font-family: Pacifico;
		font-size: 35pt;
		text-align: center;
		color: #FFFFFF;
      }
      .input1{
      	display: flex;
		flex-direction: row;
		padding: 10pt;
		margin-top: 10pt;

		position: relative;
		width: 300pt;
		margin-left: auto;
		margin-right: auto;

      	background: #FFFFFF;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 8px;
      }
      .input2{
		padding: 10pt;
		margin-top: 10pt;
		margin-left: 5pt;
		margin-right: 5pt;

		position: relative;
		width: 127pt;

      	background: #FFFFFF;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 8px;
      }
      .select{
      	padding: 10pt;
		margin-top: 10pt;
		margin-left: 5pt;
		margin-right: 5pt;
		width: 160pt;

		position: relative;

      	background: #FFFFFF;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 8px;
		color: #808080;
      }
      textarea{
		display: block;
		flex-direction: row;
		padding: 10pt;
		margin-top:10pt;

		position: relative;
		width: 300pt;
		height: 50pt;
		margin-left: auto;
		margin-right: auto;

      	background: #FFFFFF;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 8px;
      }
      .btn_submit{
		flex-direction: row;
		padding: 10pt;
		margin-top:10pt;

		position: relative;
		width: 320pt;
		margin-left: auto;
		margin-right: auto;

		font-family: Pacifico;
		border: 2px solid #FCB371;
		background:#FCB371;
		text-decoration:none;
	  	border-radius:8px;
		align-items: center;
		text-align: center;

		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		color: white;
      }
	</style>

</head>
<body>	
	<div class="overlay">
		<div class="btn_back">
				<a href="index.php" ><img src="media/btn_back.png" alt=""></a>
			</div>
		<div class="content">
			<p class="text1">Reservation</p>
			<form action="reservation_submit" method="get" accept-charset="utf-8">
				<input class="input1" type="text" name="name" placeholder="Input your name">
				<input class="input1" type="text" name="email" placeholder="Input your email">
				<input class="input2" type="text" name="phoneNumber" placeholder="Phone Number">
				<select class="select" name="nationality">
					<option value="0">Select you nationality</option>}
					<option value="">Asian</option>
					<option value="">American</option>
					<option value="">Australian</option>
					<option value="">European</option>
					<option value="">African</option>
				</select>
				<textarea name="trip" placeholder="Explain about your trip"></textarea>
				<a href="index.php" title=""><button  class="btn_submit"> Submit</button></a>
			</form>
			
		</div>
		
	</div>
</body>
</html>