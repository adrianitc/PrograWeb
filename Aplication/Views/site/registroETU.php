<?php

include ('../layouts/header.php');

?>
<form action="../../controllers/registroControllerETU.php" method="POST">
    
<div class="container-fluid tabla registro">
    <h1 class="reg">Eventos Tipos de Usuario</h1>
        	<div class="row-fluid">
            	<div class="span12">
                    <select name="id_evento">
                        <option value="0">Selecciona un evento</option>
                        <option value="1">1</option>
                    </select>
                    <button class="btn btn-info">BUSCAR</button>
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span5">
                	<div class="row-fluid">
                    	<label class="reg">Tipos de usuario vinculados con el evento</label>
                    </div>
                    <div class="row-fluid show-grid">
                    <select name="id_tipo_usuario">
                        <option value="0">Selecciona un tipo de usuario</option>
                        <option value="1">1</option>
                    </select>
                    </div>
                </div>
                <div class="span2">
                	<button class="btn btn-success">Agregar</button>
                    <br />
                    <button class="btn btn-danger">Eliminar</button>
                </div>
                <div class="span5">
                	<div class="row-fluid">
                    	<label class="reg">Tipos de usuario existentes</label>
                    </div>
                    <div class="row-fluid show-grid">
                    	<a href="#">UsuarioY</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php

include ('../layouts/footer.php');
?>
