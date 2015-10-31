
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <title>Tuition Teacher</title>

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.navbar-nav{
			float:right;
		}
		#slider-range, #slider-range2 {
			width:168px;
  margin-top:10px;
}
#slider-range2.ui-slider-horizontal {
    border: 0 none;
}
#slider-range2.ui-slider-horizontal .ui-slider-range, #slider-range2.ui-slider-horizontal .ui-slider-handle {
    background: url("http://unbug.ru/examples/jquery/slider/slide.png") repeat scroll 0 0 transparent;
}
#slider-range2.ui-slider-horizontal .ui-slider-range {
    background-position: 0 -42px;
    background-repeat: repeat-x;
    height: 21px;
}
#slider-range2.ui-slider-horizontal .ui-slider-handle {
    background-position: 0 0;
    background-repeat: no-repeat;
    border: 0 none;
    height: 21px;
    top: 0;
    width: 21px;
}
#slider-range2.ui-slider-horizontal .ui-slider-handle:focus {
    outline: 0 none;
}
#slider-range2.ui-slider-horizontal .ui-slider-handle + .ui-slider-handle {
    background-position: -21px 0;
}

	</style>
	

<script>
		 $(function() {
    var availableTags = [
      "Lahore",
      "Karachi",
      "Islamabad",
      "Rawalpindi",
      "Faisalabad",
      "Multan",
      "Gujranwala",
      "Quetta",
      "Peshawar",
      "Hyderabad",
      "Sialkot"
    ];
    $( "#city" ).autocomplete({
      source: availableTags
    });
  });
  		 $(function() {
    var availableTags = [
      "S.T Patrick's High School",
      "Karachi Grammer School",
      "Yasim Memorial Montessori",
    ];
    $( "#school" ).autocomplete({
      source: availableTags
    });
  });
  		 $(function() {
    var availableTags = [
      "",
      "D.J Government Science College",
      "Government Delhi College",
    ];
    $( "#college" ).autocomplete({
      source: availableTags
    });
  });
  		 $(function() {
    var availableTags = [
      "NED University of Engineering and Teechnology",
      "Sir Syed University of Engineering and Teechnology",
      "FAST University"
    ];
    $( "#university" ).autocomplete({
      source: availableTags
    });
  });
	</script>

  </head>

  <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
	  
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		 
		<a class="navbar-brand" href="index.html">Find Tutor</a>
        </div>
		
        <div id="navbar" class="collapse navbar-collapse text-right">
          <ul class="nav navbar-nav ">
		  <!--
            <li ><a href="login.html">Teachers Log In </a></li>
			-->
			<li><a href="signup.html">Teachers Sign Up</a></li>
            <li><a href="help.html">Help</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
		<div class="row">
		<div class="col-md-2 col-xs-12">
		<h2>Filter</h2>
		<form action="search.php" method="get" >
			City:<br>
			  <input type="text" name="city" id="city"  value="<?php echo $_GET['city'] ?>">
			<hr>
			<!--
			Area:<br>
			<input id="area" placeholder="Select Area">
			<hr>
			-->
			Gender:<br>
			<input type="radio" name="gender" value="male">Male<br>
			<input type="radio" name="gender" value="female">Female<br>
			<hr>
			<!--
			<p>
				Age range:<br>
				<input 	type="text" id="amount"/>
			</p>
			
			<div id="slider-range"></div>
			<hr>
			-->
			School:<br>
			<input  type="text" name="school" id="school" >
			<hr>
			College:<br>
			<input  type="text" name="college" id="college">
			<hr>
			University:<br>
			<input  type="text" name="university" id="university">
			<hr>
			<button type="submit" class="btn btn-success btn-lg">Search</button>
			</form>
		</div>
<div class="col-md-9 col-md-offset-1  col-xs-12">
		<div class="row">
			<div class="col-md-12">
			<h2>Search Results</h2>
			</div>
		</div>
		<?php
$servername = "#";
$username = "#";
$password = "#";
$dbname = "#";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$city = $_GET["city"];
$gender = $_GET["gender"];
$school = $_GET["school"];
$college = $_GET["college"];
$university = $_GET["university"];


// $sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users WHERE city='$city' and gender='$gender' and school='$school' and college='$college' and university='$university'";
if(!empty ($city) and empty($gender) and empty ($school) and empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where city='$city' ";
//echo "223";// works and shows perfect results.
}

elseif(!empty ($gender) and empty($city)  and empty ($school) and empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where gender='$gender' ";
//echo "228";//works and shows perfect results.
}


