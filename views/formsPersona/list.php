<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 7/02/2017
 * Time: 1:10 AM
 */
?>
<div class="content-view">
    <div class="card">
        <div class="card-header"><?php echo $title ?></div>
        <div class="table-responsive">
            <table class="table m-b-0">
                <thead class="thead-default">
                <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Fecha de nacimiento</th>
                    <th>Sexo</th>
                    <th>Area de trabajo</th>
                    <th>Cargo</th>
                    <th>Fecha de ingreso</th>
                    <th>Nuevo Accidente</th>
                    <th>Informe Accidentalidad</th>
                </tr>
                </thead>
                <tbody class="table-hover">
                <?php
                if (isset($personas)) {
                    foreach ($personas as $person) {
                        ?>
                        <tr>
                            <td><?php echo $person["cedula"]; ?></td>
                            <td><?php echo $person["nombres"]; ?> </td>
                            <td><?php echo $person["correo"]; ?></td>
                            <td><?php echo $person["fechaNacimiento"]; ?></td>
                            <td><?php echo $person["sexo"]; ?></td>
                            <td><?php echo $person["areaTrabajo"]; ?></td>
                            <td><?php echo $person["cargo"]; ?></td>
                            <td><?php echo $person["fechaIngreso"]; ?></td>
                            <td><a href="<?php echo ROOT . "/" ?>accidentes/create/<?php echo $person["id"] ?>"
                                   id="<?php $person["id"] ?>"><i class="material-icons">navigate_next</i></a></td>
                            <td><a href="<?php echo ROOT . "/" ?>personas/view/<?php echo $person["id"] ?>"
                                   id="<?php $person["id"] ?>"><i class="material-icons">insert_chart</i></a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">No hay personas registardas</td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
