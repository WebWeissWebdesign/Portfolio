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
        return $message = strval($naam)." ordered a ".strval($selectedtype)." besteld, deze he/her has a budget of".strval($selectedbudget).". Additional details are: ".strval($extra);
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
        <title>Something went wrong</title>
        </head>
        <body>
        <h1>Something went wrong</h1>
        <p>We could not send your feedback. Please try again.</p>
        </body>
        </html>
        <?php
        header("Location: ../html/EN/indexEN.html");
    }
?>