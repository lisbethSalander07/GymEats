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
    <title>GymEats - Nuova scheda</title>

    <!-- Google Font Bruno Ace -->
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS Personalizzato -->
    <link rel="stylesheet" href="../stili/nuova_scheda.css">
</head>

<body class="bruno-ace-regular">

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

    <!--Nuova scheda -->

    <div class="container py-5">

        <!-- Titolo con modifica -->
        <div class="d-flex align-items-center gap-3 mb-4">
            <div class="section-title">Scheda ×</div>
            <div class="bi bi-pencil edit-icon"></div>
        </div>

        <!-- Card Scheda -->
        <div class="card-custom p-4">

            <div class="text-center mb-4">
                <div class="title-pill small-pill">
                    <span class="close-x">Scheda ×</span>
                </div>
            </div>

            <!-- Tabella esercizio -->
            <div class="exercise-box p-4">

                <div class="d-flex align-items-center mb-3">
                    <div class="bi bi-barbell me-2"></div>
                    <strong>Esercizio</strong>
                </div>

                <table class="table table-borderless align-middle custom-table">
                    <tr>
                        <th>Serie</th>
                        <th>Precedente</th>
                        <th>KG</th>
                        <th>Ripetizioni</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>–</td>
                        <td>–</td>
                        <td>–</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>–</td>
                        <td>–</td>
                        <td>–</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>–</td>
                        <td>–</td>
                        <td>–</td>
                    </tr>

                </table>

                <!-- Bottone aggiungi serie -->
                <div class="text-center">
                    <button class="btn add-series-btn">
                        + Aggiungi serie
                    </button>
                </div>

            </div>

            <!-- Bottone aggiungi esercizio -->
            <div class="text-center mt-4">
                <button class="btn add-exercise-btn">
                    + Aggiungi esercizio
                </button>
            </div>

        </div>

        <!-- Salva -->
        <div class="text-center mt-5">
            <button class="btn save-btn px-5">
                Salva
            </button>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>