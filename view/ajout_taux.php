<?php
require_once dirname(__FILE__).'/../classes/Devise.php';
$devise = new devise();
$all_devise = $devise->getAll();
?>
<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Ajout de Taux</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content">

                        <form id="edit-profile" class="form-horizontal"  method="post" action="controller/taux.php?action=add">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="id_exercice">Devise</label>
                                    <div class="controls">
                                        <select class="span6" id="id_devise" name="id_devise" required>
                                            <?php
                                            foreach($all_devise as $devise) {
                                                ?>
                                                <option value="<?php echo $devise['id'] ?>"><?php echo $devise['label'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->



                                <div class="control-group">
                                    <label class="control-label" for="montant">Montant en Ariary</label>
                                    <div class="controls">
                                        <input type="text" class="span6" id="montant" value="" name="montant" required>
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
