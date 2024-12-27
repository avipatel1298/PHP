<?php
include "connection.php";
$user_id = $_GET['id'];

$sql =mysqli_query($conn,"SELECT * FROM `task` WHERE `id`='$user_id'");
$result =mysqli_fetch_array($sql);  

?>
<?php
if(isset($_POST['update'])){
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($_FILES["image"]["name"] == ""){     

   $img = $result['image'];
   
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

    $edit=mysqli_query($conn,"UPDATE `task` SET firstname='$firstname', lastname='$lastname',email='$email',password='$password',cpassword='$cpassword',image='$img',message='$message',number='$number',gender='$gender',hobby='$hobby',country='$country' WHERE id='$user_id'");




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
            <form method="post" action="#"  enctype="multipart/form-data" >
                <lable for=firstname>First Name</lable>
                <input type="text" name="firstname" value="<?php echo $result['firstname'];?>"><br></br>

                <lable for=firstname>Last Name</lable>
                <input type="text" name="lastname"  value="<?php echo $result['lastname'];?>"> <br></br>

                <lable for=email>Email</lable>
                <input type="email" name="email" value="<?php echo $result['email'];?>"><br></br>

                <label for="password">Password</label>
               <input type="password" name="password" id="password" value="<?php echo htmlspecialchars($result['password']); ?>"><br><br>


               <label for="cpassword">Confirm Password</label>
               <input type="cpassword" name="cpassword" id="cpassword" value="<?php echo htmlspecialchars($result['cpassword']); ?>"><br><br>
             
                 <?php
                $imagePath = './image/' . $result['image'] ;
                if (file_exists($imagePath)) {
               echo '<img src="' . $imagePath . '"style="width: 50px; height: 50px;"">';
               } else {
                   echo '<p>Image not found.</p>';
                   }
                  ?>                   

               <lable for=image>Image</lable>
                <input type="file" name="image"   value="<?php echo $result['image'];?>"> <br></br>
 
                <label for="message">Address</label><br>
               <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter your Address"><?php echo htmlspecialchars($result['message']); ?></textarea><br><br>


                <lable for="number">Phone Number</lable>
                <input type="number" name="number" value="<?php echo $result['number'];?>"><br></br>

                <legend>Choose your gender:</legend>
                <label for="male">Male</label>
               <input type="radio" name="gender" id="male" value="male" <?php if ($result['gender'] == "male") echo "checked='checked'"; ?>>
               <label for="female">Female</label>
              <input type="radio" name="gender" id="female" value="female" <?php if ($result['gender'] == "female") echo "checked='checked'"; ?>>
              </fieldset> <br></br>
               
             <?php
             $chk = explode(",",$result['hobby']);
             ?>
              <input type="checkbox" id="hobby" name="hobby[]" value="Reading" <?php if (in_array("Reading",$chk)) echo "checked='checked'"; ?>>
             <label for="Reading">Reading</label><br>
            <input type="checkbox" id="hobby" name="hobby[]" value="Singing" <?php if (in_array("Singing",$chk)) echo "checked='checked'"; ?>>
            <label for="Singing">Singing</label><br>
            <input type="checkbox" id="hobby" name="hobby[]" value="Cricket"> <?php if (in_array("Cricket",$chk)) echo "checked='checked'"; ?>
           <label for="cricket">cricket</label><br></br>

           <label for="country">Choose a country:</label>
          <select name="country" id="country">
         <option value="India" <?php if ($result['country'] == "India") echo "selected"; ?>>India</option>
        <option value="America" <?php if ($result['country'] == "America") echo "selected"; ?>>America</option>
        <option value="Canada"<?php if ($result['country'] == "Canada") echo "selected"; ?>>Canada</option>
        <option value="Russia"  <?php if ($result['country'] == "Russia") echo "selected"; ?>>Russia</option>
        </select><br></br>
        <button type="update" name="update">Update</button>
</form>
</body>
</head>
    </html>









