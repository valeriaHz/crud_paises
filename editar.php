<?php
    include "./header.php";
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM paises WHERE id='$id'";

    $respuesta = mysqli_query($conexion,$sql);
    $item = mysqli_fetch_array($respuesta);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 ms-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-primary">
                        <i class="fa-solid fa-angles-left"></i>Regresar
                    </a>
                    <h2>Actualizar pais</h2>
                    <form action="./backend/actualizar.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?php echo $id; ?>"hidden>
                        <label for="pais">Pais</label>
                        <input type="text" class="form-control" id="pais" name="pais"  value="<?php echo $item ['pais']?>">
                        <label for="continente">Continente</label>
                        <select id="continente" name="continente" class="form-select"value="<?php echo $item['continente']?>">
                            <option value="Europa">Europa</option>
                            <option value="Asia">Asia</option>
                            <option value="America">America</option>
                            <option value="Africa">Africa</option>
                            <option value="Oceania">Oceania</option>
                        </select>
                        <label for="" class="text">URL of IMG</label>
                        <input type="text" name="url" id="url" class="form-control" 
                               placeholder="Ingresa la URL de la imagen de la bandera">
                        <button class="btn btn-success mt-3">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./scripts.php" ?>