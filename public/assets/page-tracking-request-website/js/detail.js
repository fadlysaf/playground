/**
 * detail.js
 * Logic untuk index.blade.php (halaman detail): baca ?id= dari URL, tampilkan data,
 * dan hubungkan tombol edit/delete.
 */
(function () {
    function init() {
        let id = TrackingUtils.getQueryParam("id");
        if (!id) {
            const all = TrackingDB.getAll();
            if (all && all.length > 0) {
                id = all[0].id;
            }
        }
        if (!id) {
            window.location.href = window.APP_URLS.list;
            return;
        }
        const record = TrackingDB.getById(id);
        if (!record) {
            alert("Request not found.");
            window.location.href = window.APP_URLS.list;
            return;
        }
        render(record);
        bindActions(record);
        TrackingUtils.initSidebar(id);
    }

    function setText(sel, text) {
        const el = document.querySelector(sel);
        if (el) el.textContent = text;
    }

    function render(r) {
        const U = TrackingUtils;

        setText(".meta-req", r.id);

        const typeBadge = document.querySelector(".badge-promo");
        if (typeBadge) {
            typeBadge.className = `badge-type ${U.getTypeClass(r.type)}`;
            typeBadge.textContent = r.type;
        }

        const statusBadge = document.querySelector(".badge-progress");
        if (statusBadge) {
            const info = U.getStatusInfo(r.status);
            statusBadge.className = `table-status ${info.class}`;
            statusBadge.innerHTML = `<i class="${info.icon} icon-small"></i> ${U.escapeHtml(r.status)}`;
        }

        setText(".main-title", r.productPage);

        // Isi setiap info-group berdasarkan teks label-nya, supaya tidak tergantung urutan DOM
        document.querySelectorAll(".info-group").forEach((g) => {
            const label = g.querySelector("label");
            const p = g.querySelector("p");
            if (!label || !p) return;

            switch (label.textContent.trim()) {
                case "DATE":
                    p.textContent = U.formatDateDisplay(r.date);
                    break;
                case "REQUEST IN DATE":
                    p.textContent = U.formatDateDisplay(r.reqInDate);
                    break;
                case "DUE DATE":
                    p.textContent = U.formatDateDisplay(r.dueDate);
                    break;
                case "COMPLETE DATE":
                    p.textContent = r.completeDate
                        ? U.formatDateDisplay(r.completeDate)
                        : "—";
                    p.classList.toggle("empty-dash", !r.completeDate);
                    break;
                case "METHOD":
                    p.textContent = r.method || "—";
                    break;
                case "CAMPAIGN TYPE":
                    p.textContent = r.campaignType || "—";
                    break;
                case "PRODUCT / PROMO PAGE":
                    p.textContent = r.productPage || "—";
                    break;
                case "REQUESTOR":
                    p.textContent = r.requestor || "—";
                    break;
                case "DEPARTMENT OWNER":
                    p.textContent = r.deptOwner || "—";
                    break;
                case "PIC":
                    p.textContent = r.pic || "—";
                    break;
            }
        });

        const notesEl = document.querySelector(".notes-content p");
        if (notesEl) notesEl.textContent = r.notes || "No notes provided.";

        const urlCard = document.querySelector(".url-content");
        if (urlCard) {
            urlCard.innerHTML = r.url
                ? `<a href="${U.escapeHtml(r.url)}" target="_blank" rel="noopener" class="url-link"><span>${U.escapeHtml(r.url)}</span><i class="fa-solid fa-arrow-up-right-from-square icon-link"></i></a>`
                : `<p class="empty-dash">—</p>`;
        }

        document.title = `${r.id} — ${r.productPage}`;
    }

    function bindActions(r) {
        const editBtn = document.querySelector(".btn-edit");
        if (editBtn)
            editBtn.href = `${window.APP_URLS.form}?id=${encodeURIComponent(r.id)}`;

        const deleteBtn = document.querySelector(".btn-delete");
        if (deleteBtn) {
            deleteBtn.addEventListener("click", () => {
                if (
                    confirm(
                        `Delete request ${r.id}? This action cannot be undone.`,
                    )
                ) {
                    TrackingDB.remove(r.id);
                    window.location.href = window.APP_URLS.list;
                }
            });
        }
    }

    document.addEventListener("DOMContentLoaded", init);
})();
