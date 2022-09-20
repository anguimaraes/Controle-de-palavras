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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="margin-top: -6rem;">
            <?php
                    if (isset($_GET['id'])) {
                        if ($_GET['id'] == 1) {
                            $id_usuario = $_GET['id'];
                            include "modal-sucesso.php";
                        } elseif ($_POST['id'] == 1) {
                            $id_usuario = $_POST['id'];
                            include "modal-sucesso.php";
                        } elseif ($_GET['id'] == 2) {
                            $id_usuario = $_GET['id'];
                            include "modal-falha.php";
                        } elseif ($_POST['id'] == 2) {
                            $id_usuario = $_POST['id'];
                            include "modal-falha.php";
                        }
                        echo "<input type='hidden' name='id_usuario' value=$id_usuario>";
                    }
                    ?>
                <?php
                    include_once "class/Registro.php";
                    $registro = new Registro();
                    $consulta_registro = $registro->buscaRegistro();
                    if($consulta_registro == 0 ){
                        echo "Nenhum Registro Encontrado";
                    }else{

                    $total_registro = $consulta_registro[0];
                    $dados_registro = $consulta_registro[1]; 
                                  
                ?>
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registros Cadastrados</h4>
                                <!--<h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6>-->
                                <div class="table-responsive">
                                    <table id="dt_registros" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Indice</th>
                                                <th>Palavra</th>
                                                <!-- <th>Significado da Palavra</th>
                                                <th>Comentário Pessoal</th> -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for($i=0;$i<$total_registro;$i++){
                                                    $id_registro = $dados_registro[$i]['id_registro'];
                                                    $palavra = $dados_registro[$i]['palavra'];
                                                    // $significado = $dados_registro[$i]['significado'];
                                                    // $comentario = $dados_registro[$i]['comentario'];
                                                    
                                                    
                                                    echo "
                                                            <tr>
                                                                <td><a href='./consu-registro.php?busca=$id_registro'>$id_registro</a></td> 
                                                                <td><a href='./consu-registro.php?busca=$id_registro'>$palavra</a></td>
                                                               

                                                            </tr>
                                                    "; 
                                                }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <button type='submit' class="btn btn-primary"><a class="btn btn-default" href="cad-palavra.php">Cadastrar nova Palavra</button>
            </div>
            <?php } ?>
            
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
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#dt_registros').DataTable( {
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nenhum registro para mostrar.",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de  _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst":    "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext":     "Seguinte",
                    "sLast":     "Último"
                }
            }
        } );
    } );
</script>
