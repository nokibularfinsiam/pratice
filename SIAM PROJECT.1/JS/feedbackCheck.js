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
const email = document.getElementById('email').value;
const feedbackText = document.getElementById('feedback').value;

if (email === "" || feedbackText === "") {
    document.getElementById('print').innerHTML ="Fill all the sections!";
    return false;
} else {
    if (!emailValidation(email)) {
        document.getElementById('print').innerHTML ="Invalid email. Use format example@gmail.com!";
        return false;
    }
        else {
            const status = feedback(email, feedbackText);

            if (status) {
                // Assuming you have a flag variable in your JavaScript code
                //flag = true;
                document.getElementById('print1').innerHTML ="Thank you for your feedback";
                return true;
            } //else {
                //console.log("Invalid user!");
            //}
        }
}
 
}   
