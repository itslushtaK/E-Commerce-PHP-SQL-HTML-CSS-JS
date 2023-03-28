<?php
require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>User View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User View Details 
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM tb_user WHERE id='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $tb_user = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>FullName</label>
                                        <p class="form-control">
                                            <?=$tb_user['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <p class="form-control">
                                            <?=$tb_user['username'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Email</label>
                                        <p class="form-control">
                                            <?=$tb_user['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Role</label>
                                        <p class="form-control">
                                            <?=$tb_user['role'];?>
                                        </p>
                                    </div>
                                   

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>