<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h3> Cadastrar Pagamento</h3>
                    <form method="post" action="<?php echo base_url('index.php/Pagamentos/savePagamento') ?>" enctype="multipart/form-data">
                        <fieldset class="form-group">
                            <label for="DSC_EMAIL">Nome Time(*)</label>
                            <select required autofocus name="ID_TIME" type="text" class="form-control" id="inputEmail" placeholder="Nome do Time">
                            <option value=""><< Selecione >></option>
                            <?php foreach ($objDados as $objResult): ?>
                            <option value="<?php echo $objResult->idTime?>"><?php echo $objResult->nomeTime. ' - ' . $objResult->nomeUser ?></option>
                            <?php endforeach; ?>
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">Tipo Pagamento</label>
                            <select required autofocus name="TIPO_PGTO" type="text" class="form-control">
                                <option value=""> << Selecione >></option>
                                <option value="A" <?php echo (isset($tipoInscricao) == 'A') ? 'selected' : ' ' ?>>Anual</option>
                                <option value="M" <?php echo (isset($tipoInscricao) == 'M') ? 'selected' : ' '?>>Mensal</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">Mês Referência</label>
                            <select name="MES_REF" class="form-control">
                                <option value=""><< Selecione >></option>
                                <option value="Setembro">Setembro</option>
                                <option value="Outubro">Outubro</option>
                                <option value="Novembro">Novembro</option>
                                <option value="Dezembro">Dezembro</option>
                            </select>
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>