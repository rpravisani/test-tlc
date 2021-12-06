<?php /* Modulo per invio richiesta preventivo incluso in index.php */ ?>

							<form action="send-form.php" method="post" >
                            <div class="ps-5">

                                <div class="row mb-3 mt-4">
                                    <div class="col-3 step-preventivo" data-step="1" id="<?php  echo $prefix; ?>step-1">
                                        <div class="step-preventivo__numero step-preventivo--attivo">1</div>
                                        <span class="step-preventivo__label">Importo</span>
                                    </div>
                                    <div class="col-3 step-preventivo" data-step="2" id="<?php  echo $prefix; ?>step-2">
                                        <div class="step-preventivo__numero">2</div>
                                        <span class="step-preventivo__label">Attività</span>
                                    </div>
                                    <div class="col-3 step-preventivo" data-step="3" id="<?php  echo $prefix; ?>step-3">
                                        <div class="step-preventivo__numero">3</div>
                                        <span class="step-preventivo__label">Reddito</span>
                                    </div>
                                    <div class="col-3 step-preventivo" data-step="4" id="<?php  echo $prefix; ?>step-4">
                                        <div class="step-preventivo__numero">4</div>
                                        <span class="step-preventivo__label">Esito</span>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-12">
                                            
                                        <div style="overflow: hidden; position: relative;">

                                            <!-- step 1 importo -->
                                            <div data-step="1" class="card form-content form-content--active content-step-1">
                                                <div class="card-body text-center">
                                                    <h4 class="card-title">Che Importo ti Serve?</h4>
                                                    <p class="card-text">Ti informiamo che questa soluzione agevolata di prestito NON può essere concessa ai disoccupati e a coloro che percepiscono reddito di cittadinanza, pensione INAIL, pensione di INVALIDITÀ.<br>Reddito minimo richiesto per accedere al finanziamento: 650 euro al mese.</p>
                                                    <div class="row form-content__opzioni mb-3">
                                                        <div class="col-6">
                                                            <input type="radio" name="importo" id="<?php  echo $prefix; ?>importo-1" value="5000" checked="">
                                                            <label for="<?php  echo $prefix; ?>importo-1">5.000€</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="importo" id="<?php  echo $prefix; ?>importo-2" value="10000" >
                                                            <label for="<?php  echo $prefix; ?>importo-2">10.000€</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="importo" id="<?php  echo $prefix; ?>importo-3" value="20000" >
                                                            <label for="<?php  echo $prefix; ?>importo-3">20.000€</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="importo" id="<?php  echo $prefix; ?>importo-4" value="30000" >
                                                            <label for="<?php  echo $prefix; ?>importo-4">30.000€</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="importo" id="<?php  echo $prefix; ?>importo-5" value="50000" >
                                                            <label for="<?php  echo $prefix; ?>importo-5">50.000€</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="number" class="form-content__opzioni__puls"  placeholder="ALTRO" name="importo_altro" id="<?php  echo $prefix; ?>importo-libero" value="" >
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2">
                                                        <button type="button" data-goto='2' href="#" class="btn btn-secondary btn-lg form-content__step">Avanti</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- step 2 attività -->
                                            <div  data-step="2" class="card form-content content-step-2">
                                                <div class="card-body text-center">
                                                    <h4 class="card-title">Attività</h4>
                                                    <div class="row form-content__opzioni mb-3">
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-1" value="Pensionato Inps" checked="">
                                                            <label for="<?php  echo $prefix; ?>attivita-1">Pensionato Inps</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-2" value="Pesnionato Altro Ente" >
                                                            <label for="<?php  echo $prefix; ?>attivita-2">Pensionato Altro Ente</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-3" value="Dipendente NoiPa" >
                                                            <label for="<?php  echo $prefix; ?>attivita-3">Dipendente NoiPa</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-4" value="Dipendente Pubblico" >
                                                            <label for="<?php  echo $prefix; ?>attivita-4">Dipendente Pubblico</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-5" value="Dipendente statale / ministeriale" >
                                                            <label for="<?php  echo $prefix; ?>attivita-5">Dipendente statale / ministeriale</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-6" value="Dipendente parastatale" >
                                                            <label for="<?php  echo $prefix; ?>attivita-6">Dipendente parastatale</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-7" value="Dipendente postale" >
                                                            <label for="<?php  echo $prefix; ?>attivita-7">Dipendente postale</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-8" value="Ferroviere" >
                                                            <label for="<?php  echo $prefix; ?>attivita-8">Ferroviere</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-9" value="Azienda Municipalizzata" >
                                                            <label for="<?php  echo $prefix; ?>attivita-9">Azienda Municipalizzata</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-10" value="Militare" >
                                                            <label for="<?php  echo $prefix; ?>attivita-10">Militare</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-11" value="Dipendente Azienda Privata" >
                                                            <label for="<?php  echo $prefix; ?>attivita-11">Dipendente Azienda Privata</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="radio" name="attivita" id="<?php  echo $prefix; ?>attivita-12" value="Lavoratore autonomo" >
                                                            <label for="<?php  echo $prefix; ?>attivita-12">Lavoratore autonomo</label>
                                                        </div>
                                                    </div>
													
                                                    <div class="row">
                                                       <div class="col-6">
                                                           <div class="d-grid gap-2">
                                                                <button type="button" data-goto='1' class="btn btn-light2 btn-lg form-content__step">Indietro</button>
                                                           </div>
                                                        </div>
                                                       <div class="col-6">
                                                           <div class="d-grid gap-2">
                                                                <button type="button" data-goto='3' class="btn btn-secondary btn-lg form-content__step">Avanti </button>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            <!-- step 3 maggiori informazioni -->
                                            <div data-step="3" class="card form-content content-step-3">
                                                <div class="card-body text-center">
													
                                                    <h4 class="card-title">Maggiore informazioni</h4>
													
                                                    <div class="row form-content__opzioni mb-3">
                                                        <div class="col-12 mb-3">
                                                           
                                                           <select class="form-control" name="tipo_contratto" id="<?php  echo $prefix; ?>tipo_contratto">
                                                               <option value="">Tipo di Contratto *</option>
                                                               <option value="Determinato">Determinato</option>
                                                               <option value="Indeterminato">Indeterminato</option>
                                                            </select>         
                                                           
                                                        </div>
                                                        <div class="col-12">
                                                           
															<input class="form-content__opzioni__puls" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="data_assunzione" id="<?php  echo $prefix; ?>data_assunzione" placeholder="Data di assunzione gg/mm/aaaa *">
                                                           
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                           
														   <select  class="form-control" id="<?php  echo $prefix; ?>num_mensilita" name="num_mensilita" required>
															   <option value="">Numero mensilità</option>
															   <option value="12">12</option>
															   <option value="13">13</option>
															   <option value="14">14</option>
															   <option value="15">15</option>
                                                            </select>         
                                                           
                                                        </div>
														
                                                        <div class="col-12">
                                                           
														   <select class="form-control" id="<?php  echo $prefix; ?>reddito_mensile" name="reddito_mensile" required>
															   <option value="">Reddito mensile netto</option>
															   <option value="sopra 650">sopra 650€</option>
															   <option value="sopra 1200">sopra 1200€</option>
															   <option value="sopra 1800">sopra 1800€</option>
															   <option value="sopra 2000">sopra 2000€</option>														
                                                            </select>         
                                                           
                                                        </div>
														
                                                    </div>
													
                                                    <div class="row">
                                                    	<p class="card-text">* non è richiesta la compilazione se sei un pensionato.</p>
													</div>
													
                                                    <div class="row">
                                                       <div class="col-6">
                                                           <div class="d-grid gap-2">
                                                                <button type="button" data-goto='2' class="btn btn-light2 btn-lg form-content__step">Indietro</button>
                                                           </div>
                                                        </div>
                                                       <div class="col-6">
                                                           <div class="d-grid gap-2">
                                                                <button type="button" data-goto='4' class="btn btn-secondary btn-lg form-content__step">Avanti </button>
                                                           </div>
                                                        </div>
                                                    </div>
													
                                                </div>
												
                                            </div> <!-- fine card -->
                                            
                                            <!-- step 4 verifica fattibilità -->
                                            <div data-step="4" class="card form-content content-step-4" >
                                                <div class="card-body text-center">
													
                                                    <h4 class="card-title">Verifica la fattibilità</h4>
													
                                                    <div class="row form-content__opzioni">
                                                       
														<div class="col-6">
															<input required class="form-content__opzioni__puls" type="text" name="nome" id="<?php  echo $prefix; ?>nome" value="" placeholder="Nome">
                                                        </div>
														
														<div class="col-6">
															<input required class="form-content__opzioni__puls" type="text" name="cognome" id="<?php  echo $prefix; ?>cognome" value="" placeholder="Cognome">
                                                        </div>
														
														<div class="col-6">
															<input required class="form-content__opzioni__puls" type="email" name="email" id="<?php  echo $prefix; ?>email" value="" placeholder="Email">
                                                        </div>
														<div class="col-6">
															<input required class="form-content__opzioni__puls" type="text" name="telefono" id="<?php  echo $prefix; ?>telefono" value="" placeholder="Telefono">
                                                        </div>
														
                                                        <div class="col-12 mb-3">
															<select  class="form-control" id="<?php  echo $prefix; ?>provincia" name="provincia" required>
																<option value="">Provincia</option>
																<option value="AG">Agrigento</option>
																<option value="AL">Alessandria</option>
																<option value="AN">Ancona</option>
																<option value="AO">Aosta</option>
																<option value="AR">Arezzo</option>
																<option value="AP">Ascoli Piceno</option>
																<option value="AT">Asti</option>
																<option value="AV">Avellino</option>
																<option value="BA">Bari</option>
																<option value="BT">Barletta-Andria-Trani</option>
																<option value="BL">Belluno</option>
																<option value="BN">Benevento</option>
																<option value="BG">Bergamo</option>
																<option value="BI">Biella</option>
																<option value="BO">Bologna</option>
																<option value="BZ">Bolzano</option>
																<option value="BS">Brescia</option>
																<option value="BR">Brindisi</option>
																<option value="CA">Cagliari</option>
																<option value="CL">Caltanissetta</option>
																<option value="CB">Campobasso</option>
																<option value="CI">Carbonia-Iglesias</option>
																<option value="CE">Caserta</option>
																<option value="CT">Catania</option>
																<option value="CZ">Catanzaro</option>
																<option value="CH">Chieti</option>
																<option value="CO">Como</option>
																<option value="CS">Cosenza</option>
																<option value="CR">Cremona</option>
																<option value="KR">Crotone</option>
																<option value="CN">Cuneo</option>
																<option value="EN">Enna</option>
																<option value="FM">Fermo</option>
																<option value="FE">Ferrara</option>
																<option value="FI">Firenze</option>
																<option value="FG">Foggia</option>
																<option value="FC">Forlì-Cesena</option>
																<option value="FR">Frosinone</option>
																<option value="GE">Genova</option>
																<option value="GO">Gorizia</option>
																<option value="GR">Grosseto</option>
																<option value="IM">Imperia</option>
																<option value="IS">Isernia</option>
																<option value="SP">La Spezia</option>
																<option value="AQ">L'Aquila</option>
																<option value="LT">Latina</option>
																<option value="LE">Lecce</option>
																<option value="LC">Lecco</option>
																<option value="LI">Livorno</option>
																<option value="LO">Lodi</option>
																<option value="LU">Lucca</option>
																<option value="MC">Macerata</option>
																<option value="MN">Mantova</option>
																<option value="MS">Massa-Carrara</option>
																<option value="MT">Matera</option>
																<option value="ME">Messina</option>
																<option value="MI">Milano</option>
																<option value="MO">Modena</option>
																<option value="MB">Monza e della Brianza</option>
																<option value="NA">Napoli</option>
																<option value="NO">Novara</option>
																<option value="NU">Nuoro</option>
																<option value="OT">Olbia-Tempio</option>
																<option value="OR">Oristano</option>
																<option value="PD">Padova</option>
																<option value="PA">Palermo</option>
																<option value="PR">Parma</option>
																<option value="PV">Pavia</option>
																<option value="PG">Perugia</option>
																<option value="PU">Pesaro e Urbino</option>
																<option value="PE">Pescara</option>
																<option value="PC">Piacenza</option>
																<option value="PI">Pisa</option>
																<option value="PT">Pistoia</option>
																<option value="PN">Pordenone</option>
																<option value="PZ">Potenza</option>
																<option value="PO">Prato</option>
																<option value="RG">Ragusa</option>
																<option value="RA">Ravenna</option>
																<option value="RC">Reggio Calabria</option>
																<option value="RE">Reggio Emilia</option>
																<option value="RI">Rieti</option>
																<option value="RN">Rimini</option>
																<option value="RM">Roma</option>
																<option value="RO">Rovigo</option>
																<option value="SA">Salerno</option>
																<option value="VS">Medio Campidano</option>
																<option value="SS">Sassari</option>
																<option value="SV">Savona</option>
																<option value="SI">Siena</option>
																<option value="SR">Siracusa</option>
																<option value="SO">Sondrio</option>
																<option value="TA">Taranto</option>
																<option value="TE">Teramo</option>
																<option value="TR">Terni</option>
																<option value="TO">Torino</option>
																<option value="OG">Ogliastra</option>
																<option value="TP">Trapani</option>
																<option value="TN">Trento</option>
																<option value="TV">Treviso</option>
																<option value="TS">Trieste</option>
																<option value="UD">Udine</option>
																<option value="VA">Varese</option>
																<option value="VE">Venezia</option>
																<option value="VB">Verbano-Cusio-Ossola</option>
																<option value="VC">Vercelli</option>
																<option value="VR">Verona</option>
																<option value="VV">Vibo Valentia</option>
																<option value="VI">Vicenza</option>
																<option value="VT">Viterbo</option>
															</select>
                                                           
                                                        </div>
                                                    </div>
													
													<div class="row mb-3">
                                                        <div class="col-12 consensi mb-2">
															<input type="checkbox" name="gdpr" id="<?php  echo $prefix; ?>gdpr" required>
															<label for="<?php  echo $prefix; ?>gdpr">L'Utente dichiara di aver preso visione dell' informativa resa da parte di PrestitiFaidaTe.it srl ai sensi degli articoli 13 e 14 del Regolamento generale UE sulla protezione dei dati GDPR e scaricabile dal presente sito nella sezione <a target="_blank"  href="https://www.iubenda.com/privacy-policy/60549581/legal">Privacy</a>.</label>                                                        
														</div>
                                                        <div class="col-12 consensi mb-2">
															<input type="checkbox" name="privacy" id="<?php  echo $prefix; ?>privacy" required>
															<label for="<?php  echo $prefix; ?>privacy">L'Utente presta il proprio libero ed esplicito consenso per il trattamento di cui all'informativa (dati forniti volontariamente dall'utente).</label>														
														</div>
														
                                                    </div>
													
													
                                                    <div class="row">
                                                       <div class="col-6">
                                                           <div class="d-grid gap-2">
                                                                <button type="button" data-goto='3' class="btn btn-light2 btn-lg form-content__step">Indietro</button>
                                                           </div>
                                                        </div>
                                                       <div class="col-6">
                                                           <div class="d-grid gap-2">
                                                                <button data-goto="5" type="submit" class="btn btn-warning btn-lg ">Conferma</button>
                                                           </div>
                                                        </div>
                                                    </div>
													
                                                </div>
												
                                            </div> <!-- fine card -->
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>
							</form>