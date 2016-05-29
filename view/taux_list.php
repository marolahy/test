<?php
require_once dirname(__FILE__).'/../classes/Taux.php';
$taux = new Taux();
$all_taux = $taux->getCurrentTaux();
?>
<div class="row">
    <div class="span12">
        <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Liste des taux</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th> Devise </th>
                                <th> Montant</th>
                                <th class="td-actions"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                foreach($all_taux as $taux){
                                ?>
                            <tr>
                                <td> <?php echo $taux['devise'] ?></td>
                                <td><?php echo $taux['montant'] ?></td>
                                <td class="td-actions"><a href="update_taux.php?id=<?php echo $taux['id'] ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="controller/taux.php?action=delete&id=<?php echo $taux['id'] ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tr>
                            <td colspan="3"><a href="ajout_taux.php" class="btn btn-small btn-primary"><i class="btn-icon-only  icon-plus"> </i>Ajouter</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /widget-content -->

                </div>
            </div>
        </div>
    </div>
</div>