
let general_data, contacts_data;
let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

let contacts_s_form = document.getElementById('contacts_s_form');

let team_s_form = document.getElementById('team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_picture_inp = document.getElementById('member_picture_inp'); 
            
function get_general()
    {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');
               
        let shutdown_toggle = document.getElementById('shutdown-toggle');

        let xhr =new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');

        xhr.onload = function(){
            general_data = JSON.parse(this.responseText);
                    
            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

                    if(general_data.shutdown ==0){
                        shutdown_toggle.checked = false;
                        shutdown_toggle.value = 0;
                    }
                    else{
                        shutdown_toggle.checked = true;
                        shutdown_toggle.value = 1;
                    }
                }


                xhr.send('get_general');
            }

            general_s_form.addEventListener('submit',function(e){
                e.preventDefault();
                upd_general(site_title_inp.value, site_about_inp.value);
            });


            function upd_general(site_title_val, site_about_val)
            {
                let xhr =new XMLHttpRequest();
                xhr.open("POST","ajax/settings_crud.php",true);
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');

                xhr.onload = function(){

                    var myModal = document.getElementById('general-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();

                    if(this.responseText =1)
                    {
                        alert('success', 'Changes saved!');
                        get_general();
                    }
                    else
                    {
                        alert('ERROR', ' No Changes made!');
                    }
                }


                xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
            }

            function upd_shutdown(val)
            {
                let xhr =new XMLHttpRequest();
                xhr.open("POST","ajax/settings_crud.php",true);
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');

                xhr.onload = function(){
                    if(this.responseText ==1 && general_data.shutdown==0)
                    {
                        alert('success', 'Site is shutdown!');
                       
                    }
                    else
                    {
                        alert('Success', ' Shutdown mode deactivated!');
                    }
                    get_general();
                }


                xhr.send('upd_shutdown='+ val);
            }


            function get_contacts()
            {

                let contacts_p_id = ['address','gmap', 'pn1','pn2','email','fb','insta'];
                let iframe = document.getElementById('iframe');
           
                let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/settings_crud.php",true);
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');


                xhr.onload = function(){
                   contacts_data = JSON.parse(this.responseText);
                   contacts_data = Object.values(contacts_data);

                   for(i=o;i<contacts_p_id.length;i++){
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
                   }
                   iframe.src = contacts_data[8];
                   contacts_inp(contacats_data);

             }


                xhr.send('get_contacts');
            }

            function contacts_inp(data)
            {
                let contact_inp_id= ['address_inp','gmap_inp', 'pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','iframe_inp'];
                for(i=0;i<contacts_inp_id.length;i++){
                    document.getElementById(contact_inp_id[i]).value= data[i+1]
                }
            }

            contact_s_form.addEventListener('submit',function(e){
                e.preventDefault();
                upd_contacts();
            });

            function upd_contacts()
            {
                let index =['address','gmap','pn1','pn2','email','fb','insta','tw','iframe'];
                let contacts_inp_id =['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];

                let data_str="";

                for(i=0;i<index.length;i++){
                  data_str += index[i] + "=" + document.getElementById(contacat_inp_id[i]).value;

                }

                data_str += "upd_contacats";

                let xhr =new XMLHttpRequest();
                xhr.open("POST","ajax/settings_crud.php",true);
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlendcode');

                xhrr.onload = function(){
                    var myModal = document.getElementById('contacts-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();
                    if(this.responseText ==1)
                    {
                        alert('success', 'Changes saved!');
                       get_contacats();
                    }
                    else
                    {
                        alert('Error', ' No changes made!');
                    }
                    

                }

                xhr.send(data_str);

            }

            window.onload = function(){
                get_general();
                get_contacts();
            }
        

