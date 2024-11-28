function appendValue(value) {
    document.getElementById("result").value += value;
}

function clearResult() {
    document.getElementById("result").value = "";
}

function calculate() {
    try {
        const input = document.getElementById("result").value;
        const result = eval(input); 
        document.getElementById("result").value = result;
    } catch (error) {
        alert("Invalid expression!");
    }
}