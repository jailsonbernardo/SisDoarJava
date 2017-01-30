<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Doe + Vida - Página Incial</title>
        <link rel="icon" type="image/png"  href="img/apple-touch-icon.png" />

        <script src="teste.js"></script>
    </head>

    <body>
        <?php
        include './cabecalho.php';
        ?>
        <div class="container">

        </div><!-- /.container -->
        <!--=================================================================================-->
        <div class="container theme-showcase" role="main">
            <div  class="page-header">
                <h3 class="text-center">Cidades Cadastradas</h3>
            </div>

                    <div class="panel panel-info">    
                        <div class="panel-heading">
                            <div class="row">  
                                <div class="col-lg-3 ">
                                    Cidades Cadastradas
                                </div>
                                <div class="col-lg-offset-8 col-lg-1">
                                    <a href="cadastro-cidade.jsp" class="btn btn-info"> <i class="glyphicon glyphicon-plus "></i></a>    
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="panel-body ">
                                <div id="lista"></div>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include './rodape.php';
            ?>
    </body>
</html>