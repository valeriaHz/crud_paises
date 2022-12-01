<?php include "./header.php" ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 ms-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-primary">
                        <i class="fa-solid fa-angles-left"></i>Regresar
                    </a>
                    <h2>Agregar nuevo pais</h2>
                    <form action="./backend/agregar.php" method="post" enctype="multipart/form-data">
                        <label for="pais">Pais</label>
                        <input type="text" class="form-control" id="pais" name="pais">
                        <label for="continente">Continente</label>
                        <select id="continente" class="form-select">
                            <option value="Europa">Europa</option>
                            <option value="Asia">Asia</option>
                            <option value="America">America</option>
                            <option value="Africa">Africa</option>
                            <option value="Oceania">Oceania</option>
                        </select>
                        <label for="" class="text">URL of IMG</label>
                        <input type="text" name="url" id="url" class="form-control" 
                               placeholder="Ingresa la URL de la imagen de la bandera">
                        <button class="btn btn-info mt-3">
                            Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./scripts.php" ?>