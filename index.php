<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">   
    <head>
        <?php include("inicio/head.php") ?>
    </head>    
    <body class="corporate">
        
        <?php // include("inicio/style_customizer.php")?>
        
        <?php include("inicio/topbar.php") ?>
        
        <?php include("inicio/header.php") ?>
        
        <?php include("inicio/slider.php") ?>
        
        <div class="main">
            <div class="container">                

                <?php include ("inicio/info_block.php") ?>

                <?php include ("inicio/carousel.php") ?>                

                <?php include ("inicio/service_box.php") ?>

                <div id="quote1" class="col-sm-12 col-md-12">
                    <h3>Actividades - Eventos - Trabajos Recientes</h3><input type="text" class="form-control" placeholder="">
                </div>
                <?php include("inicio/recent_work.php") ?>

                <div class="row mix-block margin-bottom-40">                    

                    <?php include("inicio/tabs.php") ?>

                    <?php //include("inicio/publicaciones.php")?>
                    <?php include("inicio/publicaciones1.php") ?>
                    <?php //include("inicio/testimonials.php")?>

                </div>
                <?php include("inicio/link_interes.php") ?>
            </div>
        </div>
        <?php include("inicio/pre_footer.php") ?>
        <?php include("inicio/footer.php") ?>
        <!--Cargando java scripts y plugins-->
        <?php include("inicio/scripts_plugins.php") ?>
    </body>

</html>