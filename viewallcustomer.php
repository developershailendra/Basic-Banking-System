<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XYZ BANK - View all Customer</title>
	<link rel="stylesheet" type="text/css" href="pic.css"> 
  <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2013/07/12/19/32/rupees-154955_1280.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<style >
#container{
    display: flex;
    justify-items: top;
     width: 100%;
     height: 800px;
}
footer{
  background-color: #212529;
  height: 450px;
  position: relative;
  bottom: 75px;
}
.navbar {
    width: 100%;
    height: 15% margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    padding-top: .5rem;
    padding-bottom: .5rem;
    font: 1em sans-serif;
}
.mm{
margin: 5px;
height: 45px;
width: 80px;
}
@media only screen and (max-width: 528px) {
 
table{
  position: revert;
text-align: center;
font-size: xx-small;
     }
 footer{
   position: relative;
   bottom: 0px;
       }
 button{
       font-size: smaller;
       }
</style>
<body>

<header>
    <!-- navbarstarting -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark " >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">XYZ BANK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transactionhistory.php">Transaction History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <form class="d-flex">
                <!-- Button trigger modal -->
             <button type="button" class="btn btn-outline-success stylebutton mm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   login
             </button>
            <!-- Button trigger modal -->
           <button type="button" class="btn btn-outline-danger stylebutton mm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Signup
           </button>
          </form>
        </div>
      </div>
    </nav>
      <!-- navbar end   -->
 <!-- Button trigger modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login To XYZ BANK</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
          <div class="modal-body">
          <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" Required>Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" Required>Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" required>I accept term and condition</label>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!-- signup Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup in XYZ BANK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
      <label for="exampleInputtext1" class="form-label" Required>Enter Your Full Name</label>
        <input type="text" class="form-control" id="exampleInputtext1">
      <label for="exampleInputtext1" class="form-label" Required>Username</label>
        <input type="text" class="form-control" id="exampleInputtext1">
        <div id="emailHelp" class="form-text">Your unique username must 4 - 10 characters (only lowecase letters, numbers & underscores allowed) with no spaces .</div>
        <label for="exampleInputEmail1" class="form-label" Required>Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" Required>Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label" Required>Confirm-Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" required>I accept term and condition</label>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
      </div>
    </div>
  </div>
</div>
    <!-- navbar end   -->
</header>
<main>
<div id= "container">
   <table class="table table-hover table-responsive" >
   <tr>
                  <th>SNo.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Balance</th>
                  <th>Transfer Money</th>
                </tr>
 <?php
$servername = "localhost";
$username = "id16815079_root";
$password = "c|%CDDFGuk)Ap5ob";
$dbname = "id16815079_bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// $sql = "SELECT  Customer_id, Customer_Name,Customer_Email,Current_Balance from bank_table";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     echo "<b>Customer_id: </b>" . $row["Customer_id"]. "<br>". "  <b>Customer_Name: </b>" . $row["Customer_Name"]."<BR>"."<b> Customer_Email: </b> " . $row["Customer_Email"] ."<br>". "<b> Current_Balance:</b>" . $row["Current_Balance"]."<br>" ."<hr>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
else{
      $sql = "SELECT * FROM `bank_table`";
      $result = mysqli_query($conn,$sql);
      $resultcheck = mysqli_num_rows($result);
     if ($resultcheck >0){
     while($row = mysqli_fetch_assoc($result)){
     // echo  " ".." " . " ".$row['Balance']. "<br>";
       echo"<tr>";
       echo"<td>".$row['Customer_id']."</td>";
       echo "<td>".$row['Customer_Name']."</td>";
       echo "<td>".$row['Customer_Email']."</td>";
       echo "<td >".$row['Current_Balance']."</td>";
       echo "<td><a class='text-white' href='transfermoney.php?Id=".$row['Customer_id']." '><button class='button1 btn btn-outline-primary stylebutton'>View Customer</button></a></td>";
     // echo "<td><a class='text-white' href='transfer.php?".$row['Sno.']." '><button class='button1'>Transfer Credit</button></a></td>";
     // echo "<td >"."<a href='transfer.php?".$row['Sno.']."'>view</a>"."</td>";
      echo"</tr>";
    }
  }
}
?> 
</table>
<div>
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
<script src="bootstrap/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>
