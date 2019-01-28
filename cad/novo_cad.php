<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aulão - SEEP</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script>
		window.onload = function(){
		  optionCheck('abc',1);
		}
	</script>
</head>
<body>
	
	<?php require 'menu_cad.php'; ?>
	
	<div class="container-fluid" style="padding-top: 20px;" id="painel">

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="">
					<div class="form-group">
						<label class="alert-link" for="exampleInputEmail1">Selecione o tipo de cadastro:</label>
						<select class="form-control" id="options" onchange="optionCheck()">
							<option value="zero"></option>
							<option value="show">Estudante</option>
							<option value="goto">Responsável</option>
						</select>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="" id="hiddenDiv" style="border:1px;visibility:hidden;margin-top: 20px;">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form>
					  <div class="form-group">
					    <label for="formGroupExampleInput">Nome do estudante:</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
					  </div>
					  <div class="form-row">
					  	<div class="col">
					    	<label for="formGroupExampleInput2">RG/CPF:</label>
					    	<input type="text" class="form-control" placeholder="RG/CPF">
					  	</div>
					    <div class="col">
					    	<label for="formGroupExampleInput2">Nascimento:</label>
					      	<input type="text" class="form-control" placeholder="Nascimento">
					    </div>
					    <div class="col">
					    	<label for="formGroupExampleInput2">Série:</label>
					      	<input type="text" class="form-control" placeholder="Série">
					    </div>
					    <div class="col">
					    	<label for="formGroupExampleInput2">Telefone:</label>
					      	<input type="text" class="form-control" placeholder="Telefone">
					    </div>
					  </div>
					  <div class="col" style="margin-top: 20px;" align="center">
					  	<button type="button" class="btn btn-success">SALVAR</button>
					  </div>
					</form>
				</div>
				<div class="col-md-3"></div>
		</div>

		<div class="" id="hiddenDiv2" style="border:1px;visibility:hidden;margin-top: 20px;">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form>
					  <div class="form-group">
					    <label for="formGroupExampleInput">Nome do responsável:</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
					  </div>
					  <div class="form-row">
					    <div class="col">
					    	<label for="formGroupExampleInput2">Cargo:</label>
					      	<input type="text" class="form-control" placeholder="Cargo">
					    </div>
					    <div class="col">
					    	<label for="formGroupExampleInput2">Matrícula:</label>
					      	<input type="text" class="form-control" placeholder="Matrícula">
					    </div>
					    <div class="col">
					    	<label for="formGroupExampleInput2">Telefone:</label>
					      	<input type="text" class="form-control" placeholder="Telefone">
					    </div>
					  </div>
					  <div class="col" style="margin-top: 20px;" align="center">
					  	<button type="button" class="btn btn-success">SALVAR</button>
					  </div>
					</form>
				</div>
				<div class="col-md-3"></div>
		</div>

	</div>
	<div class="container-fluid" style="padding-top: 100px;">
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" align="center">
				<div class="row" align="center">
					<div class="col-md-12"><label for="formGroupExampleInput2"><h3>Cadastros já realizados:"</h3></label></div>
					<div class="col-md-6" align="center">	
						<h2><a class="badge badge-primary" href="listar_cad.php">Responsável: 02</a></h2>
						<h2><span class="badge badge-danger">Disponível: 00</span></h2>
					</div>
					<div class="col-md-6" align="center">
						<h2><a class="badge badge-success" href="listar_cad.php">Estudantes: 12</a></h2>
						<h2><span class="badge badge-danger">Disponível: 05</span></h2>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>		

	<script type="text/javascript">
	    function optionCheck(){
	        var option = document.getElementById("options").value;
	        if(option == "show"){
	        	document.getElementById("hiddenDiv2").style.visibility ="hidden";
	            document.getElementById("hiddenDiv").style.visibility ="visible";
	            document.getElementById("hiddenDiv2").className = "sr-only";
	            document.getElementById("hiddenDiv").className = "row";
	        }
	        if(option == "goto"){
	            document.getElementById("hiddenDiv2").style.visibility ="visible";
	            document.getElementById("hiddenDiv").style.visibility ="hidden";
	            document.getElementById("hiddenDiv").className = "sr-only";
	            document.getElementById("hiddenDiv2").className = "row";
	        }
	        if(option == ""){
	            document.getElementById("hiddenDiv").className = "sr-only";
	            document.getElementById("hiddenDiv2").className = "sr-only";
	        }
	        if(option == "zero"){
	            document.getElementById("hiddenDiv").className = "sr-only";
	            document.getElementById("hiddenDiv2").className = "sr-only";

	        }
	    }
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>	
</body>
</html>