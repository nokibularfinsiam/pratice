function valdf(){

    let notify = document.getElementById('notify').value;
    
    if(notify == ""){
    document.getElementById('print').innerHTML ="fill all the section!";
    return false;
}
else{
    let status = notification(notify);
    
    if (status){
        document.getElementById('print').innerHTML = "Notification successfully delivered";
        return true;
    }else{
        document.getElementById('print').innerHTML = "Invalied";
    }
}
}