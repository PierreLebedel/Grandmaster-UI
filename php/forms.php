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
			    <li class="breadcrumb-item"><a href="#">Forms</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
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

	    		
    	</header>


    	<div id="gmui_page_content">

			<div class="card">
				<div class="card-header">
			        <h4 class="card-title">Form elements</h4>
			    </div>
			    <div class="card-body">
			    	
			    	<form action="" method="post" class="form-horizontal">
			    		<div class="form-group row">
				    		<label class="col-form-label col-4">Input</label>
				    		<div class="col-6">
				    			<input type="text" class="form-control" placeholder="Saisir un texte" />
				    		</div>
				    	</div>
				    	<div class="form-group row">
				    		<label class="col-form-label col-4">Input readonly / disabled</label>
				    		<div class="col-3">
				    			<input type="text" class="form-control" placeholder="Readonly" readonly />
				    		</div>
				    		<div class="col-3">
				    			<input type="text" class="form-control" placeholder="Disabled" disabled />
				    		</div>
				    	</div>

				    	<hr>

				    	<div class="form-group row">
				    		<label class="col-form-label col-4">Select</label>
				    		<div class="col-6">
				    			<select class="form-control">
				    				<option value="">Choisissiez</option>
				    				<option value="1">Option 1</option>
				    				<option value="2">Option 2</option>
				    				<option value="3">Option 3</option>
				    			</select>
				    		</div>
				    	</div>
				    	<div class="form-group row">
				    		<label class="col-form-label col-4">Custom select</label>
				    		<div class="col-6">
				    			<select class="custom-select">
				    				<option value="">Choisissiez</option>
				    				<option value="1">Option 1</option>
				    				<option value="2">Option 2</option>
				    				<option value="3">Option 3</option>
				    			</select>
				    		</div>
				    	</div>
				    	<div class="form-group row">
				    		<label class="col-form-label col-4">Multiselect</label>
				    		<div class="col-6">
				    			<select class="form-control" size="3" multiple="">
				    				<option value="1">Option 1</option>
				    				<option value="2">Option 2</option>
				    				<option value="3">Option 3</option>
				    			</select>
				    		</div>
				    	</div>


				    	<hr>

				    	<div class="form-group row">
		                    <label class="col-form-label col-4">Checkbox</label>
		                    <div class="col-6">
		                        <div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Checkbox 1</label>
								</div>
		                        <div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck2">
									<label class="custom-control-label" for="customCheck2">Checkbox 2</label>
								</div>
		                        <div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck3" disabled>
									<label class="custom-control-label" for="customCheck3">Checkbox 3</label>
								</div>
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-form-label col-4">Inline checkbox</label>
		                    <div class="col-6">
		                    	<div class="custom-control custom-checkbox custom-control-inline">
									<input type="checkbox" class="custom-control-input" id="customCheck11">
									<label class="custom-control-label" for="customCheck11">Checkbox 1</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline">
									<input type="checkbox" class="custom-control-input" id="customCheck12">
									<label class="custom-control-label" for="customCheck12">Checkbox 2</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline">
									<input type="checkbox" class="custom-control-input" id="customCheck13" disabled>
									<label class="custom-control-label" for="customCheck13">Checkbox 3</label>
								</div>
		                    </div>
		                </div>

		                <hr>

		                <div class="form-group row">
		                    <label class="col-form-label col-4">Radio</label>
		                    <div class="col-sm-6">
		                        <div class="custom-control custom-radio">
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio1">Radio 1</label>
								</div>
								<div class="custom-control custom-radio">
								  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio2">Radio 2</label>
								</div>
								<div class="custom-control custom-radio">
								  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled>
								  <label class="custom-control-label" for="customRadio3">Radio 3</label>
								</div>

		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-form-label col-4">Inline radio</label>
		                    <div class="col-sm-6">
		                        <div class="custom-control custom-radio custom-control-inline">
								  <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio11">Radio 1</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
								  <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio12">Radio 2</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
								  <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input" disabled>
								  <label class="custom-control-label" for="customRadio12">Radio 3</label>
								</div>
		                    </div>
		                </div>

		                <hr>

		                <div class="form-group row">
		                    <label class="col-form-label col-4">Textarea</label>
		                    <div class="col-sm-6">
		                        <textarea name="" placeholder="" rows="2" class="form-control"></textarea>
		                    </div>
		                </div>

		                <hr>

		                <div class="form-group row">
		                    <label class="col-form-label col-4">Range</label>
		                    <div class="col-sm-6">
			                    <div class="input-group mb-3">
									<input type="range" class="custom-range" id="customRange1">
								</div>

								<div class="input-group mb-3">
									<input type="range" class="custom-range" min="0" max="5" id="customRange2">
								</div>

								<div class="input-group">
									<input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
								</div>
		                    </div>
		                </div>

		                <hr>

		                <div class="form-group row">
		                    <label class="col-form-label col-4">File input</label>
		                    <div class="col-sm-6">

		                		<div class="custom-file">
								  <input type="file" class="custom-file-input" id="customFile">
								  <label class="custom-file-label" for="customFile">Choose file/label>
								</div>
							</div>
						</div>


			    	</form>


			    </div>
			</div>


			<div class="card">
				<div class="card-header">
			        <h4 class="card-title">Input groups</h4>
			    </div>
			    <div class="card-body">
			    	
			    	<form action="" method="post">

			    		<div class="form-group row">
                    <label class="col-form-label col-4">Positions</label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1">@</span>
  							</div>
                            <input class="form-control" placeholder="Username" type="text">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="text">
                            <div class="input-group-append">
	                            <span class="input-group-text">.00</span>
	                        </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1">$</span>
  							</div>
                            <input class="form-control" type="text">
                            <div class="input-group-append">
	                            <span class="input-group-text">.00</span>
	                        </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">Size</label>
                    <div class="col-sm-6">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1">@</span>
  							</div>
                            <input class="form-control" placeholder="Username" type="text">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1">@</span>
  							</div>
                            <input class="form-control" placeholder="Username" type="text">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1">@</span>
  							</div>
                            <input class="form-control" placeholder="Username" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">Checkbox</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
									    <div class="input-group-text">
									    	<input type="checkbox" aria-label="Checkbox for following text input">
									    </div>
									</div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">Radio</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
									    <div class="input-group-text">
									    	<input type="radio" aria-label="Radio button for following text input">
									    </div>
									</div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                	<label class="col-form-label col-4">Multiple inputs</label>
	                <div class="col-6">
	                	<div class="input-group">
							<div class="input-group-prepend">
							    <span class="input-group-text">First and last name</span>
							</div>
							<input type="text" aria-label="First name" class="form-control">
							<input type="text" aria-label="Last name" class="form-control">
						</div>
					</div>
				</div>

                <div class="form-group row">
                    <label class="col-form-label col-4">Buttons</label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
						  </div>
						  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
						</div>

						<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
						  </div>
						</div>

						<div class="input-group mb-3">
						  <div class="input-group-prepend" id="button-addon3">
						    <button class="btn btn-outline-secondary" type="button">Button</button>
						    <button class="btn btn-outline-secondary" type="button">Button</button>
						  </div>
						  <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
						</div>

						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
						  <div class="input-group-append" id="button-addon4">
						    <button class="btn btn-outline-secondary" type="button">Button</button>
						    <button class="btn btn-outline-secondary" type="button">Button</button>
						  </div>
						</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-4">Buttons</label>
                    <div class="col-6">
                    	<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="#">Action</a>
						      <a class="dropdown-item" href="#">Another action</a>
						      <a class="dropdown-item" href="#">Something else here</a>
						      <div role="separator" class="dropdown-divider"></div>
						      <a class="dropdown-item" href="#">Separated link</a>
						    </div>
						  </div>
						  <input type="text" class="form-control" aria-label="Text input with dropdown button">
						</div>

						<div class="input-group">
						  <input type="text" class="form-control" aria-label="Text input with dropdown button">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="#">Action</a>
						      <a class="dropdown-item" href="#">Another action</a>
						      <a class="dropdown-item" href="#">Something else here</a>
						      <div role="separator" class="dropdown-divider"></div>
						      <a class="dropdown-item" href="#">Separated link</a>
						    </div>
						  </div>
						</div>
                    </div>
                </div>


                <div class="form-group row">
                	<label class="col-form-label col-4">Label</label>
                	<div class="col-6"><div class="input-group mb-3">
				  		<div class="input-group-prepend">
						    <label class="input-group-text" for="inputGroupSelect01">Options</label>
						  </div>
						  <select class="custom-select" id="inputGroupSelect01">
						    <option selected>Choose...</option>
						    <option value="1">One</option>
						    <option value="2">Two</option>
						    <option value="3">Three</option>
						  </select>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<label class="col-form-label col-4">Label</label>
					<div class="col-6"><div class="input-group mb-3">
						  <div class="custom-file">
						    <input type="file" class="custom-file-input" id="inputGroupFile02">
						    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
						  </div>
						  <div class="input-group-append">
						    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
						  </div>
						</div>
					</div>
				</div>


                <div class="form-group row">
                    <label class="col-form-label col-4">Icons</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-prepend bg-black">
                                        <i class="glyph-icon icon-lock"></i>
                                    </span>
                                    <input class="form-control" placeholder="Username" type="text">
                                </div>
                                <div class="input-group mrg15T mrg15B">
                                    <input class="form-control" type="text">
                                    <span class="input-group-prepend bg-green">
                                        <i class="glyph-icon icon-retweet"></i>
                                    </span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-prepend bg-white font-green">
                                        <i class="glyph-icon icon-tag"></i>
                                    </span>
                                    <input class="form-control" type="text">
                                    <span class="input-group-prepend bg-white">
                                        <i class="glyph-icon icon-times"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-prepend btn-primary">
                                        <i class="glyph-icon icon-cogs"></i>
                                    </span>
                                    <input class="form-control" placeholder="Username" type="text">
                                </div>
                                <div class="input-group mrg15T mrg15B">
                                    <input class="form-control" type="text">
                                    <span class="input-group-addon bg-blue">
                                        <i class="glyph-icon icon-shopping-cart"></i>
                                    </span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input class="form-control" type="text">
                                    <span class="input-group-addon bg-red">
                                        <i class="glyph-icon icon-bullhorn"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-4">Icons inside</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-prepend addon-inside bg-black">
                                        <i class="glyph-icon icon-lock"></i>
                                    </span>
                                    <input class="form-control" placeholder="Username" type="text">
                                </div>
                                <div class="input-group mrg15T mrg15B">
                                    <span class="input-group-prepend addon-inside bg-green">
                                        <i class="glyph-icon icon-retweet"></i>
                                    </span>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-prepend addon-inside bg-white font-green">
                                        <i class="glyph-icon icon-tag"></i>
                                    </span>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-prepend addon-inside btn-primary">
                                        <i class="glyph-icon icon-cogs"></i>
                                    </span>
                                    <input class="form-control" placeholder="Username" type="text">
                                </div>
                                <div class="input-group mrg15T mrg15B">
                                    <span class="input-group-prepend addon-inside bg-blue">
                                        <i class="glyph-icon icon-shopping-cart"></i>
                                    </span>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-prepend addon-inside bg-red">
                                        <i class="glyph-icon icon-bullhorn"></i>
                                    </span>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



			    	</form>


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