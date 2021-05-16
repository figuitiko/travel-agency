<?php
?>

<!-- Section Background -->
<section class="section-background">
    <?php
        $about = '';
        $heading = '';

        if(is_page_template('page-templates/about.php'))
        {
            $about= 'Quienes Somos';
            $heading = 'Sobre Nosotros';
        }
        if(is_page_template('page-templates/services.php'))
        {
            $about= 'Servicios';
            $heading = 'Nuestros Servicios';
        }
        if(is_page_template('page-templates/contact.php'))
        {
            $about= 'Contactenos';
            $heading = 'Cuentanos algo';
        }

    ?>
    <div class="container">
        <h2 class="page-header">
            <?php echo $heading ?>
        </h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active"><?php echo $about ?></li>
        </ol>
    </div> <!-- /.container -->
</section> <!-- /.section-background -->
