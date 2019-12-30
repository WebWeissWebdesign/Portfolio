<?php 

    #user input
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $budget = $_POST['budget'];
    $extra = $_POST['extra'];

    foreach($type as $selectedtype){
        $selectedtype = $selectedtype;
    }

    foreach($budget as $selectedbudget){
        $selectedbudget = $selectedbudget;
    }
    
    function filter_email_header($form_field) {
        return preg_replace('/[\0\n\r\|\!\/\<\>\^\$\%\*\&]+/','',$form_field);
    }

    function create_message ($naam, $selectedtype, $selectedbudget, $extra){
        return $message = strval($naam)." heeft een".strval($selectedtype)." besteld, hij/zij heeft een budget van ".strval($selectedbudget).". Extra gegevens zijn hier te vinden: ".strval($extra);
    };
        
    $email = filter_email_header($email);
    $bericht = create_message($naam, $selectedtype, $selectedbudget, $extra);

    $headers = "From: $email\n";
    $sent = mail('contact.senneweiss@gmail.com', 'Formulier portfolio', $bericht, $headers);
        
    if ($sent) {
        header("Location: ../html/EN/indexEN.html");
        } else {
            
        ?><html>
        <head>
        <title>Er ging iets mis</title>
        </head>
        <body>
        <h1>Er ging iets mis</h1>
        <p>We konden uw formulier niet verzenden. Probeer later opnieuw.</p>
        </body>
        </html>
        <?php
        header("Location: ../html/EN/indexEN.html");
    }
?>