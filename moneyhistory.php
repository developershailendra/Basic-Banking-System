<center><a href="https://localhost/viewallcustomer.php/">back to view all customer</a></center>
<?php
$name = $_GET['Id'];
$person1 = $_POST['person2'];
$Amount = $_POST['amount'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `bank_table` WHERE `Customer_id`=".$name;
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
while($row =  mysqli_fetch_assoc($result)){
  $Current_Balance = $row['Current_Balance'];
        if ($Amount>$Current_Balance || $Amount<=0){
             echo "<b>Insufficient Balance.<b> " . $conn->error;
             die();
            }
    }





$sql = "INSERT INTO transaction_history (To_customer, From_customer, Amount) VALUES (".$name."," .$person1.",".$Amount.")";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
$conn->close();

?>



<?php
   if(isset($_POST['Submit']))
   {
      $person1=(int)$_GET['Id'];
      $person2=(int)$_POST['person2'];
      $amount=(int)$_POST['amount'];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bank";
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
    // $balence_check_query = "SELECT *  FROM bank_table WHERE Customer_id = ".$person1;
    // $result_2 = $con->query($balence_check_query);
    // while($row = mysqli_fetch_assoc($result_2)){
    //   $Current_balance = $row['Current_Balence'];

    // }
    // if($amount < $Current_balance || $amount <=0){
    //   die("Connection failed: due to amount " . $conn->connect_error);
    // }
   

    

            $sql = "UPDATE bank_table SET Current_Balance = Current_Balance +".$amount." WHERE Customer_id = ".$person2;
    $sql1 = "UPDATE bank_table SET Current_Balance = Current_Balance -".$amount." WHERE Customer_id = ".$person1;
    if (($con->query($sql) === TRUE)&&($con->query($sql1) === TRUE)) {
      echo  "";

    } else {
      echo "Error updating record: " . $con->error;
    }

    $con->close();
   
  }
?>


