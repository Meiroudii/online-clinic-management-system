<?php

  mysql_connect('localhost', 'root', '');
  mysql_select_db('project');

if(isset($_POST) & !empty($_POST))
  {
    $name= $_POST['name'];
    $phn=$_POST['phn'];
    $address=$_POST['address'];
    $msg=$_POST['message'];
    $env=$_POST['env'];
    $ward=$_POST['ward'];
    $doc=$_POST['doc'];
    $bil=$_POST['bil'];
    $enq=$_POST['enq'];
    $online=$_POST['online'];
    $overall=$_POST['overall'];

    $sql_feedback="INSERT INTO pat_feedback(name,phn,address,msg,env,ward,doc,bill,enq,online,overall) values('$name','$phn','$address','$msg','$env','$ward','$doc','$bil','$enq','$online','$overall')";
    $result=mysql_query($sql_feedback);


    echo '<script language="javascript">';
    echo 'alert("Thanks for your valuable feedback. ")';
    echo '</script>';

}
?>
<div style="background-color: #7f8c8d;height: 1200px "><br></br>
	<div style="background-color: #FFFFFF;width: 1200px;height: 1100px;margin: auto; "><br></br>
		<div style="width: 1000px;height: 1000px;margin: auto;">
			<div style="color:blue;width: 800px;margin-left: 50px; ">
			<label style="margin-left: 250px;font-size: 30px; ">ONE CARE MEDICAL CLINIC</label><br>
			<label style="margin-left: 270px;">Daimond Harbour Road, Khiddirpur,Kolkata- 700023.</label><br>
			<label style="margin-left: 310px;"> Email-onecaremedicalclinic@gmail.com</label><br>
			<label style="margin-left: 330px;">Ph- 033-244268/235263/345654.</label>
			</div><br></br>

			<p>
			Dear Patient / Realtive / Visitor,<br></br>

			 Your continous suggestions & support helps to make our Hospital a better organization. Kindly spare a few moments to complete the following, so that we can strive to fulfill your expectations. 
			 <br></br>

			Warm Regards,<br>
			Director’s Office – One Care Medical Clinic, Kolkata.
			</p><br>


			<h2 style="margin-left: 300px;color: red; ">ONLINE &nbsp FEEDBACK &nbsp FORM</h2><hr><br>


			<form  method="POST">
           		<p style="font-size: 20px; ">
          		<label>Name</label>
          		<input style="width: 200px;margin-left: 20px;height: 25px;border:2px solid silver;border-radius: 5px; " type="text" name="name"  placeholder="Enter your name" required>
          		<label style="margin-left: 50px; " > Enter contact number</label>
          		<input style="width: 200px;margin-left: 10px;height: 25px;border-radius: 5px;border:2px solid silver; " type="text" name="phn"  placeholder="Enter contact no." required>
        		</p>
        		<br>

        		<p style="font-size: 20px; ">
         		<label >Address</label>
          		<input style="width: 500px;margin-left: 10px;height: 25px;border-radius: 5px;border:2px solid silver; " type="text" name="address" id="address" placeholder="Enter your address" required>
          
        		</p>
        		
        		<br><hr><br>

				<p><strong>Message</strong></p>
				<br>
				<textarea name="message" rows="8" cols="100" required></textarea><br />
				<br>
				<hr>
				<br>
				<p style="font-size: 20px; "><strong>My hospital stay at One care medical clinic was because of the following factors :</strong> </p>
				<br>
				
				<p><strong>The clinic environment is:</strong>
					&nbsp Good:<input type="radio" value="Good" name="env" required>
					&nbsp Average:<input type="radio" value="Average" name="env">
					&nbsp Poor:<input type="radio" value="Poor" name="env">
				</p>
				<br>
				<p><strong>The ward facilities are:</strong>
					&nbsp Good:<input type="radio" value="Good" name="ward" required>
					&nbsp Average:<input type="radio" value="Average" name="ward">
					&nbsp Poor:<input type="radio" value="Poor" name="ward">
				</p>
				<br>
				<p><strong>The service of attending doctors is:</strong>
					&nbsp Good:<input type="radio" value="Good" name="doc" required>
					&nbsp Average:<input type="radio" value="Average" name="doc">
					&nbsp Poor:<input type="radio" value="Poor" name="doc">
				</p>
				<br>
				<p><strong>The hospital billing is:</strong>
					&nbsp Good:<input type="radio" value="Good" name="bil" required>
					&nbsp Average:<input type="radio" value="Average" name="bil">
					&nbsp Poor:<input type="radio" value="Poor" name="bil">
				</p>
				<br>
				<p><strong>The reception/enquiry system is:</strong>
					&nbsp Good:<input type="radio" value="Good" name="enq" required>
					&nbsp Average:<input type="radio" value="Average" name="enq">
					&nbsp Poor:<input type="radio" value="Poor" name="enq">
				</p>
				<br>

				<p><strong>The online process is:</strong>
					&nbsp Good:<input type="radio" value="Good" name="online" required>
					&nbsp Average:<input type="radio" value="Average" name="online">
					&nbsp Poor:<input type="radio" value="Poor" name="online">
				</p>


				<br>
				<p><strong>The overall rating you give to us is:</strong>
					&nbsp Good:<input type="radio" value="Good" name="overall" required>
					&nbsp Average:<input type="radio" value="Average" name="overall">
					&nbsp Poor:<input type="radio" value="Poor" name="overall">
				</p>
					<br>
					
      

				<p><strong style="margin-left: 430px; ">THANK YOU</strong></p><br>

				<p class="sub">
      			<input style="margin-left:380px;  " type="submit" name="submit" id="sub" value="Submit" >         
      		    </p>

			</form>
	</div>
</div>
