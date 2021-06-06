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
        <a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Service">Service</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#About Us">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#Contact Us">Contact Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-circle">Register</i></a>
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
<!-- Service -->
<h2 id="Service" class="vic mt-5">Our Services</h2>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
  <div class="card-body">
      <i class="fas fa-heartbeat fa-3x big"></i>
 <h5 class="card-title">Health</h5>
    <p class="card-text">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Nemo perferendis, numquam consectetur nobis inventore cum tempora, quas quibusdam optio officia suscipit delectus, minus quidem quaerat repellat, ipsam eveniet expedita recusandae.</p>
  </div>
</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
  <div class="card-body">
 <i class="fas fa-laugh-beam fa-3x big"></i>
    <h5 class="card-title">Happy</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eos consectetur perferendis architecto blanditiis deserunt quo quae nisi, similique vitae doloremque dolores alias recusandae necessitatibus ad qui soluta esse laboriosam.</p>
  </div>
</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
  <div class="card-body">
  	<i class="fas fa-business-time fa-3x big"></i>
    <h5 class="card-title">Service</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, nostrum odit dignissimos voluptatibus sequi omnis, hic ullam iste id magni! Officiis quisquam, facere delectus maxime non voluptatem excepturi quo dolorem.</p>
  </div>
</div>
		</div>
	</div>
</div>
<!-- About Us -->
<div id="About Us" class="container mt-4">
	<div class="jumbotron">
  <h1 class="display-4 ab-top"><span class="About">About</span> Us</h1>
  <div class="container mt-2">
  	<div class="row">
  		<div class="col-md-6 ani">
  			<img src="image/about.jpg" class="img" alt="">
  			<div class="overlay">
    <div class="overlay-text">Sandra(CEO)</div>
  </div>
  		</div>
  		<div class="col-md-6">
  			<h2 class="right-text">This is Our Company About</h2>
  			<p class="right">Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Totam aliquid cum culpa reiciendis, eum nihil quas distinctio dolores, perferendis ullam minus, in quod ut corporis asperiores provident natus accusantium quo.Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Totam aliquid cum culpa reiciendis, eum nihil quas distinctio dolores, perferendis ullam minus, in quod ut corporis asperiores provident natus accusantium quo.Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Totam aliquid cum culpa reiciendis, eum nihil quas distinctio dolores, perferendis ullam minus, in quod ut corporis asperiores provident natus accusantium quo.Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Totam aliquid cum culpa reiciendis, eum nihil quas distinctio dolores, perferendis ullam minus, in quod ut corporis asperiores provident natus accusantium quo.</p>
  		</div>
  	</div>
  </div>
</div>
</div>
<!-- Contact Us -->
<div id="Contact Us" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 cs-text">Contact Us</h1>
    <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Nostrum nihil, maiores magnam possimus eligendi est assumenda, minima vel odit, earum harum commodi autem officiis odio aut? Optio excepturi consectetur eius!
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sunt quo, nulla repellat molestias sequi iure accusamus iusto eos commodi error corporis soluta ut vero perferendis ullam quas doloribus assumenda.</p>
    <div class="container ">
    	<div class="row">
    		<div class="col-md-6">
    			<h2 class="ask">Where you can find us</h2>
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.754292239368!2d96.16543062587729!3d16.838541193237095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19320ae595641%3A0x6385c46833d5f968!2sKanbae%20Towers%20Condo!5e0!3m2!1sen!2smm!4v1619078114008!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" class="map" loading="lazy"></iframe>
    		</div>
    		<div class="col-md-6">
    			<h2 class="ask">Feel Free to ask anything</h2>
    			<form>
    				<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Gamil" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Text Your Message" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-primary btn-lg btn-block">Send A Message</button>
</form>
    		</div>

    	</div>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-text">
			<h2>9Kingdoms</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti possimus suscipit explicabo doloribus vel commodi soluta? Illo, officiis voluptatem maiores unde assumenda numquam laborum in temporibus aliquam dolor voluptatibus aut?Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Corporis consequuntur.</p>	
			</div>
			<div class="col-md-4">
			<div class="container footer-text">
				<p class="footer-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, corporis, aliquid. Accusamus.</p>
				<p class="footer-left"><i class="fas fa-envelope"></i><span class="span">akm2942002@gmail.com</span>
				</p>
				<p class="footer-left"><i class="fas fa-phone-square-alt"></i><span class="span1">+959.........</span>
				</p>
				<p class="footer-left"><i class="fas fa-map-marker-alt"></i><span class="span">Lorem ipsum dolor sit amet consectetur adipisicing elit..</span>
				</p>
			</div>
			</div>
			<div class="col-md-4">
				<div class="container footer-text">
					<img src="image/footer.jpg" width="200px" class="footer-left" alt="">
					<p class="footer-left">&#169;Copyright 2021 Zeeki.am</p>
				</div>
			</div>
		</div>
	</div>
</div>



	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/4551e852e9.js" crossorigin="anonymous"></script>
</body>
</html>