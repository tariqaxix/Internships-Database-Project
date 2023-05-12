<?php
session_start();
$conn=mysqli_connect('127.0.0.1','root','');
if($conn)
{
    echo ' ';
}
else{
    echo' ';
}
if(mysqli_select_db($conn,'scholarship'))
{
    echo ' ';
}
?>
<?php
if(isset($_POST['save']))
{                               
 $_SESSION['emailid'] = $_POST['emailid'];
   $name=$_POST['name'];
   $date=$_POST['date'];
   $emailid=$_POST['emailid'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];
   $current_gpa=$_POST['current_gpa'];
   $c_gpa=$_POST['c_gpa'];
   $college=$_POST['college'];
   $year=$_POST['year'];
   $stream=$_POST['stream'];
   $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
 
$sql1="INSERT INTO applied(name,emailid)VALUES('$name','$emailid')";
if(!mysqli_query($conn,$sql1))
{
    echo ' ';
}
else
{
    echo ' ';
}

$sql= "INSERT INTO application( name, date, emailid, phone, gender, address, current_gpa, c_gpa, college, year, stream) 
VALUES ( '$name', '$date', '$emailid', '$phone', '$gender', '$address', '$current_gpa', '$c_gpa', '$college', '$year', '$stream')";
 
if(!mysqli_query($conn,$sql))
{
    echo ' ';
}
else
{
    ?><script>alert('Application submitted successfully!');</script><?php
}
}
?>
<?php	
if(isset($_POST['update']))
{
   $name=$_POST['name'];
   $date=$_POST['date'];
   $emailid=$_POST['emailid'];
   $phone=$_POST['phone'];
   $gender=$_POST['gender'];
   $address=$_POST['address'];
   $current_gpa=$_POST['current_gpa'];
   $c_gpa=$_POST['c_gpa'];
   $college=$_POST['college'];
   $year=$_POST['year'];
   $stream=$_POST['stream'];
   
   
$sql = "UPDATE `application` SET `name` = '".$name."', `date` = '".$date."', `emailid` = '".$emailid."', `phone` = '".$phone."', `gender` = '".$gender."', `address` = '".$address."', `current_gpa` = '".$current_gpa."', `c_gpa` = '".$c_gpa."',  `college` = '".$college."', `year` = '".$year."', `stream` = '".$stream."' WHERE `application`.`emailid` = '".$emailid."'";


if(!mysqli_query($conn,$sql))
{
    echo '   ';
}
else
{
    echo '  ';
}
}
?>

<?php
if (isset($_POST['save'])) {
  // Check if a file was uploaded
  if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $resumeName = $_FILES['resume']['name'];
    $resumeTmpName = $_FILES['resume']['tmp_name'];

    // Move the uploaded file to a desired location
    $resumeDestination = 'uploads/' . $resumeName;
    move_uploaded_file($resumeTmpName, $resumeDestination);

    // Store the resume file path in the database
    $resumePath = mysqli_real_escape_string($conn, $resumeDestination);
    $sql = "UPDATE application SET resume='$resumePath' WHERE emailid='$emailid'";
    mysqli_query($conn, $sql);
  }
}
?>


<!doctype html>
<html>
<head>
<title>Application Form</title>
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
    </style>
</head>
 
<body style="background-image: url('adminpage.jpeg'); background-size: cover; background-position: center;">>
    <form action="" method="POST" enctype="multipart/form-data">

<a href="homepage1.php" class="button" >HOME</a>
<h3 align="center"><font color="#191970" size="5" face="segeo print">SCHOLARSHIP and INTERNSHIP APPLICATION FORM</font></h3>
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td> NAME</td>
<td><input type="text" placeholder="Enter Name" name="name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Date Of Birth -------------------------------------------------------->
<tr>
    <td>DATE OF BIRTH</td>
    <td><input type="text"  placeholder="dd/mm/yyyy" name="date" maxlength="10"/></td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td >EMAIL ID</td>
<td><input type="email" placeholder="Email_Id" name="emailid" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="tel" placeholder="Mobile_Number" name="phone" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
<input type="radio" name="gender" value="M" />Male 
<input type="radio" name="gender" value="F" />Female
<input type="radio" name="gender" value="O" />Other
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
    <td>ADDRESS <br /><br /><br /></td>
    <td><textarea placeholder="Address" rows="4" cols="30" name="address"></textarea></td>
    </tr>
 
<!----- Apply ---------------------------------------------------------->

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
<td>
<table>
<tr>
<td>Last Semester GPA</td>
<td><input type="text" name="current_gpa" maxlength="30" /></td>
</tr>
<tr>
<td>Cummulative GPA</td>
<td><input type="text" name="c_gpa" maxlength="30" /></td>
</tr>
 
<tr>
<td></td>
<td></td>
</tr>
</table>
</td>
</tr>
 
<tr>
    <td>UPLOAD YOUR RESUME HERE</td>
    <td><input type="file" name="resume" /></td>
</tr>

    </tr>
 <!------Current academic details-----------------------> 
 <tr>
        <td> CURRENT ACADEMIC DETAILS <br /><br /><br /><br /><br /><br /><br /></td> 
        <td>
            <table>
                <tr>
                    <td>University/College</td>
                    <td><input type="text" name="college" /></td>
                </tr>
                <tr>
                    <td>Year </td>
                    <td><input type="text" name="year" /></td>
                </tr>
                <tr>
                      <td>Major</td>
                      <td><input type="text" name="stream" /></td>
                  </tr>
            </table>
        </td>
       
          </tr>
        
 
<!----- Save and update and next------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" class="button" value="SAVE" name="save">
<input type="submit"  class="button" value="UPDATE" name="update">
<a href="view2.php?emailid=$emailid;" class="button" name="next" value="next" >NEXT</a>
</td>
</tr>
</table>   
</form>
</body>
</html>