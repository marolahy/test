<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3>Ajout Engagement</h3>
            </div>
            <form action="#" method="post" id="engagement" class="row">

                <div class="span6">
                    <fieldset>
                        <div class="flex">
                            <label>N° mandat :</label>
                            <input type="text" name="mandat" id="engagement_mandat" value="" />
                        </div>
                        <div class="flex">
                            <label>Code Ministère :</label>
                            <input type="text" name="code-ministere" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Code Ordonnateur :</label>
                            <input type="text" name="code-ordonnateur" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Code SOA :</label>
                            <input type="text" name="code-soa" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Code Assignataire :</label>
                            <input type="text" name="code-assignataire" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Compte : </label>
                            <input type="text" name="compte" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Mission :</label>
                            <input type="text" name="mission" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Programme :</label>
                            <input type="text" name="programme" value=""  readonly />
                        </div>
                        <div class="flex">
                            <label>Convention :</label>
                            <input type="text" name="convention" value=""  readonly />
                        </div>
                    </fieldset>
                </div>


                <div class="span6">
                    <fieldset>
                        <div class="flex">
                            <label>Exercice : </label>
                            <input type="text" name="exercice" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Intitulé :</label>
                            <input type="text" name="intitule1" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Intitulé :</label>
                            <input type="text" name="intitule2" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Intitulé :</label>
                            <input type="text" name="intitule3" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Intitulé :</label>
                            <input type="text" name="intitule4" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Intitulé :</label>
                            <input type="text" name="intitule5" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Catégorie :</label>
                            <input type="text" name="categorie" value="" readonly />
                        </div>
                        <div class="flex">
                            <label>Financement :</label>
                            <input type="text" name="financement" value="" readonly />
                        </div>
                    </fieldset>
                </div>

                <h4 class="span12">Engagement</h4>

                <div class="span12">
                    <fieldset>
                        <div class="flex">
                            <label>Crédit délégué :</label>
                            <input type="text" name="credit-delegue" value="" />
                            <span>Ariary</span>
                            <div class="popup-cont">
                                <a id="details-adc">Détails ADC</a>
                                <div id="acd" >
                                    <h5>HDC</h5>
                                    <table border="1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>N° mandat</td>
                                            <td>Montant</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="flex" >
                            <label>Cumul engagement :</label>
                            <input type="text" name="cumul-engagement" value="" />
                            <label>Credit disponible :</label>
                            <input type="text" name="credit-disponible" value="" />
                            <div class="popup-cont">
                                <a id="details-eng">Détails ENG</a>
                                <div id="hdc" >
                                    <h5>Engagement</h5>
                                    <table border="1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>Date</td>
                                            <td>Objet</td>
                                            <td>Montant</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <label>Date de l'engagement :</label>
                            <input type="date" name="date-engagement" />

                        </div>
                        <div class="flex">
                            <label>Objet :</label>
                            <input type="text" name="objet" value="" />
                        </div>
                        <div class="flex">
                            <label>Montant :</label>
                            <input type="text" name="montant" value="" />
                            <span>Euro/Dollar</span>
                            <input type="text" name="montant" value="" />
                            <span>Ariary</span>
                            <label>Dispo. apès validation :</label>
                            <input type="text" name="montant" value="" />
                            <span>Ariary</span>
                        </div>
                        <div class="flex">
                            <label>Réf. de la Commande :</label>
                            <input type="text" name="ref-commande" value="" />
                        </div>
                    </fieldset>
                </div>

                <div class="span12">

                    <div class="flex">
                        <button id="engage">ENGAGER</button>
                        <button id="degager">DEGAGER</button>
                        <button id="valider">VALIDER</button>
                        <button id="quitter">QUITTER</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
