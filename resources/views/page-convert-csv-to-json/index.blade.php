@extends('app')

@section('content')
    <div class="container">
        <div class="form-content">
            <h1>Convert CSV to JSON</h1>
            <form id="csv-form">
                <label for="csv-input">CSV Input:</label>
                <input class="form-control" type="file" id="csv-input" accept=".csv">
                <button id="convert-btn" type="submit" disabled>Convert</button>
                <button id="download-btn" type="button" disabled>Download JSON</button>
            </form>

            <textarea id="csvTextarea" rows="8"
                style="width:100%; font-family: monospace; font-size:13px; padding:8px; box-sizing:border-box; margin-top:6px;"
                placeholder="entity_id,name,location.latitude&#10;dining-1,Sample Eatery 1,37.404570"></textarea>

            <h2>JSON Output:</h2>
            <pre id="json-output"></pre>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const fileInput = document.getElementById('csv-input');
        const csvTextarea = document.getElementById('csvTextarea');
        const convertbtn = document.getElementById('convert-btn');
        const downloadBtn = document.getElementById('download-btn');
        const jsonOutput = document.getElementById('json-output');

        let JsonResult = null;

        function parseValue(value) {
            const trimmed = value.trim();
            if (trimmed === '') return null;
            if (trimmed.toLowerCase() === 'true') return true;
            if (trimmed.toLowerCase() === 'false') return false;
            if (!isNaN(trimmed) && trimmed !== '') return Number(trimmed);
        }

        function setNestedValue(obj, path, value) {
            const keys = path.split('.');
            let current = obj;

            for (let i = 0; i < keys.length - 1; i++) {
                const key = keys[i];
                if (!current[key]) {
                    current[key] = {};
                }
                current = current[key];
            }

            current[keys[keys.length - 1]] = value;
        }

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
            const file = event.target.files[0];
            if (!file) return;
            if (!file.name.toLowerCase().endsWith('.csv')) {
                alert('Please upload a valid CSV file.');
                return;
            }

            const reader = new FileReader();

            reader.onload = (e) => {
                const csvText = e.target.result;
                JsonResult = csvToJson(csvText);
                if (jsonOutput) {
                    jsonOutput.textContent = JSON.stringify(JsonResult, null, 2);
                }
                downloadBtn.disabled = false;
            };
            reader.onerror = function(e) {
                alert('Error reading file: ' + e.target.error);
            };

            reader.readAsText(file);
        });

        downloadBtn.addEventListener('click', (event) => {
            event.preventDefault();
            if (!JsonResult) {
                alert('Please upload a CSV file first.');
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
