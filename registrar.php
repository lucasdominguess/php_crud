<?php
session_start();
if($_SESSION["email"] == null){
    header('location: http://localhost:9000');
}
    $nome = $_SESSION['nome'] ?? '';
   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.2/af-2.7.0/b-3.0.1/b-html5-3.0.1/fc-5.0.0/fh-4.0.1/r-3.0.0/rg-1.5.0/rr-1.5.0/sb-1.7.0/sl-2.0.0/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registrar.css">
    <title>Cadastro</title>
</head>

<body class="body_bg">
    <!-- <header>
        <h1>Cadastro</h1>
    </header> -->

    <section id="conteudo">

    <!-- Sessao cadastro -->
        <section id="sessao_cadastro">

            <div class="container-fluid" id="bemvindo">
                <h3>
                 Boas-vindas <?php echo $nome; ?> ! 
                </h3>
            </div>

            <form id="form_cad">
                <div class="modal-content">

                    <div class="container-fluid">
                        <div id="abacate" style="text-align: center">
                            
                            <h3 id="title_h3">Cadastro</h3>  
                            <input type="hidden" name="id" id="id">
                            <label for="nome"><b>Nome:</b></label><br>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui!"><br><br>
                            <label for="data_nascimento"><b>Data de Nascimento:</b></label><br>
                            <input type="date" id="data" name="data_nascimento"><br><br>
                            <button id="btn_cadastrar" type="button">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <!-- Sessao tabela -->
        <section id="sessao_tabela">

        </section>

        </section> 

        <!-- Sessao modal  -->
        <!-- <section id="sessao_modal">
            <div class="modal" id="myModal2">
                <div class="modal-dialog">
                    <div class="modal-content">

                   
                        <div class="modal-header">
                            <h4 class="modal-title">Insira os novos dados de edição</h4>
                            <button id="btn_close" type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                
                        <div class="modal-body">
                            <form id="form_edit">


                                <input type="hidden" name="id" id="id">

                                <label id="nome" for="nome" name="y">Nome:</label><br>
                                <input type="text" id="nome" name="nome"><br><br>

                                <label id="label_dataN" for="data">Data de Nascimento:</label><br>
                                <input type="date" id="data" name="data_nascimento" max='2024-01-10' class="form-control"><br><br>


                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="fechar" type="button" class="btn btn-danger">Fechar</button>
                            <button id="enviar" type="button" class="btn btn-info">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </section> -->
    

</body>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/fc-5.0.0/fh-4.0.1/r-3.0.0/rg-1.5.0/rr-1.5.0/sb-1.7.0/sl-2.0.0/datatables.min.js"></script>

<script src="listar_dados.js"></script>
<script src="editar_dados.js"></script>
<script src="enviar_dados.js"></script>
<script src="Excluir_dados.js"></script>
<script src="index.js" ></script>
</html>