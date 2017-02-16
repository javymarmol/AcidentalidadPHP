<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 16/02/2017
 * Time: 2:29 AM
 */
?>

<div class="content-view">
    <div class="card">
        <div class="card-header"><?php echo $title ?></div>
        <div class="table-responsive">
            <table class="table m-b-0">
                <thead class="thead-default">
                <tr>
                    <th>Mes</th>
                    <th>Tasa de Incidencia de Trabajo</th>
                    <th>Indice de Severidad de Accidentes de Trabajo</th>
                    <th>Indice de Fracuencia de Accidentes de Trabajo</th>
                </tr>
                </thead>
                <tbody class="table-hover">
                <?php
                if (isset($horas)) {
                    foreach ($horas as $hora) {
                        ?>
                        <tr>
                            <td><?php echo $hora->getMes($hora->getId()); ?></td>
                            <td><?php echo $hora->getTasaIncidencia($hora->getId()); ?></td>
                            <td><?php echo $hora->getIndiceSeveridad($hora->getId()); ?></td>
                            <td><?php echo $hora->getIndiceFrecuencia($hora->getId()); ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>