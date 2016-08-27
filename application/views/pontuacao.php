<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-13">
                     <h3 class="page-header">Inserir Pontuação da Rodada</h3>
                     <?php if(isset($strMensagem)) : ?>
                        <div>Pontuação Inserida com sucesso</div>
                     <?php endif; ?>
                     <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="get" action="<?php echo base_url('index.php/Pontuacao/salvarPontuacao') ?>">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Time</th>
                                                <th>Nome Time</th>
                                                <th>Nome Cartoleiro</th>
                                                <th>Pontuação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($objDados as $objResult):
                                        ?>
                                            <tr>
                                                <td><?php echo $objResult->idTime ?></td>
                                                <td><img src="<?php echo $objResult->foto ?>" width="30" /><?php echo $objResult->nomeTime ?></td>
                                                <td><?php echo $objResult->nomeUser ?></td>
                                                <td>
                                                    <input required type="text" name="pontuacao[<?php echo $objResult->idTime ?>][]" class="form-control" size="3">
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td align="right" colspan="4"><input type="submit" class="btn btn-primary" value="Salvar" /> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
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
