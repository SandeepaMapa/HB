let add_room_form = document.getElementById('add_room_form');

    add_room_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_rooms();
    });

            function add_rooms()
               {
                    let data = new FormData();
                    data.append('add_room','');
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
                     var myModal = document.getElementById('add-room');
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
                    if(data.facilities.include(el.value)){
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

        window.onload = function()
        {
            get_all_rooms();
        }