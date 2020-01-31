<!doctype html>
<html lang="ru">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- main CSS -->
<link rel="stylesheet" href="css/style.css">

<!-- bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<title>PhP-practic</title>
</head>
<body>
	
	<?php require "blocks/header.php" ?>

<div class="container">
	 <h3 class="mb-3">Contacts form</h3>
		<form action="check.php" method="post">
		  <input class="form-control mb-2" type="email" name="email" placeholder="Enter your email">
		  <textarea class="form-control mb-2" name="message" cols="30" rows="5" placeholder="Enter your message"></textarea>
		  <button class="btn btn-success" type="submit" name="send">Отправить</button>
	 </form>
</div>
<!-- /.container -->



	<?php require "blocks/footer.php" ?>


<!-- Optional JavaScript -->

<!-- main JS -->
<script src="js/script.js" ></script>


</body>
</html>