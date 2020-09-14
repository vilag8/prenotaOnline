<?php
    session_start();

    //APRO LA CONNESSIONE GLOBALE
    $connessione_al_server = mysqli_connect("localhost","root","");
    if(!$connessione_al_server){
    die ('Non riesco a connettermi: errore '.mysqli_error());
    };
    
    //SELEZIONO IL DATABASE
    $db_selected=mysqli_select_db($connessione_al_server, "prenotazioni");
    if(!$db_selected){
    die ('Errore nella selezione del database: errore '.mysqli_error());
    }    

    if($_POST["name"] != "" && $_POST["phone"] !="" && $_POST["date"] !="" && $_POST["surname"] !="" && $_POST["prestazione"] != ""){  // se i parametri non sono vuoti
        $query_registrazione = mysqli_query($connessione_al_server,"INSERT INTO clienti (nome,telefono,giorno,surname,prestazione)
        VALUES ('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["date"]."','".$_POST["surname"]."','".$_POST["prestazione"]."')") // scrivo sul DB questi valori
        or die ("query di registrazione non riuscita"); // se la query fallisce mostrami questo errore
    }else{
    header('location:index.php?compila-tutti-i-campi'); // se i campi sono vuoti entra in questo ramo else
    }
    if(isset($query_registrazione)){ //se la reg è andata a buon fine rimanda alla pagina con il task aggiunto
        header("location:index.php?prenotazione-effettuata");
    }else{
        echo "OPS! Qualcosa è andato storto"; // altrimenti compare questa stringa
    };

?>