console.log("connected");

let wrongSubmitCount = 0;

function collectData()
{
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    let valid = true;

    if (!email)
    {
        document.getElementById("emailError").innerHTML = "Email is required";
        valid = false;
    }
    else if (!email.includes("@"))
    {
        document.getElementById("emailError").innerHTML = "Email must contain @";
        valid = false;
    }
    else
    {
        document.getElementById("emailError").innerHTML = "";
    }

    if (!password)
    {
        document.getElementById("passwordError").innerHTML = "Password is required";
        valid = false;
    }
    else if (password.length < 6)
    {
        document.getElementById("passwordError").innerHTML = "Password needs to be of 6 characters";
        valid = false;
    }
    else if (!password.includes("#"))
    {
        document.getElementById("passwordError").innerHTML = "Password must have #";
        valid = false;
    }
    else
    {
        document.getElementById("passwordError").innerHTML = "";
    }

    if (!valid)
    {
        wrongSubmitCount++;
        document.getElementById("wrongCount").innerHTML =
            "Wrong Submit Count " + wrongSubmitCount;

        return false;
    }

    alert("Login Successful!");
    return true;
}