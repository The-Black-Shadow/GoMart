<!-- connection -->
<?php
  include 'php/connection.php';
  include 'php/users.php';
  session_start();
  if(isset($_SESSION['success_message'])){
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    unset($_SESSION['success_message']); // Clear the session variable
  }
  
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoMart-a online shopping controller</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/toggle.js" defer></script>
  </head>
  <body>

<!-- This is the header part -->

<header>



    <nav  class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"
              >About <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAqs</a>
          </li>
        </ul>
      </div>
        <span style="color:blue"> <?php echo $_SESSION['name'] ?></span><span><b>(<?php echo $_SESSION['acctype'] ?>)</b></span>
    </nav>

    <div id="widthDeactive" style="margin-top: 1rem; height: fit-content">
      <ul
        style="
          list-style: none;
          display: flex;
          justify-content: space-between;
          margin: 0rem;
        "
      > 
        <li>
        <a href="index.php">
            <img
            style="height: 2.5rem; width: 10rem"
            src="Images/GoMartLogo.jpg"
            alt="">
            </a>
        </li>
        <li>
          <form class="form-inline">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </li>
        <li>
          <p style="color: black; padding-right: 1rem; margin: 0rem">
            Customer Service <br />+8801747697661
          </p>
        </li>
      </ul>
    </div>

    <nav
      class="navbar navbar-expand-lg navbar-light bg-dark"
      style="margin-top: 0.6rem"
    >
      <img id="widthActive"  style="height: 2.5rem; width: 10rem" src="Images/GoMartLogo.jpg" alt="">
      <a class="navbar-brand" style="color: aliceblue" href="#"></a>
      <div class="btn-group">
        <button
          type="button"
          class="btn btn-secondary dropdown-toggle"
          style="background-color: rgb(255, 211, 52); color: black"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Catagories
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Cloths</button>
          <button class="dropdown-item" type="button">Shoes</button>
          <button class="dropdown-item" type="button">Ornaments</button>
        </div>
      </div>
      <button
        class="navbar-toggler"
        style="background-color: aliceblue"
        type="button"
        data-toggle="collapse"
        data-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" style="color: aliceblue" href="#"
              >Home
              <span class="sr-only" style="color: aliceblue">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: aliceblue" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: aliceblue" href="#">Pricing</a>
          </li>
        </ul>

      </div>
      <button
      id="LoginButton"
      type="button"
      class="btn btn-secondary"
      style="background-color: rgb(255, 211, 52); color: black; margin-right: .3rem;"
    >
      Login.
    </button>
    <button
      type="button"
      class="btn btn-secondary"
      style="background-color: rgb(255, 211, 52); color: black;  margin-right: .3rem;"
    >
      LogOut.
    </button>

    </nav>
</header>
    <!-- End Of the header part -->

<!-- Login -->

  <form id="Login" style="display: none;" action="index.php" name="form" method="post">
    <h2>Login Please.</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="logIn">Log In</button>
</form>



<!-- Login sesh -->



    <!-- Carousel Start -->
    <div class="slide" style="display: flex; flex-wrap: wrap; justify-content: center; text-align: center;">

  <div style="margin: 2rem 0rem 0rem 2rem; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Images/grocery-1232944_1920.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Images/271929_supermarketaisleshelves_521159.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Images/heidi-fin-2TLREZi7BUg-unsplash.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div style="max-width: 35rem;">
    <img  class="sideImg" src="Images/grocery-1232944_1920.jpg" alt=""> <br>
    <img  class="sideImg" src="Images/charlesdeluvio-FK81rxilUXg-unsplash.jpg" alt="">
  </div>
  

  
  </div>
<!-- carusel End -->
<br><br>

<!-- Toggle Buttons    -->
<div id="Add" style="text-align: center;">
  <button
        id="AddAdmin"
          type="button"
          class="btn btn-secondary"
          style="background-color: rgb(255, 211, 52); color: black;  margin-right: .3rem;"
        >
          Add Admin.
        </button>

        <button
        id="AddSeller"
          type="button"
          class="btn btn-secondary"
          style="background-color: rgb(255, 211, 52); color: black; margin-right: .3rem;"
        >
          Add Seller.
        </button>
        <button
        id="AddCat"
          type="button"
          class="btn btn-secondary"
          style="background-color: rgb(255, 211, 52); color: black; margin-right: .3rem;"
        >
          Add New Catagory.
        </button>
        <button
        id="AddProduct"
          type="button"
          class="btn btn-secondary"
          style="background-color: rgb(255, 211, 52); color: black; margin-right: .3rem;"
        >
          Add New Product.
        </button>
