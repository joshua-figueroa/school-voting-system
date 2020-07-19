<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="css/panel.css">
    <title>Admin Panel</title>
</head>
<body class="text-center">
    <div class="container shadow my-3">
    <?php
        if(isset($_GET['success']) && isset($_GET['user'])) {
            echo '<div class="alert alert-success alert-dismissible fade show text-left mt-3 mx-5 sticky-top" role="alert">
                        <h4 class="alert-heading">User has been created!</h4>
                        <hr>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>User '. $_GET['user'] .' has been added to the database.</p>
                    </div>';
        }
    ?>
        <div class="dropleft">
            <img class="img-profile rounded-circle dropdown-toggle" src="images/avatar.png" width=45 id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <a class="dropdown-item" href="results.php">
                    <i class="fad fa-poll-h fa-fw mr-2 text-muted"></i>Results
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/admin_logout.inc.php">
                    <i class="fad fa-sign-out-alt fa-fw mr-2 text-muted"></i>Logout
                </a>
            </div>
        </div>
        <h1 class="h3 mb-3 font-weight-300">Welcome, <?php echo $_SESSION['name']; ?>!</h1>
        <div class="row">
            <div class="col-6 my-auto mx-auto">
                <img src="images/undraw_Security_on_ff2u.png" alt="panel" class="img-fluid ml-4">
            </div>
            <div class="col-6 my-auto mx-auto">
                <form class="form-signin row" method="POST" action="includes/user.inc.php">
                    <h1 class="h3 mb-3 font-weight-300">Admin Panel</h1>
                    <div class="col-6 text-left">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" autocomplete="off" required>
                    </div>
                    <div class="col-6 text-left">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" autocomplete="off" required>
                    </div>
                    <div class="col-12 text-left mt-2">
                        <label for="username" class="form-label">User ID</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="User ID" autocomplete="off" required>
                    </div>
                    <div class="col-12 text-left mt-2">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group flex-nowrap pass">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" data-toggle="password" required>
                            <span class="input-group-text text-center eye" id="basic-addon3"><i class="fad fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="col-6 text-left mt-2">
                        <label for="inputLevel" class="form-label">Grade Level</label>
                        <select id="inputLevel" class="form-select" name="inputLevel">
                            <option selected value=7>Grade 7</option>
                            <option value=8>Grade 8</option>
                            <option value=9>Grade 9</option>
                            <option value=10>Grade 10</option>
                            <option value=11>Grade 11</option>
                            <option value=12>Grade 12</option>
                        </select>
                    </div>
                    <div class="col-6 text-left mt-2">
                        <label for="inputSection" class="form-label">Section</label>
                        <select id="inputSection" class="form-select" name="inputSection">
                            <option value=1 selected>Section A</option>
                            <option value=2>Section B</option>
                            <option value=3>Section C</option>
                            <option value=4>Section D</option>
                            <option value=5>Section E</option>
                            <option value=6>Section F</option>
                            <option value=7>Section G</option>
                        </select>
                    </div>
                    <button class="col-3 btn btn-purple mx-auto mt-3 px-4" type="submit" name="submit-btn">Add</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="vendor/jquery-3.5.1.min.js"></script>
    <script src="js/panel.js"></script>
</body>
</html>