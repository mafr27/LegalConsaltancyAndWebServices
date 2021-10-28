
<?php 
session_start();
// print_r($_SESSION);
// session_destroy();
// exit();

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/logincss.css">
		<style type="text/css">
		.banner{
		width: 100%;
		height: 330px!important;
		background-attachment: fixed!important;
		}
		.cvgf{
		visibility: hidden;
		}
		.breadcrumb-nav {
		top: 420px!important;
		}
		.db-1 , .db-2 , .db-3, .db-4 , .db-ex-1 , .db-ex-2 , .db-ex-3 , .db-ex-4{
		display: none!important;
		}

.alert{    width: 100%;
    border: none;
    border-radius: 0px!important;
    background: #4caf50bf!important;
    color: white!important;
    padding: 2px 0px;
  }
	</style>
	</head>
	<body>
		<?php include "header.php" ?>
		<section class="bgImageLogin">
			<div class="container">
				<div class="login-box">
					<div class="row">
						<div class="col-md-6">
							<h2 class="text-white headText">Login Here</h2>
							<form action="validation.php" method="post">
								<div class="form-group">
									<label for="">Email</label>
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="email" name="email" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<div class="form-text">
										<i class="fas fa-lock" aria-hidden="true"></i>
										<input type="password" name="password" class="form-control" required>
									</div>
								</div>
								<button type="submit" class="logBtn" name="login">Login</button>
							</form>
						</div>
						<!-- registration form -->
						<div class="col-md-6">
							<h2 class="text-white headText">Register Here</h2>
							<form action="registration.php" method="post">
								<div class="form-group">
									<label for="">Name</label>
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="name" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<div class="form-text">
										<i class="fas fa-lock" aria-hidden="true"></i>
										<input type="password" name="password" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label for="">Phone Number</label>
									<div class="form-text">
										<i class="fas fa-phone" aria-hidden="true"></i>
										<input type="text" name="phoneNumber" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label for="">E-mail</label>
									<div class="form-text">
										<i class="fas fa-envelope" aria-hidden="true"></i>
										<input type="mail" name="getMail" class="form-control" required>
									</div>
								</div>
								<button type="submit" class="logBtn" name="register">Register</button>
							</form>


						            <?php if(isset($_GET['q'])): ?>
						            <div class="row">
						              <div class="col-md-12">
						                  <div class="alert mt-4 text-center" role="alert">
						                     
						                         <?php echo $_GET['q']; ?>
						                  </div>
						              </div>
						            </div>
						             <?php endif; ?>

             

						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include "footer.php" ?>
	</body>
</html>