<?php
include "connection.php";
$user_id = $_GET['id'];

$sql =mysqli_query($conn,"SELECT * FROM `task` WHERE `id`='$user_id'");
$result =mysqli_fetch_array($sql);  
// echo "<pre>";
// print_r($result);
// die;
?>
<?php
if(isset($_POST['update'])){
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($_FILES["image"]["name"] == ""){
       $img =$row['image'];
    }else{
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp_name,"./image/".$img);
    }
    $message=$_POST['message'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $hobby=implode(",",$_POST['hobby']);
    $country=$_POST['country'];

    $edit=mysqli_query($conn,"UPDATE `task` SET firstname='$firstname', lastname='$lastname',email='$email',password='$password',cpassword='$cpasssword',image='$img',message='$message',number='$number',gender='$gender',hobby='$hobby',country='$country' WHERE id='$user_id'");

    if($edit){
        header("location:view.php"); 
        echo "edit sucessfully";

    }else{
        echo "edit not sucessfully";
    }
}
?>
<html>
    <head>
        <body>
            <form method="post" action="#" enctype="multipart/form-data" >
                <lable for=firstname>First Name</lable>
                <input type="text" name="firstname" value="<?php echo $result['firstname'];?>"><br></br>

                <lable for=firstname>Last Name</lable>
                <input type="text" name="lastname"  value="<?php echo $row['lastname'];?>"> <br></br>

                <lable for=email>Email</lable>
                <input type="email" name="email" value="<?php echo $row['email'];?>"><br></br>

                <lable for=password>Password</lable>
                <input type="password" name="password"  value="<?php echo $row['password'];?>"> <br></br>

                <lable for=cpassword>Confirm Password</lable>
                <input type="cpassword" name="cpassword"  value="<?php echo $row['cpassword'];?>"> <br></br>

                <lable for=image>Image</lable>
                <input type="file" name="image"  value="<?php echo $row['image'];?>"> <br></br>

                <label for="message">Address</label><br>
                <textarea id="message" name="message" value="<?php echo $row['message'];?>" rows="4" cols="50" placeholder="Enter your Address "></textarea><br><br>

                <lable for="number">Phone Number</lable>
                <input type="number" name="number" value="<?php echo $row['number'];?>"><br></br>

                <legend>Choose your gender:</legend>
                <label for="male">Male</label>
               <input type="radio" name="gender" id="male" value="male" <?php if ($row['gender'] == "male") echo "checked='checked'"; ?>>
               <label for="female">Female</label>
              <input type="radio" name="gender" id="female" value="female" <?php if ($row['gender'] == "female") echo "checked='checked'"; ?>>
              </fieldset> <br></br>
               
             <?php
             $chk = explode(",",$row['hobby']);
             ?>
              <input type="checkbox" id="hobby" name="hobby[]" value="Reading" <?php if (in_array("Reading",$chk)) echo "checked='checked'"; ?>>
             <label for="Reading">Reading</label><br>
            <input type="checkbox" id="hobby" name="hobby[]" value="Singing" <?php if (in_array("Singing",$chk)) echo "checked='checked'"; ?>>
            <label for="Singing">Singing</label><br>
            <input type="checkbox" id="hobby" name="hobby[]" value="Cricket"> <?php if (in_array('Cricket', $chk)) echo "checked='checked'"; ?>
           <label for="cricket">cricket</label><br></br>

           <label for="country">Choose a country:</label>
          <select name="country" id="country">
         <option value="India" <?php if ($row['country'] == "India") echo "selected"; ?>>India</option>
        <option value="America" <?php if ($row['country'] == "America") echo "selected"; ?>>America</option>
        <option value="Canada"<?php if ($row['country'] == "Canada") echo "selected"; ?>>Canada</option>
        <option value="Russia"  <?php if ($row['country'] == "Russia") echo "selected"; ?>>Russia</option>
        </select><br></br>
        <input type="update" name="update" value="update">
</form>
</body>
</head>
    </html>



















    