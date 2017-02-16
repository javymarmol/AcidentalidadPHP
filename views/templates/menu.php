<div class="app offcanvas">
    <!--sidebar panel-->
    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <div class="sidebar-panel">
        <div class="brand">
            <!-- toggle offscreen menu -->
            <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
                <i class="material-icons">menu</i>
            </a>
            <!-- /toggle offscreen menu -->


        </div>
        <!-- main navigation -->
        <nav>
            <p class="nav-title">MENÚ</p>
            <ul class="nav">
                <!-- dashboard -->
                <li>
                    <a href="<?php echo ROOT ?>">
                        <i class="material-icons text-primary">supervisor_account</i>
                        <span>Personas</span>
                    </a>
                </li>
                <!-- /dashboard -->
                <!-- apps -->
                <li>
                    <a href="<?php echo ROOT ?>/horas">
                </span>
                        <i class="material-icons text-success">event</i>
                        <span>Horas trabajadas</span>
                    </a>
                </li>
                <!-- /apps -->
                <!-- ui -->
                <li>
                    <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                        <i class="material-icons text-danger">assessment</i>
                        <span>Reportes</span>
                    </a>
                    <ul class="sub-menu">
                        <!-- cards -->
                        <li>
                            <a href="<?php echo ROOT ?>/personas/informe">
                      <i class="material-icons">accessible</i>
                                <span>Personas con Accidentalidad</span>
                            </a>

                        </li>
                        <!-- /cards -->
                        <!-- forms -->
                <!-- charts -->
                <li>
                    <a href="<?php echo ROOT ?>/horas/estadisticas">

                        <i class="material-icons text-warning">assignment</i>
                        <span>Estadisticas</span>
                    </a>

                </li>
                <!-- /charts -->
            </ul>

        </nav>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
            <div class="header-inner">
                <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
                    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen"><i class="material-icons">menu</i> </a>
                    <a class="brand-logo hidden-xs-down">
                        <h6><span><?php echo $title; ?></span></h6>
                    </a>
                </div>
                <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
                    <span><?php echo $title; ?></span>
                </a>
                <!--Barra de busqueda-->
                <!--
                <div class="navbar-search navbar-item">
                    <form class="search-form">
                        <i class="material-icons">search</i>
                        <input class="form-control" type="text" placeholder="Search" />
                    </form>
                </div>-->
                <div class="navbar-item nav navbar-nav">
                    <div class="nav-item nav-link dropdown">
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="dropdown-item">

                            </div>
                        </div>
                    </div>
                    <a href="<?php echo ROOT."/".$modelo ?>/create" class="nav-item nav-link nav-link-icon" >
                        <i class="material-icons">library_add</i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- /top header -->

        <!-- main area -->
        <div class="main-content">
