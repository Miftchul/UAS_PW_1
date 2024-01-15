<?php
session_start();
require_once '../app/init.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?=BASEURL; ?>/public/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Register</h5>
                        <form action="<?=BASEURL; ?>/Log/register" method="post">
                            <div class="mb-3">
                                <labe class="form-label">username</labe>
                                <input type="text" name="username" id="username" class="form-control" placeholder="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                            <a href="<?=BASEURL; ?>/Log/login" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?=BASEURL; ?>/public/register.js"></script>
</body> 
</html>