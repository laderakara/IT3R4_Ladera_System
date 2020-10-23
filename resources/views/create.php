<!DOCTYPE html>

<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class>
    <div class="container vh-100">
        <div class="row justify-content-center vh-100">
            <div class="card w-50 my-auto">
                <div class="card-header text-center bg-dark text-white">
                    <h3>Create User Account</h3>
                </div>
                <div class="card-body">
                    <form action="create-user" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                            <input type="text" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" name="add" class="btn btn-dark" value="Create">
                            <a href="dashboard" class="btn btn-dark">Back</a>
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