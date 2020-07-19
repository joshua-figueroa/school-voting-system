<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Login</title>
</head>
<body class="text-center">
    <div class="container shadow">
        <div class="row">
            <div class="col-6 my-auto mx-auto">
                <img src="images/undraw_launch_day_4e04.png" alt="admin_login" class="img-fluid ml-4">
            </div>
            <div class="col-6 my-auto mx-auto">
                <form class="form-signin" method="POST" action="includes/admin.inc.php">
                    <h1 class="h3 mb-3 font-weight-300">Admin Panel</h1>
                    <div class="input-group mb-2 flex-nowrap">
                        <span class="input-group-text text-center" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
                        <input type="text" name="username" id="username" class="form-control" placeholder="User ID" aria-label="User ID" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                    <div class="input-group mb-2 flex-nowrap pass">
                        <span class="input-group-text text-center" id="basic-addon2"><i class="fas fa-key"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" data-toggle="password" required>
                        <span class="input-group-text text-center eye" id="basic-addon3"><i class="fad fa-eye"></i></span>
                    </div>
                    <div class="row">
                        <a href="index.php" class="col-4 mr-2 ml-auto mt-2 btn btn-success px-4 text-whitesmoke">Users</a>
                        <button class="col-4 ml-2 mr-auto mt-2 btn btn-purple px-4" type="submit" name="submit-btn">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="vendor/jquery-3.5.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>