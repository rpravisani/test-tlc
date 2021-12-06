<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<!-- favicon -->
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" type="text/css" media="all">
<!-- Bootstrap @5.0.2 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Owlcarousel 2.3.4 -->
<link rel="stylesheet" href="assets/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/style.css?vers=<?php echo time(); ?>">
<title>Test Landing di Pravisani Roberto</title>
</head>

<body>
<!-- WRAP 2560px -->
<div class="site-wrap"> 
  <!-- WRAP 1920px -->
  <div class="site-wrap__contents"> 
    
    <!-- nav menu -->
    <section id="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-2 mt-3" id="logo"> <a href="#"><img src="images/logo-new.svg" alt="logo-prestiti-faidate"></a> </div>
          <div class="col-md-8">
            <div id="main-nav" class="float-end">
              <ul class="nav">
                <li class="nav-item"> <a class="nav-link" href="#prestiti-fai-da-te">PRESTITI FAI DA TE</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#tasso-fisso">TASSO FISSO AGEVOLATO</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#vantaggi">VANTAGGI</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#fai-da-te">FAI DA TE</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#faq">FAQ</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 sfondo-giallo pt-3" id="contatti-top">
            <div class="row pt-3">
              <div class="col-3 mt-2"><img src="images/phone-call.svg" alt="chiama"></div>
              <div class="col-9"> <small>Servizio Clienti</small>
                <p class="text-white">06 997 9491</p>
                <small>lun - ven 9-13 / 14-18</small> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- fine sezione nav menu --> 
    
    <!-- inizio sezione header-->
    <section id="header" class="hero hero-with-image pt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-7 hero-text">
            <h2 class="text-white pb-4">100% ONLINE.<br>
              FACILE, VELOCE, DA CASA.</h2>
            <h4 class="text-white pb-4"><strong>RICHIEDERE UN PRESTITO</strong> NON È MAI STATO COSÌ FACILE!</h4>
          </div>
          
          <!-- modulo preventivo -->
          <div class="col-md-5 form-holder" id="modulo-in-header">
            <?php include 'modulo.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- fine sezione header--> 
    
    <!-- inizio sezione tabs-->
    <section class="my-5 pb-5" id="prestiti-fai-da-te">
      <div class="container ">
        <div class="row">
          <div class="col-12"> 
            
            <!-- tab nav -->
            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="prestiti-personali-tab" data-toggle="tab" href="#prestiti-personali" role="tab" aria-controls="prestiti-personali" aria-selected="true">Prestiti Personali</a> </li>
              <li class="nav-item"> <a class="nav-link" id="cessione-quinto-tab" data-toggle="tab" href="#cessione-quinto" role="tab" aria-controls="cessione-quinto" aria-selected="false">Cessione del Quinto</a> </li>
            </ul>
            <!-- fine tab nav --> 
            
            <!-- tab content -->
            <div class="tab-content mt-5 mx-4 mb-4" id="prova"> 
              
              <!-- Prestiti Personali -->
              <div class="tab-pane fade show active" id="prestiti-personali" role="tabpanel" aria-labelledby="prestiti-personali-tab">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Conveniente, veloce e riservato.</h3>
                    <p class="text-secondary">I Prestiti Fai da Te sono una tipologia di prestito che si contraddistingue per la convenienza, la facilità e la velocità di erogazione.</p>
                    <p class="text-secondary"><span style="font-weight: 600">Puoi ottenere l’importo richiesto in sole 24 ore</span> dalla data di approvazione. Con la massima riservatezza: non hai bisogno di specificare la motivazione della tua richiesta.</p>
                    <p class="text-secondary">E se sei un pensionato, <span style="font-weight: 600">solo noi ti finanziamo fino a 89 anni, con rate da 24 a 84 mesi.</span></p>
                    <h3>Cosa puoi fare con i Prestiti Fai da Te?</h3>
                    <ul>
                      <li>Acquistare o ristrutturare la casa dei tuoi sogni</li>
                      <li>Realizzare il tuo matrimonio da favola</li>
                      <li>Coprire le tue spese mediche, legali o condominiali</li>
                      <li>Garantire gli studi e il futuro della tua famiglia</li>
                      <li>Organizzare la tua vacanza ideale</li>
                    </ul>
                  </div>
                  <div class="col-md-6"> <img src="/images/prestiti-personali.jpg" alt="" class="mb-4">
                    <h3>Chi può richiedere i Prestiti Personali?</h3>
                    <ul>
                      <li><em>Tutti i residenti in Italia</em></li>
                      <li><em>Pensionati fino a 89 anni a scadenza del piano</em></li>
                      <li><em>Tutti i dipendenti pubblici, privati e statali</em></li>
                      <li><em>Lavoratori autonomi</em></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Prestiti Personali --> 
              
              <!--Cessione del Quinto -->
              <div class="tab-pane fade" id="cessione-quinto" role="tabpanel" aria-labelledby="cessione-quinto-tab">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Comodo, Conveniente e Senza Pensieri.</h3>
                    <p class="text-secondary">La Cessione del Quinto è un <strong>prestito a tasso agevolato</strong> costante pensato per dipendenti pubblici, dipendenti statali e pensionati.</p>
                    <p class="text-secondary">Sicura e trasparente: hai copertura assicurativa e sei sempre tutelato perchè la rata mensile non può superare 1/5 dello stipendio o della pensione.</p>
                    <p class="text-secondary">Garantisce per te il tuo datore di lavoro e questo ti permette di ottenere <strong>fino a 75.000€ senza ulteriori garanzie</strong>.</p>
                    <p class="text-secondary">E se sei un pensionato <strong>solo noi ti finanziamo fino a 89 anni</strong>.</p>
                    <h3>Perché scegliere la nostra Cessione del Quinto</h3>
                    <ul class="text-secondary">
                      <li>Veloce. Hai l'esito del tuo preventivo in 1h</li>
                      <li>Semplice. La pratica è snella, a firma singola e anche a domicilio.</li>
                      <li>Garanzie. Ti basta presentare la busta paga o il cedolino della pensione.</li>
                      <li>Ti offre un tasso agevolato del 3,58%*.</li>
                      <li>Trasparente.</li>
                      <li>Puoi ottenere fino a 75.000€ con rate da 24 a 120 mesi.</li>
                    </ul>
                  </div>
                  <div class="col-md-6"> <img src="/images/cessione-del-quinto.jpg" alt="" class="mb-4">
                    <h3>Chi può richiedere i Prestiti Personali?</h3>
                    <ul class="text-secondary">
                      <li><em>Tutti i residenti in Italia</em></li>
                      <li><em>Pensionati fino a 89 anni a scadenza del piano</em></li>
                      <li><em>Tutti i dipendenti pubblici e statali a tempo indeterminato</em></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--Fine Cessione del Quinto --> 
              
            </div>
            <!-- fine tab content --> 
            
          </div>
          <!-- /col-12 --> 
          
        </div>
        <!-- /row -->
        
        <div class="row">
          <div class="col-12">
            <p>Con Prestiti Fai da Te potrai usufruire di un TAN a partire dal 2,76% e di un TAEG a partire dal 3,58%. Con un TAEG massimo del 15,86%.</p>
          </div>
          <div class="col-12 text-center"> <a href="#modulo-in-header" class="btn btn-secondary btn-avanti btn-lg back-to-top">Richiedi il tuo prestito</a> </div>
        </div>
        <!-- /row --> 
        
      </div>
      <!-- /container --> 
      
    </section>
    <!-- fine sezione tabs--> 
    
    <!-- sezione tasso fisso agevolato -->
    <section id="tasso-fisso" >
      <div class="container" >
        <div class="row">
          <div class="col-12 text-center">
            <h1>TASSO FISSO AGEVOLATO</h1>
            <h2><em>Per tutti i dipendenti della Pubblica Amministrazione</em></h2>
          </div>
        </div>
        <!-- /row --> 
        
      </div>
      <!-- /container --> 
      
    </section>
    <section class="py-5 mb-5 items-tasso-fisso">
      <div class="container" >
        <div class="row mb-5">
          <div class="col-4">
            <div class="card" > <img src="images/dipendente_ente_locale.jpg" class="card-img-top" alt="Dipendenti ente locale">
              <div class="card-body">
                <h5 class="card-title">DIPENDENTI ENTI LOCALI</h5>
                <p class="card-text text-secondary">Tutti i dipendenti pubblici o parapubblici hanno la possibilità di accedere a condizioni di finanziamento agevolate. Senza bisogno di fornire garanzie perché la busta paga da sola assicura l’accesso diretto ai tassi dedicati.</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" > <img src="images/insegnanti.jpg" class="card-img-top" alt="Insegnanti">
              <div class="card-body">
                <h5 class="card-title">INSEGNANTI</h5>
                <p class="card-text text-secondary">Abbiamo concretizzato un prestito su misura per tutti i dipendenti statali. Oltre ai tassi agevolati, offriamo la possibilità di ottenere il prestito in tempi rapidi, con la massima comodità e trasparenza delle condizioni.</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" > <img src="images/forze_ordine.jpg" class="card-img-top" alt="Forze dell'ordine">
              <div class="card-body">
                <h5 class="card-title">FORZE DELL'ORDINE</h5>
                <p class="card-text text-secondary">Offriamo agevolazioni riservate ai dipendenti delle forze armate o delle forze dell’ordine. Con la cessione del quinto sarà possibile ottenere fino a 75.000€ con un tasso di interesse fisso e agevolato. In tempi rapidi e in totale sicurezza.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
        
        <div class="row">
          <div class="col-12 text-center"> <a href="#modulo-in-header" class="btn btn-secondary btn-avanti btn-lg back-to-top">Richiedi il tuo prestito</a> </div>
        </div>
		  
      </div>
      <!-- /container --> 
      
    </section>
    <!-- fine sezione tasso fisso agevolato --> 
    
    <!-- sezione vantaggi -->
    <section id="vantaggi" class="pt-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h1>I VANTAGGI DI PRESTITI FAI DA TE</h1>
            <h2><strong>Prestiti Fai da Te</strong> annulla i costi di gestione<br>
              e questo ti permette di accedere ai prestiti a un <strong>tasso agevolato del 3,58%*</strong>.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 icon-box"> <img src="images/vant-euro.svg" alt="euro">
            <h4>CONVENIENZA</h4>
            <p>con la formula fai da te risparmi, perché ottimizzi le operazioni delle procedure operative.</p>
          </div>
          <div class="col-md-4 icon-box"> <img src="images/vant-rocket.svg" alt="missile">
            <h4>TEMPESTIVITÀ</h4>
            <p>garantiamo l’esito in un’ora per la tua richiesta personalizzata e hai supporto continuo per le tue necessità.</p>
          </div>
          <div class="col-md-4 icon-box"> <img src="images/vant-handshake.svg" alt="stretta-mano">
            <h4>COMODITÀ</h4>
            <p>bastano i tuoi dati e la tua busta paga per erogarti l’importo che ti serve, qualunque sia la sua destinazione.</p>
          </div>
        </div>
        <!-- /row -->
        
        <div class="row">
          <div class="col-md-4 icon-box"> <img src="images/vant-bulb.svg" alt="lampadina">
            <h4>TASSO</h4>
            <p>TAEG 3,58%*, un piccolo tasso per grandi progetti.</p>
          </div>
          <div class="col-md-4 icon-box"> <img src="images/vant-shield.svg" alt="scudo">
            <h4>PRIVACY</h4>
            <p>non chiediamo giustificativi di spese o motivazioni di prestito.</p>
          </div>
          <div class="col-md-4 icon-box"> <img src="images/vant-team.svg" alt="team">
            <h4>AFFIDABILITÀ</h4>
            <p>siamo consulenti esperti del credito da oltre 10 anni.</p>
          </div>
        </div>
        <!-- /row -->
        
        <div class="row">
          <div class="col-12 text-center"> <a href="#modulo-in-header" class="btn btn-warning btn-avanti btn-lg back-to-top">Richiedi il tuo prestito</a> </div>
        </div>
      </div>
      <!-- /container --> 
      
    </section>
    <!-- fine sezione vantaggi -->
    
    <!-- Banner mid-page--> 
    <section id="banner" class="container-fluid">
      <div class="row">
        <div class="col-md-7 sfondo-giallo text-center" style="padding: 2.5rem">
          <h4>CHIAMACI SUBITO!</h4>
          <p><em>Mettiti in contatto diretto con noi<br>
            per qualsiasi domanda, dubbio a chiarimento.</em></p>
        </div>
        <div class="col-md-5 sfondo-grigio" style="padding: 2.5rem">
          <div class="row pt-3" >
            <div class="col-3 mt-3 text-center"><img src="images/phone-call2.svg" alt="chiama"></div>
            <div class="col-9">
              <p>Servizio Clienti</p>
              <p class="testo-giallo">06 997 9491</p>
              <p>dal lunedì al venerdì 9-13 / 14-18</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- fine banner mid-page--> 
    
    <!-- sezione fai da te -->
    <section id="fai-da-te" class="mt-5">
      <div class="container" >
        <div class="row">
          <div class="col-12 text-center">
            <h1>IL MODO PIÙ VELOCE PER OTTENERE IL TUO PRESTITO!</h1>
            <h2>Dopo aver compilato il form completa la procedura seguendo questi semplici step:</h2>
          </div>
        </div>
        <!-- /row -->
        
        <div class="row mb-4">
          <div class="col-md-3 text-center"> <img src="images/identity_card.svg" alt="Carta Identità">
            <p>1. Fai una foto al tuo documento <br>
              di identità e alla tua busta paga <br>
              (o al tuo cedolino) <br>
              <span class="testo-arancio">Assicurati che sia tutto leggibile</span></p>
          </div>
          <div class="col-md-3 text-center"> <img src="images/whatsapp.svg" alt="Whatsapp">
            <p>2. Inviaci le foto su WhatsApp <br>
              <span class="testo-arancio">Assicurati che sia tutto leggibile</span></p>
          </div>
          <div class="col-md-3 text-center"> <img src="images/risposta.svg" alt="Risposta">
            <p>3. Un nostro operatore ti <br>
              chiamerà su Hangouts <br>
              <span class="testo-arancio">Preparati scaricando l'app gratuita di Google</span></p>
          </div>
          <div class="col-md-3 text-center"> <img src="images/portfolio.svg" alt="Portafolio">
            <p>4. Ricevi il tuo Prestito Fai da Te <br>
              <span class="testo-arancio">Semplice, veloce e conveniente</span></p>
          </div>
        </div>
        <!-- /row -->
        
        <div class="row">
          <div class="col-12 text-center"> <a href="#modulo-in-header" class="btn btn-warning btn-avanti btn-lg back-to-top">Richiedi il tuo prestito</a> </div>
        </div>
        <!-- /row --> 
        
      </div>
      <!-- /container --> 
      
    </section>
    <!-- fine sezione fai date--> 
    
    <!-- sezione faq -->
    <section id="faq" class="my-5">
      <div class="container" >
        <div class="row">
          <div class="col-12 text-center">
            <h1>PRESTITI PERSONALI E CESSIONE DEL QUINTO: FAQ</h1>
            <h2><em>Leggi le risposte alle domande più frequenti</em></h2>
          </div>
        </div>
        <!-- /row -->
        
        <div class="row my-5">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Quali documenti occorre presentare per la Cessione del Quinto?</h5>
                  <p class="card-text">Dipendenti: certificato di stipendio sottoscritto dall’amministrazione, ultima busta paga, ultimo
                    CUD. Pensionati: certificato di quota cedibile sottoscritta dall’Ente Previdenziale, ultimo cedolino,
                    ultimo CUD. Per entrambi: documento d’identità e tessera sanitaria.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Quanto tempo è necessario per ottenere la cessione del quinto?</h5>
                  <p class="card-text">All’atto dell’istruzione della pratica, dopo aver ricevuto il benestare da parte
                    dell’Amministrazione di appartenenza, si eroga il finanziamento entro 10 giorni lavorativi.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Quali sono i costi da sostenere per accedere al prestito?</h5>
                  <p class="card-text">Commissioni ed interessi bancari, costi di istruttoria e di intermediazione, rimborso spese di
                    notifica e postali, polizza assicurativa contro il rischio della perdita del posto di lavoro e
                    contro la perdita della vita.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Come avviene il rimborso del finanziamento?</h5>
                  <p class="card-text">Il rimborso avviene tramite rate mensili costanti versate alla società finanziaria, trattenute
                    dall’amministrazione di appartenenza direttamente dalla busta paga o cedolino pensione.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">È possibile saldare il debito anticipatamente?</h5>
                  <p class="card-text">Sì, è possibile saldare il debito anticipatamente e beneficiare del recupero con abbuono degli
                    interessi non maturati.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Perché bisogna sottoscrivere una polizza assicurativa?</h5>
                  <p class="card-text">La polizza assicurativa è prevista dalla legge che disciplina questa forma di finanziamento
                    (Legge 180/50 e Legge 14 maggio 2005, n. 80).</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">La rata e il tasso di interesse rimangono invariati per tutto il periodo del finanziamento?</h5>
                  <p class="card-text">Sì, la rata è fissa per tutta la durata del finanziamento che può essere da 24 a 120 mesi e il tasso rimane fisso per tutto il periodo di ammortamento del prestito.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Cosa succede se si ha già una cessione del quinto in corso?</h5>
                  <p class="card-text">La cessione in corso deve essere obbligatoriamente estinta. Il residuo debito viene detratto
                    dal netto ricavo della nuova operazione e versato a favore dell’ente titolare del precedente
                    prestito per la sua estinzione.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Qual è la differenza tra cessione del quinto e il classico prestito bancario?</h5>
                  <p class="card-text">Per la cessione del quinto non sono richieste garanzie. Basta avere un rapporto di lavoro a
                    tempo indeterminato presso aziende solide e affidabili o una pensione. Eventuali disguidi
                    finanziari a carico non impediscono il perfezionamento del finanziamento.</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /row -->
		  
        <div class="row">
          <div class="col-12 text-center"> <a href="#modulo-in-header" class="btn btn-secondary btn-avanti btn-lg back-to-top">Richiedi il tuo prestito</a> </div>
        </div>
		  
      </div>
      <!-- /container --> 
      
    </section>
    <!-- Fine sezione faq --> 
	  
    <!-- Sezione chi siamo--> 
    <section id="chi-siamo" class="container-fluid">
      <div class="row">
		  <div class="col-4 sfondo-giallo p-5">
			  <h4>Siamo una <strong>Web Company di credito online</strong>, che come filosofia e come scelta organizzativa, abbraccia il paradigma di <strong>accesso al credito responsabile</strong>.</h4>
			  <p>Per noi, l’interesse più alto è la <strong>sicurezza dei nostri clienti</strong>.</p>
			  <p>Da sempre ci proponiamo di essere il punto di riferimento per quelle esperienze di impresa e di <strong>economia etica</strong> che contribuiscono alla promozione del benessere comune e di una società più equa, solidale e sostenibile.</p>
			  <p>Da giugno 2021, il nostro percorso si è incrociato con quello di Avvera S.p.A. che attraverso <strong>Namirial S.p.a., identity provider certificato dalla Presidenza del consiglio dei Ministri</strong>, ci consente di collaborare con persone, organizzazioni e istituzioni, consapevoli del fatto che, oggi, le grandi sfide del mercato finanziario devono abbracciare una logica di accesso sicuro al credito online.</p>
          	<div class="col-12 text-center mt-5"> <a href="#modulo-in-header" class="btn btn-secondary btn-avanti btn-lg back-to-top">Richiedi il tuo prestito</a> </div>
		  </div>
		  <div class="col-8 image-div"></div>

      </div>
    </section>
    <!-- fine banner mid-page--> 

	  
    <!-- inizio sezione bottom-->
    <section id="bottom" class="hero hero-with-image pt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-7 hero-text">
            <h2 class="text-white pb-4">100% ONLINE.<br>
              FACILE, VELOCE, DA CASA.</h2>
            <h4 class="text-white pb-4"><strong>RICHIEDERE UN PRESTITO</strong> NON È MAI STATO COSÌ FACILE!</h4>
          </div>
          
          <!-- modulo preventivo -->
          <div class="col-md-5 form-holder" id="">
            <?php $prefix = "bottom_"; include 'modulo.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- fine sezione bottom--> 
	  
    <!-- Banner baottom-page--> 
    <section id="banner-bottom" class="container-fluid">
      <div class="row sfondo-grigio">
        <div class="col-md-5 call-us" style="padding: 1rem">
			
          <div class="row pt-3" >
            <div class="col-3 mt-3 text-center"><img src="images/phone-call2.svg" alt="chiama"></div>
            <div class="col-9">
              <p>Servizio Clienti</p>
              <p class="testo-giallo">06 997 9491</p>
              <p>dal lunedì al venerdì 9-13 / 14-18</p>
            </div>
          </div> <!-- /row -->
			
        </div>
        <div class="col-md-7" style="padding: 3.5rem 1.5rem 1.5rem">
			<img src="/images/envelope.svg" style="height: 60px; width: 60px; float: left; margin-right: 15px; vertical-align: 10px;" alt="">
			<p class="text-white"><strong>Per ogni chiarimento scrivici all’indirizzo <a href="mailto:servizioclienti@prestitifaidate.it">servizioclienti@prestitifaidate.it</a></strong>
			<br>Il nostro servizio clienti è sempre a tua disposizione e ti risponderà il prima possibile.</p>
        </div>
      </div>
    </section>
    <!-- fine banner bottom-page--> 

    <!-- sezione footer -->
    <footer id="footer" class="my-5">
      <div class="container" >
        <div class="row">
			<div class="col-md-9">
				<p>
					PrestitiFaidaTe.it srl<br>
					P.IVA 15394031007 - Sede Legale e Direzione Generale: Via Ludovisi, 35 - 00187 Roma (RM)<br>
					Email: <a href="mailto:servizioclienti@prestitifaidate.it">servizioclienti@prestitifaidate.it</a> - Tel. 06 997 9491<br>
					Agente in Attività Finanziaria <a target="_blank" href="https://www.avverafinanziamenti.it/">Avvera S.p.A.</a> - Gruppo Bancario Credito Emiliano – OAM n. A13882<br>
					<strong><a target="_blank" href="https://servizi2.inps.it/servizi/cessionequinto/Pages/GestEntiConvenzionati.aspx">Convenzione Inps</a> | <a target="_blank" href="https://noipa.mef.gov.it/cl/">Convenzione Noipa</a></strong>
				</p>
				<small>* Per prestiti erogati attraverso la formula della cessione del quinto è possibile usufruire del tasso agevolato.</small><br>
				<small>* Le convenzioni indicate sono sottoscritte dalla società <a target="_blank" href="https://www.avverafinanziamenti.it/">Avvera S.p.A.</a> di cui Prestitifadate.it srl ne è mandataria</small>
				<p class="my-3"><strong>Credits <a class="credit" target="_blank" href="https://www.tlcws.com/">TLC Web Solutions</a></strong></p>
			</div>
			<div class="col-md-3">
				<img src="images/logo-new.svg" alt="">
			</div>
		</div>
	  </div>
	  </footer>
	  
	  
  </div>
  <!-- WRAP 1920px / --> 
</div>
<!-- WRAP 2560px / --> 

<!-- jQuery 3 --> 
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
<!-- Bootstrap 5.0.2 - JavaScript Bundle with Popper --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<!-- Owlcarousel 2.3.4 --> 
<script src="assets/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/js/script.js"></script>
</body>
</html>
