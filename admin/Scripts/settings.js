let general_data;

function get_general()
{
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');

   

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Contacat_Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;
        
    }
}

window.onload = function(){
    get_general();
}