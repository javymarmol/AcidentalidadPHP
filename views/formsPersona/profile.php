<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 7/02/2017
 * Time: 1:13 AM
 */
?>
<div class="content-view">
    <div class="card">
        <div class="card-header"><?php echo $title ?></div>
        <div class="card-block">
            <div class="p-b-2 clearfix">
                <div class="pull-right text-xs-right">
                    <h5 class="bold m-b-0">

                    </h5>
                    <p class="m-b-0">
                        Cargo: <?php echo $personas->getCargo()?>
                    </p>
                    <p class="m-b-0">
                        Area de Trabajo: <?php echo $personas->getAreaTrabajo()?>
                    </p>
                    <p class="m-b-0">
                        Fecha de Ingreso: <?php echo $personas->getFechaIngreso()?>
                    </p>
                </div>
                <div class="overflow-hidden">
                    <h5 class="bold m-b-0">
                        <?php echo $personas->getNombre()?>
                    </h5>
                    <p class="m-b-0">
                        Cedula: <?php echo $personas->getCedula()?>
                    </p>
                    <p class="m-b-0">
                        Correo: <?php echo $personas->getCorreo()?>
                    </p>
                    <p class="m-b-0">
                        Sexo: <?php echo $personas->getSexo()?>
                    </p>
                    <p class="m-b-0">
                        Fecha de Nacimiento: <?php echo $personas->getFechaNacimiento()?>
                    </p>
                </div>
            </div>
            <div class="table-responsive p-t-2 p-b-2" >
                <?php include_once "views/formsAccidente/list.php" ?>


            </div>

        </div>
        <div class="card-footer text-xs-right">
            <button type="button" class="btn btn-danger btn-icon btn-sm" onclick="window.print();">
                <i class="material-icons">print</i>
                Print
            </button>
        </div>
    </div>

</div>