elseif(!empty ($school) and empty($city)  and empty($gender) and empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where school='$school' ";
//echo "229";//works  and shows perfect results.
}

elseif(!empty ($college) and empty($city)  and empty ($school)  and empty ($gender) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where college='$college' ";
//echo "233";//works  and shows perfect results.
}
elseif(!empty ($university) and empty ($city)  and empty ($school)  and empty ($gender)and empty ($college) and empty ($college) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where university='$university' ";
//echo "227";//works  and shows perfect results.
}
elseif(!empty ($city) and !empty($gender) and empty ($school) and empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where city='$city' and gender='$gender'";
//echo "247"; //works  and shows perfect results.
}
elseif(!empty ($city) and empty($gender) and !empty ($school) and empty ($college) and empty ($university) ){

$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where city='$city' and school='$school'";
//echo "252";//works  and shows perfect results.
}
elseif(!empty ($city) and empty($gender) and empty ($school) and !empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where city='$city' and college='$college'";
//echo "245"; //works  and shows perfect results.
}
elseif(!empty ($city) and empty($gender) and empty ($school) and empty ($college) and !empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where city='$city' and university='$university'";
//echo "248";//works 
}
elseif(empty ($city) and !empty($gender) and !empty ($school) and empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where gender='$gender' and school='$school'";
//echo "251";//works
}
elseif(empty ($city) and !empty($gender) and empty ($school) and !empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where gender='$gender' and college='$college'";
//echo "254"; //works
}
elseif(empty ($city) and !empty($gender) and empty ($school) and empty ($college) and !empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where gender='$gender' and university='$university'";
//echo "257"; //works
}
elseif(empty ($city) and empty($gender) and !empty ($school) and !empty ($college) and empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where school='$school' and college='$college'";
//echo "260"; //works
}
elseif(empty ($city) and empty($gender) and !empty ($school) and empty ($college) and !empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where school='$school' and university='$university'";
//echo "263"; //works
}
elseif(empty ($city) and empty($gender) and empty ($school) and !empty ($college) and !empty ($university) ){
$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where college='$college' and university='$university'";
//echo "279"; //works 
}

/*
if($city and $gender)
	$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users where";
*/






else{
	$sql = "SELECT id,full_name, email, password,area,city,age,contact_number,gender,school,college,university FROM users";
	
	echo "295";
}


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name:" . $row["full_name"]."<br> Email:". $row["email"]. "<br>City: " . $row["city"]. "<br>Age: " . $row["age"]. "<br>Contact Number:". $row["contact_number"]. "<br> Gender: " . $row["gender"]. "<br>School:" . $row["school"].  "<br> College:". $row["college"]."<br>University:" . $row["university"];
		echo "<br><hr>";
	}
	
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
		</div>
	</div> <!-- Container ends -->
	

    <footer class="footer">
      <div class="container">
		<div class="row">
        <p class="text-muted text-left col-md-6  col-xs-12">Copyright 2015. All Rights Reserved.</p>
		<!--
		<p class="text-muted text-right col-md-6">Facebook - Twitter - LinkedIn.</p>
		-->		</div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="dropdown.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
       <script>
            $(document).ready(function() {
				/*
                $(function() {
                $( "#slider-range, #slider-range2" ).slider({
                        range: true,
                        min: 15,
                        max: 100,
                        values: [15, 100 ],
                        slide: function( event, ui ) {
                            $( "#amount" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                        }
                    });
                    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
                    " -" + $( "#slider-range" ).slider( "values", 1 ) );
                });
            });
			*/
        </script>
		<script>
/*	
		$('#city').on('blur', function() {
			 var cityname = $('#city').val();
			 var gender=$('input:radio[gender]:checked').val();
			window.location.replace("search.php?city="+cityname);
		  });
		  	
		  $("input[name='gender']").click(function(){
			var education = $("input[name='education']").val();
			var cityname = $('#city').val();
			var gender = $(this).val();
			if($("input[name='education']").is(':checked'))
		  window.location.replace("search.php?gender="+gender+"&city="+cityname);
			else
			window.location.replace("search.php?education="+education+"&city="+cityname+"&gender="+gender);
		});
		
		$("input[name='education']").change(function(){
			var education = $(this).val();
			var cityname = $('#city').val();
			var gender = $("input[name='gender']").val();
			window.location.replace("search.php?education="+education+"&city="+cityname+"&gender="+gender);
		});
		
		
*/	 
		</script>
  </body>
</html>
