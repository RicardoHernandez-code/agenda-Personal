<html>
<?php include 'headerOpcion.php' ?>

    
    <div class='row'>
        <div class='col text-center'>
            <h3>Crear evento en <?php echo $meses[$mes-1] ?></h3>
        </div>
    </div>

    <div class='row'>
        <div class='col text-center d-flex justify-content-center mt-5'>
            <div class='formulario'>
                <form action="" method='POST'>
                <h4>Día</h4>
                <input type="number" min="1" max='<?php echo $limiteDias ?>' name='dia'>
                <h5>descripcion</h5>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" maxlength='250'></textarea>
                <br><br>
                <input type="submit" class="btn btn-success" name='crear' value='Crear Evento'><br>
                </form>
                <form action="" method = 'POST'>
                    <input type="submit" class="btn btn-danger" name='volver' value='Volver'>
                </form>
            </div>
        </div>
    </div>

</body>

</html>