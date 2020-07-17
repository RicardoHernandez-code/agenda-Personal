<html>
<?php include 'headerOpcion.php' ?>

    
    <div class='row'>
        <div class='col text-center'>
            <h3>Editar evento</h3>
        </div>
    </div>

    <div class='row'>
        <div class='col text-center d-flex justify-content-center mt-5'>
            <div class='formulario'>
                <form action="" method='POST'>
                <h4>Día</h4>
                <input type="number" min="1" max='31' name='dia' value='<?php echo $evento[1]; ?>'>
                <h4>Mes Actual:</h4>
                <h4> <?php echo $meses[$evento[2] - 1] ?></h4>
                <select name="mes" id="">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <?php if(isset($_SESSION['mensaje'])): ?>
                <p><?php echo $_SESSION['mensaje']?></p>
                <?php endif; ?>
                <h5>descripcion</h5>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" maxlength='250'><?php echo $evento[3] ?></textarea>
                <br><br>
                <input type="submit" class="btn btn-success" name='grabar' value='Grabar Cambios'><br>
                </form>
                <form action="" method = 'POST'>
                    <input type="submit" class="btn btn-danger" name='volver' value='Volver'>
                </form>
            </div>
        </div>
    </div>

</body>

</html>