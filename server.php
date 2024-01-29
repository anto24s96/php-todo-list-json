<?php 
    /* RECUPERO IL CONTENUTO DEL FILE my_list.json. SARA' UNA STRINGA*/
    $myList = file_get_contents('my_list.json');

    /* AGGIUNGO ALL'HEADER DELLA RISPOSTA CHE STO PASSANDO, UN DATO JSON */
    header('content-type: application/json');

    /* INVIO L'INFORMAZIONE IN FORMATO JSON */
    echo $myList;
?>