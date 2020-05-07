<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <!-- Latest compiled and minified CSS -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">



 <!-- Optional theme -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">



        <title>googlata</title>

        <?php

        $listaDomande = [
                [
                        'domanda' => ' <b> Come state implementando la  recente   decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto  all \'oblio?</b>',
                        'risposta' => 'Sappiamo che la sicurezza e la <span id ="ciao"> privacy sono importanti per te </span> e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

                        Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere <span id ="ciao"> Google </span> ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.

                        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel<span id ="ciao"> Centro Google per la sicurezza online.

                        Scopri </span> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
                ],
                [
                        'domanda' => '<b>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</b>',
                        'risposta' => 'Sappiamo che la sicurezza e la <span id ="ciao"> privacy sono importanti per te </span> e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

                        Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere <span id ="ciao"> Google </span> ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.

                        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel<span id ="ciao"> Centro Google per la sicurezza online.

                        Scopri </span> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
                ],
                [
                        'domanda' => '<b>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</b>',
                        'risposta' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <span id ="ciao"> contattare il webmaster </span >del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile<span id ="ciao"> visitare la nostra pagina di assistenza per avere ulteriori informazioni.</span>'
                ],
                [
                        'domanda' => '<b>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</b>',
                        'risposta' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio.'
                ],

        ];

         ?>
     </head>
                <body>
                    <header>

                                                <nav id="barra"  class="navbar navbar-default navbar-fixed-top">

                                    <div class="sinistrasopra">


                                                    <img id="logo" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
                                                    <span>Privacy e termini</span>
                                    </div>

                                    <div class="sinistrasotto">
                                        <ul>
                                            <li><b> Introduzione</b></li>
                                            <li><b>Norme sulla privacy</b></li>
                                            <li><b>Termini di servizio</b></li>
                                            <li><b>Tecnologie</b></li>
                                            <li> <b>Domande frequenti</b></li>
                                        </ul>

                                    </div>
                            </nav>

                    </header>

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="scritta">

                            <h1 class="domande">

                                        <?php foreach ($listaDomande as  $domarispo) { ?>
                                            <h1 class="domande"><?php echo   $domarispo ['domanda'] ; ?></h1>
                                            <div class="risposte"><?php echo   $domarispo ['risposta'] ; ?></div>
                                        <?php } ?>

                                </h1>
                                    </div>

                            </div>

                    </div>
                    </div>


                </body>
</html>
