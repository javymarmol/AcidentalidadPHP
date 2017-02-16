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
        <div class="card-header">Registrar Accidente</div>
        <div class="card-block">
            <form role="form" class="form-validation" method="post" action="<?php echo ROOT . "/" . $modelo ?>/add" enctype="multipart/form-data">
                <!-- Panel de personas-->
                <div class="form-group m-b">

                    <input type="hidden" class="form-control valid" name="idPersona"
                           text="<?php echo $person->getId(); ?>" value="<?php echo $person->getId(); ?>" required aria-required="true">
                </div>
                <div class="form-group m-b">
                    <label>
                        Cedula Empleado
                    </label>
                    <input type="text" class="form-control valid" name="cedula" value="<?php echo $person->getCedula(); ?>" disabled
                            required aria-required="true">
                </div>
                <div class="form-group m-b">
                    <label>
                        Nombre Empleado
                    </label>
                    <input type="text" class="form-control valid" name="nombre" disabled value="<?php echo $person->getNombre(); ?>"
                            required aria-required="true">
                </div>

                <!-- Panel de personas-->
                <!-- Panel de accidente-->
                <div class="form-group m-b">
                    <label>
                        Gravedad del accidente
                    </label>
                    <select name="gravedad" class="form-control" id="gravedad" required aria-required="true">
                        <option>Gravedad del accidente</option>
                        <option value="Accidente alta inmediata">Accidente alta inmediata</option>
                        <option value="Accidente leve">Accidente leve</option>
                        <option value="Accidente mortal">Accidente mortal</option>
                        <option value="Incidente">Incidente</option>
                    </select>
                </div>
                <div class="form-group m-b">
                    <label>
                        Fecha y hora del evento
                    </label>
                    <input type="text" class="form-control" placeholder="Fecha Evento" required name="fecha" id="fecha">
                </div>
                <div class="form-group m-b">
                    <label>
                        Lugar del accidente
                    </label>
                    <input type="text" class="form-control valid" name="lugar"
                           placeholder="Lugar del accidente" required aria-required="true">
                </div>
                <div class="form-group m-b">
                    <label>
                        Tipo de accidente
                    </label>
                    <select name="tipo" class="form-control" id="tipo" required aria-required="true">
                        <option>Tipo de Accidente</option>
                        <option value="Deportivos">Deportivos</option>
                        <option value="Propios del Trabajo">Propios del Trabajo</option>
                        <option value="Recreativo o Cultural">Recreativo o Cultural</option>
                        <option value="Transito">Transito</option>
                        <option value="Violencia">Violencia</option>
                    </select>
                </div>
                <div class="form-group m-b">
                    <label>
                        Lesión del Accidente
                    </label>
                    <select name="lesion" class="form-control" id="lesion" required aria-required="true">
                        <option>Lesión del Accidente</option>
                        <option value="Amputación">Amputación</option>
                        <option value="Asfixia">Asfixia</option>
                        <option value="Conmoción">Conmoción</option>
                        <option value="Efecto de Electrecidad">Efecto de Electrecidad</option>
                        <option value="Efecto del Clima">Efecto del Clima</option>
                        <option value="Envenenamiento">Envenenamiento</option>
                        <option value="Esguince">Esguince</option>
                        <option value="Fractura">Fractura</option>
                        <option value="Golpe">Golpe</option>
                        <option value="Herida">Herida</option>
                        <option value="Intoxicación">Intoxicación</option>
                        <option value="Quemadura">Quemadura</option>
                        <option value="Salpicadura">Salpicadura</option>
                        <option value="Torcedura">Torcedura</option>
                        <option value="Trauma">Trauma</option>
                    </select>
                </div>
                <div class="form-group m-b">
                    <label>
                        Parte del Cuerpo Afectada
                    </label>
                    <select name="parteCuerpoAfectada" class="form-control" id="parteCuerpoAfectada" required aria-required="true">
                        <option>Parte del Cuerpo Afectada</option>
                        <option value="Abdomen">Abdomen</option>
                        <option value="Cabeza">Cabeza</option>
                        <option value="Cara">Cara</option>
                        <option value="Cuello">Cuello</option>
                        <option value="Lesiones Generales">Lesiones Generales</option>
                        <option value="Manos">Manos</option>
                        <option value="Mienbros Inferiores">Mienbros Inferiores</option>
                        <option value="Mienbros Superiores">Mienbros Superiores</option>
                        <option value="Ojos">Ojos</option>
                        <option value="Pies">Pies</option>
                    </select>
                </div>
                <div class="form-group m-b">
                    <label>
                        Agente
                    </label>
                    <select name="agente" class="form-control" id="agente" required aria-required="true">
                        <option>Agente</option>
                        <option value="No Clasificado">No Clasificado</option>
                        <option value="Ambiente de Trabajo">Ambiente de Trabajo</option>
                        <option value="Animales">Animales</option>
                        <option value="Aparatos">Aparatos</option>
                        <option value="Caidas de Personas">Caidas de Personas</option>
                        <option value="Herramientas">Herramientas</option>
                        <option value="Maquinarias y/o Equipos">Maquinarias y/o Equipos</option>
                    </select>
                </div>
                <div class="form-group m-b">
                    <label>
                        Mecanismo
                    </label>
                    <select name="mecanismo" class="form-control" id="mecanismo" required aria-required="true">
                        <option>Mecanismo</option>
                        <option value="Atrapamientos">Atrapamientos</option>
                        <option value="Caidas de objetos">Caidas de objetos</option>
                        <option value="Caidas de personas">Caidas de personas</option>
                        <option value="Aparatos">Aparatos</option>
                        <option value="Exposición de electrecidad">Exposición de electrecidad</option>
                        <option value="Exposición de radiación">Exposición de radiación</option>
                        v
                        <option value="Exposición de temperatura">Exposición de temperatura</option>
                        <option value="Pisadas">Pisadas</option>
                        <option value="Choques">Choques</option>
                        <option value="Golpes">Golpes</option>
                        <option value="Sobre esfuerzo">Sobre esfuerzo</option>
                    </select>
                </div>
                <fieldset class="form-group">
                    <label for="exampleTextarea">Descripción del accidente</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="9" placeholder="Descripción del accidente"></textarea>
                </fieldset>

                <div class="form-group m-b">
                    <label>
                        Hubo Incapacidad
                    </label>
                    <div class="radio">
                        <label><input type="radio" name="incapacidad" id="incapacidad"
                                      value="1" onclick="diasIncapacidad.disabled=false">Si</label>
                    </div>

                    <div class="radio">
                        <label><input type="radio" name="incapacidad" id="incapacidad"  onclick="diasIncapacidad.disabled='disabled'"
                                      value="0">No</label>
                    </div>
                </div>


                <div class="form-group m-b">
                    <label>
                        Dias de Incapacidad
                    </label>
                    <input type="number" class="form-control valid" min="1" max="100" name="diasIncapacidad" disabled="disabled"
                           placeholder="Dias de incapacidad" required="true" aria-required
                    >
                </div>
                <span class="btn btn-success btn-icon fileinput-button m-b-1">
                    <i class="material-icons">add</i>
                    <span>Select files...</span>
                    <input id="fileupload" type="file" name="files[]" multiple="multiple">
                </span>
                <div id="files" class="files"></div>
                <progress id="progress" class="progress" value="0" max="100">0%</progress>
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

