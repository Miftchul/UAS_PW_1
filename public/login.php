<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=BASEURL; ?>/app/login/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                            <form action="<?=BASEURL; ?>/Log/login" method="post">
                                <div class="mb-3">
                                    <labe class="form-label">username</labe>
                                    <input type="text" name="username" class="form-control" placeholder="username" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">password</label>
                                    <input type="password" name="password" class="form-control" placeholder="password" required>
                                </div>

                                <br>
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                                <a href="<?=BASEURL; ?>/register.php" class="btn btn-default">Register</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>