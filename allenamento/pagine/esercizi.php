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
    <title>GymEats - Esercizi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS Personalizzato -->
    <link rel="stylesheet" href="../stili/esercizi.css">
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
                    <div class="section-title mb-4">Esercizi</div>

                    <!-- Search -->
                    <div class="row mb-5 mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="search-box">
                                <input type="text" placeholder="Cerca per esercizio">
                                <button class="search-btn">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="search-box">
                                <input type="text" placeholder="Cerca per gruppo muscolare">
                                <button class="search-btn">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card esercizi -->
                    <div class="row g-4">

                        <div class="col-md-6">
                            <div class="exercise-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Squat</h5>
                                    <small>Quadricipiti</small>
                                </div>
                                <div class="arrow-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="exercise-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Panca Piana</h5>
                                    <small>Pettorali</small>
                                </div>
                                <div class="arrow-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="exercise-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Stacco da Terra</h5>
                                    <small>Posteriore coscia</small>
                                </div>
                                <div class="arrow-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="exercise-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Trazioni</h5>
                                    <small>Dorsali</small>
                                </div>
                                <div class="arrow-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="exercise-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Affondi</h5>
                                    <small>Glutei, Quadricipiti</small>
                                </div>
                                <div class="arrow-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="exercise-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Military Press</h5>
                                    <small>Spalle</small>
                                </div>
                                <div class="arrow-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Bottone Indietro -->
                    <div class="mt-5">
                        <button class="back-btn" onclick="history.back()">
                            <i class="bi bi-arrow-left me-2"></i>Indietro
                        </button>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>