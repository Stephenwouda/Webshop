<?php 
    require('navbar.php');
    require('includes/dbh.inc.php');
    $sql = "SELECT naam, prijs, afb, voorraad FROM product WHERE catid = 8";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $productarray = array();
      // output data of each row
      while($row = $result->fetch_assoc()) {
          array_push($productarray ,$row );

      }
    } else {
      echo "0 results";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webshop</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Showcase -->
    <section class="bf-dark text-light p-5 text-center">
        <div class="container">
            <div class="d-sm-flex justify-content-center">
                <div>    
                    <h1><span class="text-white">Accessoires</span></h1>
                    <!-- <p class="lead my-4">Here we have <span class="text-danger">the best</span> GPU's for you! </p> -->
                </div>    
            </div>
        </div>
    </section>

    <?php
    echo    "<div class='container my-5'>";
    echo    "<div class='row g-3'>";
    ?>

<?php
        $counter = 0;
        while ($counter < 6){
            echo "<div class='col-12 col-md-6 col-lg-4'>";
            echo "<div class='card text-white bg-dark mb-3'>";
            echo "<img src='{$productarray[$counter]['afb']}' class='card-img-top'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$productarray[$counter]['naam']}</h5>";
            echo "<p class='card-text fw-light'>{$productarray[$counter]['prijs']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            $counter++;         
        }
    
    echo "</div>";
    echo "</div";

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    <nav class="navbar navbar-expand-lg.bg-dark navbar-dark"></nav>
</body>
</html>
