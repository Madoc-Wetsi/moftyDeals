<?php
session_start();

if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit();
}
$adminName = htmlspecialchars($_SESSION['admin']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard | Auto & Mobile Dealership</title>
  <link rel="stylesheet" href="../css/dashboard.css" />
</head>
<body>
  <div class="dashboard-shell">
    <aside class="sidebar">
      <div class="brand">
        <span class="brand-mark">AM</span>
        <div>
          <h2>Auto & Mobile</h2>
          <p>Admin panel</p>
        </div>
      </div>

      <nav>
        <ul>
          <li><a href="#" data-tab="dashboard" class="active">Dashboard</a></li>
          <li><a href="#" data-tab="inventory">Inventory</a></li>
          <li><a href="#" data-tab="leads">Leads</a></li>
          <li><a href="#" data-tab="sales">Sales</a></li>
          <li><a href="#" data-tab="customers">Customers</a></li>
          <li><a href="#" data-tab="appointments">Appointments</a></li>
          <li><a href="#" data-tab="reports">Reports</a></li>
          <li><a href="#" data-tab="marketing">Marketing</a></li>
          <li><a href="#" data-tab="settings">Settings</a></li>
        </ul>
      </nav>

      <div class="sidebar-footer">
        <a class="logout-button" href="logout.php">Logout</a>
      </div>
    </aside>

    <main class="main-content">
      <header class="topbar">
        <div>
          <p class="eyebrow">Welcome back,</p>
          <h1><?php echo $adminName; ?></h1>
        </div>
        <div class="top-actions">
          <button class="primary">New Inventory</button>
        </div>
      </header>

      <section class="summary-cards">
        <article>
          <p>Total Inventory</p>
          <h2>0</h2>
        </article>
        <article>
          <p>Open Leads</p>
          <h2>0</h2>
        </article>
        <article>
          <p>Monthly Sales</p>
          <h2>$0</h2>
        </article>
        <article>
          <p>Active Customers</p>
          <h2>0</h2>
        </article>
      </section>

      <section class="panel-grid">
        <div class="panel panel-large" id="dashboard">
          <div class="panel-header">
            <h2>Dashboard</h2>
          </div>
          <div class="panel-body">
            <p>Track your dealership performance, review sales, leads, and stock in one place.</p>
            <div class="status-grid">
              <div>
                <strong>No data yet</strong>
                <span>Inventory items</span>
              </div>
              <div>
                <strong>No data yet</strong>
                <span>Leads</span>
              </div>
              <div>
                <strong>No data yet</strong>
                <span>Revenue</span>
              </div>
            </div>
          </div>
        </div>

        <div class="panel" id="inventory" hidden>
          <div class="panel-header">
            <h2>Inventory</h2>
          </div>
          <div class="panel-body">
            <p>Manage vehicles and phones. Add new items and keep stock organized.</p>
            <button class="secondary">Add New Item</button>
          </div>
        </div>

        <div class="panel" id="leads" hidden>
          <div class="panel-header">
            <h2>Leads</h2>
          </div>
          <div class="panel-body">
            <p>View incoming leads and customer requests from the website.</p>
          </div>
        </div>

        <div class="panel" id="sales" hidden>
          <div class="panel-header">
            <h2>Sales</h2>
          </div>
          <div class="panel-body">
            <p>Review completed transactions and calculate revenue.</p>
          </div>
        </div>

        <div class="panel" id="customers" hidden>
          <div class="panel-header">
            <h2>Customers</h2>
          </div>
          <div class="panel-body">
            <p>Store customer profiles, contact details, and purchase history.</p>
          </div>
        </div>

        <div class="panel" id="appointments" hidden>
          <div class="panel-header">
            <h2>Appointments</h2>
          </div>
          <div class="panel-body">
            <p>Manage test drives, meetings, and service appointments.</p>
          </div>
        </div>

        <div class="panel" id="reports" hidden>
          <div class="panel-header">
            <h2>Reports</h2>
          </div>
          <div class="panel-body">
            <p>Generate analytics to track performance and profitability.</p>
          </div>
        </div>

        <div class="panel" id="marketing" hidden>
          <div class="panel-header">
            <h2>Marketing</h2>
          </div>
          <div class="panel-body">
            <p>Create promotions, ads, and campaigns for your dealership.</p>
          </div>
        </div>

        <div class="panel" id="settings" hidden>
          <div class="panel-header">
            <h2>Settings</h2>
          </div>
          <div class="panel-body">
            <p>Update dealership settings, user controls, and preferences.</p>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script src="script.js"></script>
</body>
</html>
