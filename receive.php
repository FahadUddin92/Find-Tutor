<?php 
 $full_name = $_POST["fullname"]; 
 $email = $_POST["email"]; 
 $password = $_POST["password"]; 
 $full_address = $_POST["address"]; 
 $city = $_POST["city"]; 
 $age = $_POST["age"]; 
 $contact_number = $_POST["number"]; 
 $gender = $_POST["gender"]; 
 $school = $_POST["school"]; 
  $college = $_POST["college"]; 
   $university = $_POST["university"]; 

?>

<?php
$servername = "#";
$username = "#";
$db_password = "#";
$dbname = "#";

// Create connection
$conn = mysqli_connect($servername, $username, $db_password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
if(isset($_FILES['image'])){ $errors= array(); 
$file_name = $_FILES['image']['name']; 
$file_size =$_FILES['image']['size']; 
$file_tmp =$_FILES['image']['tmp_name']; 
$file_type=$_FILES['image']['type']; 
$extension = pathinfo($file_name, PATHINFO_EXTENSION); 
$new= rand(0000,9999); 
$file_name=$new.'.'.$extension; 
move_uploaded_file($file_tmp,"images/".$file_name); 
} 
*/
	 //  if(isset($_FILES['image'])){ $errors= array(); $file_name = $_FILES['image']['name']; $file_size =$_FILES['image']['size']; $file_tmp =$_FILES['image']['tmp_name']; $file_type=$_FILES['image']['type']; $extension = pathinfo($file_name, PATHINFO_EXTENSION); $new= rand(0000,9999); $file_name=$new.'.'.$extension; move_uploaded_file($file_tmp,"images/".$file_name); echo "Success"; } 

$sql = "INSERT INTO users (full_name, email, password,area,city,age,contact_number,gender,school,college,university)
VALUES (?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn, $sql);

// Bind parameters
$stmt->bind_param("sssssssssss", $full_name, $email, $password, $full_address, $city, $age, $contact_number, $gender, $school, $college, $university);


if ($stmt->execute()) {
    echo "Thanks for signing up. You will start receiving phone calls and emails from students, parents and guardians.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>