<?php
require_once dirname(__FILE__).'/../classes/Adc.php';
$adc = new Adc();
$all_adc = $adc->getAll();
?>
<div class="row">
    <div class="span12">
        <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Liste des ADC</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content" >
                <div class="widget big-stats-container">
                    <div class="widget-content" style="overflow:auto;">
                        <table class="table table-striped table-bordered" style="overflow: auto">
                            <thead>
                            <tr>
                                <th> Exercice </th>
                                <th> Convention</th>
                                <th> Programme</th>
                                <th> Soa</th>
                                <th> Mission</th>
                                <th> Categorie</th>
                                <th> Compte</th>
                                <th> Financement</th>
                                <th> Ministere</th>
                                <th> Ordonateur</th>
                                <th> N° mandat</th>
                                <th> Date</th>
                                <th> Montant</th>
                                <th> Objet</th>
                                <th> Code assignataire</th>
                                <th class="td-actions"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                foreach($all_adc as $adc){
                                ?>
                            <tr>
                                <td> <?php echo Adc::getLabel('Exercice',$adc['id_exercice'],'annee' ) ?></td>
                                <td> <?php echo Adc::getLabel('Convention',$adc['id_convention'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Programme',$adc['id_programme'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Soa',$adc['id_soa'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Mission',$adc['id_mission'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Category',$adc['id_category'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Compte',$adc['id_compte'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Financement',$adc['id_financement'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Ministere',$adc['id_ministere'] ) ?></td>
                                <td> <?php echo Adc::getLabel('Ordonateur',$adc['id_ordonateur'] ) ?></td>
                                <td><?php echo $adc['num_mandat'] ?></td>
                                <td><?php echo $adc['date'] ?></td>
                                <td><?php echo $adc['montant'] ?></td>
                                <td><?php echo $adc['objet'] ?></td>
                                <td><?php echo $adc['code_assignataire'] ?></td>
                                <td class="td-actions"><a href="update_adc.php?id=<?php echo $adc['id'] ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="controller/adc.php?action=delete&id=<?php echo $adc['id'] ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tr>
                            <td colspan="16"><a href="ajout_adc.php" class="btn btn-small btn-primary"><i class="btn-icon-only  icon-plus"> </i>Ajouter</a></td>
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