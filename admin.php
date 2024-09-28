<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php include('includes/errors.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <h3 class="text-center mt-5 mb-4">Admin Dashboard</h3>
                <div class="d-grid gap-3">
                    <a href="logout.php" class="btn btn-primary">Log Out</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
