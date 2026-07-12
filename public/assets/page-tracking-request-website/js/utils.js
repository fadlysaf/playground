/**
 * utils.js
 * Kumpulan fungsi bantu yang dipakai bersama oleh list.js, form.js, dan detail.js
 */
window.TrackingUtils = (function () {
    // Ubah "2026-07-01" -> "01 Jul 2026"
    function formatDateDisplay(dateStr) {
        if (!dateStr) return "—";
        const d = new Date(dateStr + "T00:00:00");
        if (isNaN(d.getTime())) return "—";
        const months = [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ];
        const dd = String(d.getDate()).padStart(2, "0");
        return `${dd} ${months[d.getMonth()]} ${d.getFullYear()}`;
    }

    function getQueryParam(name) {
        const params = new URLSearchParams(window.location.search);
        return params.get(name);
    }

    function escapeHtml(str) {
        if (str === null || str === undefined) return "";
        return String(str)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    // Samakan dengan class badge-type-xxx yang sudah ada di table.blade.php
    const TYPE_CLASS_MAP = {
        "ONT Report": "type-report",
        FAQ: "type-faq",
        "Banner / PDF": "type-pdf",
        Article: "type-article",
        Promo: "type-promo",
    };

    function getTypeClass(type) {
        return TYPE_CLASS_MAP[type] || "type-default";
    }

    // Samakan dengan class table-status status-xxx yang sudah ada di table.blade.php
    const STATUS_MAP = {
        Pending: { class: "status-pending", icon: "fa-regular fa-clock" },
        "In Progress": {
            class: "status-progress",
            icon: "fa-regular fa-circle-dot",
        },
        Completed: {
            class: "status-completed",
            icon: "fa-regular fa-circle-check",
        },
        "On Hold": { class: "status-hold", icon: "fa-regular fa-circle-pause" },
        Cancelled: {
            class: "status-cancelled",
            icon: "fa-regular fa-circle-xmark",
        },
    };

    function getStatusInfo(status) {
        return (
            STATUS_MAP[status] || {
                class: "status-pending",
                icon: "fa-regular fa-clock",
            }
        );
    }

    function debounce(fn, delay) {
        let timer = null;
        return function (...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay || 300);
        };
    }

    function shortenUrl(url) {
        if (!url) return "";
        try {
            const u = new URL(url);
            return u.hostname.replace("www.", "");
        } catch (e) {
            return url;
        }
    }

    const sidebarState = {
        search: "",
        statusFilter: "All"
    };

    function renderSidebar(activeId) {
        const listEl = document.getElementById("sidebarRequestsList");
        const countEl = document.getElementById("sidebarRequestsCount");
        if (!listEl) return;

        let data = window.TrackingDB.getAll();

        if (sidebarState.statusFilter !== "All") {
            data = data.filter((r) => r.status === sidebarState.statusFilter);
        }

        if (sidebarState.search) {
            const q = sidebarState.search.toLowerCase();
            data = data.filter((r) =>
                [r.id, r.productPage, r.requestor, r.deptOwner, r.pic, r.campaignType]
                    .filter(Boolean)
                    .some((v) => String(v).toLowerCase().includes(q))
            );
        }

        if (countEl) {
            countEl.textContent = `${data.length} Request${data.length === 1 ? "" : "s"}`;
        }

        if (data.length === 0) {
            listEl.innerHTML = `<div class="text-center text-muted" style="padding: 20px; font-size: 13px;">No requests found.</div>`;
            return;
        }

        const U = window.TrackingUtils;
        listEl.innerHTML = data.map(r => {
            const typeClass = U.getTypeClass(r.type);
            const statusInfo = U.getStatusInfo(r.status);
            const isActive = r.id === activeId ? 'active' : '';

            let catClass = 'category-promo';
            if (r.type === 'Article' || r.type === 'Artikel') catClass = 'category-article';
            else if (r.type === 'Banner / PDF' || r.type === 'pdf') catClass = 'category-pdf';
            else if (r.type === 'Page') catClass = 'category-page';
            else if (r.type === 'FAQ') catClass = 'category-faq';
            else if (r.type === 'ONT Report' || r.type === 'laporan ONT') catClass = 'category-report';
            else if (r.type === 'SBDK') catClass = 'category-sbdk';
            else if (r.type === 'Announcement' || r.type === 'pengumuman') catClass = 'category-announcement';
            else if (r.type === 'Form Creation') catClass = 'category-form';

            return `
                <a href="${window.APP_URLS.detail}?id=${encodeURIComponent(r.id)}" class="request-card ${isActive}">
                    <div class="card-header">
                        <div class="header-left">
                            <span class="req-id">${U.escapeHtml(r.id)}</span>
                            <span class="badge-category ${catClass}">${U.escapeHtml(r.type)}</span>
                        </div>
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                    </div>
                    <h4 class="card-title">${U.escapeHtml(r.productPage)}</h4>
                    <div class="card-meta">
                        <span class="status-pill ${statusInfo.class}">
                            <i class="${statusInfo.icon} status-icon"></i>
                            ${U.escapeHtml(r.status)}
                        </span>
                        <span class="date-text">
                            <i class="fa-regular fa-calendar date-icon"></i>
                            ${U.formatDateDisplay(r.dueDate)}
                        </span>
                    </div>
                </a>
            `;
        }).join("");
    }

    function initSidebar(activeId) {
        renderSidebar(activeId);

        const searchInput = document.querySelector(".app-sidebar .search-input");
        if (searchInput) {
            searchInput.addEventListener("input", debounce((e) => {
                sidebarState.search = e.target.value.trim();
                renderSidebar(activeId);
            }, 250));
        }

        const pills = document.querySelectorAll(".app-sidebar .filter-pill");
        pills.forEach((pill) => {
            pill.addEventListener("click", () => {
                pills.forEach((p) => p.classList.remove("active"));
                pill.classList.add("active");
                sidebarState.statusFilter = pill.textContent.trim();
                renderSidebar(activeId);
            });
        });
    }

    return {
        formatDateDisplay,
        getQueryParam,
        escapeHtml,
        getTypeClass,
        getStatusInfo,
        debounce,
        shortenUrl,
        initSidebar,
    };
})();
