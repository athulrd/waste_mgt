<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Baking Bootstrap Snippets with Jade</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Baking Bootstrap Snippets with Jade">
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/flatly/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="padding-bottom:10rem;">
    <nav role="navigation" class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" data-toggle="collapse" data-target="#navbar-inverse" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a href="#" class="navbar-brand">USER DATA</a>
  </div>
  <div id="navbar-inverse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      	<li class="active"><a href="<?php echo base_url('index.php/indexroute/login'); ?>">login</a></li>
		 <li><a href="<?php echo base_url('index.php/indexroute/register'); ?>">register</a></li>
		

    </ul>
  </div>
</nav>
    <div class="container"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>




	
		
	



