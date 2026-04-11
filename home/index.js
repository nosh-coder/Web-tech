function collectData() {
    let fname = document.getElementById("Fname").value.trim();
    let lname = document.getElementById("Lname").value.trim();

    // Reset previous errors
    document.getElementById("Ferror").innerText = "";
    document.getElementById("Lerror").innerText = "";

    // Validation
    if (fname === "" || lname === "") {
        alert("Both fields must NOT be empty.");
        return false; // prevent form submission
    }

    if (fname.length < 2) {
        document.getElementById("Ferror").innerText = "First name must have at least 2 characters.";
        alert("First name must have at least 2 characters.");
        return false;
    }

    if (lname.length < 2) {
        document.getElementById("Lerror").innerText = "Last name must have at least 2 characters.";
        alert("Last name must have at least 2 characters.");
        return false;
    }

    // If all validation is correct
    return true; // allow submission
}