function usernameValidation(username) {
    for (let i = 0; i < username.length; i++) {
        let char = username[i];

        if (!rqLetterNumber(char)) {
            return false;
        }
    }
    return true;
}

function rqLetterNumber(char) {
    return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || !isNaN(char);
}

function passwordValidation(password) {
    let specialCharacters = "!@#$%^&*(),.?\":{}|<>";

    return (password.length >= 6 && [...password].some(char => specialCharacters.includes(char)));
}

function validationform(){

let username = document.getElementById('username').value;
let password = document.getElementById('password').value;

if (username === "" || password === "") {
    document.getElementById('print').innerHTML = 'Write username and password!';
    return false;
} else {
            if (!usernameValidation(username)) {
                document.getElementById( 'print').innerHTML = 'Invalid username. Use letters and numeric number!';
                return false;
            } else {
                    if (!passwordValidation(password)) {
                        document.getElementById('print').innerHTML = 'Invalid password. Use at least 6 characters and numeric number!';
                        return false;
                    } else {
                                return true;
                            }
                        }
                    }
                }

function redirectToLoginPage() {
    window.location.href = '../View/VarifiedUserIndex.php';
}



