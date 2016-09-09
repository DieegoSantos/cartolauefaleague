<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h3 class="page-header">Controle de Pagamentos</h3>
                <div class="col-lg-13">
                    <?php if(!empty($this->session->flashdata('sucesso'))) : ?>
                    <div align="center" class="alert alert-success" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only"></span><?php echo $this->session->flashdata('sucesso');?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                 <div class="col-lg-6">
                    <form method="get" action="<?php echo base_url('index.php/Pagamentos') ?>">
                        <table class="table" style="margin-bottom:20px;">
                            <tr>
                                <td valign="middle">Exibir Pagamento :</td>
                                <td align="left">
                                    <select name="TIPO_PGTO" class="form-control">
                                        <option value=""><< Todos >></option>
                                        <option value="A">Anual</option>
                                        <option value="M">Mensal</option>
                                    </select>
                                </td>

                                <td align="right">Mês Vigênte :</td>
                                <td>
                                    <select name="MES_REF" class="form-control">
                                        <option value=""><< Selecione >></option>
                                        <option value="Setembro">Setembro</option>
                                        <option value="Outubro">Outubro</option>
                                        <option value="Novembro">Novembro</option>
                                        <option value="Dezembro">Dezembro</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-success" value="FILTRAR" />
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
                                            <th>Nome Time</th>
                                            <th>Nome Cartoleiro</th>
                                            <th>Tipo Pagamento</th>
                                            <th>Mês Refrência</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($objDados as $objResult):?>
                                        <tr>
                                            <td><img src="<?php echo $objResult->foto ?>" width="30" /><?php echo $objResult->nomeTime ?></td>
                                            <td><?php echo $objResult->nomeUser ?></td>
                                            <?php
                                                if($objResult->tipoPagamento == 'A')
                                                    $strPagamento = 'Anual';
                                                elseif($objResult->tipoPagamento == 'M')
                                                    $strPagamento = 'Mensal';
                                            ?>
                                            <td><?php echo $strPagamento ?></td>
                                            <td><?php echo $objResult->mesReferencia ?></td>
                                        </tr>
                                    <?php endforeach; ?>
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
