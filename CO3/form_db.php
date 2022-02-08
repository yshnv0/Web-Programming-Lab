<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
</head>
<body>
<center>
    <h2>REGISTRATION</h2>

    <form name="form" action="#" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="fname"> </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"> </td>
        </tr>
        <tr>
            <th>Mob NO </th>
            <td><input type="tel" name="mob"> </td>
        </tr>
        <tr>
            <th>Username </th>
            <td><input type="text" name="user"> </td>
        </tr>
        <tr>
            <th>Password </th>
            <td><input type="password" name="password"> </td>
        </tr>
        <tr class="center">
            <th colspan="2"><input type="submit" value="submit" name="submit"></th>
        </tr>
    </table>

</form>
</center>

<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile Number</th>
<th>Username</th>
<th>Password</th>
</tr>


<?php

if(isset($_POST['submit'])){
    $name = $_POST['fname'];  
    $email = $_POST['email'];  
    $mobile = $_POST['mob'];  
    $user = $_POST['user'];  
    $password = $_POST['password'];
    $conn=mysqli_connect("localhost","root","","student");

    if($conn)
    {
        echo "Connection success";
        echo "<br>";
    }
    else
    {
        echo "Connection failed";
        echo "<br>";
    }

    if($_POST['fname'] == ""){
        echo "<script>alert('Enter First Name !!')</script>";
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$name)){
        echo "<script>alert('Enter Your  Name !!')</script>";
    }
    else if($_POST['email'] == ""){
        echo "<script>alert('Enter Email !!')</script>";
    }
    else if(!preg_match('/^[0-9]{10}+$/', $_POST['mob'])){
        echo "<script>alert('Enter Valid Mobile Number !!')</script>";
    }
    else if($_POST['user'] == ""){
        echo "<script>alert('Enter User Name !!')</script>";
    }
    else if($_POST['password'] == ""){
        echo "<script>alert('Enter Password !!')</script>";
    }
    else if (strlen($_POST["password"]) < 8) {
            echo "<script>alert('Your Password Must Contain At Least 8 Characters!')</script>";
    }
    else if(!preg_match("#[0-9]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Number!')</script>";
     }
    else if(!preg_match("#[A-Z]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Capital Letter!')</script>";
    }
    else if(!preg_match("#[a-z]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter!')</script>";
    } 

    $query="INSERT INTO student_table(name,email,mobile_num,username,password)VALUES('{$name}','{$email}','{$mobile}','{$user}','{$password}')";
    if(mysqli_query($conn,$query))
    {
        echo "Data insertion success.";
        echo "<br>";
    }
    else
    {
        echo "Data insertion failed.";
        echo "<br>";
    }

    $search="SELECT * FROM student_table";
    $data=mysqli_query($conn,$search);

    while($res=mysqli_fetch_assoc($data))
    {
        ?>
        <tr>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['mobile_num'];?></td>
        <td><?php echo $res['username'];?></td>
        <td><?php echo $res['password'];?></td>
        </tr>
        <?php
    }

}
?>
</table>
</body>
</html>