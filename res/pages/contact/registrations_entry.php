<?php
require_once('authenticate.php');
include 'logout.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,400,700' rel='stylesheet' type='text/css'>
<style>
body{
font-family: 'Yanone Kaffeesatz';
font-size:20px;
}
table {
    border-collapse: collapse;
    width:100%;
}

table, td {
    border: 1px solid #98bf21;
    padding-left: 10px;
}
th{
    font-size: 1.4em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #e8e0b3;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
    text-align:center;
    min-width:150px;
}
</style>
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
</head>
<body>

<center><h4 style="margin-bottom:0px;">Welcome Admin!</h4><form action="logout.php" method="POST"><input type="submit" value="LOGOUT" name="signout" /></form><br><a href="excel.php" style="color:#00CA11;text-decoration:none;font-size:24px"><i class="fa fa-download"></i> &nbsp;&nbsp;Download</a></center><br>
<?php
echo "<table><tr><th>Sl No.</th><th>Time</th><th>Full Name</th><th>College</th><th>College Address</th><th>Email</th><th>Phone</th><th>Age</th><th>Gender</th><th>City</th><th>District</th><th>State</th><th>Country</th><th>Category</th><th>Past Vounteer?</th><th>Majuli?</th><th>Teacher</th><th>Teacher Phone</th><th>Teacher Email</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 

$servername = "localhost";
$username = "spmacay";
$password = "spmacay@671";
$dbname = "spicmacayDb";

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT unique_id, id, name, collage, coladd, email, phone, age, gender, contact, district, state, country, category, positions, majuli, fac, phfac, emailfac FROM contact"); 
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>  

</body>
</html>