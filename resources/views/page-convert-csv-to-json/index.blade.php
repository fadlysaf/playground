@extends('app')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1>Convert CSV / Excel to JSON</h1>
            <form id="csv-form">
                <label for="csv-input">Upload File:</label>
                <input class="form-control" type="file" id="csv-input" accept=".csv, .xlsx, .xls, .xlsv">
                <div class="button-group">
                    <button id="convert-btn" type="submit" disabled>Convert</button>
                    <button id="download-btn" type="button" disabled>Download JSON</button>
                </div>
            </form>
            <h2>JSON Output:</h2>
            <pre id="json-output"></pre>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/protobufjs/dist/protobuf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>
    <script>
        const fileInput = document.getElementById('csv-input');
        const convertBtn = document.getElementById('convert-btn');
        const downloadBtn = document.getElementById('download-btn');
        const jsonOutput = document.getElementById('json-output');
        const csvForm = document.getElementById('csv-form');

        let JsonResult = null;
        let selectedFile = null;

        function csvToJson(csvText) {
            const lines = csvText
                .split(/\r\n|\n/)
                .filter(line => line.trim() !== '');

            const headers = lines[0].split(',').map(h => h.trim());

            const result = [];

            for (let i = 1; i < lines.length; i++) {
                const currentLine = lines[i].split(',');
                const obj = {};

                headers.forEach((header, index) => {
                    obj[header] = currentLine[index] ? currentLine[index].trim() : '';
                });

                result.push(obj);
            }
            return result;
        }

        fileInput.addEventListener('change', (event) => {
            selectedFile = event.target.files[0];
            if (!selectedFile) {
                convertBtn.disabled = true;
                return;
            }

            const name = selectedFile.name.toLowerCase();
            if (name.endsWith('.csv') || name.endsWith('.xlsx') || name.endsWith('.xls') || name.endsWith('.xlsv')) {
                convertBtn.disabled = false;
            } else {
                alert('Please upload a valid CSV or Excel file.');
                convertBtn.disabled = true;
                fileInput.value = '';
            }
        });

        csvForm.addEventListener('submit', (event) => {
            event.preventDefault();
            if (!selectedFile) return;

            const reader = new FileReader();
            const name = selectedFile.name.toLowerCase();

            if (name.endsWith('.csv')) {
                reader.onload = (e) => {
                    const csvText = e.target.result;
                    JsonResult = csvToJson(csvText);
                    displayJson(JsonResult);
                };
                reader.onerror = (e) => {
                    alert('Error reading file: ' + e.target.error);
                };
                reader.readAsText(selectedFile);
            } else if (name.endsWith('.xlsx') || name.endsWith('.xls') || name.endsWith('.xlsv')) {
                reader.onload = (e) => {
                    try {
                        const data = new Uint8Array(e.target.result);
                        const workbook = XLSX.read(data, { type: 'array' });
                        const firstSheetName = workbook.SheetNames[0];
                        const worksheet = workbook.Sheets[firstSheetName];
                        JsonResult = XLSX.utils.sheet_to_json(worksheet, { defval: "" });
                        displayJson(JsonResult);
                    } catch (err) {
                        alert('Error parsing Excel file: ' + err.message);
                    }
                };
                reader.onerror = (e) => {
                    alert('Error reading file: ' + e.target.error);
                };
                reader.readAsArrayBuffer(selectedFile);
            }
        });

        function displayJson(data) {
            if (jsonOutput) {
                jsonOutput.textContent = JSON.stringify(data, null, 2);
            }
            downloadBtn.disabled = false;
        }

        downloadBtn.addEventListener('click', (event) => {
            event.preventDefault();
            if (!JsonResult) {
                alert('Please convert a file first.');
                return;
            }
            const jsonString = JSON.stringify(JsonResult, null, 2);

            const blob = new Blob([jsonString], {
                type: 'application/json'
            });

            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = 'output.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            URL.revokeObjectURL(url);
        });
    </script>
@endpush
