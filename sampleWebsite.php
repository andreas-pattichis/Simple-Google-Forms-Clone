<?php

// Edw px enothika me tin vasi kai tha mas dosei kapious users

$users = array();

$a = array(
      "username" => "Nick",
      "email" =>  "Some@email.com"
);

$b = array("username" => "John", 
            "email" =>  "Someone@email.com"
);

//Prosthetw sto users array to a kai b array
array_push($users,$a);
array_push($users,$b);

var_dump($users);

// Tipota meta apo afto tha ektelestei
// Kalo gia debugging
//exit();

?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<nav class="nav">
  <a class="nav-link active" href="#top">SimpleSite</a>
  <a class="nav-link" href="#sups">Supporters</a>
  <a class="nav-link" href="#join">Join</a>
</nav>
<div class="jumbotron" id="top">
  <h1 class="display-4">SimpleSite</h1>
  <p class="lead">This is a simple website which displays all of it supporters and allows more supporters to join.</p>
  <hr class="my-4">
  <p>You will find all current supporters listed below.</p>
</div>

<div class="container">
  <h1 id="sups">Supporters</h1>
  <div class="row text-center">
    <!-- emperikleiw ton html kodika se php for loop 
        for ($i=1; $i <= 4; $i++)
    -->

    <?php foreach ($users as $user) { ?> 
	<div class="col-sm">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Antu_im-invisible-user.svg/240px-Antu_im-invisible-user.svg.png">
		<!-- i php vlepei mesa apo ta "" gia variables kai tis anagnwrizei -->
    <!-- an xrisimopoiisw '' den psaxnei gia variables alla pali einai string -->
    <div> <?php echo "User ".$user["username"]; ?></div>
    </div>
    <?php } ?>

  </div>
</div>

<div class="container mt-5">
  <h1 id="join">Become a Supporter</h1>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your name here...">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your email address here...">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Age Range</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>18-25</option>
      <option>26-35</option>
      <option>35-50</option>
      <option>50+</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Motivaiton</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="What motivated you to become a supporter?"></textarea>
  </div>
  <div class="form-group text-right">
     <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </div>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>