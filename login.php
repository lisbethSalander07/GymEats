<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- container bootstrap -->
    <div class="container-fluid">
        <!-- logo -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-1">
                <img src="immagini/logo.png" alt="logo">
            </div>
            <div class="col-10"></div>
        </div>


        <!-- box login -->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h2>Accedi al tuo account</h2>

                <form action="" method="post">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email">

                    <label for="password">Password:</label>
                    <input type="password" name="password">

                    <input type="submit" value="Accedi">
                </form>
            </div>
            <div class="col-3"></div>
        </div>

    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>