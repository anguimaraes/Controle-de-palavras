<?php 
    if($_GET['busca']){
        $busca = $_GET['busca'];
    }elseif( $_POST['busca']){
        $busca = $_POST['busca'];
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Nenhum Registro selecionado');window.location.href='./home.php';</script>";
    }

    //$busca = $_POST['busca'];
    include_once "class/Registro.php";
    $registro = new Registro();
    $consulta_registro = $registro->verificaRegistro($busca);
    //var_dump($consulta_registro);exit;

        //Função para aparecer o select escolhido
        function selected( $value, $selected ){
        return $value==$selected ? ' selected="selected"' : '';
    }
?>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js'></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script>
        $(function(e){
          $("a.img").attr("target","_blank");
        })
    </script>
            <style>
        a.btn-default{
            color: white;
        }
    </style>
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
            <form method="post" target="_blank" style="margin-top: -6rem;">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
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
                                            <input class="form-control bg-white border-1 custom-shadow" type="text" readonly value="<?php echo $consulta_registro ['palavra']?>" maxlength="11" name="palavra" id="palavra"  required>
                                        </div>
                                    </div>
                                        <div class='row'>
                                        <div class='col-6 input-wrapper'>
                                            <label class='ml-3 mt-2 mb-0' for="significado">Significado:</label>
                                            <textarea class="form-control bg-white border-1 custom-shadow borda-textarea" type="text" readonly maxlength="800" name="significado" id="significado" rows="5"> <?= $consulta_registro['significado']?> </textarea>
                                        </div>
                                        <div class='col-6 input-wrapper'>
                                            <label class='ml-3 mt-2 mb-0' for="comentario">Comentário pessoal:</label>
                                            <textarea class="form-control bg-white border-1 custom-shadow borda-textarea" readonly maxlength="11" name="comentario" id="comentario" rows="5" required> <?php echo $consulta_registro ['comentario']?></textarea>
                                        </div>
                                        
                                    </div>
                                    <br><br>
                                    <button type='submit' class="btn botao__principal"><a class="btn btn-default" href="index.php">Voltar</button>
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