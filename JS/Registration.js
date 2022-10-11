
let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);

let username = id("firstname"),
    lastname = id("lastname");
    address = id("address");
    email = id("email"),
    password = id("password"),
    password1 = id("Confirm Password");
    form = id("form"),
    errorMsg = classes("error"),
    successIcon = classes("success-icon"),
    failureIcon = classes("failure-icon");

// Adding the submit event Listener

form.addEventListener("submit", (e) => {
    // e.preventDefault();
    engine(firstname, 0, "First name cannot be blank");
    engine(lastname, 1,"Last name cannot be blank")
    engine(email, 3, "Email cannot be blank");
    engine(address, 2, "Enter your Address");
    engine(password1, 4, "Enter your Password");
    engine(password, 5, "Password cannot be blank");
});


// engine function which will do all the works

let engine = (id, serial, message) => {
    if (id.value.trim() === "") {
        errorMsg[serial].innerHTML = message;
        id.style.border = "2px solid red";

        // icons
        failureIcon[serial].style.opacity = "1";
        successIcon[serial].style.opacity = "0";
    } else {
        errorMsg[serial].innerHTML = "";
        id.style.border = "2px solid green";

        // icons
        failureIcon[serial].style.opacity = "0";
        successIcon[serial].style.opacity = "1";
    }
};
