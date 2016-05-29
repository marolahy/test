<?php
require_once dirname(__FILE__).'/../classes/Engagement.php';
$engagement = new Engagement();
$all_engagement = $engagement->getAll();
?>
    <div class="row">
        <div class="span12">
            <div class="widget widget-nopad">
                <div class="widget-header"> <i class="icon-list-alt"></i>
                    <h3>Liste des engagement</h3>
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
                                    foreach($all_engagement as $engagement){
                                    ?>
                                <tr>
                                    <td> <?php echo $engagement['code'] ?></td>
                                    <td><?php echo $engagement['label'] ?></td>
                                    <td class="td-actions"><a href="update_engagement.php?id=<?php echo $engagement['id'] ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="controller/engagement.php?action=delete&id=<?php echo $engagement['id'] ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tr>
                                <td colspan="3"><a href="ajout_engagement.php" class="btn btn-small btn-primary"><i class="btn-icon-only  icon-plus"> </i>Ajouter</a></td>
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
<?php
/**
 * Created by PhpStorm.
 * User: marolahy
 * Date: 27/05/2016
 * Time: 04:37
 */