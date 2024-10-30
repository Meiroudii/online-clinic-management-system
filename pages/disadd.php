<?php
session_start();
  mysql_connect('localhost', 'root', '');
  mysql_select_db('project');
  $sos=$_SESSION['adminmail'];
  if(isset($_POST['disable']) )
  {
    $doctorid=$_POST['docid'];
    $sql_add="UPDATE doc_registration SET status='absent'  WHERE doc_id='$doctorid' ";
    $result_add=mysql_query($sql_add);
  }
?>
  <p><?php 
   $sql_name="SELECT admin_name FROM admin_registration where mail_id='$sos' ";
   $result_name=mysql_query($sql_name);
    $obj=mysql_fetch_object($result_name);      
  echo $obj->admin_name; 
  ?>
  </p>
<div style="color: #09AD3D ;">
  <h2 id="head">Here you can disable yours Doctors <?php echo $obj->admin_name; ?> </h2>
</div>
<br></br>
<form method="POST">
  <div style="height: 250px;width: 700px;background-color: #bdc3c7;margin: auto; "><br>
    <label style="font-size: 20px;margin-left: 160px;color: red; ">Enter the doctor Id that you want to  dissable</label>
    <br></br><br>
    <label style="font-size: 22px;margin-left: 140px;color: #050559 "> Doctor Id :</label> <input style="font-size: 20px; " type="text" name="docid" required/><br>
    <br></br>
    <p class="sub">
      <input style="margin-left:250px;  " type="submit" name="disable" id="sub" value="Disable Doctor" >         
       </p>
  </div>
</form>
