function myFunctionOpen() {
    var element = document.getElementById("sidebar");
    element.classList.remove("of");
    var element = document.getElementById("swicth-on");
    element.classList.remove("on");
    element.classList.add("of")
    var element = document.getElementById("swicth-of");
    element.classList.remove("of");
}

function myFunctionClose() {
    var element = document.getElementById("sidebar");
    element.classList.add("of");
    var element = document.getElementById("swicth-on");
    element.classList.remove("of");
    element.classList.add("on")
    var element = document.getElementById("swicth-of");
    element.classList.add("of");
}