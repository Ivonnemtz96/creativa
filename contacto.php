<!DOCTYPE html>
<html lang="en" class="is-smooth-scroll-compatible is-loading">
<?php
$title = 'Inicio';
$inicio = 'current';
include('includes/head.php');
?>

<body>
    <?
        include('includes/menuCanva.php');
        include('includes/preloader.php');
        include('includes/header.php');
    ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <?php
            include('modules/contacto.php');
            include('includes/footer.php');
        ?>
        </div>
    </div>

    <?
     include('includes/scripts.php');   
     include('includes/redes.php');
    ?>

</body>

</html>