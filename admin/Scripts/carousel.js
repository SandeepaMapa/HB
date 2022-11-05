
let Carousel_s_form = document.getElementById('Carousel_s_form');
let image_picture_inp = document.getElementById('Carousel_picture_inp'); 
            

Carousel_s_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_image();
    });

function add_image()
{
    let data =new FormData();
    data.append('picture',Carousel_picture_inp.files[0]);
    data.append('add_image','');

    let xhr =new XMLHttpRequest();
    xhr.open("POST","ajax/carousel_crud.php",true);

    xhr.onload = function(){
        var myModal = document.getElementById('Carousel-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText ='inv.img'){
            alert('error','Only JPG and PNG images are supported!');
        }
        else if(this.responseText =='inv_size'){
            alert('error','Image should be less than 2MB');
        }
        else if(this.responseText =='upd_failed'){
            alert('error','Image upload failed. Server Down!');
        }
        else{
            alert('success', ' New Image added successfully');
            Carousel_picture_inp.value='';
            get_Carousel();
        }
    }

     xhr.send(data);
    }

function get_Carousel()
    {
        let xhr =new XMLHttpRequest();
        xhr.open("POST","ajax/carousel_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');

        xhr.onload = function(){
            document.getElementById('Carousel-data').innerHTML = this.responseText;
                }

        xhr.send('get_Carousel');
    }

function rem_image(val)
    {
        let xhr =new XMLHttpRequest();
        xhr.open("POST","ajax/carousel_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');

        xhr.onload = function(){
            if(this.responseText=1){
                alert('success', 'Image Removed!');
                get_Carousel();
            }
            else{
                alert('error', 'Server down!');
            }
        }

        xhr.send('rem_image='+val);
    }
               
window.onload = function(){
    get_Carousel();
}
        

