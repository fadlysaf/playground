/**
 * db.js
 * "Database" sederhana berbasis localStorage untuk modul Tracking Request Website.
 * Semua halaman (list, form, detail) mengambil & menyimpan data lewat modul ini.
 */
window.TrackingDB = (function () {
    const STORAGE_KEY = 'tracking_request_website_data';

    // Data awal, dipakai hanya sekali saat localStorage masih kosong
    const SEED_DATA = [
        {
            id: 'REQ-001', date: '2026-07-01', reqInDate: '2026-06-28', type: 'Promo', method: 'New',
            productPage: 'Summer Campaign 2026', requestor: 'Rina Hartono', deptOwner: 'Marketing',
            pic: 'Dimas Prasetyo', campaignType: 'Seasonal', dueDate: '2026-07-15',
            notes: 'Full promo page with product carousel and CTA buttons.',
            status: 'In Progress', completeDate: '', url: 'https://example.com/promo/summer-2026',
        },
        {
            id: 'REQ-002', date: '2026-07-03', reqInDate: '2026-07-02', type: 'Article', method: 'New',
            productPage: 'Product Feature Article – KPR Syariah', requestor: 'Budi Santoso', deptOwner: 'Product',
            pic: 'Layla Kusuma', campaignType: 'Evergreen', dueDate: '2026-07-10', notes: '',
            status: 'Completed', completeDate: '2026-07-09', url: 'https://example.com',
        },
        {
            id: 'REQ-003', date: '2026-07-05', reqInDate: '2026-07-04', type: 'Banner / PDF', method: 'Update',
            productPage: 'Tabungan Emas Banner', requestor: 'Siti Rahayu', deptOwner: 'Retail Banking',
            pic: 'Ahmad Fauzi', campaignType: 'Product Launch', dueDate: '2026-07-08', notes: '',
            status: 'Completed', completeDate: '2026-07-07', url: 'https://example.com',
        },
        {
            id: 'REQ-004', date: '2026-07-07', reqInDate: '2026-07-06', type: 'FAQ', method: 'Update',
            productPage: 'KPR FAQ Page', requestor: 'Andi Wijaya', deptOwner: 'Customer Care',
            pic: 'Nadia Permata', campaignType: 'Support', dueDate: '2026-07-20', notes: '',
            status: 'Pending', completeDate: '', url: '',
        },
        {
            id: 'REQ-005', date: '2026-07-08', reqInDate: '2026-07-07', type: 'ONT Report', method: 'New',
            productPage: 'July 2026 ONT Performance Report', requestor: 'Hendra Gunawan', deptOwner: 'Digital',
            pic: 'Citra Dewi', campaignType: 'Internal', dueDate: '2026-07-31', notes: '',
            status: 'Pending', completeDate: '', url: '',
        },
    ];

    function readAll() {
        const raw = localStorage.getItem(STORAGE_KEY);
        if (!raw) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(SEED_DATA));
            return JSON.parse(JSON.stringify(SEED_DATA));
        }
        try {
            return JSON.parse(raw);
        } catch (e) {
            console.error('TrackingDB: data tersimpan rusak, mereset ke seed data', e);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(SEED_DATA));
            return JSON.parse(JSON.stringify(SEED_DATA));
        }
    }

    function writeAll(records) {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(records));
    }

    function getAll() {
        return readAll().sort((a, b) => (a.id < b.id ? 1 : -1));
    }

    function getById(id) {
        return readAll().find((r) => r.id === id) || null;
    }

    function nextId() {
        const records = readAll();
        let max = 0;
        records.forEach((r) => {
            const n = parseInt(String(r.id).replace('REQ-', ''), 10);
            if (!isNaN(n) && n > max) max = n;
        });
        return 'REQ-' + String(max + 1).padStart(3, '0');
    }

    function create(data) {
        const records = readAll();
        const record = Object.assign({ id: nextId() }, data, {
            createdAt: new Date().toISOString(),
            updatedAt: new Date().toISOString(),
        });
        records.push(record);
        writeAll(records);
        return record;
    }

    function update(id, data) {
        const records = readAll();
        const idx = records.findIndex((r) => r.id === id);
        if (idx === -1) return null;
        records[idx] = Object.assign({}, records[idx], data, { updatedAt: new Date().toISOString() });
        writeAll(records);
        return records[idx];
    }

    function remove(id) {
        const records = readAll().filter((r) => r.id !== id);
        writeAll(records);
    }

    function resetSeed() {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(SEED_DATA));
    }

    return { getAll, getById, create, update, remove, nextId, resetSeed };
})();
