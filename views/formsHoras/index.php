<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 16/02/2017
 * Time: 1:23 AM
 */

?>
<div class="content-view">
    <div class="card">
        <div class="card-header"><?php echo $title ?></div>
        <div class="card-block">
            <form role="form" class="form-validation" method="post" action="<?php echo ROOT."/".$modelo ?>/registrar">
                <?php
                if (isset($horas)) {
                    foreach ($horas as $hora) {
                        ?>
                        <div class="form-group row">
                            <label for="example-number-input"
                                   class="col-xs-2 col-form-label"><?php echo $hora->getMes(); ?></label>
                            <div class="col-xs-10">
                                <input class="form-control" type="number" value="<?php echo $hora->getCantidad(); ?>"
                                       id="<?php echo $hora->getMes(); ?>" name="<?php echo $hora->getMes(); ?>">
                            </div>
                        </div>
                        <?php
                    }
                } ?>
                <div class="form-group">
                    <button class="btn btn-primary m-r" type="submit">
                        Guardar
                    </button>
                    <button class="btn btn-default" type="reset">
                        Limpiar Campos
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
