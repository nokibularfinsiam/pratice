function emailValidation(email) {
    let countA = 0;
    let countD = 0;

    for (let i = 0; i < email.length; i++) {
        if (email[i] === '@') {
            countA++;
        } else if (email[i] === '.') {
            countD++;
        }
    }

    return (countA === 1 && countD >= 1);
}
function vldf(){
let email = document.getElementById('email').value;
let feedback = document.getElementById('feedback').value;
console.log(email);

if (email === "" || feedback === "") {
    document.getElementById('print').innerHTML ="Fill all the sections!";

} else if (!emailValidation(email)) {
        document.getElementById('print').innerHTML ="Invalid email. Use format example@gmail.com!";
}else{
    
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/feedbackCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            document.getElementById('print1').innerHTML = this.responseText;
            console.log(this.responseText);
        }
    }
     let params = 'email=' + email + '&feedback=' + feedback;

    xhttp.send(params);
}
 
}   
