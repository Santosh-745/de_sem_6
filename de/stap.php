<?php

include 'config.php'

?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
	<title>Hello, world!</title>
</head>
<style>

	body{
		font-family: 'Castoro', serif;
		background-color: rgb(178, 187, 180);
	}
	.vl {
		color: rgb(9, 204, 51);
		border-left: double 6px;
		height: 1000px;
		position: absolute;
		left: 50%;
		margin-left: 10px;
		top: 20%;
	}

	.navb a{
		color: white 	;
	}
	.titil{
		text-align: center;
		
	}
	li{
		position: absolute;
		left: 53%;
		top: 15%;
		font-size: 50px;
		color: rgb(9, 204, 51);;
	}
</style>

<body>
	<div class="navb">
		<nav class="navbar navbar-expand-lg bg-dark ">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" href="#">HOME <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#" style="color: red">CATAGORY</a>
					<a class="nav-link" href="#">ABOUT</a>

				</div>
			</div>
		</nav>
	</div><br>
	<div class="titil">
		<h1>There is Number of Stap </h1>
	</div><hr>
		<div class="point">
			<ul>
				<li></li>
			</ul>
		</div>
	<div class='vl'></div>
	<?php
	$id = $_GET['id'];
	// echo $id; 
	// $query = "SELECT * FROM home_data where title='.$category.'";
	// $result = $connect->query($query);
	$iab_data = $conn->prepare("SELECT * FROM home_data where id=? ");
	$iab_data->bindParam(1, $id);
	$iab_data->execute();
	while ($rowdata = $iab_data->fetch(PDO::FETCH_ASSOC)) {
		// echo $rowdata['Step_1'];
		$temp = [];
		$temp[0] = $rowdata['Step_1'];
		$temp[1] = $rowdata['Step_2'];
		$temp[2] = $rowdata['Step_3'];
		$temp[3] = $rowdata['Step_4'];

		for ($i = 1; $i <= $rowdata['No_of_steps']; $i++) {
			$k = $temp[$i - 1];
			echo "
			<div  class='card bg-success text-white'  style='max-width: 60rem; margin-left: 650px;  margin-right: 600px; margin-top: 50px '>
			<div class='card-header'>Header</div>
			<div class='card-body'>
			<h5 class='card-title'>Primary card title</h5>
			<p class='card-text'>$k Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nostrum dolor illo? Dolor a voluptates est officiis velit, maxime provident autem nostrum nobis aperiam vel.</p>
			</div>
			</div>
			";
		} 	
	}
	// $runquery = mysqli_query($connect, $query);
	// // echo $runquery;
	// $num = mysqli_num_fields($runquery);
	// $rowdata = mysqli_fetch_array($runquery);
	// $temp = [];
	// $temp[0] = $rowdata['Step_1'] ;
	// $temp[1] = $rowdata['Step_2'] ;
	// $temp[2] = $rowdata['Step_3'] ;
	// $temp[3] = $rowdata['Step_4'] ;

	// for($i=1;$i<=$rowdata['No_of_steps'] ;$i++){
	// 		$k = $temp[$i-1];
	// 		echo "
	// 		<div  class='card bg-success text-white'  style='max-width: 60rem; margin-left: 650px;  margin-right: 600px; margin-top: 50px '>
	// 		<div class='card-header'>Header</div>
	// 		<div class='card-body'>
	// 		<h5 class='card-title'>Primary card title</h5>
	// 		<p class='card-text'>$k Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nostrum dolor illo? Dolor a voluptates est officiis velit, maxime provident autem nostrum nobis aperiam vel.</p>
	// 		</div>
	// 		</div>
	// 		";
	// }
	?>



	<!-- <div class="vl">

</div>
<div class="card text-white bg-warning mb-3" style="width:40vh; height:25vh; position:absolute; left:40%;top:47.5%; ">
<div class="card-header" style="text-align: center;">STAP-2</div>
<div class="card-body">
<h5 class="card-title">Warning card title</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
</div>
<div class="vl"> -->

	</div>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>

</html>