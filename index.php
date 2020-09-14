<?php session_start()?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota online</title>
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
              <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Prenota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="admin.php">Admin</a>
              </li>
            </ul>
          </nav>      
    </header>
    
    <main>
        <h1 class="text-center">Come possiamo esserti utile?</h1>
        <div class="container-fluid mt-5 p-3">
            <div class="card-deck">
                <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <img src="images/commercial.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Appuntamenti commerciali</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <button type="button" class="btn btn-primary rounded-pill">Leggi...</button>
                </div>
                </div>
                <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <img src="images/helpdesk.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assistenza GIS</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <button type="button" class="btn btn-primary rounded-pill">Leggi...</button>
                </div>
                </div>
                <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <img src="images/website.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Realizzazione siti web</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <button type="button" class="btn btn-primary rounded-pill">Leggi...</button>
                </div>
                </div>
            </div>
        </div>

        <div id ="contact" class="bg-dark text-white">
            <h3 class="text-center p-3">Prenota un appuntamento &#128467</h3>
            <form class="container p-5" name ="prenota" method="post" action="prenota.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputName">Nome</label>
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Inserisci il tuo nome">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputSurname">Cognome</label>
                    <input type="text" class="form-control" name="surname" id="inputSurname" placeholder="Inserisci il tuo cognome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPhone">Telefono</label>
                        <input type="number" class="form-control" name="phone" id="inputPhone" placeholder="Numero di telefono">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">Prestazione</label>
                    <select id="inputState" class="form-control" name="prestazione">
                        <option selected>Seleziona...</option>
                        <option>Contatti commerciali</option>
                        <option>Assistenza GIS</option>
                        <option>Realizzazione siti web</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="datetime-local">Giorno e ora</label>
                        <input type="datetime-local"  class="form-control" name="date" id="inputPassword4">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3 rounded-pill">Prenota</button>
            </form>
        </div>
    </main>

    <footer>
        <div>
            <div class="text-center pt-5">
                <h5 class="text-muted">Ci trovate anche qui</h5>
            </div>
    
            <div class="text-center mb-5">
                <img src="..." alt="logo social" class="p-3"/>
                <img src="..." alt="logo social"/>
            </div>
        </div>
    </footer>

</body>
</html>