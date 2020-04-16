<!-- new layout: views/layout.php -->
<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
<title>eMall CVL | Home </title>
</head>

<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include(ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<!-- banner -->
		<?php
			if (isset($_POST['email']) && isset($_POST['password']))  {
				$email = strip_tags($_POST['email']);
				$password = strip_tags($_POST['password']);

				$req = $con->query("SELECT lastname, firstname, password FROM customers where email='$email'");
				$row = $req->fetch();
				$user = $row['lastname']." ".$row['firstname'];
				if($password === $row['password']) {
					echo 'Welcome '.$row['lastname']." ".$row['firstname'];
					$_SESSION['user'] = $user;
					include(ROOT_PATH . '/includes/banner_user.php');
				}
				else {
					echo 'Authentification error!!';
					include(ROOT_PATH . '/includes/banner.php');
				}
			}
			else {
				if (isset($_SESSION['user'])) {
					include(ROOT_PATH . '/includes/banner_user.php');
				}
				else {
					include(ROOT_PATH . '/includes/banner.php');
				}	
			} 
		?>
		<!-- // banner -->

		<!-- Page content -->
		<div class="content">
			<hr>
			<!-- more content still to come here ... -->
			<?php 
				if (isset($_SESSION['user'])) {
					echo '<h2 class="content-title">Recent Orders</h2>';
					include(ROOT_PATH . '/includes/navbar-orders.php');
					require_once('routes/router.php');
				}
				else {
					echo '<h2 class="content-title">Nos Produits</h2>';
					$controller = 'products';
					$action = 'index';
					require_once('routes/router.php');
				} 
			?>
			
		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include(ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->