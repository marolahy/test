            </div>
        </div>
    </div>
<!-- /main -->
</div>
<!-- /footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
            <script>
                $(function() {
                    my_date=""
                    if($("#date" ).val()) {
                        var my_date = $("#date").val();
                    }
                    if(my_date != ""){
                        tmp_date = my_date.split('-');
                        $("#date" ).datepicker({
                            changeMonth: true,
                            changeYear: true,
                            dateFormat : 'dd-mm-yy',
                            defaultDate: new Date(tmp_date[2], tmp_date[0] - 1 , tmp_date[1])
                        });
                    }else{
                        $("#date" ).datepicker({
                            changeMonth: true,
                            changeYear: true,
                            dateFormat : 'dd-mm-yy',
                        });
                    }
                    $("#details-adc").click(function(){
                        $("#acd").toggle();
                    })
                    $("#details-eng").click(function(){
                        $("#hdc").toggle();
                    });
                    $( "#engagement_mandat" ).autocomplete({
                        source: "controller/engagement.php?action=autocomplete",
                        minLength: 2,
                        select: function( event, ui ) {
                            console.log( ui.item ?
                            "Selected: " + ui.item.value + " aka " + ui.item.id :
                            "Nothing selected, input was " + this.value );
                            fillMandat(this.value);
                        }
                    });

                });

            </script>
            </body>
</html>
