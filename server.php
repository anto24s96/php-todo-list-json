<?php 
    /* RECUPERO IL CONTENUTO DEL FILE my_list.json. SARA' UNA STRINGA*/
    $myList = file_get_contents('my_list.json');

    $list = json_decode($myList, true);

    /* VERIFICO SE HO INVIATO TRAMITE CHIAMATA POST L'ELEMENTO NUOVO DA SALVARE */
    if(isset($_POST["task"])) {
        $newTask = [
            'task' => $_POST['task'],
            'done' => false,
        ];
        
        /* AGGIUNGO L'ELEMENTO NUOVO NELLA LISTA */
        array_push($list, $newTask);
        
        /* SALVO IL NUOVO ELEMENTO NEL FILE my_list.json */
        file_put_contents('my_list.json', json_encode($list));
    }

    /* AGGIUNGO ALL'HEADER DELLA RISPOSTA CHE STO PASSANDO, UN DATO JSON */
    header('content-type: application/json');

    /* INVIO L'INFORMAZIONE IN FORMATO JSON */
    echo json_encode($list);
?>