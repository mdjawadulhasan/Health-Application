function validateForm() {
    let fnameval = document.forms["signupForm"]["fname"].value;
    for (let i = 0; i < fnameval.length; i++) {

        if (fnameval[i] <= 65 || fnameval[i] >= 120) {
            alert("Invalid First Name");
            return false;
        }
    }


    let lnameval = document.forms["signupForm"]["lname"].value;
    for (let i = 0; i < lnameval.length; i++) {

        if (lnameval[i] <= 65 || lnameval[i] >= 120) {
            alert("Invalid last Name");
            return false;
        }
    }


    let ageval = document.forms["signupForm"]["age"].value;
    if ((ageval % 1 != 0) || isNaN(ageval)) {
        alert("Invalid Age");
        return false;
    }

    let user_nameval = document.forms["signupForm"]["user_name"].value;
    let count = 0;
    for (let i = 0; i < user_nameval.length; i++) {
        if (!isNaN(user_nameval)) {
            count++;
        }
    }

    if (count == user_nameval.length) {
        alert("Invalid User Name");
        return false;
    }


    let passval = document.forms["signupForm"]["user_pass"].value;
    if (passval.length < 5) {
        alert("Password is Too weak");
        return false;
    }




}