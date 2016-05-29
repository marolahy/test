<?php
require_once dirname(__FILE__).'/../classes/Mission.php';
$mission = new mission();
$all_mission = $mission->getAll();
?>
<div class="row">
    <div class="span12">
        <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Liste des Missions</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th> Code </th>
                                <th> label</th>
                                <th class="td-actions"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                foreach($all_mission as $mission){
                                ?>
                            <tr>
                                <td> <?php echo $mission['code'] ?></td>
                                <td><?php echo $mission['label'] ?></td>
                                <td class="td-actions"><a href="update_mission.php?id=<?php echo $mission['id'] ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="controller/mission.php?action=delete&id=<?php echo $mission['id'] ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tr>
                            <td colspan="3"><a href="ajout_mission.php" class="btn btn-small btn-primary"><i class="btn-icon-only  icon-plus"> </i>Ajouter</a></td>
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