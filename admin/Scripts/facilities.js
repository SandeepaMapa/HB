
            let facilities_s_form = document.getElementById('facilities_s_form');

              facilities_s_form.addEventListener('submit',function(e)
                {
                e.preventDefault();
                add_facilities();
            });

            
        function add_facilities()
            {
                let data = new FormData();
                data.append('name',facilities_s_form.elements['facilities_name'].value);
                data.append('add_facilities','');

                let xhr=new XMLHttpRequest();
                xhr.open("POST","ajax/facilities.php",true);

                xhr.onload = function(){
                var myModal = document.getElementById('facilities-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                
                if(this.responseText = 1){
                    alert('success','New facility added!');
                    feature_s_form.elements['facilities_name'].value='';
                    get_facilities();
                }
                else{
                    alert('error','Server Down!');     
                }
                }
                xhr.send(data);
            }


       
        function get_facilities()
            {
                let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/facilities.php",true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function(){
                 document.getElementById('facilities-data').innerHTML = this.responseText;
            }
                xhr.send('get_facilities');
            } 
               


            function rem_facilities(val){
                let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/facilities.php",true);
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            
                xhr.onload = function(){
                if(this.responseText = 1){
                    alert('success','New facility removed!');
                    get_facilities();
                }
                else if(this.responseText = 'room_added'){
                    alert('error','facility is added in room !');
                }
                else{
                    alert('error','Server Down!');     
                }
                }
                xhr.send('rem_facilities='+val);
            }
            
                window.onload = function(){
                 get_facilities();
            }

 