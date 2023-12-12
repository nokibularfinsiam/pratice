function search_ajax(){
    let search = document.getElementById('search').value;

    
    if (search === '') {
        document.getElementById('h1').innerHTML = 'fill in search'; 
    } else{
        let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../view/booktable_Admin.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
   
            document.getElementById('info').innerHTML = this.responseText;
            console.log(this.responseText);

        }
    }

    xhttp.send('search='+search);
    }
}