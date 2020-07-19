<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="css/results.css">
    <title>Voting Results</title>
</head>
<body>
    <div class="container-fluid py-4" id="top">
        <div class="row mx-3 bg-white px-5 shadow" id="body">
            <div class="row">
                <div class="col-12 my-auto">
                    <h1 class="text-center mt-3 mb-3 font-weight-300">Automated 2020 Election: Live Results</h1>
                </div>
                <?php
                    if(isset($_SESSION['name'])) {
                        echo '<div class="col-1 my-auto">
                                <a href="includes/user_logout.inc.php" class="btn btn-danger">Logout</a>
                            </div>
                            <div class="col-11 my-auto">
                                <h1 class="text-center mt-3 mb-3 font-weight-300">Automated 2020 Election: Live Results</h1>
                            </div>';
                    }
                ?>
            </div>
            <hr class="mx-auto">
            <h2 id="count" class="text-center"></h2>
            <section id="anime" class="mt-3">
                <div class="row">
                    <div class="col">
                        <h2 class="my-3">Favorite Naruto Character</h2>
                        <hr class="mx-auto separator">
                        <div class="row">
                            <h3 class="col-11 mt-3" id="naruto">Naruto: </h3>
                            <span class="col-1 my-auto" id="anime-naruto"><i class="fas fa-circle"></i></span>
                        </div>
                        <div class="row">
                            <h3 class="col-11 mt-4" id="sasuke">Sasuke: </h3>
                            <span class="col-1 my-auto" id="anime-sasuke"><i class="fas fa-circle"></i></span>
                        </div>
                    </div>
                    <div class="col">
                        <canvas id="anime-chart" width="100%" height="50%"></canvas>
                    </div>
                </div>
            </section>

            <section id="anime" class="my-3">
                <div class="row">
                    <div class="col">
                        <h2 class="my-3">Favorite Credit Card</h2>
                        <hr class="mx-auto separator">
                        <div class="row">
                            <h3 class="col-11 mt-3" id="visa">Visa: </h3>
                            <span class="col-1 my-auto" id="cc-visa"><i class="fas fa-circle"></i></span>
                        </div>
                        <div class="row">
                            <h3 class="col-11 mt-4" id="mastercard">MasterCard: </h3>
                            <span class="col-1 my-auto" id="cc-mastercard"><i class="fas fa-circle"></i></span>
                        </div>
                    </div>
                    <div class="col">
                        <canvas id="cc-chart" width="100%" height="50%"></canvas>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="vendor/jquery-3.5.1.min.js"></script>
    <script src="vendor/chart.bundle.min.js"></script>
    <script src="js/results.js"></script>
</body>
</html>