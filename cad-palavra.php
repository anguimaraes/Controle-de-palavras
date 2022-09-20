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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Registro
                                    </h4>
                                    <div class='row'>
                                        <div class='col-3 input-wrapper'>
                                            <label class='ml-3 mt-2 mb-0' for="palavra">Palavra:</label>
                                            <input class="form-control bg-white border-1 custom-shadow" type="text" name="palavra" id="palavra" placeholder="Digite a palavra" required>
                                        </div>
                                        </div>
                                        <div class='row'>
                                        <div class='col-6 input-wrapper'>
                                            <label class='ml-3 mt-2 mb-0' for="significado">Significado:</label>
                                            <textarea class="form-control bg-white border-1 custom-shadow borda-textarea" type="text" maxlength="800" name="significado" id="significado" rows="5" placeholder="Digite o significado da palavra" required></textarea>
                                        </div>
                                        <div class='col-6 input-wrapper'>
                                            <label class='ml-3 mt-2 mb-0' for="comentario">Comentário:</label>
                                            <textarea class="form-control bg-white border-1 custom-shadow borda-textarea" type="text" name="comentario" id="comentario" rows="5" placeholder="Digite o seu comentário pessoal" required></textarea>
                                        </div>
                                    </div>
                                    <br><br>
                                    <button type='submit' class="btn botao__principal" formaction='registro-insert.php'>Cadastrar</button>
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
                &copy; Desenvolvido por André Guimarães Gomes
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