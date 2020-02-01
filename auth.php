<?php 
	if($_COOKIE['user'] == 'Да') {
		setcookie('user', 'Да', time() - 3600, '/', '.wwwphp.ver2');
	} else {
		setcookie('user', 'Да', time()+3600, '/', '.wwwphp.ver2');
	}
	header('Location: /');
?>