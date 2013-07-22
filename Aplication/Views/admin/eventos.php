<?php
    include ('../../models/Modelo.php');
    include ('../../models/Evento.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../controllers/adminController/adminController.php');

    include('../layouts/header.php');
?>

    <div class="row" style="color:white;">
        <?php
            $admin = new AdminController();
            $admin->lista_eventos();
        ?>
    </div>
    

<?php
include('../layouts/footer.php');
?>
