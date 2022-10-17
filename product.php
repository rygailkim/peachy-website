<?php
ob_start();
//include head.php file
include('head.php')
?>

<?php
//include header.php file
include('header2.php')
?>

<!--Body Content-->
<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">

        <?php
        //include header.php file
        include('Template/_products.php')
        ?>

        <?php
        //include header.php file
        include('Template/_related-products.php')
        ?>

    </div>
    <!--#ProductSection-product-template-->
</div>
<!--MainContent-->
</div>
<!--End Body Content-->
</div>

<?php
//include footer.php file
include('footer.php')
?>