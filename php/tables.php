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
			    <li class="breadcrumb-item"><a href="#">Tableaux</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Classiques</li>
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
					        <h4 class="card-title">Tableau</h4>
					    </div>
					    <div class="card-body">
					    	<table class="table">
					    		<thead>
					    			<tr>
					    				<th class="right">#</th>
					    				<th>Col 1</th>
					    				<th>Col 2</th>
					    				<th>Col 3</th>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td class="right">#1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </div>
    				</div>
    			</div>

    			<div class="col-6">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau encadré</h4>
					    </div>
					    <div class="card-body">
					    	<table class="table table-bordered">
					    		<thead>
					    			<tr>
					    				<th class="right">#</th>
					    				<th>Col 1</th>
					    				<th>Col 2</th>
					    				<th>Col 3</th>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td class="right">#1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </div>
    				</div>
    			</div>
    		</div>

    		<div class="row">
    			<div class="col-6">
    				
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau rayé</h4>
					    </div>
					    <div class="card-body">
					    	<table class="table table-striped">
					    		<thead>
					    			<tr>
					    				<th class="right">#</th>
					    				<th>Col 1</th>
					    				<th>Col 2</th>
					    				<th>Col 3</th>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td class="right">#1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </div>
    				</div>
    			</div>

    			<div class="col-6">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau survol</h4>
					    </div>
					    <div class="card-body">
					    	<table class="table table-hover">
					    		<thead>
					    			<tr>
					    				<th class="right">#</th>
					    				<th>Col 1</th>
					    				<th>Col 2</th>
					    				<th>Col 3</th>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td class="right">#1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </div>
    				</div>
    			</div>
    		</div>

    		<div class="row">
    			<div class="col-6">
    				
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau condensé</h4>
					    </div>
					    <div class="card-body">
					    	<table class="table table-condensed">
					    		<thead>
					    			<tr>
					    				<th class="right">#</th>
					    				<th>Col 1</th>
					    				<th>Col 2</th>
					    				<th>Col 3</th>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td class="right">#1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    				<td>Ligne 1</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    				<td>Ligne 2</td>
					    			</tr>
					    			<tr>
					    				<td class="right">#3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    				<td>Ligne 3</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </div>
    				</div>
    			</div>

    			<div class="col-6">
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


  </body>
</html>