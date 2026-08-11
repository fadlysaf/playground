const fileInput = document.getElementById("csv-input");
const convertBtn = document.getElementById("convert-btn");
const downloadBtn = document.getElementById("download-btn");
const jsonOutput = document.getElementById("json-output");

let jsonResult = null;
let selectedFile = null;

function csvToJson(csvText) {
    const lines = csvText
        .split(/\r\n|\n/)
        .filter((line) => line.trim() !== "");

    const headers = lines[0].split(",").map((header) => header.trim());
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
    selectedFile = event.target.files[0];

    if (!selectedFile) {
        convertBtn.disabled = true;
        return;
    }

    const name = selectedFile.name.toLowerCase();
    if (name.endsWith(".csv") || name.endsWith(".xlsx") || name.endsWith(".xls") || name.endsWith(".xlsv")) {
        convertBtn.disabled = false;
    } else {
        alert("Please upload a valid CSV or Excel file.");
        convertBtn.disabled = true;
        fileInput.value = "";
    }
});

document.getElementById("csv-form").addEventListener("submit", (event) => {
    event.preventDefault();

    if (!selectedFile) return;

    const reader = new FileReader();
    const name = selectedFile.name.toLowerCase();

    if (name.endsWith(".csv")) {
        reader.onload = (e) => {
            const csvText = e.target.result;
            jsonResult = csvToJson(csvText);
            jsonOutput.textContent = JSON.stringify(jsonResult, null, 2);
            downloadBtn.disabled = false;
        };
        reader.onerror = (e) => {
            alert("Error reading file: " + e.target.error);
        };
        reader.readAsText(selectedFile);
        return;
    }

    if (name.endsWith(".xlsx") || name.endsWith(".xls") || name.endsWith(".xlsv")) {
        reader.onload = (e) => {
            try {
                const data = new Uint8Array(e.target.result);
                const workbook = XLSX.read(data, { type: "array" });
                const firstSheetName = workbook.SheetNames[0];
                const worksheet = workbook.Sheets[firstSheetName];
                jsonResult = XLSX.utils.sheet_to_json(worksheet, { defval: "" });
                jsonOutput.textContent = JSON.stringify(jsonResult, null, 2);
                downloadBtn.disabled = false;
            } catch (err) {
                alert("Error parsing Excel file: " + err.message);
            }
        };
        reader.onerror = (e) => {
            alert("Error reading file: " + e.target.error);
        };
        reader.readAsArrayBuffer(selectedFile);
    }
});

downloadBtn.addEventListener("click", (event) => {
    event.preventDefault();

    if (!jsonResult) {
        alert("Please convert a file first.");
        return;
    }

    const jsonString = JSON.stringify(jsonResult, null, 2);
    const blob = new Blob([jsonString], { type: "application/json" });
    const url = URL.createObjectURL(blob);

    const a = document.createElement("a");
    a.href = url;
    a.download = "output.json";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);

    URL.revokeObjectURL(url);
});
