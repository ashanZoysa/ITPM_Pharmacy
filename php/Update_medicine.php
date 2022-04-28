<?php
include 'Connect_medicine.php';
$id=$_GET['updateid'];
$sql="select * from medi where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$quantity=$row['quantity'];
$manufacture=$row['manufacture'];
$expiry=$row['expiry'];
$brand=$row['brand'];
$type=$row['type'];





if (isset($_POST['submit'])){
   $name=$_POST['name'];
   $quantity=$_POST['quantity'];
   $manufacture=$_POST['manufacture'];
   $expiry=$_POST['expiry'];
   $brand=$_POST['brand'];
   $type=$_POST['type'];

   $sql="update medi set id=$id,name='$name', quantity='$quantity', manufacture='$manufacture', expiry='$expiry', brand='$brand',type='$type'
   where id=$id";
   $result=mysqli_query($con,$sql);

   if($result){
      // echo "Data Updated Succfully";
      header('location:Display_medicine.php');
   }else{
    die(mysqli_error($con));
   }
   
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/updatemedi.css">


    <title>UPDATE MEDICINE DETAILS</title>

     <style>
          body{
            background: url(../Images/pill.jpg) no-repeat;
            background-size: cover;
          }
     </style>


       
  </head>
    
    <body>
        <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">HEALTH CARE</label>
     
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
		 <li><a href="#">Contact Us</a></li>
        <li><a href="#">Online Pharamacy Services</a></li>
        <li><a href="logout.php">Log Out</a></li>        
      </ul>
    </nav>
     <!--sidebar start-->
     <div class="sidebar">
      <center>
        <img src="../Images/22.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
      <a href="Display_medicine.php"><i class="fa-solid fa-pills"></i><span>Manage Medicines</span></a> 
      <a href="#"><i class="fa-solid fa-users"></i><span>Manage Staff</span></a> 
      <a href="#"><i class="fa-solid fa-people-roof"></i><span>Manage Suppliers</span></a>          
      <a href="#"><i class="fa-solid fa-chart-bar"></i><span>Manage Sales</span></a>    
      <a href="displayPrescriptions.php"><i class="fa-solid fa-file-prescription"></i><span>Manage Prescriptions</span></a>   
      
    </div>
    <!--sidebar end-->
    <section></section>

       <ul><h1> UPDATE MEDICINE DETAILS </h1></ul>
    
    <div class="container my-5"style="padding-left:200px;">
        <form method ="post">
              <br/>
           <div class="form-group">
            <label> Medicine Name </label><br/>
            <input type="text" class="form-control" 
            placeholder="Enter Medicine Name" name ="name" value=<?php echo $name;?> >
            </div><br/>

            <div class="form-group">
            <label> Quantity </label><br/>
            <input type="text" class="form-control" 
            placeholder="Enter Quentity" name ="quantity" value=<?php echo $quantity;?>>
            </div><br/>

            <div class="form-group">
            <label>Manufacture Date  </label><br/>
            <input type="date" class="form-control"name="manufacture" value=<?php echo $manufacture;?>>
           </div>
           <br/>

           <div class="form-group">
            <label>Expiry Date  </label><br/>
            <input type="date" class="form-control"name="expiry" value=<?php echo $expiry;?> >
            </div>
           

          <br/>

            <div class="form-group">
            <label> Brand </label><br/>
            <input type="text" class="form-control" 
            placeholder="Brand Name" name ="brand" value=<?php echo $brand;?>>
            </div>
            <br/>

            
            <div class="form-group ">
            <label> Medicine Type </label><br/>  
               <select class="form-select" name="type" value=<?php echo $type;?>>
                  
                  <option selected>Choose Type</option>
                  <option value="Tablet">Tablet</option>
                  <option value="Syrup">Syrup</option>
                  <option value="Cream">Cream</option>
                  <option value="lotion">lotion</option>
                  <label class="input-group-text" for="inputGroupSelect02">Options</label>
               </select>
               
 
</div>
 
            <br/><br/>
            <button type="submit" class="btn btn-primary"name="submit">Update Details</button>
        </form>
        </div>
        
        
   
    </body>




</html>