<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>LOGIN FORM</h1>
                <form action="validation.php" method="post">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary my-2">Submit</button>

                </form>
            </div>

            <div class="col-lg-6">
                <h1>SIGN UP FORM</h1>
                <form action="registration.php" method="post">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary my-2">Submit</button>

                </form>
            </div>

        </div>
    </div>
</body>
</html>