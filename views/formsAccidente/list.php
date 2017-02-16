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
        <div class="table-responsive">
            <table class="table m-b-0">
                <thead class="thead-default">
                <tr>
                    <th>Gravedad Accidente</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                    <th>Tipo</th>
                    <th>Lesion</th>
                    <th>Parte Afectada</th>
                    <th>Agente</th>
                    <th>Mecanismo</th>
                    <th>Descripcion</th>
                    <th>Incapacidad</th>
                    <th>Dias Incapacidad</th>
                    <th>Detalle</th>
                </tr>
                </thead>
                <tbody class="table-hover">
                <?php
                if (isset($accidentes)) {
                    foreach ($accidentes as $accidente) {
                        ?>
                        <tr>
                            <td><?php echo $accidente->getGravedad(); ?></td>
                            <td><?php echo $accidente->getFecha(); ?></td>
                            <td><?php echo $accidente->getLugar(); ?></td>
                            <td><?php echo $accidente->getTipo(); ?></td>
                            <td><?php echo $accidente->getLesion(); ?></td>
                            <td><?php echo $accidente->getParteCuerpoAfectada(); ?></td>
                            <td><?php echo $accidente->getAgente(); ?></td>
                            <td><?php echo $accidente->getMecanismo(); ?></td>
                            <td><?php echo $accidente->getDescripcion(); ?></td>
                            <td><?php if($accidente->getIncapacidad()): echo "SI";else: echo"NO"; endif; ?></td>
                            <td><?php echo $accidente->getDiasIncapacidad(); ?></td>
                            <td><a href="<?php echo ROOT."/" ?>accidentes/view/<?php echo $accidente->getId()?>" id="<?php $person["id"]?>"><i class="material-icons">description</i></a> </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">No hay accidentes registardos</td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
