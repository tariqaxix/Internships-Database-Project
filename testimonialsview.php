<!DOCTYPE html>
<html>
<head>
<title>scholarship add page</title>
<style>
    .button {
    background-color:#99ffff;
    border: none;
    color:golden;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 30px 2px;
    cursor: pointer;
    border-radius: 10%
}

.button:hover {
    background-color: #64BCDB;
}
table {
/* border-collapse: collapse; */
width: 100%;
color: #ffffff;
font-family: monospace;
font-size: 23px;
text-align: center;
}
th {
background-color: #AED7E6;
color: #000;
}

table {
        font-family: segeo print;
    }

</style>
</head>
<body style="background-image: url('testimonial.jpg'); background-size: cover; background-position: center;">>
<table>
<tr>
<th>NAME</th>
<th>INTERNSHIP</th>
<th>ADDRESS</th>
<th>YEAR</th>
<th>DURATION</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "scholarship");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =" SELECT * FROM studenttest"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["title"] . "</td><td>". $row["address"] ."</td><td>". $row["year"] . "</td><td>".$row["duration"] . "</td><td>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?> 
</table>

<tr>
<td colspan="2" align="center">
    <button class=button onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
</td>
</tr>
</body>
</html>



