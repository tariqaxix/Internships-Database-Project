<?php
$conn = mysqli_connect('127.0.0.1', 'root', '');

if (!$conn) {
    echo 'Failed to connect to the database.';
}

if (mysqli_select_db($conn, 'scholarship')) {
    echo '';
}

if (isset($_POST['submit'])) {
    $stdid = $_POST['stdid'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $year = $_POST['year'];
    $duration = isset($_POST['duration']) ? $_POST['duration'] : '';

    $sql = "INSERT INTO scholarship.studenttest (stdid, name, title, address, year, duration) VALUES ('$stdid', '$name', '$title', '$address', '$year', '$duration')";
    if (!mysqli_query($conn, $sql)) {
        if (mysqli_errno($conn) == 1062) {
            echo '';
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    } 
    else 
    {
       ?><script>alert('Record added successfully!');</script><?php
    }
}

if (isset($_POST['delete'])) {
    $stdid = $_POST['stdid'];

    $sql = "DELETE FROM studenttest WHERE stdid='$stdid'";
    if (!mysqli_query($conn, $sql)) {
        echo 'Error: ' . mysqli_error($conn);
    } else {
        ?><script>alert('Record deleted successfully!');</script><?php
    }
}
?>



<!doctype html>
<html>
<head>
<title>adminupload page</title>
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


    <form  action="studenttest.php" method="POST" runat="server">  
    <div>                
    </div>   
	 <button class="button" value="home" onClick="window.location.href='homepage1.php'" class="css3button" style="margin-left: 40px"  >Logout</button>
	 
	 <a class="button" href="adminselect.php">GoBack</a>
	 
    <h2 align="center"><font color="#191970" size="10" face="segeo print">SCHOLARSHIP and INTERNSHIP AWARDEES UPLOAD</font></h2> 
    <table id="table1"; cellspacing="30px" cellpadding="8%"; align="left" style="margin-left:50px">  
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print"> STUDENTID</font></td>  
         <td>
    <input type="text" placeholder="Enter Studentid" name="stdid"  style="HEIGHT:30PX;WIDTH:500PX;"/>
         </td>  
 </tr>  
 <tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">NAME</font></td>  
         <td>
    <input type="text" placeholder="Enter Scholarship or Internship Awardee Name" name="name"  style="HEIGHT:30PX;WIDTH:500PX;"/>
         </td>  
 </tr>  
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">SCHOLARSHIP TITLE</font></td>  
         <td>
    <input type="text" placeholder="Enter Scholarship/Internship title" name="title"  style="HEIGHT:30PX;WIDTH:500PX;"/>
         </td>  
 </tr>  
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">Organization</font></td>  
         <td>
    <input type="text" placeholder="Enter Organization name" name="address"  style="HEIGHT:30PX;WIDTH:500PX;"/>
         </td>  
 </tr>
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">YEAR</font></td>  
         <td>
    <input type="text" placeholder="Enter the Scholarship or Internship Year" name="year"  style="HEIGHT:30PX;WIDTH:500PX;"/>
         </td>  
 </tr>
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">Duration</font></td>  
         <td>
    <input type="text" placeholder="Enter the Scholarship or Internship Duration" name="duration"  style="HEIGHT:30PX;WIDTH:500PX;"/>
         </td>  
 </tr> 
</table>
  <table cellspacing="30px" cellpadding="8%"; align="left" style="margin-left:270px">
	   <tr>
        
       <td >
<button class="button" value="submit" name="submit" class="css3button" style="margin-left: 75px">SUBMIT</button>	   
        </td> 
		
		
 <td>
<button class="button" value="submit" name="delete" class="css3button" style="margin-left: 75px">DELETE</button>	   
        </td>		
        </tr>
		
		
        
                    </table>  


    </form> 
	
     
    </body>
</html>