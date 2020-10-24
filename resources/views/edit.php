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
                    <h3>Edit User Account</h3>
                </div>
                <div class="card-body">
                    <?php
                        $id;
                        if (isset($_POST['btn_edit'])) {
                            $idSearch = $_POST['edit_id'];
                            for ($x = 0; $x < count($id); $x++) {

                                if ($id[$x]->id == $idSearch) {
                    ?>
                    <form action="update" method="post">
                        <input type="hidden" name="idSearch" value="<?php echo $id[$x]->id; ?>">
                        <div class="form-group">
                            <input type="text" name="username" value="<?php echo $username[$x]->username; ?>" class="form-control" placeholder="Enter username" required>
                            <input type="text" name="password" value="<?php echo $password[$x]->password; ?>" class="form-control" placeholder="Enter password" required>
                        </div>              
                        <div class="form-group text-right">
                            <input type="submit" name="add" class="btn btn-dark" value="Update">
                            <a href="dashboard" class="btn btn-dark">Back</a>
                        </div>
                    </form>
                                 
                    <div class="card-footer text-right">
                        <small>&copy; 2020-2021</small>
                    </div>
                    
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>