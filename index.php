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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <img src="https://image.shutterstock.com/image-photo/bank-building-260nw-574713295.jpg" alt="Bank" class=" img-fluid"> -->
    <div class="container">
        <h1 class="tracking-in-expand glow">Welcome to Banking World</h1>
        <p class="close">Enter Your Details To Get Enrolled In Bank</p>
        <?php
         if($insert==true){
        echo "<p class='SubmitMsg'>Thanks For Submitting , Happy To See You Again</p>";
         }
        ?>
        <form action="index.php" method="post">
            <!-- <input type="text" name="name" id="name" placeholder="Enter your name"><br> -->
            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">USERNAME</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" id="name">
</div>
            <!-- <input type="email" name="email" id="email" placeholder="Enter your email"><br> -->
            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">EMAIL</span>
  <input type="email" class="form-control" placeholder="EMAIL" aria-label="Username" aria-describedby="basic-addon1" name="email" id="email">
</div>
            <!-- <input type="number" name="balance" id="balance" placeholder="Enter your balance"><br> -->
            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">BALANCE</span>
  <input type="number" class="form-control" placeholder="BALANCE" aria-label="Username" aria-describedby="basic-addon1" name="balance" id="balance">
</div>
            
            <!-- <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your Query"></textarea><br> -->
            <div class="input-group">
  <span class="input-group-text">QUERY</span>
  <textarea class="form-control" aria-label="With textarea" name="desc" id="desc" placeholder="MESSAGE"></textarea>
</div>
<br>
            <!-- <button class="btn">Submit</button> -->
            <button  class="btn btn-primary ">Submit</button>
        </form>
        <div class="footer">
        <p style="float:left" class="tracking-in-contract">DESIGN BY AROOJ LATIEF</p>
    </div>
    </div>
    <script src="index.js"></script>
</body>
</html>



<!--INSERT INTO `bank` (`s.no`, `name`, `email`, `balance`, `other`, `dt`) VALUES ('1', 'Mohammad Aryaan', 'aryaangkp53@gmail.com', '5000', 'Need to know my paylist', current_timestamp());-->


<!--INSERT INTO `bank` (`s.no`, `name`, `email`, `balance`, `other`, `dt`) VALUES ('1', 'xyz', 'aryaan@gmail.com', '7896', 'hello', current_timestamp());-->