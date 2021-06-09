<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ BANK - Transfer Money </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2013/07/12/19/32/rupees-154955_1280.png" type="image/x-icon">
</head>
<style>
.img-fluids {
    max-width: 67%;
    height: auto;
}
.mm{
margin: 5px;
}
footer{
  background-color: black;
  position: relative;
  bottom: -50px;
}
tr:hover{
background-color: #96f4e7;
}
</style>
<body>

<header>
    <!-- navbarstarting -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark " >
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/index.php/">XYZ BANK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/index.php/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://localhost/transactionhistory.php/">Transaction History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="https://localhost/viewallcustomer.php/">View All Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-outline-success stylebutton mm" type="submit">Login </button>
            <button class="btn btn-outline-danger stylebutton mm" type="submit"> Signup</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar end   -->
  </header>
  <main>
    <center>


    <?php
      $passno = $_GET['Id'];
      // echo "<form action='https://localhost/moneyhistory.php?Id=".$passno." method='post'>";	
    ?>
<form action="https://localhost/moneyhistory.php?Id=<?php echo $passno ?>" method="post">	
<div id= "container">
    
    <table class="table table-responsive" border="1" align="center">
     <tr>
         <th>Sno.</th>
         <th>Name</th>
         <th>Email</th>
         <th>Balance</th>
         
     </tr>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   $kk = $_GET['Id'];
   

   $sql = "SELECT * FROM `bank_table` WHERE `Customer_id`=".$kk;
          $result = mysqli_query($conn,$sql);
          $resultcheck = mysqli_num_rows($result);
    
   if ($resultcheck > 0){
      

     while($row = mysqli_fetch_assoc($result)){
      // echo  " ".." " . " ".$row['Balance']. "<br>";
     
      echo"<tr>";
      echo"<td>".$kk."</td>";
      echo "<td>".$row['Customer_Name']."</td>";
      echo "<td>".$row['Customer_Email']."</td>";
      echo "<td >".$row['Current_Balance']."</td>";    
      echo"</tr>";
     }
   }   
?>
</table>
<p>Select Customer Name whom Want To Tranfer Money</p>
<select id="person2" name="person2" required>
    <option value="">Select Customer</option>
		<?php
			$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$conn1 = new mysqli($servername, $username, $password, $dbname);
$kk = $_GET['Id'];
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}

$sql1 = "SELECT  Customer_id, Customer_Name,Customer_Email,Current_Balance from bank_table WHERE Customer_id!=".$kk;
$result1 = $conn1->query($sql1);
		      while($row1 = $result1->fetch_assoc()) {
		?>
            <option value= "<?php echo $row1['Customer_id']?>" ><?php echo $row1['Customer_Name']?></option>
	   <?php
	        }
            $conn1->close();
	   ?>
	 </select>
     <br><br>
	<b>Amount to be tranfered:</b>
	  <input class=" btn-outline- " type="Amount" name="amount" placeholder="Amount" id="myInput" required ><BR><br>
      <input class="btn btn-outline-primary stylebutton " type="Submit" name="Submit" value="Submit">


</form>
        </center>
</main>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="https://cdn.pixabay.com/photo/2013/07/12/19/32/rupees-154955_1280.png" alt="" width="24" height="19">
          <small class="d-block mb-3 text-muted">©2021-2021</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>