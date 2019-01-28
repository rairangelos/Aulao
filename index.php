<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aulão da Globo</title>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
</script>
</head> 
<body>
<nav class="navbar navbar-default navbar-light navbar-fixed-top" style="margin-bottom: 0px !important; ">
	<a class="navbar-brand" href="#" style="padding-top: 10px !important;">
    	<img src="img/globo.png" width="30" height="30" alt="" style="display:  unset !important; margin-right: 10px;">AULÃO DA GLOBO</a>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle text-uppercase font-weight-bold" href="#">Login</a>
				<ul class="dropdown-menu login-form">					
					<li>
						<form action="#" method="post">
							<div class="form-group">
								<label>Login</label>
								<input type="text" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Senha</label>
								<input type="password" class="form-control" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="ENTRAR">
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
	<section class="background-parallax-slide">
		<div class="container-fluid" style="padding-top: 60px">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4" align="center"></div>
						<div class="col-md-4" align="center">
						<div class="col-md-12" align="center" style="margin-top: 200px;">
							<form>
							  <div class="form-group">
							    <label for="exampleInputEmail1">ESCOLA</label>
							    <select id="disabledSelect" class="form-control" style="width: 400px;">
			        				<option></option>
			        				<option>EREM DE BELO JARDIM</option>
			        				<option>EREM ARNALDO ASSUNCAO</option>
			      				</select>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">CPF</label>
							    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CPF" style="width: 400px;">
							  </div>
							  <button type="submit" class="btn btn-success">CADASTRAR</button>
							</form>
						</div>
						</div>
						<div class="col-md-4" align="center"></div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
</body>
</html>                                                        