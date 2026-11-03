@verbatim
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Medicine store administration dashboard for sales, orders, customers, and inventory.">
    <meta name="theme-color" content="#f5f8f7">
    <title>Store overview | Medicine Admin</title>
    <script src="/admin-assets/plugins/lucide/lucide.min.js"></script>
    <style>
      :root {
        color-scheme: light;
        --ink: #19332d;
        --muted: #74857f;
        --line: #e8eeeb;
        --surface: #fff;
        --canvas: #f5f8f7;
        --green: #16785e;
        --green-soft: #e8f5ef;
        --amber: #a56816;
        --amber-soft: #fff5e3;
        --red: #b74949;
        --red-soft: #fff0ef;
        --shadow: 0 8px 26px rgb(26 63 50 / 5%);
      }

      * { box-sizing: border-box; }

      body {
        margin: 0;
        background: var(--canvas);
        color: var(--ink);
        font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        font-size: 14px;
        line-height: 1.5;
      }

      button, input, select { font: inherit; }
      button, a, select { -webkit-tap-highlight-color: transparent; }
      a { color: inherit; text-decoration: none; }
      button { color: inherit; }

      .app-shell { min-height: 100vh; }
      .sidebar {
        position: fixed;
        z-index: 20;
        inset: 0 auto 0 0;
        display: flex;
        width: 252px;
        flex-direction: column;
        padding: 25px 17px 18px;
        border-right: 1px solid var(--line);
        background: var(--surface);
      }

      .brand {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 0 8px 28px;
        font-size: 19px;
        font-weight: 750;
        letter-spacing: -.5px;
      }

      .brand-mark {
        display: grid;
        width: 38px;
        height: 38px;
        place-items: center;
        border-radius: 12px;
        background: var(--green);
        color: white;
      }

      .brand small {
        display: block;
        margin-top: 1px;
        color: var(--muted);
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .2px;
      }

      .nav-label {
        margin: 9px 10px 8px;
        color: #9aa8a3;
        font-size: 10px;
        font-weight: 750;
        letter-spacing: 1.1px;
        text-transform: uppercase;
      }

      .side-nav { display: grid; gap: 5px; }
      .nav-link {
        display: flex;
        min-height: 43px;
        align-items: center;
        gap: 12px;
        padding: 0 11px;
        border-radius: 9px;
        color: #61736c;
        font-weight: 580;
        transition: background .15s ease, color .15s ease;
      }

      .nav-link svg { width: 18px; height: 18px; }
      .nav-link:hover { background: #f5f8f6; color: var(--ink); }
      .nav-link.active { background: var(--green-soft); color: var(--green); }
      .nav-link .nav-count {
        margin-left: auto;
        padding: 1px 7px;
        border-radius: 20px;
        background: var(--amber-soft);
        color: var(--amber);
        font-size: 11px;
        font-weight: 700;
      }

      .sidebar-bottom { margin-top: auto; }
      .store-card {
        padding: 13px;
        border: 1px solid var(--line);
        border-radius: 12px;
        background: #fbfcfb;
      }

      .store-card p { margin: 0 0 10px; color: var(--muted); font-size: 12px; }
      .store-link {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--green);
        font-size: 12px;
        font-weight: 700;
      }

      .store-link svg { width: 15px; height: 15px; }
      .admin-profile {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 18px;
        padding: 14px 5px 0;
        border-top: 1px solid var(--line);
      }

      .profile-avatar {
        display: grid;
        width: 35px;
        height: 35px;
        flex: 0 0 auto;
        place-items: center;
        border-radius: 50%;
        background: #e3f0e9;
        color: var(--green);
        font-size: 12px;
        font-weight: 750;
      }

      .profile-name { font-size: 12px; font-weight: 700; }
      .profile-role { color: var(--muted); font-size: 11px; }

      .main { min-height: 100vh; margin-left: 252px; }
      .topbar {
        position: sticky;
        z-index: 10;
        top: 0;
        display: flex;
        height: 70px;
        align-items: center;
        justify-content: space-between;
        padding: 0 38px;
        border-bottom: 1px solid var(--line);
        background: rgb(255 255 255 / 94%);
        backdrop-filter: blur(12px);
      }

      .breadcrumb { color: var(--muted); font-size: 12px; }
      .breadcrumb strong { color: var(--ink); font-weight: 650; }
      .topbar-actions { display: flex; align-items: center; gap: 12px; }
      .icon-button, .menu-button {
        display: inline-grid;
        width: 38px;
        height: 38px;
        place-items: center;
        border: 1px solid var(--line);
        border-radius: 9px;
        background: white;
        color: #60736c;
        cursor: pointer;
      }

      .icon-button svg, .menu-button svg { width: 17px; height: 17px; }
      .menu-button { display: none; }
      .button {
        display: inline-flex;
        min-height: 38px;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 0 13px;
        border: 1px solid var(--line);
        border-radius: 9px;
        background: #fff;
        color: #476057;
        cursor: pointer;
        font-size: 12px;
        font-weight: 650;
        white-space: nowrap;
      }

      .button:hover { border-color: #c9d9d1; background: #fbfdfc; }
      .button svg { width: 15px; height: 15px; }
      .button-primary { border-color: var(--green); background: var(--green); color: #fff; }
      .button-primary:hover { border-color: #11664f; background: #11664f; }

      .content { width: min(1440px, 100%); margin: 0 auto; padding: 31px 38px 42px; }
      .page-heading {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 18px;
        margin-bottom: 21px;
      }

      h1 { margin: 0; font-size: clamp(24px, 3vw, 29px); letter-spacing: -.8px; line-height: 1.2; }
      .page-subtitle { margin: 7px 0 0; color: var(--muted); font-size: 13px; }
      .heading-actions { display: flex; align-items: center; gap: 9px; }
      .select-wrap { position: relative; }
      .select-wrap select {
        min-height: 38px;
        appearance: none;
        padding: 0 32px 0 12px;
        border: 1px solid var(--line);
        border-radius: 9px;
        background: #fff;
        color: #476057;
        cursor: pointer;
        font-size: 12px;
        font-weight: 650;
      }

      .select-wrap svg {
        position: absolute;
        top: 50%;
        right: 10px;
        width: 14px;
        height: 14px;
        color: var(--muted);
        pointer-events: none;
        transform: translateY(-50%);
      }

      .sample-note {
        display: flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 17px;
        padding: 10px 13px;
        border: 1px solid #e8eee8;
        border-radius: 9px;
        background: #fbfdfb;
        color: #687a72;
        font-size: 11px;
      }

      .sample-note svg { width: 15px; height: 15px; flex: 0 0 auto; color: var(--green); }
      .metrics-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px; }
      .card {
        min-width: 0;
        border: 1px solid var(--line);
        border-radius: 13px;
        background: var(--surface);
        box-shadow: var(--shadow);
      }

      .metric-card { padding: 17px 18px 16px; }
      .metric-top { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
      .metric-label { color: var(--muted); font-size: 12px; font-weight: 570; }
      .metric-icon {
        display: grid;
        width: 34px;
        height: 34px;
        place-items: center;
        border-radius: 10px;
        background: #f0f7f3;
        color: var(--green);
      }

      .metric-icon svg { width: 17px; height: 17px; }
      .metric-icon.amber { background: var(--amber-soft); color: var(--amber); }
      .metric-value { margin: 14px 0 8px; font-size: 25px; font-weight: 740; letter-spacing: -.8px; }
      .metric-foot { display: flex; align-items: center; gap: 6px; color: var(--muted); font-size: 11px; }
      .trend { color: var(--green); font-weight: 700; }
      .trend.down { color: var(--red); }

      .dashboard-grid { display: grid; grid-template-columns: minmax(0, 1.65fr) minmax(290px, .95fr); gap: 15px; margin-top: 15px; }
      .card-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 12px;
        padding: 17px 18px 0;
      }

      .card-title { margin: 0; font-size: 14px; font-weight: 720; letter-spacing: -.1px; }
      .card-description { margin: 4px 0 0; color: var(--muted); font-size: 11px; }
      .revenue-total { margin: 16px 18px 0; font-size: 24px; font-weight: 740; letter-spacing: -.7px; }
      .chart-wrap { padding: 4px 14px 13px; }
      .sales-chart { display: block; width: 100%; height: auto; overflow: visible; }
      .chart-gridline { stroke: #edf1ef; stroke-width: 1; }
      .chart-area { fill: url(#salesFill); }
      .chart-line { fill: none; stroke: var(--green); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3; }
      .chart-point { fill: white; stroke: var(--green); stroke-width: 2; }
      .chart-label { fill: #87958f; font-family: inherit; font-size: 10px; }
      .chart-legend { display: flex; align-items: center; gap: 7px; color: var(--muted); font-size: 10px; }
      .legend-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--green); }

      .category-list { display: grid; gap: 17px; padding: 18px; }
      .category-row { display: grid; gap: 7px; }
      .category-meta { display: flex; justify-content: space-between; gap: 8px; font-size: 11px; }
      .category-name { font-weight: 620; }
      .category-share { color: var(--muted); }
      .progress-track { height: 6px; overflow: hidden; border-radius: 8px; background: #edf2ef; }
      .progress-value { height: 100%; border-radius: inherit; background: var(--green); }
      .category-row:nth-child(2) .progress-value { background: #63a98b; }
      .category-row:nth-child(3) .progress-value { background: #99c8b3; }
      .category-row:nth-child(4) .progress-value { background: #c5dfd1; }

      .section-card { margin-top: 15px; }
      .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 17px 18px;
      }

      .section-heading { display: flex; align-items: center; gap: 9px; }
      .section-heading .card-description { margin-top: 3px; }
      .section-tools { display: flex; align-items: center; gap: 8px; }
      .search-box {
        display: flex;
        width: 205px;
        min-height: 35px;
        align-items: center;
        gap: 7px;
        padding: 0 9px;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: #fff;
      }

      .search-box svg { width: 14px; height: 14px; flex: 0 0 auto; color: #9aa8a3; }
      .search-box input { width: 100%; min-width: 0; border: 0; outline: 0; color: var(--ink); font-size: 11px; }
      .search-box input::placeholder { color: #9aa8a3; }
      .table-scroll { overflow-x: auto; }
      table { width: 100%; border-collapse: collapse; text-align: left; }
      thead { background: #fafcfb; }
      th {
        padding: 10px 18px;
        border-top: 1px solid #f0f3f1;
        border-bottom: 1px solid #f0f3f1;
        color: #819089;
        font-size: 10px;
        font-weight: 680;
        letter-spacing: .45px;
        text-transform: uppercase;
        white-space: nowrap;
      }

      td { padding: 12px 18px; border-bottom: 1px solid #f0f3f1; color: #52665d; font-size: 11px; white-space: nowrap; }
      tbody tr:last-child td { border-bottom: 0; }
      .order-id { color: var(--ink); font-weight: 720; }
      .customer-cell { display: flex; align-items: center; gap: 9px; }
      .customer-initials {
        display: grid;
        width: 28px;
        height: 28px;
        flex: 0 0 auto;
        place-items: center;
        border-radius: 50%;
        background: #edf4f0;
        color: #507365;
        font-size: 9px;
        font-weight: 750;
      }

      .customer-name { color: var(--ink); font-weight: 620; }
      .order-total { color: var(--ink); font-weight: 680; }
      .status {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 4px 8px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 680;
      }

      .status::before { width: 5px; height: 5px; border-radius: 50%; background: currentColor; content: ""; }
      .status-delivered { background: var(--green-soft); color: var(--green); }
      .status-processing { background: #eef3ff; color: #5269a6; }
      .status-pending { background: var(--amber-soft); color: var(--amber); }
      .status-cancelled { background: var(--red-soft); color: var(--red); }
      .empty-row { display: none; padding: 24px; color: var(--muted); text-align: center; }

      .inventory-list { display: grid; }
      .inventory-item {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        align-items: center;
        gap: 12px;
        padding: 13px 18px;
        border-bottom: 1px solid #f0f3f1;
      }

      .inventory-item:last-child { border-bottom: 0; }
      .inventory-product { display: flex; min-width: 0; align-items: center; gap: 10px; }
      .product-icon {
        display: grid;
        width: 33px;
        height: 33px;
        flex: 0 0 auto;
        place-items: center;
        border-radius: 9px;
        background: #f1f7f3;
        color: var(--green);
      }

      .product-icon svg { width: 16px; height: 16px; }
      .product-name { overflow: hidden; color: var(--ink); font-size: 11px; font-weight: 650; text-overflow: ellipsis; white-space: nowrap; }
      .product-sku { margin-top: 2px; color: var(--muted); font-size: 10px; }
      .stock-count { text-align: right; }
      .stock-count strong { display: block; color: var(--amber); font-size: 11px; }
      .stock-count span { color: var(--muted); font-size: 9px; }
      .inventory-footer { padding: 12px 18px; border-top: 1px solid #f0f3f1; }
      .inventory-footer a { display: inline-flex; align-items: center; gap: 6px; color: var(--green); font-size: 11px; font-weight: 700; }
      .inventory-footer svg { width: 14px; height: 14px; }
      .footer-note { padding: 22px 0 0; color: #98a49f; font-size: 10px; text-align: center; }
      .mobile-overlay { display: none; }

      @media (max-width: 1100px) {
        .content { padding-right: 25px; padding-left: 25px; }
        .topbar { padding-right: 25px; padding-left: 25px; }
        .metrics-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .dashboard-grid { grid-template-columns: minmax(0, 1.4fr) minmax(250px, .9fr); }
      }

      @media (max-width: 820px) {
        .sidebar { transform: translateX(-100%); transition: transform .2s ease; }
        .sidebar.is-open { transform: translateX(0); }
        .mobile-overlay.is-open { position: fixed; z-index: 15; inset: 0; display: block; background: rgb(20 41 34 / 35%); }
        .main { margin-left: 0; }
        .menu-button { display: inline-grid; }
        .topbar { height: 62px; padding: 0 18px; }
        .content { padding: 25px 18px 32px; }
        .dashboard-grid { grid-template-columns: 1fr; }
      }

      @media (max-width: 560px) {
        .page-heading { flex-direction: column; }
        .heading-actions { width: 100%; }
        .heading-actions .select-wrap { flex: 1; }
        .heading-actions select { width: 100%; }
        .metrics-grid { gap: 10px; }
        .metric-card { padding: 13px; }
        .metric-value { font-size: 21px; }
        .metric-label { font-size: 11px; }
        .metric-icon { width: 30px; height: 30px; }
        .topbar { padding: 0 13px; }
        .topbar-actions { gap: 7px; }
        .topbar-actions .button { padding: 0 9px; }
        .topbar-actions .button span { display: none; }
        .content { padding-right: 13px; padding-left: 13px; }
        .section-header { align-items: flex-start; flex-direction: column; }
        .section-tools { width: 100%; }
        .search-box { flex: 1; width: auto; }
        .section-tools .select-wrap select { max-width: 125px; }
        th, td { padding-right: 12px; padding-left: 12px; }
        .sample-note { align-items: flex-start; }
      }
    </style>
  </head>
  <body>
    <div class="app-shell">
      <aside class="sidebar" id="sidebar" aria-label="Main navigation">
        <a class="brand" href="#overview" aria-label="Medicine Admin home">
          <span class="brand-mark"><i data-lucide="pill"></i></span>
          <span>Medicine<small>STORE ADMIN</small></span>
        </a>

        <p class="nav-label">Store management</p>
        <nav class="side-nav">
          <a class="nav-link active" href="#overview" aria-current="page"><i data-lucide="layout-dashboard"></i><span>Overview</span></a>
          <a class="nav-link" href="#orders"><i data-lucide="package-check"></i><span>Orders</span><span class="nav-count">8</span></a>
          <a class="nav-link" href="#inventory"><i data-lucide="boxes"></i><span>Inventory</span><span class="nav-count">7</span></a>
          <a class="nav-link" href="#insights"><i data-lucide="chart-no-axes-combined"></i><span>Sales insights</span></a>
        </nav>

        <p class="nav-label" style="margin-top: 27px">Online store</p>
        <nav class="side-nav">
          <a class="nav-link" href="/" target="_blank" rel="noopener"><i data-lucide="external-link"></i><span>View storefront</span></a>
          <a class="nav-link" href="/shop-4-column" target="_blank" rel="noopener"><i data-lucide="shopping-bag"></i><span>Browse products</span></a>
        </nav>

        <div class="sidebar-bottom">
          <div class="store-card">
            <p>Want to see your shop as a customer?</p>
            <a class="store-link" href="/" target="_blank" rel="noopener">
              Open customer view <i data-lucide="arrow-up-right"></i>
            </a>
          </div>
          <div class="admin-profile">
            <span class="profile-avatar" aria-hidden="true">AD</span>
            <span><span class="profile-name">Store Admin</span><br><span class="profile-role">Administrator</span></span>
          </div>
        </div>
      </aside>
      <div class="mobile-overlay" id="mobileOverlay"></div>

      <main class="main" id="overview">
        <header class="topbar">
          <div style="display:flex;align-items:center;gap:12px">
            <button class="menu-button" id="menuButton" type="button" aria-label="Open navigation" aria-expanded="false"><i data-lucide="menu"></i></button>
            <div class="breadcrumb">Store management <span aria-hidden="true">/</span> <strong>Overview</strong></div>
          </div>
          <div class="topbar-actions">
            <a class="button" href="/" target="_blank" rel="noopener">
              <i data-lucide="store"></i><span>View storefront</span>
            </a>
          </div>
        </header>

        <div class="content">
          <section class="page-heading" aria-labelledby="pageTitle">
            <div>
              <h1 id="pageTitle">Store overview</h1>
              <p class="page-subtitle">A clear view of your shop's orders, sales, and stock.</p>
            </div>
            <div class="heading-actions">
              <label class="select-wrap">
                <span class="sr-only" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0">Reporting period</span>
                <select id="periodSelect" aria-label="Reporting period">
                  <option value="7">Last 7 days</option>
                  <option value="30" selected>Last 30 days</option>
                  <option value="90">Last 90 days</option>
                </select>
                <i data-lucide="chevron-down"></i>
              </label>
              <button class="button button-primary" id="exportButton" type="button"><i data-lucide="download"></i>Export orders</button>
            </div>
          </section>

          <div class="sample-note" role="note">
            <i data-lucide="info"></i>
            <span>Preview dashboard with sample data. Connect your store's order and inventory system to show live figures.</span>
          </div>

          <section class="metrics-grid" aria-label="Store performance summary">
            <article class="card metric-card">
              <div class="metric-top"><span class="metric-label">Gross sales</span><span class="metric-icon"><i data-lucide="banknote"></i></span></div>
              <div class="metric-value" id="salesMetric">€12,840</div>
              <div class="metric-foot"><span class="trend">↑ 12.8%</span><span>vs. previous period</span></div>
            </article>
            <article class="card metric-card">
              <div class="metric-top"><span class="metric-label">Orders</span><span class="metric-icon"><i data-lucide="shopping-cart"></i></span></div>
              <div class="metric-value" id="ordersMetric">248</div>
              <div class="metric-foot"><span class="trend">↑ 8.2%</span><span>vs. previous period</span></div>
            </article>
            <article class="card metric-card">
              <div class="metric-top"><span class="metric-label">Customers</span><span class="metric-icon"><i data-lucide="users-round"></i></span></div>
              <div class="metric-value" id="customersMetric">186</div>
              <div class="metric-foot"><span class="trend">↑ 5.4%</span><span>vs. previous period</span></div>
            </article>
            <article class="card metric-card">
              <div class="metric-top"><span class="metric-label">Low-stock products</span><span class="metric-icon amber"><i data-lucide="triangle-alert"></i></span></div>
              <div class="metric-value" id="stockMetric">7</div>
              <div class="metric-foot"><span class="trend down">Needs attention</span><span>under 10 units</span></div>
            </article>
          </section>

          <section class="dashboard-grid" id="insights" aria-label="Sales insights">
            <article class="card">
              <div class="card-header">
                <div><h2 class="card-title">Sales overview</h2><p class="card-description">Revenue during the selected period</p></div>
                <div class="chart-legend"><span class="legend-dot"></span>Sales</div>
              </div>
              <div class="revenue-total" id="chartTotal">€12,840</div>
              <div class="chart-wrap">
                <svg class="sales-chart" id="salesChart" viewBox="0 0 700 260" role="img" aria-label="Sales trend chart"></svg>
              </div>
            </article>
            <article class="card">
              <div class="card-header">
                <div><h2 class="card-title">Sales by category</h2><p class="card-description">Share of store sales</p></div>
              </div>
              <div class="category-list">
                <div class="category-row"><div class="category-meta"><span class="category-name">Medicines</span><span class="category-share">42%</span></div><div class="progress-track"><div class="progress-value" style="width:42%"></div></div></div>
                <div class="category-row"><div class="category-meta"><span class="category-name">Vitamins &amp; supplements</span><span class="category-share">28%</span></div><div class="progress-track"><div class="progress-value" style="width:28%"></div></div></div>
                <div class="category-row"><div class="category-meta"><span class="category-name">Personal care</span><span class="category-share">18%</span></div><div class="progress-track"><div class="progress-value" style="width:18%"></div></div></div>
                <div class="category-row"><div class="category-meta"><span class="category-name">Wellness</span><span class="category-share">12%</span></div><div class="progress-track"><div class="progress-value" style="width:12%"></div></div></div>
              </div>
            </article>
          </section>

          <section class="card section-card" id="orders" aria-labelledby="ordersTitle">
            <div class="section-header">
              <div class="section-heading">
                <div><h2 class="card-title" id="ordersTitle">Recent orders</h2><p class="card-description">Latest customer purchases</p></div>
              </div>
              <div class="section-tools">
                <label class="search-box"><i data-lucide="search"></i><input id="orderSearch" type="search" placeholder="Search orders or customers" aria-label="Search orders or customers"></label>
                <label class="select-wrap">
                  <select id="statusFilter" aria-label="Filter orders by status">
                    <option value="all">All statuses</option>
                    <option value="processing">Processing</option>
                    <option value="pending">Pending</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                  </select>
                  <i data-lucide="chevron-down"></i>
                </label>
              </div>
            </div>
            <div class="table-scroll">
              <table>
                <thead><tr><th>Order</th><th>Customer</th><th>Date</th><th>Items</th><th>Total</th><th>Status</th></tr></thead>
                <tbody id="ordersBody">
                  <tr data-status="processing"><td class="order-id">#MD-2048</td><td><div class="customer-cell"><span class="customer-initials">SC</span><span class="customer-name">Sofia Carter</span></div></td><td>Today, 10:42</td><td>3 items</td><td class="order-total">€48.90</td><td><span class="status status-processing">Processing</span></td></tr>
                  <tr data-status="pending"><td class="order-id">#MD-2047</td><td><div class="customer-cell"><span class="customer-initials">JM</span><span class="customer-name">James Miller</span></div></td><td>Today, 09:18</td><td>1 item</td><td class="order-total">€16.50</td><td><span class="status status-pending">Pending</span></td></tr>
                  <tr data-status="delivered"><td class="order-id">#MD-2046</td><td><div class="customer-cell"><span class="customer-initials">AM</span><span class="customer-name">Amira Malik</span></div></td><td>Yesterday</td><td>2 items</td><td class="order-total">€32.00</td><td><span class="status status-delivered">Delivered</span></td></tr>
                  <tr data-status="processing"><td class="order-id">#MD-2045</td><td><div class="customer-cell"><span class="customer-initials">LW</span><span class="customer-name">Liam Wilson</span></div></td><td>Yesterday</td><td>4 items</td><td class="order-total">€73.25</td><td><span class="status status-processing">Processing</span></td></tr>
                  <tr data-status="delivered"><td class="order-id">#MD-2044</td><td><div class="customer-cell"><span class="customer-initials">EP</span><span class="customer-name">Ella Parker</span></div></td><td>02 Nov 2026</td><td>2 items</td><td class="order-total">€27.80</td><td><span class="status status-delivered">Delivered</span></td></tr>
                  <tr data-status="cancelled"><td class="order-id">#MD-2043</td><td><div class="customer-cell"><span class="customer-initials">NB</span><span class="customer-name">Noah Brooks</span></div></td><td>01 Nov 2026</td><td>1 item</td><td class="order-total">€12.40</td><td><span class="status status-cancelled">Cancelled</span></td></tr>
                </tbody>
              </table>
              <div class="empty-row" id="emptyOrders">No orders match your search.</div>
            </div>
          </section>

          <section class="card section-card" id="inventory" aria-labelledby="inventoryTitle">
            <div class="section-header">
              <div><h2 class="card-title" id="inventoryTitle">Inventory alerts</h2><p class="card-description">Products running low and needing a restock</p></div>
              <span class="status status-pending">7 products low</span>
            </div>
            <div class="inventory-list">
              <div class="inventory-item"><div class="inventory-product"><span class="product-icon"><i data-lucide="pill"></i></span><div><div class="product-name">Paracetamol 500 mg</div><div class="product-sku">MED-001 · Tablets</div></div></div><div class="stock-count"><strong>4 left</strong><span>Restock soon</span></div></div>
              <div class="inventory-item"><div class="inventory-product"><span class="product-icon"><i data-lucide="pill"></i></span><div><div class="product-name">Vitamin C 1000 mg</div><div class="product-sku">SUP-014 · Supplements</div></div></div><div class="stock-count"><strong>6 left</strong><span>Restock soon</span></div></div>
              <div class="inventory-item"><div class="inventory-product"><span class="product-icon"><i data-lucide="pill"></i></span><div><div class="product-name">Antiseptic cream 30 g</div><div class="product-sku">CARE-008 · Personal care</div></div></div><div class="stock-count"><strong>9 left</strong><span>Restock soon</span></div></div>
            </div>
            <div class="inventory-footer"><a href="/shop-4-column" target="_blank" rel="noopener">Browse storefront catalog <i data-lucide="arrow-up-right"></i></a></div>
          </section>

          <footer class="footer-note">Medicine Store Admin · Dashboard preview</footer>
        </div>
      </main>
    </div>

    <script>
      const reports = {
        7: { sales: 3210, orders: 62, customers: 49, labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], values: [320, 460, 390, 610, 520, 670, 240] },
        30: { sales: 12840, orders: 248, customers: 186, labels: ["Oct 5", "Oct 10", "Oct 15", "Oct 20", "Oct 25", "Oct 30", "Nov 3"], values: [920, 1420, 1190, 2180, 1840, 2630, 2660] },
        90: { sales: 36920, orders: 724, customers: 538, labels: ["Aug 6", "Aug 20", "Sep 3", "Sep 17", "Oct 1", "Oct 17", "Nov 3"], values: [3200, 4650, 4100, 6100, 5700, 7600, 5570] }
      };

      const euro = new Intl.NumberFormat("en-IE", { style: "currency", currency: "EUR", maximumFractionDigits: 0 });

      function renderSalesChart(report) {
        const svg = document.getElementById("salesChart");
        const width = 700;
        const left = 44;
        const right = 686;
        const top = 14;
        const bottom = 218;
        const max = Math.max(...report.values) * 1.16;
        const points = report.values.map((value, index) => {
          const x = left + index * ((right - left) / (report.values.length - 1));
          const y = bottom - (value / max) * (bottom - top);
          return { x, y };
        });
        const path = points.map((point, index) => `${index === 0 ? "M" : "L"} ${point.x} ${point.y}`).join(" ");
        const area = `${path} L ${right} ${bottom} L ${left} ${bottom} Z`;
        const grid = [0, 1, 2, 3].map((step) => {
          const y = top + step * ((bottom - top) / 3);
          return `<line class="chart-gridline" x1="${left}" y1="${y}" x2="${right}" y2="${y}"></line>`;
        }).join("");
        const dots = points.map((point) => `<circle class="chart-point" cx="${point.x}" cy="${point.y}" r="4"></circle>`).join("");
        const labels = report.labels.map((label, index) => {
          const x = left + index * ((right - left) / (report.labels.length - 1));
          return `<text class="chart-label" x="${x}" y="245" text-anchor="middle">${label}</text>`;
        }).join("");

        svg.innerHTML = `<defs><linearGradient id="salesFill" x1="0" x2="0" y1="0" y2="1"><stop offset="0%" stop-color="#16785e" stop-opacity=".17"></stop><stop offset="100%" stop-color="#16785e" stop-opacity="0"></stop></linearGradient></defs>${grid}<path class="chart-area" d="${area}"></path><path class="chart-line" d="${path}"></path>${dots}${labels}`;
        svg.setAttribute("aria-label", `Sales trend for the selected period: ${report.labels[0]} to ${report.labels[report.labels.length - 1]}`);
      }

      function updateReport() {
        const report = reports[document.getElementById("periodSelect").value];
        document.getElementById("salesMetric").textContent = euro.format(report.sales);
        document.getElementById("ordersMetric").textContent = report.orders.toLocaleString();
        document.getElementById("customersMetric").textContent = report.customers.toLocaleString();
        document.getElementById("chartTotal").textContent = euro.format(report.sales);
        renderSalesChart(report);
      }

      function filterOrders() {
        const query = document.getElementById("orderSearch").value.trim().toLowerCase();
        const status = document.getElementById("statusFilter").value;
        let visibleCount = 0;
        document.querySelectorAll("#ordersBody tr").forEach((row) => {
          const matchesQuery = row.textContent.toLowerCase().includes(query);
          const matchesStatus = status === "all" || row.dataset.status === status;
          const visible = matchesQuery && matchesStatus;
          row.hidden = !visible;
          if (visible) visibleCount += 1;
        });
        document.getElementById("emptyOrders").style.display = visibleCount ? "none" : "block";
      }

      function exportOrders() {
        const rows = [...document.querySelectorAll("#ordersBody tr:not([hidden])")];
        const csvValue = (value) => `"${value.replace(/"/g, '""')}"`;
        const csv = [["Order", "Customer", "Date", "Items", "Total", "Status"]]
          .concat(rows.map((row) => [...row.cells].map((cell, index) => {
            if (index === 1) return cell.querySelector(".customer-name").textContent.trim();
            if (index === 5) return cell.querySelector(".status").textContent.trim();
            return cell.textContent.trim();
          })))
          .map((row) => row.map(csvValue).join(","))
          .join("\r\n");
        const file = new Blob(["\uFEFF" + csv], { type: "text/csv;charset=utf-8" });
        const url = URL.createObjectURL(file);
        const link = document.createElement("a");
        link.href = url;
        link.download = "medicine-store-orders.csv";
        document.body.appendChild(link);
        link.click();
        link.remove();
        URL.revokeObjectURL(url);
      }

      document.getElementById("periodSelect").addEventListener("change", updateReport);
      document.getElementById("orderSearch").addEventListener("input", filterOrders);
      document.getElementById("statusFilter").addEventListener("change", filterOrders);
      document.getElementById("exportButton").addEventListener("click", exportOrders);

      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("mobileOverlay");
      const menuButton = document.getElementById("menuButton");

      function closeSidebar() {
        sidebar.classList.remove("is-open");
        overlay.classList.remove("is-open");
        menuButton.setAttribute("aria-expanded", "false");
      }

      menuButton.addEventListener("click", () => {
        const isOpen = sidebar.classList.toggle("is-open");
        overlay.classList.toggle("is-open", isOpen);
        menuButton.setAttribute("aria-expanded", String(isOpen));
      });
      overlay.addEventListener("click", closeSidebar);
      document.querySelectorAll('.side-nav .nav-link[href^="#"]').forEach((link) => {
        link.addEventListener("click", () => {
          document.querySelectorAll('.side-nav .nav-link[href^="#"]').forEach((navLink) => {
            navLink.classList.remove("active");
            navLink.removeAttribute("aria-current");
          });
          link.classList.add("active");
          link.setAttribute("aria-current", "page");
          closeSidebar();
        });
      });

      updateReport();
      if (window.lucide) window.lucide.createIcons();
    </script>
  </body>
</html>

@endverbatim
