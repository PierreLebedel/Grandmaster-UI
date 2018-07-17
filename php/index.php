<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">

    <title>Grandmaster UI</title>
</head>
<body>

    <?php include('includes/menu.php'); ?>

    <div id="gmui_page">
    	<header id="gmui_page_header">
    		<div id="gmui_page_header_title">
    			<!--Titre de la page-->

			  <ol class="breadcrumb">
			    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			  </ol>
    		</div>


    		<div id="gmui_page_header_utils">
    			<ul class="nav">
				  <li class="nav-item">
				    <a class="nav-link" href="#">
				      <i class="fa fa-fw fa-paper-plane"></i>
				    </a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">
				      <i class="fa fa-fw fa-phone"></i>
				    </a>
				  </li>
				  <li class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
				      <i class="fa fa-fw fa-user"></i>
				    </a>
				    <div class="dropdown-menu dropdown-menu-right">
				      <a class="dropdown-item" href="#">Profil</a>
				      <a class="dropdown-item" href="#">Paramètres</a>
				      <div class="dropdown-divider"></div>
				      <a class="dropdown-item" href="#">Déconnexion</a>
				    </div>
				  </li>

				  
				</ul>

    			<form method="get" action="#" class="d-flex">
				    <div class="input-group">
				        <input type="text" value="" class="form-control" placeholder="Recherche...">
				        <div class="input-group-append">
				           <button class="btn" type="submit"><i class="fa fa-fw fa-search"></i></button>
				         </div>
				    </div>
				</form>

				
    		</div>
    		<div class="clearfix"></div>

	    		
    	</header>


    	<div id="gmui_page_content">

    		<div class="row">
    			<div class="col-6">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Charts</h4>
					    </div>
					    <div class="card-body">
					    	<div id="chart_demo_1" style="height:300px;"></div>
					    </div>
    				</div>
    			</div>

    			<div class="col-6">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Charts</h4>
					    </div>
					    <div class="card-body">
					    	<div id="chart_demo_2" style="height:300px;"></div>
					    </div>
    				</div>
    			</div>
    		</div>

    		<div class="row">

    			<div class="col-6">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title"><i class="fa fa-fw fa-play"></i> Formulaire</h4>
					        <h6 class="card-subtitle">Sous-titre</h6>
					    </div>
					    <div class="card-body">
					    	<form action="" method="post">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								  </div>
								  <div class="form-group form-check">
								    <input type="checkbox" class="form-check-input" id="exampleCheck1">
								    <label class="form-check-label" for="exampleCheck1">Check me out</label>
								  </div>
								<button type="submit" class="btn btn-primary">Submit</button>
					    	</form>
					    </div>
    				</div>
    			</div>

    		</div>

    		<div class="card">
				<div class="card-header">
			        <h4 class="card-title">Tableau</h4>
			    </div>
			    <div class="card-body">
			    	<table class="table table-striped">
			    		<thead>
			    			<tr>
			    				<th>#</th>
			    				<th>Nom</th>
			    				<th>Date</th>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<tr>
			    				<td>1</td>
			    				<td>Pierre</td>
			    				<td>16/06/2018</td>
			    			</tr>
			    			<tr>
			    				<td>1</td>
			    				<td>Pierre</td>
			    				<td>16/06/2018</td>
			    			</tr>
			    			<tr>
			    				<td>1</td>
			    				<td>Pierre</td>
			    				<td>16/06/2018</td>
			    			</tr>
			    		</tbody>
			    	</table>
			    </div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="card text-center">
						  <div class="card-header">
						    <ul class="nav nav-tabs card-header-tabs">
						      <li class="nav-item">
						        <a class="nav-link active" href="#">Active</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Link</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link disabled" href="#">Disabled</a>
						      </li>
						    </ul>
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">Special title treatment</h5>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>


				</div>
			</div>

    	</div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.slim.min.js" type="text/javascript"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../node_modules/chartist/dist/chartist.min.js" type="text/javascript"></script>


    <script src="../assets/js/gmui.js" type="text/javascript"></script>


    <script type="text/javascript">
    	new Chartist.Line('#chart_demo_1', {
		  	labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'],
		  	series: [
			    [12, 9, 7, 8, 5],
			    [2, 1, 3.5, 7, 3],
			    [1, 3, 4, 5, 6]
			]
		}, {
		  	fullWidth: true,
		  	chartPadding: {
		    	right: 30
		  	}
		});

		new Chartist.Bar('#chart_demo_2', {
		  	labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aôut', 'Sep', 'Oct', 'Nov', 'Dec'],
		  	series: [
			    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
			    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
			]
		}, {
		  	fullWidth: true,
		  	seriesBarDistance: 10
		});
    </script>
  </body>
</html>