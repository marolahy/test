<?php
require_once dirname(__FILE__).'/../classes/Exercice.php';
$exercice = new Exercice();
$all_exercice = $exercice->getAll();
?>
<div class="row">
    <div class="span12">
        <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Liste des exercices</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th> Annee </th>
                                <th> titre</th>
                                <th class="td-actions"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php
                                foreach($all_exercice as $exercice){
                            ?>
                            <tr>
                                <td> <?php echo $exercice['annee'] ?></td>
                                <td><?php echo $exercice['titre'] ?></td>
                                <td class="td-actions"><a href="update_exercice.php?id=<?php echo $exercice['id'] ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="controller/exercice.php?action=delete&id=<?php echo $exercice['id'] ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tr>
                                <td colspan="3"><a href="ajout_exercice.php" class="btn btn-small btn-primary"><i class="btn-icon-only  icon-plus"> </i>Ajouter</a></td>
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
