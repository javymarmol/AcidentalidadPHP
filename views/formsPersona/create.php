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
        <div class="card-header">
            <div class="card-header"><?php echo $title ?></div></div>
        <div class="card-block">
            <form role="form" class="form-validation" method="post" action="<?php echo ROOT ?>/personas/add"">
                <div class="form-group m-b">
                    <label>
                        Cédula
                    </label>
                    <input type="text" class="form-control valid"  minlength="6" maxlength="15" name="cedula"
                           placeholder="Cédula" required="true" aria-required
                           >
                </div>
                <div class="form-group m-b">
                    <label>
                        Nombres y Appellidos
                    </label>
                    <input type="text" class="form-control valid" name="nombre"
                           placeholder="Nombres y Apellidos" required aria-required="true"
                           >
                </div>
                <div
                        class="form-group m-b">
                    <label>
                        Correo electrónico
                    </label>
                    <input type="email" class="form-control valid" name="correo"
                           placeholder="Correo electronico" required aria-required="true"
                           >
                </div>
                <div class="form-group m-b">
                    <label>
                        Fecha de Nacimineto
                    </label>
                    <input type="text" aria-required="true" class="form-control" data-provide="datepicker" placeholder="Fecha Nacimiento" name="fechaNacimiento" id="fechaNacimiento" required>
                </div>
                <div class="form-group m-b">
                    <label>
                        Sexo
                    </label>
                    <select name="sexo" class="form-control" id="sexo" required aria-required="true">
                        <option>Seleccione un sexo</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
                <div class="form-group m-b">
                    <label>
                        Area de trabajo
                    </label>
                    <input type="text" class="form-control valid" name="areaTrabajo"
                           placeholder="Area de Trabajo" required="true" aria-required
                    >
                </div>
                <div class="form-group m-b">
                    <label>
                        Cargo
                    </label>
                    <input type="text" class="form-control valid" name="cargo"
                           placeholder="Cargo" required="true" aria-required
                    >
                </div>
                <div class="form-group m-b">
                    <label>
                        Fecha de ingreso a la empresa
                    </label>
                    <input type="text" class="form-control" data-provide="datepicker" placeholder="Fecha Ingreso" required name="fechaIngreso" id="fechaIngreso">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary m-r" type="submit">
                        Submit
                    </button>
                    <button class="btn btn-default" type="reset">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        /* Set datepicker to specific fields. */
        $("#fechaIngreso").datepicker({
            pickTime: false,
            autoclose: true,
            language: 'es'
        });

        $("#fechaNacimiento").datepicker({
            pickTime: false,
            autoclose: true,
            language: 'es'
        });
    });
</script>
