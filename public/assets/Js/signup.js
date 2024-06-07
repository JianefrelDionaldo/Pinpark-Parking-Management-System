// Sign Up Input Validation
const signUpForm = document.getElementById("signupForm");
const signUpFullname = document.getElementById("fullnameSignup");
const signUpEmail = document.getElementById("emailSignup");
const signUpUsername = document.getElementById("usernameSignup");
const signUpPass = document.getElementById("passSignup");
const signUpRptPass = document.getElementById("repeatPassSignup");
const signUpErrMssg = document.getElementById("errorMssgSignUp");

// Reveal the password
function showPass(userPass, show, hide) {
  userPass = document.getElementById("passSignup");
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

// Reveal the password confirmation
function showRptPass(rptPass, rvlPass, blkPass) {
  rptPass = document.getElementById("repeatPassSignup");
  rvlPass = document.getElementById("hide1");
  blkPass = document.getElementById("hide2");

  if (rptPass.type === "password") {
    rptPass.type = "text";
    rvlPass.style.display = "inline-block";
    blkPass.style.display = "none";
  } else {
    rptPass.type = "password";
    rvlPass.style.display = "none";
    blkPass.style.display = "inline-block";
  }
}

// Submit Login Validation
signUpForm.addEventListener("submit", (e) => {
  const isValidEmail = (email) => {
    const emailPattern =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailPattern.test(String(email).toLowerCase());
  };

  const isStrongPassword = (password) => {
    //  Passowrd Format:
    //  - Minimum length: 12 characters
    //  - Include at least one uppercase letter
    //  - Include at least one or more lowercase letters
    //  - Include at least one or more numbers
    //  - Include at least one special character
    //  - Avoid using common words, phrases, or easily guessable information

    const hasMinimumLength = password.length >= 12;
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]+/.test(password);
    const hasNumber = /\d+/.test(password);
    const hasSpecialCharacter = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    const isNotCommonWord = ![
      "password",
      "123456",
      "qwerty",
      "letmein",
      "admin",
    ].some((word) => password.toLowerCase().includes(word));

    return (
      hasMinimumLength &&
      hasUppercase &&
      hasLowercase &&
      hasNumber &&
      hasSpecialCharacter &&
      isNotCommonWord
    );
  };

  const isEmptyInput = () => {
    const inputs = [
      signUpFullname,
      signUpEmail,
      signUpUsername,
      signUpPass,
      signUpRptPass,
    ];
    const areAllInputsEmpty = inputs.every(
      (input) => input.value.trim() === "" || input.value === null
    );

    if (areAllInputsEmpty) {
      errorMssg.push("Fill up all inputs!");
      signUpErrMssg.innerHTML("Fill up all inputs!");
      inputs.forEach((input) => {
        input.style.borderColor = "red";
        input.style.borderWidth = "2px";
      });
      return true;
    }
    return false;
  };

  // User's Full Name Validation
  if (
    signUpFullname.value.trim() === "" ||
    signUpFullname.value.trim() === null
  ) {
    if (!isEmptyInput()) {
      errorMssg.push("Fill up Fullname");
    }
    errorMssg.push("Fill up Full Name!");
    signUpFullname.style.borderColor = "red";
    signUpFullname.style.borderWidth = "2px";
  } else {
    signUpFullname.style.borderColor = "green";
    signUpFullname.style.borderWidth = "2px";
  }

  //  User's Email Validation
  if (signUpEmail.value.trim() === "" || signUpEmail.value.trim() === null) {
    errorMssg.push("Fill up Email!");
    signUpEmail.style.borderColor = "red";
    signUpEmail.style.borderWidth = "2px";
  } else if (!isValidEmail(signUpEmail.value)) {
    errorMssg.push("Invalid Email Format!");
    signUpEmail.style.borderColor = "red";
    signUpEmail.style.borderWidth = "2px";
  } else {
    signUpEmail.style.borderColor = "green";
    signUpEmail.style.borderWidth = "2px";
  }

  // User's Username Validation
  if (
    signUpUsername.value.trim() === "" ||
    signUpUsername.value.trim() === null
  ) {
    errorMssg.push("Fill up Username!");
    signUpUsername.style.borderColor = "red";
    signUpUsername.style.borderWidth = "2px";
  } else {
    signUpUsername.style.borderColor = "green";
    signUpUsername.style.borderWidth = "2px";
  }

  //  User's Password Validation
  if (signUpPass.value.trim() === "" || signUpPass.value.trim() === null) {
    errorMssg.push("Fill up Password!");
    signUpPass.style.borderColor = "red";
    signUpPass.style.borderWidth = "2px";
  } else if (!isStrongPassword(signUpPass.value)) {
    errorMssg.push("Invalid Password Format!");
    signUpPass.style.borderColor = "red";
    signUpPass.style.borderWidth = "2px";
  } else {
    signUpPass.style.borderColor = "green";
    signUpPass.style.borderWidth = "2px";
  }

  //  User's Repeat Password Validation
  if (
    signUpRptPass.value.trim() === "" ||
    signUpRptPass.value.trim() === null
  ) {
    errorMssg.push("Fill up Repeat Password!");
    signUpRptPass.style.borderColor = "red";
    signUpRptPass.style.borderWidth = "2px";
  } else if (
    signUpRptPass.value !== signUpPass.value ||
    !isStrongPassword(signUpRptPass.value)
  ) {
    errorMssg.push("Password is unmatched!");
    signUpRptPass.style.borderColor = "red";
    signUpRptPass.style.borderWidth = "2px";
  } else {
    signUpRptPass.style.borderColor = "green";
    signUpRptPass.style.borderWidth = "2px";
  }

  const hasEmptyInputs = isEmptyInput();

  if (hasEmptyInputs || errorMssg.length > 0) {
    e.preventDefault();
    signUpErrMssg.innerText = errorMssg.join(", ");
  }
});
