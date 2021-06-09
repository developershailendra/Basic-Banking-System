<!DOCTYPE html>
<html>
<head>
	<title>XYZ BANK - Transcation History</title>
	<link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2013/07/12/19/32/rupees-154955_1280.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<body>
</head>
<style>

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
        <a class="navbar-brand" href=http://localhost/index.php/">XYZ BANK</a>
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
              <a class="nav-link" href="#">About</a>
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
  <table class="table table-responsive " >
   <tr>
                  <th>To Customer</th>
                  <th>From Customer</th>
                  <th>Transfer Money</th>
                  <th>Date And Time</th>
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

$sql = "SELECT * from transaction_history";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $first = "SELECT Customer_name from bank_table where Customer_id = ".$row["To_customer"];
      $second= "SELECT Customer_name from bank_table where Customer_id = ".$row["From_customer"];
  $resultToCustomer = $conn->query($first); 
  $resultFromCustomer = $conn->query($second);
  $customername1=null;
  $customername2=null;
  foreach ($resultToCustomer as $key => $value) {
    $customername1= $value['Customer_name'];
  }
   foreach ($resultFromCustomer as $key => $value) {
    $customername2= $value['Customer_name'];
  } 
    //  echo "<b> To_customer </b>" . $customername1 . "  <b>From_customer </b>" . $customername1 ."<b> Amount: </b> " . $row["Amount"] ."<b>Time: </b>".$row["Time"]."<br>". "<hr>";
     echo"<tr>";
     echo"<td>".$customername1."</td>";
     echo "<td>".$customername2."</td>";
     echo "<td>".$row["Amount"]."</td>";
     echo "<td>".$row["Time"]."</td>";
     echo"<tr>";
  }
} else {
     echo "error";
}
$conn->close();
?>
</table>
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