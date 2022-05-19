<?php
if (isset($_SESSION['cart'])){ $cart = ($_SESSION['cart']); }
else { $cart = 0; }

if (isset($_SESSION['productos'])){ $cart_prod = ($_SESSION['productos']); }
else { $cart_prod = null; }

if (isset($_SESSION['adm'])){
	echo "<li class='nav-item submenu dropdown active'>
		<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Admin</a>
		<ul class='dropdown-menu'>
		<li class='nav-item'><a class='nav-link' href='admin.php'>Admin Home</a>
		<li class='nav-item'><a class='nav-link' href='users/actions/action_logout.php'>Cerrar Sesión</a>
		</ul> </li>";
}
else if (isset($_SESSION['prv'])){
	echo "<li class='nav-item submenu dropdown active'>
		<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Prov</a>
		<ul class='dropdown-menu'>
		<li class='nav-item'><a class='nav-link' href='provider.php'>Prov Home</a>
		<li class='nav-item'><a class='nav-link' href='users/actions/action_logout.php'>Cerrar Sesión</a>
		</ul> </li>";
}
else if (isset($_SESSION['usr'])){
	echo "<li class='nav-item submenu dropdown active'>
		<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Usuario</a>
		<ul class='dropdown-menu'>
		<li class='nav-item'><a class='nav-link' href='user_service.php'>Catalogo</a>
		<li class='nav-item'><a class='nav-link' href='contact.php'>Contacto</a></li>
		<li class='nav-item'><a class='nav-link' href='users/actions/action_logout.php'>Cerrar Sesión</a>
		</ul> </li>";
}
else {
	echo "<li class='nav-item'>
	<a class='nav-link' href='users/login.php'>Iniciar Sesión</a>
	</li>";
}
?>