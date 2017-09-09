<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>


 		<div class="bte-masthead">


									<div class="container">

									    <!-- Fixed navbar -->
									    <nav class="navbar navbar-default navbar-fixed-top">
											<h1 class="bte-title"><?php echo get_bloginfo( 'name' ); ?></h1>

									      <div class="container">
									        <div class="navbar-header">
									          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar" aria-expanded="false" aria-controls="navbar">
									            <span class="sr-only">Toggle navigation</span>
									            <span class="icon-bar"></span>
									            <span class="icon-bar"></span>
									            <span class="icon-bar"></span>
									          </button>
									          <a class="navbar-brand" href="#">Project name</a>
									        </div>
									        <div id="navbar" class="navbar-collapse collapse">
									          <ul class="nav navbar-nav">
									            <li class="active"><a href="#">Home</a></li>
									            <li><a href="#about">About</a></li>
									            <li><a href="#contact">Contact</a></li>
									            <li class="dropdown">
									              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
									              <ul class="dropdown-menu">
									                <li><a href="#">Action</a></li>
									                <li><a href="#">Another action</a></li>
									                <li><a href="#">Something else here</a></li>
									                <li role="separator" class="divider"></li>
									                <li class="dropdown-header">Nav header</li>
									                <li><a href="#">Separated link</a></li>
									                <li><a href="#">One more separated link</a></li>
									              </ul>
									            </li>
									          </ul>
									          <ul class="nav navbar-nav navbar-right">
									            <li><a href="../navbar/">Default</a></li>
									            <li><a href="../navbar-static-top/">Static top</a></li>
									            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
									          </ul>
									        </div><!--/.nav-collapse -->
									      </div>
									    </nav>
									</div>
								</div>

	<div class="container">
