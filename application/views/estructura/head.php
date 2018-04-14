<!DOCTYPE html>
<html lang="en">
    <head>
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>MORO SPA | pagina web </title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon">
        
       <!-- Bootstrap core CSS -->
        <link href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    

        <!-- Font Google-->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <script type="text/javascript">
                CI_ROOT = "<?=base_url()?>";
        </script>

        <style type="text/css">

          body
          {
            font-size: 14px;
            font-family: 'Alegreya', sans-serif;;
          }
          
          li.nav-item{
                padding:  0px 15px !important;
          }

          img.thumbnail{
            width: inherit;
            min-height: 150px;
          }

          label{
            font-weight: bold;
          }

          label.error{
            color:red;
            font-size: 12px;
          }

          .div_buscador
          {
            padding: 1.25rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #eee;
            /*border-left-width: .25rem;*/
            border-radius: .25rem
          }

          .div_row
          {
            padding: 1.25rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #eee;
            /*border-left-width: .25rem;*/
            border-radius: .25rem
          }

          .form-group{
            margin-bottom: 0px;
          }
          
          /* footer */
          .index-social{
              background-color:#2c2c2c;
              color:#fff;
          }
          .link-area .fa-li{
              width:40px;
              height:40px;
              border-radius:50%;
              border:solid 1px #fff;
              list-style-type:none;
              margin:5px;
              display:inline-block;
          }
          .index-social a{
              color:#fff;
              font-size:25px;
              display:block;
              float:left;
              padding:10px;
          }
          .index-link h3{
              text-align:center;
             color:#f1f1f1;
             text-align:left;
             
          }
          .index-link{
              background-color:#000;
          }
          .index-link ul{
              padding:0px;
          }
          .index-link ul li{
              list-style-type:none;
          }
          .index-link ul li a{
            text-decoration:none;
            font-size:16px;
            color:#fff;
            display:block;
            padding:5px 0;
            text-align:left;
          }
          .index-link ul li a:hover{
               text-decoration:underline;
          }
          .copy-c{
              padding-top:15px;
          }

        </style>

    </head>
    <body>
        <header>
          <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">MORO SPA</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
            </ul>

            <ul class="navbar-nav">
 
                <li class="nav-item active">
                    <a href="<?=site_url('home/index')?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('servicio/index')?>">SERVICIOS SPA</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('producto/index')?>">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('curso/index')?>">CURSOS</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('historia/index')?>">HISTORIA</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('contacto/index')?>">CONTACTO</a>
                </li>
               
            </ul>
 
              </div>
            </nav>
          </div>

            <?php /*
            <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
              <div class="container">
                <div class="navbar-header">
                  <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <!-- LOGO -->       
                  <a class="navbar-brand " href="index.html">
                        MORO SPA
                  </a>  
                 

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right mu-main-nav">
                    <li><a href="<?=site_url('home/index')?>">HOME</a></li>
                    <li><a href="<?=site_url('servicio/index')?>">SERVICIOS SPA</a></li>
                    <li><a href="<?=site_url('producto/index')?>">PRODUCTOS</a></li>   
                    <li><a href="<?=site_url('curso/index')?>">CURSOS</a></li>                    
                    <li><a href="<?=site_url('historia/index')?>">HISTORIA</a></li>                   
                    <li><a href="<?=site_url('contacto/index')?>">CONTACTO</a></li> 
                  </ul>                            
                </div>       
              </div>          
            </nav>    */ ?>
        </header>
