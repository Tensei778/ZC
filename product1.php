<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zee Cosmetic</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="home" class="banner">
	<div class="center">
		<h2>9Kingdoms Cosmetic</h2>
		<p>Welcome! U can search anything what u want.</p>
		<button type="button" class="btn btn-success btn-lg">Get Started</button>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar">
  <a class="navbar-brand" href="#"><span class="logo">L</span>ogo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Sticky-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="Sticky-nav">
    <ul class="navbar-nav ml-auto mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Service</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="home.php">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="home.php">Contact Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link active" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-circle">Register</i></a>
      </li>
      <li class="nav-item">
          <a href="cart.php" class="nav-link luffy"><i class="fas fa-shopping-cart fa-2x"></i></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<!-- Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Register Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container">
    <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-login-list" data-toggle="list" href="#list-login" role="tab" aria-controls="login">Login</a>
      <a class="list-group-item list-group-item-action" id="list-signup-list" data-toggle="list" href="#list-signup" role="tab" aria-controls="signup">Sign Up</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade  show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list">
      	<div class="container">
      		<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary btn-block bot">Login</button>
  <p>If u don't have an account<span class="sign">Go Sign Up!</span></p>
</form>
      	</div>
      </div>
      <div class="tab-pane fade" id="list-signup" role="tabpanel" aria-labelledby="list-signup-list">
      	<div class="container">
      		<form>
      			<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary btn-block bot">Sign Up</button>
</form>
      	</div>
      </div>
    </div>
  </div>
</div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- Product -->
<h2 class="vic mt-4">Our Popular Cosmetic</h2>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="inner">
      <img src="image/s2.jpg" class="p1" width="500px" alt="">
    </div>
    </div>
    <div class="col-md-6">
      <h2>Product 9 ($13) </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eveniet, explicabo facilis rerum tempore quo consequuntur eos ad error nostrum aliquid sit ratione libero porro quae commodi aut cum iure.
      Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Enim, assumenda perspiciatis? Commodi, necessitatibus vitae corrupti sed labore suscipit praesentium neque, alias cumque. Praesentium nisi quibusdam quidem, delectus, error molestiae cum.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam accusamus quae vitae, suscipit, necessitatibus.
      </p>
      <hr>
      <button type="button" class="btn btn-outline-success">Add to Cart</button>
      
    </div>
  </div>
</div>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
            <h2>Product 10 ($17) </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eveniet, explicabo facilis rerum tempore quo consequuntur eos ad error nostrum aliquid sit ratione libero porro quae commodi aut cum iure.
      Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Enim, assumenda perspiciatis? Commodi, necessitatibus vitae corrupti sed labore suscipit praesentium neque, alias cumque. Praesentium nisi quibusdam quidem, delectus, error molestiae cum.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam accusamus quae vitae, suscipit, necessitatibus.
      </p>
      <hr>
      <button type="button" class="btn btn-outline-success">Add to Cart</button>
    </div>
    <div class="col-md-6">
      <div class="inner">
      <img src="image/s3.jpg" class="p1" width="500px" alt="">
    </div>
    </div>
  </div>
</div>
<!-- Another -->
<h2 class="vic mt-5">Waiting New Product</h2>
<div class="d-flex justify-content-center">
<div class="spinner-border text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
</div>
<div class="container mt-3">
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="product.php">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#" disabled>3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
  <!-- script -->
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/4551e852e9.js" crossorigin="anonymous"></script>
</body>
</html>