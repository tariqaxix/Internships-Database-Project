<?php
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

if(isset($_POST['submit']))
{
	
$title = $_POST['title'];
$eligibility = $_POST['eligibility'];
$category = $_POST['category'];
$phone = $_POST['phone'];
$emailid = $_POST['emailid'];
$link = $_POST['link'];


$sql = "INSERT INTO scholarship.adminupload (title,eligibility,category,phone,emailid,link) VALUES ('$title','$eligibility','$category','$phone','$emailid','$link')";
if(!mysqli_query($conn,$sql))
{
    echo '  ';
}
else
{
    echo ' ';
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
body {
background-image: url("adminpage.jpeg");
background-size: 150px;
width: 300px;
height: 300px;
background-size: cover;
background-position: center;
background-attachment: fixed;

}
</style>
</head>
<body> 
    <form  action="adminupload1.php" method="POST" runat="server">  
    <div>                
    </div>   
	 <button class="button" value="home" onClick="window.location.href='homepage1.php'" class="css3button" style="margin-left: 40px"  >HOME</button>
	 <button class=button class="css3button" onclick="goBack()">Go Back</button>
	 
    <h2 align="right"><font color="#191970" size="10" face="segeo print">INTERNSHIP SCHEMES UPLOAD</font></h2> 
    <table id="table1"; cellspacing="30px" cellpadding="8%"; align="center" style="margin-left:25px">  
<tr> 
    <td align="left"><font color="#191970" size="5" face="segeo print">INTERNSHIP NAME</font></td>  
         <td>
    <input type="text" placeholder="Enter Internship Name" name="title" required style="HEIGHT:30PX;WIDTH:500PX;padding:5px;"/>
         </td>  
 </tr>  
 <tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">ELIGIBILITY</font></td>  
         <td>
    <input type="text" placeholder="Enter Eligibility Criteria" name="eligibility" required style="HEIGHT:30PX;WIDTH:500PX; padding:5px;"/>
         </td>  
 </tr>  
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">CATEGORY</font></td>  
         <td>
    <input type="text" placeholder="Enter category" name="category" required style="HEIGHT:30PX;WIDTH:500PX;padding:5px;"/>
         </td>  
 </tr>  
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">EMAIL</font></td>  
         <td>
    <input type="text" placeholder="Enter email" name="emailid" required style="HEIGHT:30PX;WIDTH:500PX;padding:5px;"/>
         </td>  
 </tr>
<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">PHONE</font></td>  
         <td>
    <input type="text" placeholder="Enter the phone number" name="phone" required style="HEIGHT:30PX;WIDTH:500PX;padding:5px;"/>
         </td>  
 </tr> 

<tr> 
    <td align="right"><font color="#191970" size="5" face="segeo print">LINK</font></td>  
         <td>
    <input type="text" placeholder="Enter website link" name="link" required style="HEIGHT:30PX;WIDTH:500PX;padding:5px;"/>
         </td>  
 </tr>    
	   <tr>   
       <td>
<button class="button" value="submit" name="submit" class="css3button" style="margin-left: 75px">SUBMIT</button>	   
        </td>  
        </tr>
    </table>  
	<script>
function goBack() {
  window.history.back();
}
</script>
    </form>  
    </body>
</html>