<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zee Cosmetic</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/4551e852e9.js" crossorigin="anonymous"></script>
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
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-circle">Register</i></a>
      </li>
      <li class="nav-item">
          <a href="" class="nav-link active"><i class="fas fa-shopping-cart fa-2x"></i></a>
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
<!-- cart -->
<h2 class="vic mt-4">Your Order List</h2>
<div id="clockDisplay" class="container date">
  <p onload="renderTime();"></p>
</div>

<div class="container mt-5">
<div class="table-responsive-md" border="2">
  <table id="myTable" class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th><span id="amount" class="amount">Amount</span></th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
           <div class="product-img">
              <div class="img-product">
                 <img src="image/p1.jpg" alt="">
              </div>
            </div>
        </td>
        <td>
          <p class="product-text">Product 1</p>
        </td>
        <td>
          <div class="button-container">
            <button class="cart-qty-plus" type="button" value="+">+</button>
            <input type="text" name="qty" min="0" class="qty form-control" value="0">
            <button class="cart-qty-minus" type="button" value="-">-</button>
          </div>
        </td>
        <td>
        <input type="text" value="$13" class="price form-control" disabled>
      </td>
      <td>
        <span id="amount" class="amount">0</span>
      </td>
      <td>
        <button type="button" class="btn btn-danger">Cancel</button>
      </td>
      </tr>
      <tr>
        <td>
           <div class="product-img">
              <div class="img-product">
                 <img src="image/p1.jpg" alt="">
              </div>
            </div>
        </td>
        <td>
          <p class="product-text">Product 1</p>
        </td>
        <td>
          <div class="button-container">
            <button class="cart-qty-plus" type="button" value="+">+</button>
            <input type="text" name="qty" min="0" class="qty form-control" value="0">
            <button class="cart-qty-minus" type="button" value="-">-</button>
          </div>
        </td>
        <td>
        <input type="text" value="$13" class="price form-control" disabled>
      </td>
      <td>
       <span id="amount" class="amount">0</span>
      </td>
      <td>
        <button type="button" class="btn btn-danger">Cancel</button>
      </td>
      </tr>
      <tr>
        <td>
           <div class="product-img">
              <div class="img-product">
                 <img src="image/p1.jpg" alt="">
              </div>
            </div>
        </td>
        <td>
          <p class="product-text">Product 1</p>
        </td>
        <td>
          <div class="button-container">
            <button class="cart-qty-plus" type="button" value="+">+</button>
            <input type="text" name="qty" min="0" class="qty form-control" value="0">
            <button class="cart-qty-minus" type="button" value="-">-</button>
          </div>
        </td>
        <td>
        <input type="text" value="$13" class="price form-control" disabled>
      </td>
      <td>
        <span id="amount" class="amount">0</span>
      </td>
      <td>
        <button type="button" class="btn btn-danger">Cancel</button>
      </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5"></td>
          <td align="right"><strong>TOTAL= $<span id="total" class="total">0</span></strong></td>
      </tr>
      <tr>
          <td colspan="4"></td>
          <td align="right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleOrder">Order</button></td>
          <td align="right"><a href="product.html"><button type="button" class="btn btn-danger">Cancel</button></a></td>
        </tr>
    </tfoot>
  </table>
</div>
</div>
<!-- Order Modal -->
<div class="modal fade" id="exampleOrder" tabindex="-1" aria-labelledby="exampleOrderLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleOrderLabel">Fill the form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Email</label>
      <input type="email" class="form-control" id="validationCustom01" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Name</label>
      <input type="text" class="form-control" id="validationCustom02" required>
    </div>
  </div>
  <div class="form-row">
      <label for="validationCustom03">Address</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide Address.
    </div>
    <div class="form-row">
      <label for="validationCustom04">Phone Number</label>
      <input type="text" class="form-control" id="validationCustom04" required>
      <div class="invalid-feedback">
        Please provide a Phone Number.
    </div>
    <div class="form-row">
      <label for="validationCustom05">Township</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Your Township" required>
    <label for="validationCustom06">Cash</label>
      <input type="text" class="form-control" id="validationCustom06" placeholder="Cash On Delivery" disabled>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary btn-block" type="submit">Order</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="cart.js"></script>
<script src="https://kit.fontawesome.com/4551e852e9.js" crossorigin="anonymous"></script>
</body>
</html>