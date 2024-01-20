
function getInput() {
    var nbP = +document.getElementById("distance").value;
    var inputContainer = document.getElementById("text1");

    for (var i = 0; i < nbP; i++) {
        var newForm = document.createElement("input");
        newForm.setAttribute("type", "text");
        newForm.setAttribute("id", "form"+i);
        inputContainer.appendChild(newForm);
        inputContainer.appendChild(document.createElement("br"));
    }
}
