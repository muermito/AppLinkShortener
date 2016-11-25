<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">  
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/capasmodal.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript" src="bootstrap/js/jquery3.1.1.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/shortener.js"></script>
	
	yield('head')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Project Link Shortener</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../public/">Generar</a></li>			
            <li><a href="../public/listado_historico">Histórico</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	  
	  <!-- contenido capas modales -->
	  <section> 			
			<div id="capa_para_edicion" class="div_contenido" > </div>			
	  </section>
	  <div class="container" style="margin-top: 50px">

     @yield('content')

    </div><!-- /.container -->   
  </body>
</html>
