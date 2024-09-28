<?php 
include('includes/errors.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .footer {
  background-color: #f8f9fa;
  padding: 20px 0;
  position: absolute;
  bottom: 0;
  width: 100%;
}
.social-icons {
  font-size: 24px;
}
.social-icons a {
  color: #333;
  margin: 0 10px;
  transition: color 0.3s ease;
}
.social-icons a:hover {
  color: #007bff;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Administration login</h3>
                        <form action="login-process.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" required placeholder="Enter username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" required placeholder="Enter password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
                            </div>
                        </form>
                        <p class="text-center mt-3"><a href='registerUser.php' class="rmv no-underline text-decoration-none">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-icons">
                        <a href="https://github.com/ferdinandderosaputra" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://wa.me/+628970149200" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://instagram.com/ferzchills" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>