/**
 * list.js
 * Logic untuk table.blade.php: render tabel dari localStorage, search, filter pill,
 * sort kolom, dan hapus baris.
 */
(function () {
    const state = {
        search: "",
        statusFilter: "All",
        sortKey: "date",
        sortDir: "desc",
    };

    function init() {
        renderTable();
        bindSearch();
        bindFilterPills();
        bindSortableHeaders();
        bindTableActions();
    }

    function getFilteredSortedData() {
        let data = TrackingDB.getAll();

        if (state.statusFilter !== "All") {
            data = data.filter((r) => r.status === state.statusFilter);
        }

        if (state.search) {
            const q = state.search.toLowerCase();
            data = data.filter((r) =>
                [
                    r.id,
                    r.productPage,
                    r.requestor,
                    r.deptOwner,
                    r.pic,
                    r.campaignType,
                ]
                    .filter(Boolean)
                    .some((v) => String(v).toLowerCase().includes(q)),
            );
        }

        data.sort((a, b) => {
            const va = a[state.sortKey] || "";
            const vb = b[state.sortKey] || "";
            if (va < vb) return state.sortDir === "asc" ? -1 : 1;
            if (va > vb) return state.sortDir === "asc" ? 1 : -1;
            return 0;
        });

        return data;
    }

    function renderTable() {
        const tbody = document.getElementById("requestTableBody");
        const countEl = document.getElementById("resultsCount");
        if (!tbody) return;

        const data = getFilteredSortedData();
        if (countEl)
            countEl.textContent = `${data.length} request${data.length === 1 ? "" : "s"}`;

        if (data.length === 0) {
            tbody.innerHTML = `<tr><td colspan="15" class="text-center text-muted">No requests found.</td></tr>`;
            return;
        }

        tbody.innerHTML = data.map(rowTemplate).join("");
    }

    function rowTemplate(r) {
        const U = TrackingUtils;
        const typeClass = U.getTypeClass(r.type);
        const statusInfo = U.getStatusInfo(r.status);
        const urlCell = r.url
            ? `<a href="${U.escapeHtml(r.url)}" target="_blank" rel="noopener" class="table-link">${U.escapeHtml(U.shortenUrl(r.url))} <i class="fa-solid fa-arrow-up-right-from-square link-icon"></i></a>`
            : `<span class="text-muted">—</span>`;

        return `
            <tr data-id="${U.escapeHtml(r.id)}">
                <td><a href="${window.APP_URLS.detail}?id=${encodeURIComponent(r.id)}" class="table-link-id">${U.escapeHtml(r.id)}</a></td>
                <td>${U.formatDateDisplay(r.date)}</td>
                <td>${U.formatDateDisplay(r.reqInDate)}</td>
                <td><span class="badge-type ${typeClass}">${U.escapeHtml(r.type)}</span></td>
                <td><span class="badge-method ${r.method === 'New' || r.method === 'new' ? 'method-new' : 'method-update'}">${U.escapeHtml(r.method)}</span></td>
                <td class="text-semibold">${U.escapeHtml(r.productPage)}</td>
                <td>${U.escapeHtml(r.requestor)}</td>
                <td>${U.escapeHtml(r.deptOwner)}</td>
                <td>${U.escapeHtml(r.pic)}</td>
                <td>${U.escapeHtml(r.campaignType)}</td>
                <td>${U.formatDateDisplay(r.dueDate)}</td>
                <td><span class="table-status ${statusInfo.class}"><i class="${statusInfo.icon}"></i> ${U.escapeHtml(r.status)}</span></td>
                <td class="${r.completeDate ? "" : "text-muted"}">${r.completeDate ? U.formatDateDisplay(r.completeDate) : "—"}</td>
                <td>${urlCell}</td>
                <td>
                    <div class="table-actions">
                        <a href="${window.APP_URLS.form}?id=${encodeURIComponent(r.id)}" class="btn-table btn-table-edit"><i class="fa-solid fa-pen"></i></a>
                        <button type="button" class="btn-table btn-table-delete" data-id="${U.escapeHtml(r.id)}"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        `;
    }

    function bindSearch() {
        const input = document.querySelector(".search-input");
        if (!input) return;
        input.addEventListener(
            "input",
            TrackingUtils.debounce((e) => {
                state.search = e.target.value.trim();
                renderTable();
            }, 250),
        );
    }

    function bindFilterPills() {
        const pills = document.querySelectorAll(".filter-pill");
        pills.forEach((pill) => {
            pill.addEventListener("click", () => {
                pills.forEach((p) => p.classList.remove("active"));
                pill.classList.add("active");
                state.statusFilter = pill.textContent.trim();
                renderTable();
            });
        });
    }

    function bindSortableHeaders() {
        document.querySelectorAll("th[data-sort]").forEach((th) => {
            th.style.cursor = "pointer";
            th.addEventListener("click", () => {
                const key = th.getAttribute("data-sort");
                if (state.sortKey === key) {
                    state.sortDir = state.sortDir === "asc" ? "desc" : "asc";
                } else {
                    state.sortKey = key;
                    state.sortDir = "asc";
                }
                document
                    .querySelectorAll("th[data-sort] .sort-icon")
                    .forEach((i) => i.classList.remove("active"));
                const icon = th.querySelector(".sort-icon");
                if (icon) icon.classList.add("active");
                renderTable();
            });
        });
    }

    function bindTableActions() {
        const tbody = document.getElementById("requestTableBody");
        if (!tbody) return;
        tbody.addEventListener("click", (e) => {
            const btn = e.target.closest(".btn-table-delete");
            if (!btn) return;
            const id = btn.getAttribute("data-id");
            if (
                confirm(`Delete request ${id}? This action cannot be undone.`)
            ) {
                TrackingDB.remove(id);
                renderTable();
            }
        });
    }

    document.addEventListener("DOMContentLoaded", init);
})();
