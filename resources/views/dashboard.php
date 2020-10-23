<!DOCTYPE html>

<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class>
    <div class="container" style="margin-top: 10px;">
        <div class="row justify-content-center">
            <div class="card w-100">
                <div class="card-header text-center bg-dark text-white">
                    <h3>Admin Panel</h3>
                </div>
                <div class="card-body">
                    
                    
                    <table class="table table-bordered" id="dataTable" width="100%">
                        <thead id="thead">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id;
                            $username;
                            $password;
                            if (!empty($id)) {
                                for ($x = 0; $x < count($id); $x++) {
                            ?>    
                                <tr>
                                    <td class="text-center"><?php echo $id[$x]->id; ?></td>
                                    <td class="text-center"><?php echo $username[$x]->username; ?></td>
                                    <td class="text-center"><?php echo $password[$x]->password; ?></td>
                                    <td class="text-center">
                                        <form action="edit" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $id[$x]->id; ?>">
                                            <button type="submit" name="btn_edit" class="btn btn-success">EDIT</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="delete" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $id[$x]->id; ?>">
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                                }
                            }else {
                                echo "No record found.";
                            }
                            ?>
                        </tbody>
                    </table>
                    <form action="create" method="post">
                        <div class="form-group text-right">
                            <input type="submit" name="create" class="btn btn-dark" value="Create New User">
                            <a href="login" class="btn btn-dark">Logout</a>
                        </div>
                        <div class="text-center">
                            <small>&copy;2020-2021</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>