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
color: #fff;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #AED7E6;
color: #fff;
padding: 10px;
}
table {
        font-family: segeo print;
        margin: 0 5px;
    }
</style>
</head>
<body style="background-image: url('view.jpeg'); background-size: cover; background-position: center;">>
<table>
<tr>
<th>Title</th>
<th>Eligibility</th>
<th>Category</th>
<th>Phone</th>
<th>Emailid</th>
<th>Link</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "scholarship");
$sql =" CALL `getscholarships`()"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["title"]. "</td><td>" . $row["eligibility"] . "</td><td>". $row["category"] ."</td><td>". $row["phone"] . "</td><td>" . $row["emailid"] . "</td><td>". $row["link"] . "</td><td>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
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
</table>
</body>
</html>



