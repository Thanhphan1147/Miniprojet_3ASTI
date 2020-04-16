<!-- register.php -->
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
			if ( isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirmation']) )  {
                $last = $_POST['lastname'];
                $first = $_POST['firstname'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                if ($email != '' && $password != '') { 
                    $address = "unknown";
                    $city = "unknown";
                    $country = "unknown";
                    if ($password === $_POST['password_confirmation']) {
                        $req = $con->query("SELECT * FROM customers where email='$email'");
                        $count = $req->rowCount();
                        if ($count === 0) {
                            // Adding new entry into database
                            $sql = "INSERT INTO customers (lastname, firstname, email, password, address, city, country) VALUES (?,?,?,?,?,?,?)";
                            $stmt= $con->prepare($sql);
                            $stmt->execute([$last, $first, $email, $password, $address, $city, $country]);
                            header("Location: index.php?Register");
                        }
                        else {
                            echo 'email already in use';
                        }
                    }
                    else {
                        echo 'Password does not match';
                    }
                }
            } 
		?>
		<!-- // banner -->
                
        <div>
            <div class="register_div">
                <form action="register.php" method="post" id="signup-form">
                    <h2>Register on E-Mall</h2>
                    <input type="text" name="lastname" placeholder="Last name">
                    <input type="text" name="firstname" placeholder="First name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                    <button class="btn" type="submit" name="login_btn">Register</button>
                </form>
            </div>
            <p>Already a member?</p>
            <a href="index.php">Sign in</a>
        </div>

		<!-- footer -->
		<?php include(ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->