<?php session_start()?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota online</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class=body-container>
    <header>
        <nav class="navbar bg-light shadow p-3 mb-5 bg-light rounded bg-dark">
            <a class="navbar-brand" href="#">LOGO</a>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active text-white" href="index.php">Home</a>
              </li>
            </ul>
          </nav>      
    </header>
    
    <main>
        <div class="container">
                  <h4 class="text-center mt-3">Gestione prenotazioni</h4>
                  <hr>
                <table class="table table-dark rounded shadow-lg p-3 mb-5 rounded">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Prestazio</th>
                        <th scope="col">Data e ora</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $connessione_al_server = mysqli_connect("localhost","root","");
                          if(!$connessione_al_server){
                            die ('Non riesco a connettermi: errore '.mysqli_error());
                          };
                          
                          //SELEZIONO IL DATABASE
                          $db_selected=mysqli_select_db($connessione_al_server, "prenotazioni");
                          if(!$db_selected){
                          die ('Errore nella selezione del database: errore '.mysqli_error());
                          }         
                          
                          //STAMPO TUTTI I TASK INSERITI NEL DATABASE
                          $sql = "SELECT * FROM clienti";
                          $result = $connessione_al_server->query($sql);
                          
                          if ($result->num_rows > 0) {
                              $lista = "";
                          // ESTRAZIONE DEL CAMPO TASK CHE INSERISCO NELLA TABELLA
                          while($row = $result->fetch_assoc()) {
                              $id = $row["id"];
                              $name=$row["nome"];
                              $cognome=$row["surname"];
                              $phone=$row["telefono"];
                              $prest=$row["prestazione"];
                              $data=$row["giorno"];

                              echo '<tr>';

                              echo '<td>'.$id.'</td>';
                              echo '<td>'.$name.'</td>';
                              echo '<td>'.$cognome.'</td>';
                              echo '<td>'.$phone.'</td>';
                              echo '<td>'.$prest.'</td>';
                              echo '<td>'.$data.'</td>';
                              echo '<td class="button"><a href="admin.php?delete='.$id.'">&#x2327</a></td>';
                                  
                              echo '</tr>';
                              }
                          } else {
                              echo "<td>Nessuna prenotazione</td>";
                          }

                          //CANCELLA TASK
                          if(isset($_GET['delete'])){
                            $taskid = $_GET['delete'];
                            $query = 'DELETE FROM clienti WHERE id='.$id.'';
                            $cancTask = mysqli_query($connessione_al_server, $query);
                            header('location:admin.php');
                        }
                      ?>
                    </tbody>
                  </table>
            </div>
          </div>    
    </main>

</body>
</html>