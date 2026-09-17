<!-- Nichole Blachford 2026 -->
 <?php
    include "functions.php";
 ?>


<!-- MAKE IT LOOK NICE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesoem -->
    <script src="https://kit.fontawesome.com/f3f683af7c.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <link rel="stylesheet" href="styles.css">
</script>


    <link rel="stylesheet" href="styles.css">

    <title>Due Date checker</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" id="brand" href="#">
      <img src="images/book.png"  width="40" height="34" alt="Logo" class="d-inline-block align-text-top">
      Lolling Library
    </a>

    <button class="navbar-toggler" type="button"    data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link "  href="#">Home</a>
        <a class="nav-link" href="#">Books</a>
        <a class="nav-link active" href="#" aria-current="page">Due Date Calculator</a>
        
      </div>
    </div>
  </div>
</nav>

<main>
    <div class="card text-center">
  <div class="card-header">
    Check Your Due Dates Below
  </div>
  <div class="card-body">
    Please fill out the following fields:
    <hr>
    <p class="card-text">
        <?php
            include("form.php");
        ?>
    </p>
  </div>
  <div class="card-footer">
    <?php 
        if ($_GET){
            echo $bookMessage;
            echo "<br>";
            echo $bookMessage2;
        }
    ?>
  </div>
</div>

</main>

    
    
</body>
</html>