<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.css">
    <title>Login</title>
    <style>
        body
        {
            background-color: #CAD5E2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">ADMIN</h3>
                <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="username">
                    <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <input type="submit" value="Login" class="btn btn-primary ms-3 mt-3">
            </div>
    </div>
</body>
</html>