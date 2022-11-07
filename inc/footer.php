<!--Footer-->
<footer class="footer">
<div class="container-fluid1 mt-5">
  <div class="row">
    
    <div class="col-lg-4 p-4">
      <h3 class="f2 fw-bold fs-3 mb-2 text-white">River's Edge</h3>
      <p class="text-white text-sm">River's Edge is an outdoorsy, rustic villa type hotel with the madampa river flowing behind it. 
      It is set in the peaceful village of Madampagama, just a few minutes from the Galle coastal road.
      </p>
    </div>
    <div class="col-lg-4 p-4 text-white">
      <h5 class="mb-3 text-white">Quick Links</h5>
      <a href="Accomodation.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Accommodation</a><br>
      <a href="Restaurant.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Restaurant</a><br>
      <a href="Events.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Events</a><br>
      <a href="Gallery.php" class= " text-white d-inline-block mb-2 text-dark text-decoration-none">Gallery</a><br>
      <a href="contact.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
      <a href="About Us.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">About us</a><br>
    </div>
    <div class="col-lg-4 p-4 text-white">
      <h5 class=" text-white mb-3">Follow us</h5>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    
      
      
      <h5>Follow us</h5>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dazrk fs-6 p-2" >
        <i class="bi bi-facebook me-1"></i>facebook
      </span>
      </a>
      <br>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dazrk fs-6 p-2" >
        <i class="bi bi-instagram me-1"></i>Instagram
      </span>
      </a>

  
</div>

  </div>
  <div class="col-lg-6 col-md-12 col-xs-12"> 
<div class="left-sec">All copyrights reserved by Heritance Ahungalla - © 2022</div>
</div>
</div>

</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 
  <script>

function alert(type,msg,postion='body')
{
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML =  
        '<div class ="alert ${bs_class} alert-dismissible fade show" role="alert">'
                '<strong class="me-3">${msg}</strong>'
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
           ' </div>'
        ;
        
        if(postion=='body'){
          document.body.append(element);
          element.classList.add('custom_alert');

        }
        else{
          document.getElementById(position).appendChild(element);
        }
  
    setTimeout(remAlert, 3000);
   }




   function remAlert(){
     document.getElementByClassName('alert')[0].remove();
   }



    function setActive()
    {
      let navbar = document.getElementById('dashboard-menu');
      let a_tags = navbar.getElementsByTagName('a');

      for(i=0; i<a_tags.length; i++)
      {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >= 0)
        {
          a_tags[i].classList.add('active');
        }

      }
    }

    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', (e)=>{
      e.preventDefault();

    let data = new FormData();
    
    data.append('name',register_form.elements['name'].values);
    data.append('nicnum',register_form.elements['nicnum'].values);
    data.append('email',register_form.elements['email'].values);
    data.append('phonenum',register_form.elements['phonenum'].values);
    data.append('pass',register_form.elements['pass'].values);
    data.append('cpass',register_form.elements['cpass'].values);
    data.append('register','');

    var myModel = document.getElementById('registerModel');
    var model = bootstarp.Model.getInstance(myModel);
    mddal.hide();

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/login_register.php",true);
    
    xhr.onload = function(){
      if(this.responseText == 'pass_mismatch'){
        alert('error',"password Mismatch!");
      }
      else if(this.responseText == 'email_already'){
        alert('error',"Email is already registered!");
      }
      else if(this.responseText == 'phone_already'){
        alert('error',"Phone number is already registered!");
      }
      else if(this.responseText == 'mail_failed'){
        alert('error',"cannot send confirmation email! Server down!");
      }
      else if(this.responseText == 'ins_failed'){
        alert('error',"Registration failed! Server down!");
      }
      else{
        alert('success',"Registration successful. Confirmation link sent to email");
        register_form.resent();
      }
    }

    xhr.send(data);

    });

    setActive();
  </script>
