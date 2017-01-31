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
        <script src="funcoes/estado/funcoesestado.js"></script>
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
                <?php
                $dataHora = date("d/m/Y h:i:s");
                echo $dataHora;
                ?>
            </div>

            <div id="listaestados"></div>

            <div class="well">
                <p></p>
            </div>
        </div>


        <!--=============================== INICIO DO MODAL ==========================-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">Cadastro de Estados</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" id="formulario_clientes">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Nome</label>
                                        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome">
                                    </div>
                                    <div class="form-group">
                                        <!--<label for="message-text" class="control-label">Message:</label>-->
                                        <label for="uf">UF</label>
                                        <select name="uf" class="form-control">
                                            <option>Escolha</option>
                                            <option value="Acre">AC</option>
                                            <option value="Amazonas">AM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" id="id" value="0" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" id="salvar" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--========================================= FIM DO MODAL======================->
        <!--==================RODAPE====================---->
        <?php
        include './rodape.php';
        ?>
        <!--==================RODAPE====================---->
        <script src="funcoes/estado/funcoesestado.js"></script>
    </body>
</html>
