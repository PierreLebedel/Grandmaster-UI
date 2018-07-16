<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">


    <title>Grandmaster UI</title>
  </head>
  <body>

    <div id="gmui_sidebar">
    	<ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="#gmui_sidebar_menu1" class="nav-link" data-toggle="collapse">Tableaux</a>
                <div class="collapse" id="gmui_sidebar_menu1">
                	<ul class="nav flex-column">
						<li class="nav-item">
						    <a href="#" class="nav-link">Classiques</a>
						</li>
						<li class="nav-item">
						    <a href="#" class="nav-link">DataTables</a>
						</li>
                	</ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Overview</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Events</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>

    <div id="gmui_page">
    	<header id="gmui_page_header">
    		<div id="gmui_page_header_title">
    			<!--Titre de la page-->

			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item"><a href="#">Library</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Data</li>
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

	    		
    	</header>


    	<div id="gmui_page_content">
    		<div class="row">
    			<div class="col-6">
    				<div class="card">
    					
    					<div class="card-header">
					        <h4 class="card-title">Simple Table</h4>
					        <h6 class="card-subtitle">Card subtitle</h6>
					    </div>
					    <div class="card-body">
					    	ici
					    </div>

    				</div>
    			</div>

    			<div class="col-3">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Simple Table</h4>
					    </div>
					    <div class="card-body">
					    	ici
					    </div>
    				</div>
    			</div>

    			<div class="col-3">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Simple Table</h4>
					        <h6 class="card-subtitle">Card subtitle</h6>
					    </div>
					    <div class="card-body">
					    	ici
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

    	</div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>