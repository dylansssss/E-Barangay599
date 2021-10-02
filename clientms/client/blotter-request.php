<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['clientmsuid']==0)) {
  header('location:logout.php');
  } else{
  	?>

<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
<script>
        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
</script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/sidebar.css" />
    
	<link rel="icon" href="../IMAGES/Barangay.png" type="image/icon type">

    <title>Bootstap 5 Responsive Admin Dashboard</title>
    <script>
        
        document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
        element.addEventListener('click', function (e) {
        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
            }); // addEventListener
        }) // forEach
        }); 
    </script>


    <style type = "text/css">
    .sidebar li .submenu{ 
        list-style: none; 
        margin: 0; 
        padding: 0; 
        padding-left: 1rem; 
        padding-right: 1rem;
    }
    .box{
		padding:10px;
		display:none;
		margin:10px;
	}
    </style>

</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php include_once('includes/sidebarupdated.php'); 	?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa fa-align-justify primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Announcement List</h2>
                    
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--User-->
				<?php include_once('includes/usertoggle.php');?>
                <!--User-->
            </nav>
            <div class="sub-heard-part">
                <ol class="breadcrumb m-b-0"style="text-indent: 15px; margin-left: 2.5%;">
                    <li><a href="dashboard.php">Home</a></li>/
					<li class="active">Request</li>/
                    <li class="active">Blotter Request</li>
                </ol>
            </div>

			<!--yung div mismo-->
            <div class="container-fluid px-4">
				<div style="background-color: aliceblue;border-radius: 25px;padding: 25px;">
                <div class="graph-form" >
<div class="form-body">
<form method="post" style="font-size:1.25em;"> 
<h3 class="inner-tittle two"> Blotter Request</h3>
									 
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Blotter Type</label> 
		<select  name="blottype" class="form-control select2" required='true' style="padding: 1px; font-size: 0.8em;">
		<option value="" disable selected>Choose Blotter type: </option>
		<option value="Violence">Violence</option>
		<option value="Property Damage">Property Damage</option>
		<option value="Robbery">Robbery</option>
	</select> </div>
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Respondent/s:</label> <input type="text" name="res" placeholder="Respondent/s Name" value="" class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Complainant/s:</label> <input type="text" name="comp" placeholder="Complainant/s Name" value="" class="form-control" required='true' style=" font-size: 0.8em;"> </div>
	
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Incident Location:</label> <input type="text" name="incloc" placeholder="Incident Location" value="" class="form-control" required='true' style=" font-size: 0.8em;"> </div>
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Incident Time and Date</label> <input type="datetime-local" name="incd" value="" placeholder="Incident Date" class="form-control" required='true' style=" font-size: 0.8em;"> </div> 
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Narrative Incident:</label> <textarea type="text" name="blotsum" placeholder="Narrative" value="" class="form-control" required='true' rows="4" cols="3" style=" font-size: 0.8em;"></textarea> </div>
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Blotter Status</label> 
		<select  name="blotstat"  class="form-control select2" required='true' style="padding: 1px; font-size: 0.8em;">
		<option value="">Choose Status</option>
		<option value="Unfulfilled">Unfulfilled</option>
		<option value="On-Going">On-Going</option>
		<option value="Fulfilled">Fulfilled</option>
	</select> </div>
	<div class="form-group"> <label for="exampleInputEmail1" style="color: #021f4e;">Summon Schedule</label> <input type="datetime-local" name="sumsched" value="" placeholder="Summon Date" class="form-control" required='true' style=" font-size: 0.8em;"> </div> 
	
	<br>
	<!--kinopya ko mula certificate request pa lagyan nalang backend baka mapunta sa ibang db hahaha-->
	<button type="submit" class="btn btn-default" name="submit" id="submit" style="color: white; background-color: #021f4e; border: 1px; width: 10%; border-radius:25px;">Create</button>
<br>	 
</div>
</div>
</div> 
						</div>
				
					</div>
                <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
<?php } ?>