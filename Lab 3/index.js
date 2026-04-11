console.log("connected");

function analyzeText()
{
    const text = document.getElementById("inputText").value;

    const errorMsg = document.getElementById("errorMsg");
    const resultDiv = document.getElementById("result");

    errorMsg.innerHTML = "";

    if (text.trim() === "")
    {
        resultDiv.style.display = "none";
        errorMsg.innerHTML = "Please enter some text!";
        return;
    }

    const charCount = text.length;

    const words = text.trim().split(/\s+/);
    const wordCount = words.length;

    const reversedText = text.split("").reverse().join("");

    document.getElementById("charCount").innerHTML = charCount;
    document.getElementById("wordCount").innerHTML = wordCount;
    document.getElementById("reversedText").innerHTML = reversedText;

    resultDiv.style.display = "block";
}
