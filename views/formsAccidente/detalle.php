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
                        <strong>Cargo:</strong>   <?php echo $personas->getCargo()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Area de Trabajo:</strong>   <?php echo $personas->getAreaTrabajo()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Fecha de Ingreso:</strong>   <?php echo $personas->getFechaIngreso()?>
                    </p>
                </div>
                <div class="overflow-hidden">
                    <h5 class="bold m-b-0">
                        Detalle de Empleado
                    </h5>
                    <p class="bold m-b-0">
                        <?php echo $personas->getNombre()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Cedula:</strong>   <?php echo $personas->getCedula()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Correo:</strong>   <?php echo $personas->getCorreo()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Sexo:</strong>   <?php echo $personas->getSexo()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Fecha de Nacimiento:</strong>   <?php echo $personas->getFechaNacimiento()?>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <div class="overflow-hidden">
                    <h5 class="bold m-b-0">
                        Detalle del Accidente
                    </h5>
                    <p class=" m-b-0">
                        <strong>Gravedad del Accidente:</strong>   <?php echo $accidente->getGravedad()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Fecha y Hora del Evento:</strong>   <?php echo $accidente->getFecha()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Sitio:</strong>   <?php echo $accidente->getLugar()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Tipo de Accidente:</strong>   <?php echo $accidente->getTipo()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Lesion del Accidente:</strong>   <?php echo $accidente->getLesion()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Parte del Cuerpo Afectada:</strong> <?php echo $accidente->getLugar()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Agente:</strong>   <?php echo $accidente->getAgente()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Mecanismo:</strong>   <?php echo $accidente->getMecanismo()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Descripcion del Accidente:</strong> <?php echo $accidente->getDescripcion()?>
                    </p>
                    <p class="m-b-0">
                        <strong>Incapacidad:</strong> <?php if($accidente->getIncapacidad()): echo "SI";else: echo"NO"; endif;?>
                    </p>
                    <p class="m-b-0">
                        <strong>Dias de Incapacidad:</strong> <?php echo $accidente->getDiasIncapacidad()?>
                    </p>
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