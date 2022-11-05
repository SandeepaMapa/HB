let add_room_form = document.getElementById('add_room_form');

    add_room_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_rooms();
    });

            function add_rooms()
               {
                    let data = new FormData();
                    data.append('add_rooms','');
                    data.append('name',add_room_form.elements['name'].value);
                    data.append('price',add_room_form.elements['price'].value);
                    data.append('quantity',add_room_form.elements['quantity'].value);
                    data.append('adult',add_room_form.elements['adult'].value);
                    data.append('children',add_room_form.elements['children'].value);

                    let facilities = [];
                    add_room_form.elements['facilities'].forEach(el =>{
                        if(el.checked){
                            facilities.push(el.value);
                        }
                    });
                    
                    data.append('facilities',JSON.stringify(facilities));

                    let xhr = new XMLHttpRequest();
                    xhr.open("POST","ajax/rooms.php",true);

                    xhr.onload = function(){
                     var myModal = document.getElementById('add-rooms');
                     var modal = bootstrap.Modal.getInstance(myModal);
                     modal.hide();
                    
                    if(this.responseText == 1){
                        alert('success','New room added!');
                        add_room_form.reset();
                        get_all_rooms();
                       
                    }
                    else{
                        alert('error','Server Down!');     
                    }
                    }
                    xhr.send(data);
                }


        function get_all_rooms()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
             document.getElementById('room-data').innerHTML = this.responseText;
        }
            xhr.send('get_all_rooms');
        } 

        window.onload = function(){
            get_all_rooms();
        }


        let edit_room_form = document.getElementById('edit_room_form');

        function edit_details(id)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                let data = JSON.parse(this.responseText);
                edit_room_form.elements['name'].value = data.roomdata.name;
                edit_room_form.elements['price'].value = data.roomdata.price;
                edit_room_form.elements['quantity'].value = data.roomdata.quantity;
                edit_room_form.elements['adult'].value = data.roomdata.adult;
                edit_room_form.elements['children'].value = data.roomdata.children;
                edit_room_form.elements['room_id'].value = data.roomdata.id;
             
               
                edit_room_form.elements['facilities'].forEach(el =>{
                    if(data.facilities.include(Number(el.value))){
                        el.checked = true;
                    }
                });
            }
            xhr.send('get_room='+id);
        }

        edit_room_form.addEventListener('submit',function(e){
            e.preventDefault();
            submit_edit_rooms();
        });
     
          
           function submit_edit_rooms()
               {
                    let data = new FormData();
                    data.append('edit_room','');
                    data.append('room_id',edit_room_form.elements['room_id'].value);
                    data.append('name',edit_room_form.elements['name'].value);
                    data.append('price',edit_room_form.elements['price'].value);
                    data.append('quantity',edit_room_form.elements['quantity'].value);
                    data.append('adult',edit_room_form.elements['adult'].value);
                    data.append('children',edit_room_form.elements['children'].value);

                    let facilities = [];
                    edit_room_form.elements['facilities'].forEach(el =>{
                        if(el.checked){
                            facilities.push(el.value);
                        }
                    });
                    
                    data.append('facilities',JSON.stringify(facilities));

                    let xhr = new XMLHttpRequest();
                    xhr.open("POST","ajax/rooms.php",true);

                    xhr.onload = function(){
                     var myModal = document.getElementById('edit-room');
                     var modal = bootstrap.Modal.getInstance(myModal);
                     modal.hide();
                    
                    if(this.responseText == 1){
                        alert('success','Room data edited!');
                        edit_room_form.reset();
                        get_all_rooms();
                       
                    }
                    else{
                        alert('error','Server Down!');     
                    }
                    }
                    xhr.send(data);
                }




        function toggle_status(id,val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
             if(this.responseText==1){
                alert('success','Status toggled!');
                get_all_rooms();
             }
             else{
                alert('error','Server Down!');
             }
        }
            xhr.send('toggle_status='+id+'&value='+val);
        } 

        let add_image_form = document.getElementById('add_image_form');
        
        add_image_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_image();
        });

 
       function add_image()
       {
         let data = new FormData();
         data.append('image',add_image_form.elements['image'].files[0]);
         data.append('room_id',add_image_form.elements['room_id'].value);
         data.append('add_image','');
    
         let xhr = new XMLHttpRequest();
         xhr.open("POST","ajax/rooms.php",true);
    
          xhr.onload = function()
          {
    
            if(this.responseText =='inv.img'){
                alert('error','Only JPG,WEBP or PNG images are supported!');
            }
            else if(this.responseText =='inv_size'){
                alert('error','Image should be less than 2MB');
            }
            else if(this.responseText =='upd_failed'){
                alert('error','Image upload failed. Server Down!');
            }
            else{
                alert('success', ' New Image added successfully','image-alert');
                add_image_form.reset();
            }
        }
    
         xhr.send(data);
       }


       function room_images(id,rname)
       {
        document.querySelector("#room-images .modal-title").innerText = rname;
        add_image_form.elements['room_id'].value = id;
       }

        window.onload = function()
        {
            get_all_rooms();
        }