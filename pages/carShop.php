<?php
include "../PHP/database.php";
?>

<?php

$result = mysqli_query($conn, "SELECT * FROM cars");

?>

<!doctype html>
<html>
  <head>
    <title>Achish Dealership</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
     integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/carShop.css" />
    <link rel="stylesheet" href="../css/header.css">

  </head>

  <body>
    <!--header section-->
    <header>
        <h2>Mofty <span style="color: red;">Dealership</span></h2>
        <div>
        <a href="#">Home</a>
        <a href="#">Cars</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="#">More</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
        </div>

      </header>
      

    <!--navigational section-->
    <div class="navigation" id="navigation" hidden="">
      <div class="navigation-header">
        <button class="close" id="closebtn" title="click to close">
          <i class="fa fa-times"></i>
        </button>
      </div>

      <div class="links">
        <a href="#">My Account<i class="fa fa-chevron-right"></i></a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
    </div>

    <!--Order section-->
    <main>
      <div class="mini-sidebar">
        <div class="head">
          <h2>Filter Cars</h2>
          <a href="#">Reset</a>
        </div>

        <!--Select to search you car-->
        <div class="inputside">
          <label for="" style="font-weight: bold;">Search</label>
          <div>
            <input type="text" placeholder="Search make, model">
            <i class="fa fa-search"></i>
          </div>

          <label for="" style="font-weight: bold;">Makes</label>
          <div>
            <select name="" id="">
              <option value="">All makes</option>
            </select>
          </div>

          <label for="" style="font-weight: bold;">Model</label>
          <div>
            <select name="" id="">
              <option value="">All models</option>
            </select>
          </div>     
        </div>


        <div class="bodyType">
          <p style="font-weight: bold;">Body Type</p>
          <div> 
            <select name="" id="">
              <option value="">All Body Type</option>
            </select>
          </div>

        </div>

        <div class="fuelType">
          <p style="font-weight: bold;">Fuel Type</p>
          <div> 
            <select name="" id="">
              <option value="">All Body Type</option>
            </select>
          </div>

        </div>

        <!--price range-->
        <div class="price">
          <p style="font-weight: bold;">Price Range</p>
          <p>GH¢0 - GH¢0+</p>
          <input type="range">
        </div>

        <button class="showbutton" type="submit"><i class="fa-solid fa-filter"></i>   Apply Filter</button>

      </div>
      <div class="parentbox">
        <div class="pheader">
          <div class="left">
            <p>Sort by:</p>
            <Select>
              <option value="">Newest First</option>
            </Select>
          </div>  
        </div>

        <div class="carshow">
           <?php
          if(mysqli_num_rows($result) > 0){ ?>
             
             <?php while($car = mysqli_fetch_assoc($result)){ ?>

            <div class="car-card">
              <img src="" alt="">
                <h2>
                  <?php echo $car['brand']; ?>
                  <?php echo $car['model']; ?>
                </h2>

                <p>
                  Year: <?php echo $car['year']; ?>
                </p>

                <p>
                  GHC<?php echo $car['price']; ?>
                </p>
            </div>

            <?php } ?>

            <?php } else { ?>

              <div>
                <i class="fa fa-car"></i>
                <h1>No Cars Available</h1>
                <p>No cars have been added yet.</p>
                <p>Check back later for updates.</p>
              </div>

            <?php } ?>  
        </div>
      </div>
    </main>

  </body>
</html>
