<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
</head>
<body>
	<section id="addCompany">
		<div class="container">
			<div class="form">
				<form action="check.php" method="POST">
					<label for="name">Name</label>
					<input type="text" name="name" id="name">
					<label for="surname">Surname</label>
					<input type="text" name="surname" id="surname">
					<label for="phone">Phone number</label>
					<input type="number" name="phone" id="phone">
					<div class="comp">
						<label for="company">Company</label>
						<input type="text" name="company0" id="company">
					</div>
					<input type="hidden" name="num" value="0">
					<div class="button">
						<a class="add" name="add">Add</a>
						<input type="submit" name="submit" value="submit">
					</div>
				</form>
				<div class="clearFix"></div>
				<div class="error">
					<?php 
					session_start();
					if(isset($_SESSION["error"])){ 	?>
					<p><?=$_SESSION["error"];?></p>
				<?php 
					unset($_SESSION['error']);
					}
				?>
				</div>
				<div class="success">
					<?php 
					if(isset($_SESSION["success"])){ 	?>
					<p><?=$_SESSION["success"];?></p>
				<?php 
					unset($_SESSION['success']);
					}
				?>
				</div>
			</div>
		</div>
	</section>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".button .add").click(function(){
				a = $(".comp input").length;
				$(".comp").append('<label for="company">Company</label><input type="text" name="company'+ a +'" id="company">');
				$("input[name='num']").val(a);
			});
			
		})
		
	</script>
</body>
</html>