<?php
include "connection.php";
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp_name,"./image/".$img);
    $message=$_POST['message'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $hobby=implode(",",$_POST['hobby']);
    $country=$_POST['country'];

$result=mysqli_query($conn,"INSERT INTO `task`(`firstname`,`lastname`,`email`,`password`,`cpassword`,`image`,`message`,`number`,`gender`,`hobby`,`country`)
VALUES('$firstname','$lastname','$email','$password','$cpassword','$img','$message','$number','$gender','$hobby','$country')");

if($result){
    header("location:view.php"); 
    echo "data insert suceessfully";
}else{
    echo "data  not insert suceessfully";
}
}
?>
<html>
    <head>
        <body>
            <form method="post" action="#" enctype="multipart/form-data" >
                <lable for=firstname>First Name</lable>
                <input type="text" name="firstname" placeholder="First Name"><br></br>

                <lable for=firstname>Last Name</lable>
                <input type="text" name="lastname" placeholder="Last Name"><br></br>

                <lable for=email>Email</lable>
                <input type="email" name="email" placeholder="Email"><br></br>

                <lable for=password>Password</lable>
                <input type="password" name="password" placeholder="Password"><br></br>

                <lable for=cpassword>Confirm Password</lable>
                <input type="cpassword" name="cpassword" placeholder="Confirm Password"><br></br>

                <lable for=image>Image</lable>
                <input type="file" name="image" placeholder="Image"><br></br>

                <label for="message">Address</label><br>
                <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter your Address "></textarea><br><br>

                <lable for="number">Phone Number</lable>
                <input type="number" name="number" placeholder="Phone Number"><br></br>

                <legend>Choose your gender:</legend>
                <label for="male">Male</label>
               <input type="radio" name="gender" id="male" value="male" checked>
               <label for="female">Female</label>
              <input type="radio" name="gender" id="female" value="female">
              </fieldset> <br></br>

              <input type="checkbox" id="hobby" name="hobby[]" value="Reading">
             <label for="Reading">Reading</label><br>
            <input type="checkbox" id="hobby" name="hobby[]" value="Singing">
            <label for="Singing">Singing</label><br>
            <input type="checkbox" id="hobby" name="hobby[]" value="cricket">
           <label for="cricket">cricket</label><br></br>

           <label for="country">Choose a country:</label>
          <select name="country" id="country">
         <option value="India">India</option>
        <option value="America">America</option>
        <option value="Canada">Canada</option>
        <option value="Russia">Russia</option>
        </select><br></br>
        <input type="submit" name="submit" value="Submit">
</form>
</body>
</head>
    </html>