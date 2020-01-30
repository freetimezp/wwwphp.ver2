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
	
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <h5 class="my-0 mr-md-auto font-weight-normal">PhP practic. Start 30/01/2020.</h5>
	  <nav class="my-2 my-md-0 mr-md-3">
	    <a class="p-2 text-dark" href="#">Главная</a>
	    <a class="p-2 text-dark" href="#">Контакты</a>
	  </nav>
	  <a class="btn btn-outline-primary" href="#">Войти</a>
	</div>

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


	<div class="container">
		<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">© 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
	</div>
	<!-- /.container -->


<!-- Optional JavaScript -->

<!-- main JS -->
<script src="js/script.js" ></script>


</body>
</html>