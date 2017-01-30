<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <script>
            $(document).ready(function () {
                // FUNCAO CHAMAR MODAL ADD
                $('#addContato').click(function () {
                    $('#modalContato').modal('show');
                });

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var nome = $("#nome").val();
                    var email = $("#email").val();
                    var dataString = {id: id, nome: nome, email: email};
                    $.ajax({
                        type: "POST",
                        url: "salvarcontatos.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                listaContatos();
                                $('#modalContato').modal('hide');
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                            }
                        }
                    });
                });

                $('a#editar').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "buscarcontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            retorno = JSON.parse(retorno);
                            console.log(retorno);
                            $("#id").val(retorno.id);
                            $("#nome").val(retorno.nome);
                            $("#email").val(retorno.email);
                            $('#modalContato').modal('show');
                        }
                    });
                    return false;
                });

                $('a#detalhes').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "buscarcontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            retorno = JSON.parse(retorno);
                            $('#det').html('<label for="id">ID: </label>' + retorno.id + '<br><label for="nome">Nome: </label>' + retorno.nome + '<br><label for="email">Email: </label>' + retorno.email);
                            $('#modalDetalhes').modal('show');
                        }
                    });
                    return false;
                });

                $('a#excluir').livequery("click", function () {
                    var id = $(this).attr('rel');
                    var dataString = {id: id};
                    $.ajax({
                        type: "POST",
                        url: "excluircontato.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                listaContatos();
                            } else {
                                alert("Ocorreu um erro ao excluir o registro.");
                            }
                        }
                    });
                    return false;
                });

                function listaEstados() {
                    $.ajax({
                        type: "POST",
                        url: "./funcoes/estado/listaestados.php",
                        cache: false,
                        success: function (retorno) {
                            $("#listaestado").html(retorno);
                        }
                    });
                }



                listaEstados();

            });
        </script>
    </head>
    <body>
        <!--==================CABEÇALHO====================---->
        <?php
        include './cabecalho.php';
        ?>
        <!--==================CABEÇALHO====================---->
        <div class="container theme-showcase" role="main">

            <!---===============================INICIO DA PRIMEIRA TABELA=============================================================-->
            <div  class="page-header">
                <h3 class="text-center">Estados Cadastrados</h3>
            </div>
            <div class="row" id="tabelaDoadores">
                <div class="col-sm-12">
                    <div class="panel panel-info">    
                        <div class="panel-heading">
                            <div class="row">  
                                <div class="col-lg-3 ">
                                    Estados Cadastrados
                                </div>
                                <div class="col-lg-offset-8 col-lg-1">
                                    <a href="cadastro-estado.jsp" class="btn btn-info"> <i class="glyphicon glyphicon-plus "></i></a>    
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="panel-body ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>UF</th>
                                        </tr>
                                    </thead>
                                    <div id="listaestado"></div>
                                </table>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="well">
                <p></p>
            </div>
        </div>
        <!--==================RODAPE====================---->
        <?php
        include './rodape.php';
        ?>
        <!--==================RODAPE====================---->
    </body>
</html>
