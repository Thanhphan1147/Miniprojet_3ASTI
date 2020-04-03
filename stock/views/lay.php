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
			if (isset($_POST['username']) && isset($_POST['password']))  {
				$username = strip_tags($_POST['username']);
				$password = strip_tags($_POST['password']);

				$req = $con->query("SELECT password FROM clients where clientname='$username'");
				$row = $req->fetch();

				if($password === $row['password']) {
					echo 'Welcome'.$username;
					$_SESSION['user'] = $username;
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
			<h2 class="content-title">Recent Orders</h2>
			<hr>
			<!-- more content still to come here ... -->
			<?php 
				if (isset($_SESSION['user'])) {
					include(ROOT_PATH . '/includes/navbar-orders.php');
				} 
			?>
			<?php require_once('routes/router.php'); ?>
			
		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include(ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->