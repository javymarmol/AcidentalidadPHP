<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 8/02/2017
 * Time: 9:52 PM
 */
?>
<div class="content-view">
    <div class="card">
        <div class="card-block">
            <div class="table-responsive p-t-2 p-b-2">
                <table class="table m-b-0" id="tablaReporte">
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
        <div class="card-footer text-xs-right">
            <button type="button" class="btn btn-danger btn-icon btn-sm" onclick="window.print();">
                <i class="material-icons">print</i>
                Print
            </button>
            <button type="button" class="btn btn-info btn-icon btn-sm" onclick="descargarExcel()">
                <i class="material-icons">import_export</i>
                Export to Excel
            </button>
    </div>
</div>
    <script>
        function descargarExcel(){
            //Creamos un Elemento Temporal en forma de enlace
            var tmpElemento = document.createElement('a');
            // obtenemos la información desde el div que lo contiene en el html
            // Obtenemos la información de la tabla
            var data_type = 'data:application/vnd.ms-excel';
            var tabla_div = document.getElementById('tablaReporte');
            var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
            tmpElemento.href = data_type + ', ' + tabla_html;
            //Asignamos el nombre a nuestro EXCEL
            f = new Date();
            tmpElemento.download = 'InformePersonaConAccidentalidad_'+f.toDateString()+"_"+f.getHours()+"_"+f.getMinutes()+"_"+f.getSeconds()+'.xls';
            // Simulamos el click al elemento creado para descargarlo
            tmpElemento.click();
        }
    </script>