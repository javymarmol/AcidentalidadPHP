<!-- bottom footer -->
<div class="content-footer">
    <nav class="footer-right">
        <ul class="nav">
            <li>
                <a href="javascript:;">Feedback</a>
            </li>
        </ul>
    </nav>
    <nav class="footer-left">
        <ul class="nav">
            <li>
                <a href="http://javymarmol.com" target="_blank">
                    <span>Copyright</span>
                    &copy; 2017 Heyner Marmol
                </a>
            </li>
            <li class="hidden-md-down">
                <a href="javascript:;">Privacy</a>
            </li>
            <li class="hidden-md-down">
                <a href="javascript:;">Terms</a>
            </li>
            <li class="hidden-md-down">
                <a href="javascript:;">help</a>
            </li>
        </ul>
    </nav>
</div>
<!-- /bottom footer -->
</div>
<!-- /main area -->
</div>
<!-- /content panel -->
</div>
    <script type="text/javascript">
        window.paceOptions = {
            document: true,
            eventLag: true,
            restartOnPushState: true,
            restartOnRequestAfter: true,
            ajax: {
                trackMethods: [ 'POST','GET']
            }
        };
    </script>

    <!-- build:js({.tmp,app}) scripts/app.min.js -->
    <script src="<?php echo ROOT ?>/js/jquery.js"></script>
<script src="<?php echo ROOT ?>/js/core.js"></script>
<script src="<?php echo ROOT ?>/js/tether.js"></script>
<script src="<?php echo ROOT ?>/js/bootstrap.js"></script>
<script src="<?php echo ROOT ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo ROOT ?>/js/jquery.datetimepicker.full.min.js"></script>
    <script src="<?php echo ROOT ?>/js/pace.js"></script>
    <script src="<?php echo ROOT ?>/js/fastclick.js"></script>
    <script src="<?php echo ROOT ?>/js/constants.js"></script>
<script src="<?php echo ROOT ?>/js/main.js"></script>
    <!-- endbuild -->

    <!-- page scripts -->

    <script type="text/javascript">
        /* Set datetimepicker to specific fields. */
//campo para crear un accidente
        jQuery('#fecha').datetimepicker({
            minDate:'<?php echo $person->fechaIngreso?>'
        });

    </script>

    <!-- end page scripts -->

    <!-- initialize page scripts -->
    <!-- end initialize page scripts -->


    </body>
</html>