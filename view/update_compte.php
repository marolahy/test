<?php
require_once dirname(__FILE__).'/../classes/Compte.php';
$compte = new Compte($_GET['id']);
?>
<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Mise a jour compte <?php echo $compte->code ?></h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content">

                        <form id="edit-profile" class="form-horizontal"  method="post" action="controller/compte.php?action=update">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="code">Code</label>
                                    <div class="controls">
                                        <input type="hidden" name="id" value="<?php echo $compte->id ?>" />
                                        <input type="text" class="span6" id="code" value="<?php echo $compte->code ?>" name="code" required>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->


                                <div class="control-group">
                                    <label class="control-label" for="label">Label</label>
                                    <div class="controls">
                                        <input type="text" class="span6" id="label" value="<?php echo $compte->label ?>" name="label" required>
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
