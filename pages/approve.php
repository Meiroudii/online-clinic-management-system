<?php
session_start();

  mysql_connect('localhost', 'root', '');
  mysql_select_db('project');
  $sos=$_SESSION['adminmail'];


  if(isset($_POST['add']) )
  {
    $doctorid=$_POST['docid'];
    $sql_add="UPDATE doc_registration SET status='present'  WHERE doc_id='$doctorid' ";
    $result_add=mysql_query($sql_add);
  }


?>
<div class="menubar"> 
   <div class="wrapper">
    <ul>
     <!-- <li><a href="adminhome.php">Home</a></li>-->
            <li><a href="admindetails.php">My Details</a></li>
      <li><a href="admindocview.php">View Doctor</a></li>
      <li><a href="adminappview.php">View Appointments</a></li>
      <li><a href="adminfeedbackview.php">View Feedback</a></li>
      <li><a href="adminreportview.php">View Reports</a></li>
      <li><a href="patlogout.php">Logout</a></li>
    </ul>
  </div>
</div>  

<br>

<div style="color: #09AD3D ;">
  <h2 id="head">Here you can add/approve yours Doctors <?php echo $obj->admin_name; ?> </h2>
</div>

<br></br>


<form method="POST">
  <div style="height: 250px;width: 700px;background-color: #bdc3c7;margin: auto; "><br>
    <label style="font-size: 20px;margin-left: 160px;color: red; ">Enter the doctor Id that you want to add or approve</label>
    <br></br><br>
    <label style="font-size: 22px;margin-left: 140px;color: #050559 "> Doctor Id :</label> <input style="font-size: 20px; " type="text" name="docid" required/><br>
    <br></br>

    <p class="sub">
      <input style="margin-left:250px;  " type="submit" name="add" id="sub" value="Add/Approve" >         
       </p>
  
  </div>
</form>
