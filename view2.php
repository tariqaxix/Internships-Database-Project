<?php
session_start();
$conn=mysqli_connect('127.0.0.1','root','');
if($conn)
{
    echo '';
}
else{
   // echo'not connected to server';
}
if(mysqli_select_db($conn,'scholarship'))
{
   // echo 'Database  selected';
}

if(isset($_SESSION['emailid']))
{
    $emailid= $_SESSION['emailid'];
}
else
{
    $emailid = "";
}

if(isset($_POST['save']))
{
    $typetitle=$_POST['typetitle'];
   
    $sql1="UPDATE applied set title='$typetitle' WHERE emailid='$emailid'";
   
    if(!mysqli_query($conn,$sql1))
    {
        echo ' ';
    }
    else
    {
        echo ' ';
    }
}
?> 

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
    margin: 4px 2px;
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
 <form  action="view2.php" method="POST" runat="server">

<table>
<tr>
<th>TITLE</th>
<th>ELIGIBILITY</th>
<th>CATEGORY</th>
</tr>
<?php

$sql = "SELECT * FROM adminupload";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["title"]."</td><td>".$row["eligibility"]."</td><td>" . $row["category"].  "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }

?>
</table>

<tr> 
    <td align="left"><font color="#fff" size="5" face="segeo print">SCHOLARSHIP NAME</font></td>  
         <td>
    <input type="text" placeholder="Enter the internship Name you want to apply" name="typetitle" required style="HEIGHT:30PX;WIDTH:400PX;padding:5px; margin: 50px 5px;"/>
         </td>  
    
<td colspan="2" align="center">
<input type="submit" class="button" value="save" name="save">
<button class=button onclick="goBack()">Go Back</button>
	
</td>
</tr>
<button class=button ><a href="homepage1.php">Logout</a></button>
</form>   
    <script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>

