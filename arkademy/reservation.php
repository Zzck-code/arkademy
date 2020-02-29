<!DOCTYPE html>
<html>
<head>
	<title>Travel to Bali</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bgreserv">	
	<div class="overlay">
		<div class="btn_back_reserv">
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