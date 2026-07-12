/**
 * form.js
 * Logic untuk form.blade.php: mode create (tanpa ?id=) & mode edit (dengan ?id=REQ-xxx).
 */
(function () {
    function getFieldMap(form) {
        return {
            date: form.querySelector('[name="date"]'),
            reqInDate: form.querySelector('[name="reqInDate"]'),
            type: form.querySelector('[name="type"]'),
            method: form.querySelector('[name="method"]'),
            productPage: form.querySelector('[name="productPage"]'),
            requestor: form.querySelector('[name="requestor"]'),
            deptOwner: form.querySelector('[name="deptOwner"]'),
            pic: form.querySelector('[name="pic"]'),
            campaignType: form.querySelector('[name="campaignType"]'),
            dueDate: form.querySelector('[name="dueDate"]'),
            notes: form.querySelector('[name="notes"]'),
            status: form.querySelector('[name="status"]'),
            completeDate: form.querySelector('[name="completeDate"]'),
            url: form.querySelector('[name="url"]'),
        };
    }

    function init() {
        const form = document.querySelector(".request-form-box");
        if (!form) return;

        const fields = getFieldMap(form);
        const id = TrackingUtils.getQueryParam("id");
        const titleEl = document.querySelector(".form-main-title");

        if (id) {
            const record = TrackingDB.getById(id);
            if (!record) {
                alert("Request not found.");
                window.location.href = window.APP_URLS.list;
                return;
            }
            if (titleEl) titleEl.textContent = `Edit Request — ${record.id}`;
            populateForm(fields, record);
        } else {
            // Mode create: default tanggal ke hari ini
            fields.date.value = new Date().toISOString().slice(0, 10);
        }

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            const errors = validate(fields);
            if (errors.length) {
                alert(errors.join("\n"));
                return;
            }
            const data = collectData(fields);
            if (id) {
                TrackingDB.update(id, data);
            } else {
                TrackingDB.create(data);
            }
            window.location.href = window.APP_URLS.list;
        });

        TrackingUtils.initSidebar(id);
    }

    function populateForm(fields, record) {
        fields.date.value = record.date || "";
        fields.reqInDate.value = record.reqInDate || "";
        fields.type.value = record.type || "";
        fields.method.value = record.method || "";
        fields.productPage.value = record.productPage || "";
        fields.requestor.value = record.requestor || "";
        fields.deptOwner.value = record.deptOwner || "";
        fields.pic.value = record.pic || "";
        fields.campaignType.value = record.campaignType || "";
        fields.dueDate.value = record.dueDate || "";
        fields.notes.value = record.notes || "";
        fields.status.value = record.status || "Pending";
        fields.completeDate.value = record.completeDate || "";
        fields.url.value = record.url || "";
    }

    function collectData(fields) {
        return {
            date: fields.date.value,
            reqInDate: fields.reqInDate.value,
            type: fields.type.value,
            method: fields.method.value,
            productPage: fields.productPage.value.trim(),
            requestor: fields.requestor.value.trim(),
            deptOwner: fields.deptOwner.value.trim(),
            pic: fields.pic.value.trim(),
            campaignType: fields.campaignType.value.trim(),
            dueDate: fields.dueDate.value,
            notes: fields.notes.value.trim(),
            status: fields.status.value,
            completeDate: fields.completeDate.value,
            url: fields.url.value.trim(),
        };
    }

    function validate(fields) {
        const errors = [];
        if (!fields.date.value) errors.push("Date is required.");
        if (!fields.type.value) errors.push("Request type is required.");
        if (!fields.method.value) errors.push("Method is required.");
        if (!fields.productPage.value.trim())
            errors.push("Product / Promo page is required.");
        if (!fields.requestor.value.trim())
            errors.push("Requestor is required.");
        return errors;
    }

    document.addEventListener("DOMContentLoaded", init);
})();
