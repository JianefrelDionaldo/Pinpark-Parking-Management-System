function showPass(userPass, show, hide) {
  userPass = document.getElementById("user-pass");
  show = document.getElementById("hide-1");
  hide = document.getElementById("hide-2");

  if (userPass.type === "password") {
    userPass.type = "text";
    show.style.display = "inline-block";
    hide.style.display = "none";
  } else {
    userPass.type = "password";
    show.style.display = "none";
    hide.style.display = "inline-block";
  }
}

// Form Validation
const userEmailAcc = document.getElementById("user-email");
const pass = document.getElementById("user-pass");
const loginForm = document.getElementById("loginForm");
const errElement = document.getElementById("errorElement");

// * Function to update color in real time

function updateBorderColor(inputElement, isValid) {
  if (isValid) {
    inputElement.style.borderColor = "green";
    inputElement.style.borderWidth = "2px";
  } else {
    inputElement.style.borderColor = "red";
    inputElement.style.borderWidth = "2px";
  }
}

// * Event Listener for userEmailAcc Input

userEmailAcc.addEventListener("input", () => {
  updateBorderColor(userEmailAcc, userEmailAcc.value !== "");
});

// * Event Listener for pass Input

pass.addEventListener("input", () => {
  updateBorderColor(pass, pass.value !== "");
});

// * Event Listener for form submission

loginForm.addEventListener("submit", (e) => {
  let errMssg = [];

  // if (userEmailAcc.value === "admin123" && pass.value === "admin123") {
  //   window.open("http://localhost/Pinpark/Admin/index.php");
  //   (window.location.href = "_self"), "/../Admin/index.php";
  //   window.location.href = "../../../Admin/index.php";
  //   return;
  // }

  if (
    userEmailAcc.value.trim() === "" ||
    pass.value === "" ||
    pass.value == null
  ) {
    errMssg.push("Username & password are required!");
    updateBorderColor(userEmailAcc, false);
    updateBorderColor(pass, false);
  } else if (pass.value === "" || pass.value == null) {
    errMssg.push("Please enter a password");
    updateBorderColor(pass, false);
  } else if (pass.value.length <= 8) {
    if (userEmailAcc.value !== "") {
      updateBorderColor(userEmailAcc, true);
    }
    errMssg.push("Password must be longer than 8 characters");
    updateBorderColor(pass, false);
  } else if (pass.value.length >= 20) {
    errMssg.push("Password must be less than 20 characeters");
    updateBorderColor(pass, false);
  } else {
    updateBorderColor(userEmailAcc, true);
    updateBorderColor(pass, true);
  }

  if (errMssg.length > 0) {
    e.preventDefault();
    errElement.innerText = errMssg.join(", ");
  }
  // e.preventDefault();
});
