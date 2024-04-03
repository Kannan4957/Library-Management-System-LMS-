<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Library Management System(LMS)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($_SESSION)) {
    if (isset($_SESSION['alert'])) {
      if ($_SESSION['alert']) {
        echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  User account has been created!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  ';
    echo 'Welcome ' . $_SESSION['mail'];
      }
       else {
        echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  User account has not been created!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  ';
      }
    }
  }
  ?>

  
  <script>
    document.querySelector('.open-modal').addEventListener('click', function () {
      var myModal = new bootstrap.Modal(document.getElementById('myModal'));
      myModal.show();
    });
    document.querySelector('.open-modal-admin').addEventListener('click', function () {
      var myModal = new bootstrap.Modal(document.getElementById('myModal-admin'));
      myModal.show();
    });
    document.querySelector('.open-modal-register').addEventListener('click', function () {
      var myModal = new bootstrap.Modal(document.getElementById('myModal-register'));
      myModal.show();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>