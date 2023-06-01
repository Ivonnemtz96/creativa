<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'current';
include('includes/head.php');
?>

<body>
    <?
        include('includes/header.php');
        include('includes/menuCanva.php');
    ?>

    <div class="smooth-wrapper">
        <div class="smooth-content">
            <?php
            include('modules/index.php');
            include('includes/redes.php');
            include('includes/footer.php');
        ?>
        </div>
    </div>

    <?
     include('includes/scripts.php');   
    ?>

</body>

</html>