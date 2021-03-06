<?php 
@session_start();
require_once("conexao.php");
//inserir um usuario adm caso não exista

$query = $pdo->query(
    "SELECT * from usuarios where
    nivel = 'Administrador'");

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if($total_reg == 0){
    $pdo->query(
        "INSERT INTO usuarios set 
        nome = 'Administrador', 
        cpf= '000.000.000-00', 
        email= 'gfmb94@gmail.com', 
        senha= '123', 
        nivel= 'Admin'"
    );
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/css/login.css">
    <!--Favicon-->
    <link rel="shotcut icon" href="img/icone2.png" type="image/x-icon">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><img src="img/logo.png" type="img/png" widht="150px" height="150px"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
                <!--
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
-->
			      	</div>
							<form action="autenticar.php" class="signin-form" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Usuario</label>
			      			<input type="text" name="email" class="form-control" placeholder="Digite seu login" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Senha</label>
		              <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Acessar</button>
		           <!-- </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
-->
		          </form>
		          <!--<p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
-->
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

