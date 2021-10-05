<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSS/sidebar.css" />
    <link rel = "stylesheet" href = "../CSS/table.css"/>
    <link rel = "stylesheet" href = "../CSS/scrollbar.css">
	<link rel="icon" href="../IMAGES/Barangay.png" type="image/icon type">

    <title>Certificates</title>
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

        
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
    <div class="bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src = "../IMAGES/Barangay.png" style = "width: 60px;"><br>Barangay 599 <br>E-barangay</div>
            <nav class="sidebar py-2 mb-4 bg-light">

                <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item">
                        <a href="admin-dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold fs-6"><i
                            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>    
                        
                    </li>

                    <li class="nav-item has-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold fs-6"><i
                            class="fas fa-users me-2"></i>599 Residence</a>                        
                       
                    </li>

                    <li class="nav-item has-submenu">
                        <a href="#" class="list-group-item list-group-item-action dropdown-toggle bg-transparent second-text fw-bold nav-link fs-6">
                            <i class="fas fa-paperclip my-0 me-2"></i>Services</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link active" href="#">Certification </a></li>
                            <li><a class="nav-link" href="admin-blotter.php">Blotter </a></li>
                            <li><a class="nav-link" href="admin-rentals.php">Rentals</a></li>
                            <li><a class="nav-link" href="admin-otherservice.php">Other Services </a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-submenu">
                        <a href="#" class="list-group-item list-group-item-action dropdown-toggle bg-transparent second-text fw-bold nav-link fs-6">
                            <i class="fas fa-book my-0 me-2"></i>Request</a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="admin-Crequest.php">Certification Request </a></li>
                            <li><a class="nav-link" href="admin-Brequest.php">Blotter Request </a></li>
                            <li><a class="nav-link" href="admin-Rrequest.php">Rental Request</a></li>
                            <li><a class="nav-link" href="admin-OSrequest.php">Other Service Request </a></li>
                        </ul>
                    </li>
                    <!--<li class="nav-item has-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold fs-6 dropdown-toggle" ><i
                            class="fas fa-book me-2"></i>Request</a>

                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="#">Certification </a></li>
                            <li><a class="nav-link" href="#">Blotter </a></li>
                            <li><a class="nav-link" href="#">Rentals</a></li>
                            <li><a class="nav-link" href="#">Other Services </a></li>
                            </ul>
                        </li>-->

                    <li class="nav-item">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold fs-6"><i class="fa fa-id-card" aria-hidden="true"></i> 599 Officials</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold fs-6"><i
                            class="fas fa-comment-dots me-2"></i>Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold fs-6"><i class="fa fa-th" aria-hidden="true"></i></i> E-barangay Content</a>
                    </li>
                </ul>
            </nav>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold fs-6"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 mb-3">
                <div class="d-flex align-items-center">
                    <i class="fa fa-align-justify primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Certificates</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>USER
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container mx-5">

                <nav aria-label="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.php"><i class="fa fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-paperclip text-muted"></i></a>&nbsp;Services</li>
                            <li class="breadcrumb-item active"><a href="#"><i class="fa fa-file text-muted"></i></a>&nbsp;Certificates</li>
                        </ol>
                    </nav>
                </nav>
            </div>
       
                
            <div class="container-fluid mb-2">
                        <div class = "row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4 mt-2 mx-0">

                                <div class ="nav justify-content-end mx-0">
                            
                                    <div class="btn-group" role="group">
                                        <a href = "certification-records.php"  class="btn btn-primary mx-1 my-1"><i class="fa fa-list"></i>&nbsp; Records</a>
                                    </div>

                                    <div class="btn-group" role="group" >
                                        <a href = "admin-Crequest.php" class="btn btn-primary mx-1 my-1" ><i class="fa fa-list"></i>&nbsp;Requests</a>
                                    </div>
                            
                            
                                    <div class="btn-group" role="group">
                                        <a href = "#add" data-bs-toggle = "modal" role = "button" class="btn btn-primary mx-1 my-1"><i class="fa fa-plus"></i>&nbsp;Add Certificate</a>
                                    </div>
                                
                                 </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-xl-5">

                            </div>
                            <div class = "col-xl-7">
                                <form class ="d-flex justify-content-end">
                                    <input type = "text" class = "form-control border border-success"  id = "search-form" placeholder = "Search certificate here" >
                                    <a href = "#" class = "a btn btn-success"data-bs-toggle="tooltip" data-bs-placement="top" title="Search"><i class = "fa fa-search" ></i></a>
                                </form>                            
                            </div>
                </div>
            </div>
        
            <div class = "container-fluid">
                <table class = "table">
                    <thead class="table" style = "background-color: #021f4e;">
                      <tr>
                          <td colspan = 5 class = "" style = "color: white" align = "center">Table of Certificates</td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr class = "light">
                            <th class = "">
                                Certification Name
                            </td>
                            <th class = "">
                                Certification Description
                            </td>
                            <th class = "">
                                Certification Fee
                            </td>
                            <th class = "" >Action
                            </td>
                        </tr>
                        <tr>
                         
                            <td class = "">
                                Sample Certificate
                            </td>
                            <td class = "">
                                description....
                            </td>
                            <td class = "">
                                20.00 ₱
                            </td>
                            <td>
                                <div class = "actions" align = "center">
                                   
                                    <a href="#edit" class="btn btn-primary text-decoration-none my-1" style = "color: white"  data-bs-toggle="modal"role="button"><i class = "fa fa-edit"></i>&nbsp;Update</a>
                                    <a href="#delete" class="btn btn-danger text-decoration-none my-1" data-bs-toggle="modal" role button><i class ="fa fa-trash"></i>&nbsp;Delete</a>
                                </div>
                                                               
                            </td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    <!-- /#page-content-wrapper -->
    </div>

    <div class="modal fade" id="edit"  tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                    <h5 class="modal-title" id="edit-cert"><i class = "fa fa-pen"></i>&nbsp;Edit Certificate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class = "image-fluid" align = "center">
                            <img src = "../IMAGES/BARANGAY.png" class ="brand-logo" style = "width: 30px">
                        </div>
                    </div>
                    <form method = "POST" action="#">
                        <div class = "row">
                            <div class="col-md-8 my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"><a  disabled><i class ="fa fa-address-book"></i></a></div>
                                    </div>
                                    <input type="text" class="form-control"  placeholder="Service name">
                                </div>
                            </div>
                     
                      
                            <div class="col-md-4 my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"><a  disabled><i class ="fa fa-credit-card"></i></a></div>
                                    </div>
                                    <input type="text" class="form-control"  placeholder="Service fee">
                                </div>
                            </div>
                       
                        </div>
                        
                        <div class ="row my-1">
                            <div class ="col">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                    <label class = "text-muted" for="floatingTextarea2">Certificate description here</label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <a href = "#verif-edit" data-bs-toggle = "modal" role = "button" data-bs-dismiss = "modal" class = "btn btn-primary">Save</a>
                    <input type = "reset" class="btn btn-primary" >
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id = "verif-edit" tab-idndex = "-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verif-edit">&nbsp;<i class = "fa fa-question"></i>&nbsp;&nbsp;Certificate Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class = "fs-4">You are about to update a certification<br> Click "Yes" if certain?</p>
                </div>
                <div class="modal-footer">
                    <form method = "POST" action = "#">
                    <input type = "button" class="btn btn-success"  name = "delete" value ="Yes">
                    <input type="button" class="btn btn-danger" data-bs-dismiss="modal"  value = "No">
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id = "verif-add" tab-idndex = "-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verif-add">&nbsp;<i class = "fa fa-question"></i>&nbsp;&nbsp;New Certificate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class = "fs-4">You are about to update a certification<br> Click "Yes" if certain?</p>
                </div>
                <div class="modal-footer">
                    <form method = "POST" action = "#">
                    <input type = "button" class="btn btn-success"  name = "delete" value ="Yes">
                    <input type="button" class="btn btn-danger" data-bs-dismiss="modal"  value = "No">
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


   


    <div class="modal fade" id = "delete" tab-idndex = "-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-cert">&nbsp;<i class = "fa fa-trash"></i>&nbsp;&nbsp;Are you sure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class = "fs-4">You are about to delete a certification<br> Click "Yes" if certain?</p>
                </div>
                <div class="modal-footer">
                    <form method = "POST" action = "#">
                    <input type = "button" class="btn btn-success"  name = "delete" value ="Yes">
                    <input type="button" class="btn btn-danger" data-bs-dismiss="modal"  value = "No">
                    </form>

                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add"  tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                        <h5 class="modal-title" id="edit-cert"><i class = "fa fa-plus"></i>&nbsp;Add Certificate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class = "image-fluid" align = "center">
                                <img src = "../IMAGES/BARANGAY.png" class ="brand-logo" style = "width: 30px">
                            </div>
                        </div>
                        <form method = "POST" action="#">
                                <div class = "row">
                                    <div class="col-md-8 my-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><a  disabled><i class ="fa fa-address-book"></i></a></div>
                                            </div>
                                            <input type="text" class="form-control"  placeholder="Service name">
                                        </div>
                                    </div>
                        
                                    <div class="col-md-4 my-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><a  disabled><i class ="fa fa-credit-card"></i></a></div>
                                            </div>
                                            <input type="text" class="form-control"  placeholder="Service fee">
                                        </div>
                                    </div>
                            </div>
                            <div class ="row my-1">
                                <div class ="col">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                        <label class = "text-muted" for="floatingTextarea2">Certificate description here</label>
                                        </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <a href = "#verif-add" data-bs-toggle = "modal" role = "button" data-bs-dismiss = "modal" class = "btn btn-primary">Save</a>
                        <input type = "reset" class="btn btn-primary" >
                        </form>
                    </div>
                </div>
            </div>
    </div>
   

    <div class="modal fade" id = "verif" tab-idndex = "-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-cert">&nbsp;<i class = "fa fa-question-circle"></i>&nbsp;&nbsp;Are you sure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                        <div class = "image-fluid" align = "center">
                            <img src = "../IMAGES/BARANGAY.png" class ="brand-logo" style = "width: 30px">
                        </div>
                    </div>
                <div class="modal-body">
                    <p class = "fs-4">New Certificate is about to be created<br>Click yes button if you are certain ?</p>
                </div>
                <div class="modal-footer">
                    <form method = "POST" action = "#">
                    <input type = "button" class="btn btn-success"  name = "yes" value ="Yes">
                    <input type="button" class="btn btn-danger" data-bs-dismiss="modal"  value = "No">
                    </form>
                </div>
            </div>
        </div>
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