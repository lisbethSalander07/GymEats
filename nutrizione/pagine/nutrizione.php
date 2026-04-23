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
    <title>home nutrizione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
    <!-- icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../stili/nutrizione.css">
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
                            <a class="nav-link" href="../../allenamento/pagine/allenamento.php">
                                <i class="fa-solid fa-dumbbell"></i>
                                <span class="d-none d-lg-inline">Allenamento</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="nutrizione.php">
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

            <main class="col-lg-10 ms-auto px-md-5 py-4 main-container">
                <div class="dashboard-card p-4">

                    <!-- DATA -->
                    <div class="d-flex align-items-center mb-5 ml-5 date-selector">
                        <button class="btn btn-link text-white"><i class="fa-solid fa-chevron-left"></i></button>
                        <h4 class="mb-0 mx-3">Oggi, 31 Marzo</h4>
                        <button class="btn btn-link text-white"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>


                    <div class="row align-items-center">
                        <!-- CERCHIO CAL -->
                        <div class="col-lg-4 d-flex justify-content-center">
                            <div class="progress-circle">
                                <div class="progress-content text-center">
                                    <h3>450</h3>
                                    <p>/ 1736 <br> <span>kcal rimaste</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- MACROS -->
                        <div class="col-lg-8">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="macro-card bordo">
                                        <i class="fa-solid fa-drumstick-bite mb-3 icona"></i>
                                        <h6>Proteine</h6>
                                        <div class="mini-progress">
                                            <div class="bar"></div>
                                        </div>
                                        <span class="fw-bold">20 / 100 g</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="macro-card bordo">
                                        <i class="fa-solid fa-wheat-awn mb-3 icona"></i>
                                        <h6>Carboidrati</h6>
                                        <div class="mini-progress">
                                            <div class="bar"></div>
                                        </div>
                                        <span class="fw-bold">15 / 200 g</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="macro-card bordo">
                                        <i class="fa-solid fa-droplet mb-3 icona"></i>
                                        <h6>Grassi</h6>
                                        <div class="mini-progress">
                                            <div class="bar"></div>
                                        </div>
                                        <span class="fw-bold">10 / 100 g</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PASTI -->
                    <div class="mt-5">
                        <h4 class="mb-4">I tuoi Pasti</h4>
                        <div class="row g-3">
                            <div class="col-6 col-md-3">
                                <div class="meal-card text-center p-3">
                                    <i class="fa-solid fa-coffee mb-2 icona"></i>
                                    <h6 class="small fw-bold">Colazione</h6>
                                    <p class="mb-1">0 kcal</p>
                                    <div class="add-meal">+</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="meal-card text-center p-3">
                                    <i class="fa-solid fa-utensils mb-2"></i>
                                    <h6 class="small fw-bold">Pranzo</h6>
                                    <p class="mb-1">0 kcal</p>
                                    <div class="add-meal">+</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="meal-card text-center p-3">
                                    <i class="fa-solid fa-utensils mb-2"></i>
                                    <h6 class="small fw-bold">Cena</h6>
                                    <p class="mb-1">0 kcal</p>
                                    <div class="add-meal">+</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="meal-card text-center p-3">
                                    <i class="fa-solid fa-apple-whole mb-2"></i>
                                    <h6 class="small fw-bold">Spuntini</h6>
                                    <p class="mb-1">0 kcal</p>
                                    <div class="add-meal">+</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

</body>

</html>