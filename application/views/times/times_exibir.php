<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h3 class="page-header">Times Cadastrados</h3>
                <div class="col-lg-13">
                    <form method="get" action="<?php echo base_url('index.php/Times/listaTimes') ?>">
                        <table style="margin-bottom:20px;">
                            <tr>
                                <td>Exibir Times :</td>
                                <td>
                                    <select class="form-control">
                                        <option value=""><< Todos >></option>
                                        <option value="A">Anual</option>
                                        <option value="M">Mensal</option>
                                    </select>
                                </td>
                            </tr> 
                        </table>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-13">
                	<div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID Time</th>
                                            <th>Nome Time</th>
                                            <th>Nome Cartoleiro</th>
                                            <th>Tipo Inscrição</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($objDados as $objResult):
                                    ?>
                                        <tr>
                                            <td><?php echo $objResult->idTime ?></td>
                                            <td><img src="<?php echo base_url('uploads/'.$objResult->foto) ?>" width="30" /><?php echo $objResult->nomeTime ?></td>
                                            <td><?php echo $objResult->nomeUser ?></td>
                                            <?php
                                                if($objResult->tipoInscricao == 'A')
                                                    $strInscricao = 'Anual';
                                                elseif($objResult == 'M')
                                                    $strInscricao = 'Mensal';
                                                else
                                                    $strInscricao = 'Anual e Mensal';
                                            ?>
                                            <td><?php echo $strInscricao ?></td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Editar</a>
                                                <a href="<?php echo base_url('index.php/Times/inserirPontuacao?idtime='.$objResult->idTime) ?>" class="btn btn-success">Inserir Pontuação</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="5"><a href="<?php echo base_url('index.php/Times/addTime') ?>" class="btn btn-primary">Novo Time</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>
