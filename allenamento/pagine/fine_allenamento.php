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
    <title>GymEats - Fine Allenamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Personalizzato -->
    <link rel="stylesheet" href="../stili/fine_allenamento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

                    <!-- Titolo -->
                    <div class="text-center mb-5">
                        <span class="section-title">Scheda 1</span>
                    </div>

                    <!-- Card allenamento completato -->
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5">

                            <div class="card-custom">
                                <h2 class="mb-4">ALLENAMENTO<br>COMPLETATO!</h2>
                                <div class="stats">
                                    <div>
                                        <p>Durata</p>
                                        <p class="stat-value">x</p>
                                    </div>
                                    <div>
                                        <p>Volume</p>
                                        <p class="stat-value">x</p>
                                    </div>
                                    <div>
                                        <p>Serie</p>
                                        <p class="stat-value">x</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button class="back-btn" onclick="history.back()">
                                    <i class="fa-solid fa-arrow-left me-2"></i>Indietro
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>