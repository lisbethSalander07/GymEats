<?php 
    session_start();

    // log out
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }

    // controllo autorizzazione
    if (!isset($_SESSION["id"])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymEats - Avvia Scheda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../stili/avvia_scheda.css">
</head>

<body>

    <div class="container-fluid bruno-ace-regular">
        <div class="row min-vh-100">

            <!-- SIDEBAR -->
            <nav class="col-lg-2 sidebar py-4">
                <div class="sidebar-sticky">
                    <h2 class="logo px-3 mb-5 d-none d-md-block">Gym<span>Eats</span></h2>

                    <ul class="nav flex-row flex-md-column justify-content-around w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="../../profilo.php">
                                <i class="fa-solid fa-user"></i>
                                <span class="d-none d-lg-inline">Profilo</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="allenamento.php">
                                <i class="fa-solid fa-dumbbell"></i>
                                <span class="d-none d-lg-inline">Allenamento</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../../nutrizione/pagine/nutrizione.php">
                                <i class="fa-solid fa-utensils"></i>
                                <span class="d-none d-lg-inline">Nutrizione</span>
                            </a>
                        </li>
                    </ul>

                    <div class="mt-auto logout-container d-lg-block">
                        <a href="?logout=1" class="nav-link"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                </div>
            </nav>


            <!-- MAIN -->
            <main class="col-md-10 ms-sm-auto px-md-5 py-4 main-container">
                <div class="dashboard-card p-4">

                    <!-- Stats in cima -->
                    <div class="stats-bar">
                        <div class="stat-item">
                            <p>Durata</p>
                            <p class="stat-value">x</p>
                        </div>
                        <div class="stat-item">
                            <p>Volume</p>
                            <p class="stat-value">x</p>
                        </div>
                        <div class="stat-item">
                            <p>Serie</p>
                            <p class="stat-value">x</p>
                        </div>
                    </div>

                    <!-- Titolo scheda -->
                    <div class="text-center">
                        <div class="section-title">Scheda 1</div>
                    </div>

                    <!-- Esercizio 1 -->
                    <div class="exercise-box">
                        <div class="exercise-title">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <strong>Esercizio</strong>
                        </div>
                        <table class="custom-table">
                            <tr>
                                <th>Serie</th>
                                <th>Precedente</th>
                                <th>KG</th>
                                <th>Ripetizioni</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn checked"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn checked"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                        </table>
                        <button class="add-series-btn">+ Aggiungi serie</button>
                    </div>

                    <!-- Esercizio 2 -->
                    <div class="exercise-box">
                        <div class="exercise-title">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <strong>Esercizio</strong>
                        </div>
                        <table class="custom-table">
                            <tr>
                                <th>Serie</th>
                                <th>Precedente</th>
                                <th>KG</th>
                                <th>Ripetizioni</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn checked"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                        </table>
                        <button class="add-series-btn">+ Aggiungi serie</button>
                    </div>

                    <!-- Esercizio 3 -->
                    <div class="exercise-box">
                        <div class="exercise-title">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <strong>Esercizio</strong>
                        </div>
                        <table class="custom-table">
                            <tr>
                                <th>Serie</th>
                                <th>Precedente</th>
                                <th>KG</th>
                                <th>Ripetizioni</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5kg x 8</td>
                                <td>10</td>
                                <td>8</td>
                                <td><button class="check-btn"><i class="fa-solid fa-check"></i></button></td>
                            </tr>
                        </table>
                        <button class="add-series-btn">+ Aggiungi serie</button>
                    </div>

                    <!-- Bottone termina -->
                    <button class="termina-btn" onclick="window.location.href='fine_allenamento.html'">
                        Termina allenamento
                    </button>

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
