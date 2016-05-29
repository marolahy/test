<?php
require_once dirname(__FILE__).'/../classes/Exercice.php';
require_once dirname(__FILE__).'/../classes/Convention.php';
require_once dirname(__FILE__).'/../classes/Programme.php';
require_once dirname(__FILE__).'/../classes/Soa.php';
require_once dirname(__FILE__).'/../classes/Mission.php';
require_once dirname(__FILE__).'/../classes/Category.php';
require_once dirname(__FILE__).'/../classes/Compte.php';
require_once dirname(__FILE__).'/../classes/Financement.php';
require_once dirname(__FILE__).'/../classes/Ordonateur.php';
require_once dirname(__FILE__).'/../classes/Ministere.php';
$exercice = new Exercice();
$all_exercice = $exercice->getAll();
$convention = new Convention();
$all_convention = $convention->getAll();
$programme = new Programme();
$all_programme = $programme->getAll();
$soa = new Soa();
$all_soa = $soa->getAll();
$mission = new Mission();
$all_mission = $mission->getAll();
$category = new Category();
$all_category = $category->getAll();
$compte = new Compte();
$all_compte = $compte->getAll();
$financement = new Financement();
$all_financement = $financement->getAll();
$ordonateur = new Ordonateur();
$all_ordonateur = $ordonateur->getAll();
$ministere = new Ministere();
$all_ministere = $ministere->getAll();
?>
<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Ajout de Adc</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content">

                        <form id="edit-profile" class="form-horizontal"  method="post" action="controller/adc.php?action=add">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="id_exercice">Exercice</label>
                                    <div class="controls">
                                        <select class="span6" id="id_exercice" name="id_exercice" required>
                                            <?php
                                            foreach($all_exercice as $exercice) {
                                                ?>
                                                <option value="<?php echo $exercice['id'] ?>"><?php echo $exercice['annee'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->


                                <div class="control-group">
                                    <label class="control-label" for="id_convention">Convention</label>
                                    <div class="controls">
                                        <select class="span6" id="id_exercice" name="id_convention" required>
                                            <?php
                                            foreach($all_convention as $convention) {
                                                ?>
                                                <option value="<?php echo $convention['id'] ?>"><?php echo $convention['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_programme">Programme</label>
                                    <div class="controls">
                                        <select class="span6" id="id_programme" name="id_programme" required>
                                            <?php
                                            foreach($all_programme as $programme) {
                                                ?>
                                                <option value="<?php echo $programme['id'] ?>"><?php echo $programme['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_soa">Soa</label>
                                    <div class="controls">
                                        <select class="span6" id="id_soa" name="id_soa" required>
                                            <?php
                                            foreach($all_soa as $soa) {
                                                ?>
                                                <option value="<?php echo $soa['id'] ?>"><?php echo $soa['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_mission">Mission</label>
                                    <div class="controls">
                                        <select class="span6" id="id_mission" name="id_mission" required>
                                            <?php
                                            foreach($all_mission as $mission) {
                                                ?>
                                                <option value="<?php echo $mission['id'] ?>"><?php echo $mission['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_category">Categorie</label>
                                    <div class="controls">
                                        <select class="span6" id="id_category" name="id_category" required>
                                            <?php
                                            foreach($all_category as $category) {
                                                ?>
                                                <option value="<?php echo $category['id'] ?>"><?php echo $category['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_compte">Compte</label>
                                    <div class="controls">
                                        <select class="span6" id="id_compte" name="id_compte" required>
                                            <?php
                                            foreach($all_compte as $compte) {
                                                ?>
                                                <option value="<?php echo $compte['id'] ?>"><?php echo $compte['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_financement">Financement</label>
                                    <div class="controls">
                                        <select class="span6" id="id_financement" name="id_financement" required>
                                            <?php
                                            foreach($all_financement as $financement) {
                                                ?>
                                                <option value="<?php echo $financement['id'] ?>"><?php echo $financement['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="id_ordonateur">Ordonateur</label>
                                    <div class="controls">
                                        <select class="span6" id="id_ordonateur" name="id_ordonateur" required>
                                            <?php
                                            foreach($all_ordonateur as $ordonateur) {
                                                ?>
                                                <option value="<?php echo $ordonateur['id'] ?>"><?php echo $ordonateur['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="id_ministere">Ministere</label>
                                    <div class="controls">
                                        <select class="span6" id="id_ministere" name="id_ministere" required>
                                            <?php
                                            foreach($all_ministere as $ministere) {
                                                ?>
                                                <option value="<?php echo $ministere['id'] ?>"><?php echo $ministere['code'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="num_mandat">N° Mandat</label>
                                    <div class="controls">
                                        <input type="text" class="span6" id="num_mandat" value="" name="num_mandat" required>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="Date">Date</label>
                                    <div class="controls">
                                        <input type="text" id="date" class="span6" id="label" value="" name="date"  required>


                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="montant">Montant</label>
                                    <div class="controls">
                                        <input type="text" id="montant" class="span6" id="label" value="" name="montant"  required>


                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="objet">Objet</label>
                                    <div class="controls">
                                        <input type="text" id="objet" class="span6" id="label" value="" name="objet"  required>


                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="control-group">
                                    <label class="control-label" for="code_assignataire">Code asignataire</label>
                                    <div class="controls">
                                        <input type="text" id="code_assignataire" class="span6" id="label" value="" name="code_assignataire"  required>


                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->



                                <br />


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="btn-icon-only icon-icon-save"> </i>Save</button>
                                    <button onclick="window.location='<?php echo $_SERVER['PHP_SELF'] ?>';return false;" class="btn">Cancel</button>
                                </div> <!-- /form-actions -->
                            </fieldset>
                        </form>
                    </div>

                    <!-- /widget-content -->

                </div>
            </div>
        </div>
    </div>
</div>
