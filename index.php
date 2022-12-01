<?php
include "./conexion.php";
include "./header.php";

$conexion = conexion();

$sql = "SELECT * FROM paises";
$respuesta = mysqli_query($conexion, $sql);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 ms-4">
                <div class="card-body">
                    <h2>Crud de Paises</h2>
                    <a href="agregar.php" class="btn btn-info">
                        <i class="fa-solid fa-earth-americas"></i>
                    </a>
                    <hr>
                    <table id="table" class="table table-striped" style="width:100%" >
                        <thead>
                            <th>Pais</th>
                            <th>Continente</th>
                            <th>Bandera</th>
                            <th>Editar</th>
                        </thead>
                        <tbody>
                            <?php while ($ver = mysqli_fetch_array($respuesta)) : ?>
                                <tr>
                                    <td> <?php echo $ver['pais']; ?> </td>
                                    <td><?php echo $ver['continente']; ?></td>
                                    <td><img src="<?php echo $ver['bandera'];?>" alt="" width="100px"></td>
                                    <td><a href="editar.php?id=<?php echo $ver['id'];?>" class="btn btn-success">
                                            <i class="fa-solid fa-earth-europe"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./scripts.php" ?>