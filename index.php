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

	<div class="container mt-5">	
		<h3 class="mb-5">Наши статьи</h3>

		<div class="d-flex flex-wrap">
			<?php 
				for ($i = 0; $i < 7; $i++):
			?>
			<div class="card mb-4 shadow-sm">
	   <div class="card-header">
	     <h4 class="my-0 font-weight-normal">Просто текст</h4>
	   </div>
	   <div class="card-body">
	   	 <img class="card-image" src="img/<?php echo ($i + 1) ?>.jpg" alt="Photo image">
	     <ul class="list-unstyled mt-3 mb-4">
	       <li>10 users included</li>
	       <li>2 GB of storage</li>
	       <li>Email support</li>
	       <li>Help center access</li>
	     </ul>
	     <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
	   </div>
	  </div>
			<?php	endfor;	?>
		</div>
		<!-- /.d-flex -->

	</div>
	<!-- /.container -->


	<?php require "blocks/footer.php" ?>


<!-- Optional JavaScript -->

<!-- main JS -->
<script src="js/script.js" ></script>


</body>
</html>