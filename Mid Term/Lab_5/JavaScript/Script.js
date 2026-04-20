function analyzeText() {
    var text = document.getElementById("textInput").value;

    var characterCount = text.length;

    var words = text.trim();
    var wordCount;

    if (words == "") {
        wordCount = 0;
    } else {
        wordCount = words.split(/\s+/).length;
    }

    var reversedText = text.split("").reverse().join("");

    document.getElementById("result").innerHTML =
        "<p>Total Characters: " + characterCount + "</p>" +
        "<p>Total Words: " + wordCount + "</p>" +
        "<p>Reversed Text: " + reversedText + "</p>";
}