</div>
  
<!-- Toggle Buttons    -->


<!-- Sign Up Form Admin -->
<form style="display: none;" id="Admin" action="index.php" name="form" method="post">
  <h3>Add Admin</h3>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="inputName" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" name="state">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="adminSignIn">Sign in</button>
</form>
<!-- Admin SignUp sesh -->



<!-- Sign Up Seller -->

<form style="display: none;" id="Seller" action="index.php" name="form" method="post">
  <h3>Add Seller</h3>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="inputName" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" name="state">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="sellerSignIn">Sign in</button>
</form>
<!-- Seller SignUp sesh -->
<br>
<!-- Add Catagory -->
<form style="display: none;" id="Cat">
  <h3>Add Catagory</h3>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name Of Catagory.</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    
    <div class="form-group col-md-2">
      <label for="inputZip">Image</label>
      <input type="file" id="InputCatImage">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>

<!-- Add Catagory sesh -->


<!-- Add Products -->
<form style="display: none;" id="ProductAdd">
  <h3>Add Product</h3>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name Of Product</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Price</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Catagory</label><br>
      <Select >
        <option value="Chineese">Chineese</option>
        <option value="cookie">Cookie</option>
      </Select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Image</label>
      <input type="file" id="InputCatImage">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>

<!-- Add Products sesh -->

<hr>
<!-- php code Lekhbi ei tukur vhitore Catagory fetch korar jonno -->

<div style="padding: 0rem;" class="container-fluid pt-5">
  <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
  <div class="row px-xl-5 pb-3">
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-1.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <!-- </div> -->

      <!-- ei ses php block of code -->

<!-- Code for show Will Delet Latter -->

      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-2.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-3.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-4.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-4.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-3.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-2.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-1.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-2.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-1.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-4.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
      <div  class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
              <div id="cat" class="cat-item img-zoom d-flex align-items-center mb-4">
                  <div class="overflow-hidden" style="width: 100px; height: 100px;">
                      <img class="img-fluid" src="img/cat-3.jpg" alt="">
                  </div>
                  <div class="flex-fill pl-3">
                      <h6>Category Name</h6>
                      <small class="text-body">100 Products</small>
                  </div>
              </div>
          </a>
      </div>
  </div>
</div>
<!-- will delet later end -->
<hr>
<!-- Product Starts Here -->

<div id="Products">

<h2>Products</h2>

  <div class="product">
    <img src="Images/charlesdeluvio-FK81rxilUXg-unsplash.jpg" alt="Product Image">
    <h3>Product Name</h3>
    <p class="price">$19.99</p>
    <div class="actions">
        <button>Sell</button>
        <button class="delete">Delete Product</button>
    </div>
</div>

<div class="product">
    <img src="Images/freestocks-_3Q3tsJ01nc-unsplash.jpg" alt="Product Image">
    <h3>Product Name</h3>
    <p class="price">$29.99</p>
    <div class="actions">
        <button>Sell</button>
        <button class="delete">Delete Product</button>
    </div>
</div>




</div>


<!-- Product Ends Here -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
          <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
              <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
              <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
              <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>8602 Patuakhali, Barishal, BD</p>
              <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>rms_cartel@gmail.com</p>
              <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+8801747697661</p>
          </div>
          <div class="col-lg-8 col-md-12">
              <div class="row">
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">Quick look</h5>
                      <div class="d-flex flex-column justify-content-start">
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Products</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                          <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                      <div class="d-flex flex-column justify-content-start">
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>My Products</a>
                          <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>My Shop Detail</a>
                          <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">New Seller?</h5>
                      <p>If you are a new seller then signUp Now.</p>
                      <form action="">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Your Email Address">
                              <div class="input-group-append">
                                  <button class="btn btn-primary">Sign Up</button>
                              </div>
                          </div>
                      </form>
                      <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                      <div class="d-flex">
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
          <div class="col-md-6 px-xl-0">
              <p class="mb-md-0 text-center text-md-left text-secondary">
                  &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                  by
                  <a class="text-primary" href="#">(RMS)^2CARTEL</a>
              </p>
          </div>
          <div class="col-md-6 px-xl-0 text-center text-md-right">
              <img class="img-fluid" src="img/payments.png" alt="">
          </div>
      </div>
  </div>
  <!-- Footer End -->
  </body>
</html>
