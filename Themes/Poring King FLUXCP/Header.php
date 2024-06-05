<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FluxCP Enhanced Control Panel</title>
    <link rel="stylesheet" href="new folder/styles.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <header>
        <div class="container">
            <h1>FluxCP Control Panel</h1>
            <nav>
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#user-management">User Management</a></li>
                    <li><a href="#server-status">Server Status</a></li>
                    <li><a href="#logs">Logs</a></li>
                    <li><a href="#settings">Settings</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="dashboard">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="dashboard-widgets">
                <div class="widget">
                    <h3>Total Users</h3>
                    <p>1234</p>
                </div>
                <div class="widget">
                    <h3>Active Users</h3>
                    <p>567</p>
                </div>
                <div class="widget">
                    <h3>Server Load</h3>
                    <p>45%</p>
                </div>
            </div>
        </div>
    </section>

    <section id="user-management">
        <div class="container">
            <h2>User Management</h2>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>user1</td>
                        <td>user1@example.com</td>
                        <td>Admin</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <!-- More user rows -->
                </tbody>
            </table>
        </div>
    </section>

    <section id="server-status">
        <div class="container">
            <h2>Server Status</h2>
            <div class="server-info">
                <p>Status: <span class="status-online">Online</span></p>
                <p>Uptime: 99.9%</p>
                <p>Active Players: 45</p>
            </div>
        </div>
    </section>

    <section id="logs">
        <div class="container">
            <h2>Logs</h2>
            <ul class="logs-list">
                <li>2024-06-05 12:34:56 - User 'user1' logged in</li>
                <li>2024-06-05 12:35:00 - User 'user2' logged out</li>
                <!-- More logs -->
            </ul>
        </div>
    </section>

    <section id="settings">
        <div class="container">
            <h2>Settings</h2>
            <form>
                <label for="site-name">Site Name:</label>
                <input type="text" id="site-name" name="site-name" value="FluxCP Control Panel">

                <label for="site-description">Site Description:</label>
                <textarea id="site-description" name="site-description">A modern control panel for managing your Ragnarok Online server.</textarea>

                <button type="submit" class="btn-save">Save Changes</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 FluxCP Control Panel</p>
        </div>
    </footer>

</body>
</html>
