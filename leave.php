<?php
 if(isset($_POST['btnsubmit']))
{
$con=mysqli_connect("localhost", "root", "", "leave_management");        
$name=$_POST["name"];
$empid=$_POST['empid'];
$phone=$_POST['phone'];
$dol=$_POST['dol'];
$dol1=$_POST['dol1'];
$r1=$_POST['inlineDefaultRadio'];
$comment=$_POST['comment'];


   $sql2=mysqli_query($con,"INSERT into leave_form
values('$name', '$empid', '$phone', '$dol', '$dol1', '$r1', '$comment')");
  if ($sql2) 
   {
    echo"<script type='text/javascript'>alert('Leave applied')</script>";
  } else {
    echo "Value is not inserted"; 
  }
}

?>
  

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<title>Apply Leave Form</title>
</head>
<body class="lform">
	  <div class="card">
			<div class="card-heading">
				<div class="row justify-content-center">
					<div class="container col-md-12">
        	    	    <h3 class="mbr-section-title align-center pb-2 mbr-fonts-style display-2"><center>Leave Form</center></h3>
                    <hr class="colorgraph"
          	  		</div>
          		</div>	
          	</div>
        <div>

		<div class="card-body"> 
        	<div class="row justify-content-center">
            <form class="mbr-form" action="" method="POST" data-form-title="Leave Form">
                    	<input type="hidden" data-form-email="true" value="">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4t"><b>Name</b></label>
                                    <input type="text" class="form-control" name="name" data-form-field="name" required="" id=" name-from1-4t">
                                 </div>
                            </div>    
                            <div class="col-md-4 multi-horizontal" data-for="empid">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="empid-form1-4t"><b>Employee ID</b></label>
                                    <input type="text" class="form-control" name="empid" data-form-field="Empid" required="" id="empid-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4t"><b>Phone</b></label>
                                    <input type="text" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-4t">
                                </div>
                            </div>
                        </div>

                        <div class="row row-sm-offset">
                        	<div class="col-md-4 multi-horizontal" data-for="dol">
                        	    <div class="form-group">
                        	        <label class="form-control-label mbr-fonts-style dispaly-7" for="dol-form1-4t"><b>Leave From :</b>
                        	        </label>
                        	 		<input type="date" class="form-control" name="dol" data-form-field="Dol" required="" id="dol-form-4t">
                        	    </div>
                        	</div>
                        	<div class="col-md-4 multi-horizontal" data-for="dol">
                               	<div class="form-group">
                       	      		<label class="form-control-label mbr-fonts-style dispaly-7" for="dol-form1-4t"><b>Leave To :</b>
                       	      		</label>
                       	      		<input type="date" class="form-control" name="dol1" data-form-field="Dol" required="" id="dol-form-4t">
                           		</div>
                           	</div>
                       	</div> 
                        
                        <div class="form-group">
                        	<label class="form-control-label mbr-fonts-style dispaly-7"><b>Leave Type :</b></label><br>
                        	<div class="custom-control custom-radio custom-control-inline">
                      			<input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadio" value="Emergency leave">
                      			<label class="custom-control-label" for="defaultInline1"><i>Emergency leave</i></label>
                        	</div>

                        	<div class="custom-control custom-radio custom-control-inline">
                      			<input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadio" value="Sick">
                      			<label class="custom-control-label" for="defaultInline2"><i>Sick</i></label>
                        	</div>

                        	<div class="custom-control custom-radio custom-control-inline">
                      			<input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadio" value=" Travelling">
                      			<label class="custom-control-label" for="defaultInline3"><i>Travelling</i></label>
                        	</div>

                        	<div class="custom-control custom-radio custom-control-inline">
                      			<input type="radio" class="custom-control-input" id="defaultInline4" name="inlineDefaultRadio" value="Other">
                      			<label class="custom-control-label" for="defaultInline4"><i>Other</i></label>
                        	</div>
                      	</div>

                        <div class="form-group" data-for="comment">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t"><b>Leave Description</b>
                            </label>
                            <textarea class="form-control" name="comment" rows="4" data-form-field="Comment" id="comment-form1-4t">
                              
                            </textarea>
                        </div>
            			
                        <span class="input-group-btn">
                        	<button href="" type="submit" name="btnsubmit" class="btn btn-success btn-form display-4">SEND</button>
                        	<button href="" type="cancel" class="btn btn-danger btn-form display-4">Cancel</button>
                        </span>
         
                    </form>
            </div>
        </div>
      </div>
  	
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/custom.js"></script>

</body> 
</html>