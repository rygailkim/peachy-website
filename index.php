<?php
ob_start();
//include head.php file
include('head.php')
?>

<?php
//include header.php file
include('header.php')
?>

<!--Body Content-->
<div id="page-content">

    <?php
    //hero section
    include('Template/_hero-section.php')
    ?>

    <?php
    //featured products section
    include('Template/_featured-products-section.php')
    ?>

    <?php
    //categories section
    include('Template/_categories-section.php')
    ?>


</div>
<!--End Body Content-->

<?php
//include footer.php file
include('footer.php')
?>