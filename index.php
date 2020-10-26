<?php
$insert = false;
if(isset($_POST['name'])){
   
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection falied due to ".mysqli_connect_error());
}
//echo "Succesfull connected to db";

$name = $_POST['name'];
$email = $_POST['email'];
$balance = $_POST['balance'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `bank`.`bank` ( `name`, `email`, `balance`, `other`, `dt`) VALUES ( '$name', '$email', '$balance', '$desc', current_timestamp());";

if($con->query($sql)==true){
    //echo "Successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";

}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <img src="https://image.shutterstock.com/image-photo/bank-building-260nw-574713295.jpg" alt="Bank" class="bg">
    <div class="container">
        <h1>Welcome to Banking World</h1>
        <p>Enter Your Details To Get Enrolled In Bank</p>
        <?php
         if($insert==true){
        echo "<p class='SubmitMsg'>Thanks For Submitting , Happy To See You Again</p>";
         }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name"><br>
            <input type="email" name="email" id="email" placeholder="Enter your email"><br>
            <input type="number" name="balance" id="balance" placeholder="Enter your balance"><br>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your Query"></textarea><br>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>



<!--INSERT INTO `bank` (`s.no`, `name`, `email`, `balance`, `other`, `dt`) VALUES ('1', 'Mohammad Aryaan', 'aryaangkp53@gmail.com', '5000', 'Need to know my paylist', current_timestamp());-->


<!--INSERT INTO `bank` (`s.no`, `name`, `email`, `balance`, `other`, `dt`) VALUES ('1', 'xyz', 'aryaan@gmail.com', '7896', 'hello', current_timestamp());-->