<?php
 require('inc/essentials.php');
 require('inc/db_config.php');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Rooms</title>
        <?php require('inc/links.php'); ?>
    </head>
    <body class="bg-light"> 

    <?php require('inc/header.php') ?>    

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ROOMS</h3>

                <!-- General Settings Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class=" text-end mb-3">
                            
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-plus-square"></i>Add
                                </button>
                        </div>
                       <div class="table-responsive-lg" style="height:450px; overflow-y: scroll;">
                      <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Area</th>
                                <th scope="col">Guests</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="features-data">
                        </tbody>
                      </table>
                    </div>
                    </div>
                </div> 

                <!-- Add room modal-->
                   <div class="modal fade" id="general-s" data-bs-backdrops="statis" data-bs-keyboard="true" tabindex=-1 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form  id="add_room_form" autocomplete="off" action="">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Add Room</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-6 mb-3">
                            <label  class="form-label fw-bold">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Area</label>
                            <input type="number"  min="1" name="area" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Price</label>
                            <input type="number"min="1"  name="price" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Quantity</label>
                            <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Adult(Max.)</label>
                            <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Children(Max.)</label>
                            <input type="number" min="1" name="children" class="form-control shadow-none" required>
                        </div>
                        <div class=" col-12 mb-3">
                        <label class="form-label fw-bold">Features</label>
                    
                        </div>
                    </div>
                            </div>
                        
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="button" onclick="upd_general(site_title.value, site_about.value)" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>

            </div>
        </div>
       </div>
                


    <?php require('inc/scripts.php');?>

        <script>
           let feature_s_form = document.getElementById('feature_s_form');

           feature_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_feature();
           });
         
         function add_feature()
           {
            let data=new FormData();
            data.append('name',feature_s_form.elements['features_name'].value);
            data.append('add_feature','');
           
           let xhr=new XMLHttpRequest();
           xhr.open("POST","ajax/features.php",true);

           xhr.onload=function(){
            var myModal=document.getElementById('feature-s');
            var modal=bootstrap.Modal.getInstance(myModal);
            modal.hide();
            
            if(this.responseText==1){
                alert('succes','New feature added!');
                feature_s_form.elements['features_name'].value='';
                get_features();
            }
            else{
                alert('error','Server Down!');     
            }
            }
            xhr.send(data);
           }

           function get_features()
           {
            let xhr=new XMLHttpRequest();
           xhr.open("POST","ajax/features.php",true);
           xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

           xhr.onload=function(){
            document.getElementById('feature-data').innerHTML= this.responseText;
           }
            xhr.send('get_features');
        }
        </script>
    

    
  </body>
</html>