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
			    <li class="breadcrumb-item active" aria-current="page">Charts</li>
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

    		<div class="gmui_page_header_chart">
    			<canvas id="charts_chart_1" style="display:block;height:300px;width:100%;"></canvas>
    		</div>
	    		
    	</header>


    	<div id="gmui_page_content">

    		

    		<div class="row">
    			<div class="col-6">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau</h4>
					    </div>
					    <div class="card-body">

					    </div>
    				</div>
    			</div>

    			<div class="col-3">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau</h4>
					    </div>
					    <div class="card-body">
					    	
					    </div>
    				</div>
    			</div>
    			<div class="col-3">
    				<div class="card">
    					<div class="card-header">
					        <h4 class="card-title">Tableau</h4>
					    </div>
					    <div class="card-body">
					    	
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
    <script src="../node_modules/chart.js/dist/Chart.bundle.min.js"></script>

    <script src="../assets/js/gmui.js" type="text/javascript"></script>

    <script type="text/javascript">
    	var ctx = document.getElementById("charts_chart_1");
		var myChart = new Chart(ctx, {
			type: 'line',
		    data: {
		        labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aôut', 'Sep', 'Oct', 'Nov', 'Dec'],
		        datasets: [{
		            label: false,
		            backgroundColor: false,
		            borderColor: '#fff',
		            fill: false,
		            data: [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
		            lineTension:0.2,
		            pointBackgroundColor: '#fff',
		        }, {
		            label: false,
		            backgroundColor: '#f53b57aa',
		            borderColor: '#f53b57',
		            fill: 'start',
		            data: [4, 3, 5, 6, 6, 8, 5, 5, 4.5],
		            lineTension:0.3,
		            pointBackgroundColor: '#f53b57',
		        }]
		    },
		    options: {
		    	animation: {
		    		duration:0
		    	},
		    	legend: {
		    		display: false
		    	},
		    	elements: {

		    	},
		    	tooltips: {
		            mode: 'x',
		            intersect: false
		        },
		        scales: {
		            yAxes: [{
		            	display:true,
		                ticks: {
		                    beginAtZero:true,
		                    fontColor:'rgba(255,255,255,0.5)',
		                    fontSize: 12
		                },
		                gridLines: {
		                    zeroLineWidth: 0,
		                    drawBorder: false
		                }
		            }],
		            xAxes: [{
		            	gridLines: {
		                    zeroLineWidth: 0,
		                    drawBorder: false,
		                    display: false
		                },
		                ticks: {
		                    fontColor:'rgba(255,255,255,0.5)',
		                    fontSize: 12
		                },
		            }]
		        }
		    }
		});
	</script>

  </body>
</html>