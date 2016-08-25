<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-13">
                	<h2 class="page-header">Classificação</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-table fa-fw"></i> Anual</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Posição</th>
                                            <th>Time</th>
                                            <th>Nome</th>
                                            <th>Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=1; $i<=25; $i++) :?>
                                        <tr>
                                            <td><?php echo $i ?>°</td>
                                            <td>F.C Santástico 2016</td>
                                            <td>Diego</td>
                                            <td>180,80</td>
                                        </tr>
                                    <?php endfor; ?>
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
