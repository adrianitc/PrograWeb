<?php
    include ('../../models/Modelo.php');
    include ('../../models/Usuario.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../controllers/adminController/adminController.php');

    include('../layouts/header.php');
?>

    <div class="row">
        <?php
            $admin = new AdminController();
            $admin->lista_usuarios();
        ?>
    </div>
    

<?php
include('../layouts/footer.php');
?>