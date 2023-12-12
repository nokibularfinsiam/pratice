function nameValidation(name) {
    for (let i = 0; i < name.length; i++) {
        const char = name[i];

        if (!rqLetter(char)) {
            return false;
        }
    }
    return true;
}

function rqLetter(char) {
    return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === ' ';
}

function phoneNumberValidation(phone) {
    const validFormat = ['013', '014', '015', '016', '017', '018', '019'];
    const position = phone.substring(0, 3);

    if (!validFormat.includes(position)) {
        return false;
    }

    if (!isNaN(phone) && phone.length === 11) {
        return true;
    }
}

function vldf(){
const name = document.getElementById('name').value;
const number = document.getElementById('number').value;
const date = document.getElementById('date').value;
const time = document.getElementById('time').value;
const guests = document.getElementById('guests').value;

if (name === "" || number === "" || date === "" || time === "" || guests === "") {
    document.getElementById('print').innerHTML="Fill all the sections!";
    return false;
} else {
    if (!nameValidation(name)) {
        document.getElementById('print').innerHTML="Invalid Name. Use only letters!";
        return false;
    } else {
        if (!phoneNumberValidation(number)) {
            document.getElementById('print').innerHTML="Invalid phone number. Must be 11 digits!";
            return false;
        } else {
            const status = bookTable(name, number, date, time, guests);

            if (status) {
                return true;
            } 
            }
        }
    }
}

