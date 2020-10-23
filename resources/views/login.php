<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <!-- Custom styles for this template -->
    <link href="arte.css" rel="stylesheet">
</head>

<body class>
    <div class="container vh-100">
        <div class="row justify-content-center vh-100">
            <div class="card w-50 my-auto">
                <div class="card-header text-center bg-dark text-white">
                    <h2>Please Log-In</h2>
                </div>
                <div class="card-body">
                    <form action="validate" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-dark w-100" value="Login" name="login">
                        </div>
                    </form>
                    <div class="text-center">
                        <small>&copy;2020-2021</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


            