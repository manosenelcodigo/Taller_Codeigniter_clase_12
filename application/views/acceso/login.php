<div class="container">
<h1>Ingrese sus datos</h1>
<?php echo form_open(null,array('name'=>'form'));?>
<?php
            if($this->session->flashdata('mensaje')!='')
            {
               ?>
               <div class="alert alert-<?php echo $this->session->flashdata('css')?>"><?php echo $this->session->flashdata('mensaje')?></div>
               <?php 
            }
            ?>
<?php
                //acá visualizamos los mensajes de error
                $errors=validation_errors('<li>','</li>');
                if($errors!="")
                {
                    ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php echo $errors;?>
                        </ul>
                    </div>
                    <?php
                }
                ?>
    <p>
        <label for="correo">E-Mail:</label>
        <input type="text" name="correo" class="form-control" />
    </p>
    
    
    <p>
        <label for="correo">Contraseña:</label>
        <input type="password" name="pass" class="form-control" />
    </p>
    <hr />
    <input type="submit" value="Enviar" class="btn btn-default" />

<?php echo form_close();?>
</div>