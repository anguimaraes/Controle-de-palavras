<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="pt">

<head>
    <?php
    include_once "includes/head.html";
    include_once "includes/sidebar.html";
    include_once "includes/topbar.html";
    ?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js'></script>
    <link rel="stylesheet" href="style/style-forms.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <?php //include_once "includes/breadcrumb.html";
            ?>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <form method="POST" autocomplete="off" style="margin-top: -6rem;">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <?php
                    if ($_GET['id']) {
                        $id_registro = $_GET['id'];
                    } elseif ($_POST['id']) {
                        $id_registro = $_POST['id'];
                    } else {
                        echo "<script language='javascript' type='text/javascript'>window.location.href='./index.php';</script>";
                    }
                    echo "<input type='hidden' name='id_registro' value=$id_registro>";
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Resultado:
                                    </h4>
                                    <div class='row'>
                                        <div class='col-3'>
                                            <label class='ml-3 mt-2 mb-0' for="tensao_banco">Tensão Banco (V):</label>
                                            <input class="form-control bg-white border-1 custom-shadow input-resultado" type="text" maxlength="11" name="tensao_banco" value="<?php echo $_SESSION['tensao_banco'] ?>" readonly>
                                        </div>
                                        <div class='col-3 input-resultado'>
                                            <label class='ml-3 mt-2 mb-0' for="valor_nominal">Valor Nominal (min):</label>
                                            <input class="form-control bg-white border-1 custom-shadow input-resultado" type="text" maxlength="11" name="valor_nominal" value="<?php echo $_SESSION['valor_nominal'] ?>" readonly>
                                        </div>
                                        <div class='col-3 input-resultado'>
                                            <label class='ml-3 mt-2 mb-0' for="valor_real">Valor Real (min):</label>
                                            <input class="form-control bg-white border-1 custom-shadow input-resultado" type="text" maxlength="11" name="valor_real" value="<?php echo $_SESSION['valor_real'] ?>" readonly>
                                        </div>
                                    </div>
                                    <br><br>
                                    <button type='submit' class="btn botao__principal__salvar" formaction='calculo-insert.php'>Salvar Cálculo</button>
                                    <br><br><br>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                    </div>
                </div>
            </form>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                &copy; Desenvolvido por André Guimarães Gomes - Claro Brasil
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="js/altera_campos.js"></script>
</body>

</html>