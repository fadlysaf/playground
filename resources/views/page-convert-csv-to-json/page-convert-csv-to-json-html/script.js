const fileInput = document.getElementById("csv-input");
const convertbtn = document.getElementById("convert-btn");
const jsonOutput = document.getElementById("json-output");

let JsonResult = null;

function csvToJson(csvText) {
    const lines = csvText.split(/\r\n|\n/).filter((line) => line.trim() !== "");

    const headers = lines[0].split(",").map((h) => h.trim());

    const result = [];

    for (let i = 1; i < lines.length; i++) {
        const currentLine = lines[i].split(",");
        const obj = {};

        headers.forEach((header, index) => {
            obj[header] = currentLine[index] ? currentLine[index].trim() : "";
        });

        result.push(obj);
    }
    return result;
}

fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (!file) return;
    if (!file.name.toLowerCase().endsWith(".csv")) {
        alert("Please upload a valid CSV file.");
        return;
    }

    const reader = new FileReader();

    reader.onload = (e) => {
        const csvText = e.target.result;
        JsonResult = csvToJson(csvText);
        if (jsonOutput) {
            jsonOutput.textContent = JSON.stringify(JsonResult, null, 2);
        }
        convertbtn.disabled = false;
    };
    reader.onerror = function (e) {
        alert("Error reading file: " + e.target.error);
    };

    reader.readAsText(file);
});

convertbtn.addEventListener("click", (event) => {
    event.preventDefault();
    if (!JsonResult) {
        alert("Please upload a CSV file first.");
        return;
    }
    const jsonString = JSON.stringify(JsonResult, null, 2);

    const blob = new Blob([jsonString], {
        type: "application/json",
    });

    const url = URL.createObjectURL(blob);

    const now = new Date();
    const day = String(now.getDate()).padStart(2, '0');
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const year = now.getFullYear();

    const a = document.createElement("a");
    a.href = url;
    a.download = `${day}-${month}-${year}-output.json`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);

    URL.revokeObjectURL(url);
});
