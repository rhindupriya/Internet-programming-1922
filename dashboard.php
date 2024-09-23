<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: lightblue;
            margin: 0;
            padding: 20px;
        }
        .dashboard-container {
            text-align: center;
        }
        h2 {
            margin-bottom: 30px;
            color: darkblue;
        }
        .dashboard-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .dashboard-item {
            width: 200px;
            height: 200px;
            background-color: white;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 18px;
            color: darkgreen;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .dashboard-item:hover {
            background-color: lightgreen;
        }
        .dashboard-item img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h2>Admin Dashboard</h2>
    <div class="dashboard-grid">
        <!-- Create Bin -->
        <a href="create-bin.php" class="dashboard-item">
            <img src="dust.jpg" alt="Create Bin">
            Create Bin
        </a>

        <!-- Add Driver -->
        <a href="add-driver.php" class="dashboard-item">
            <img src="driver.jpeg" alt="Add Driver">
            Add Driver
        </a>

        <!-- View Complaints -->
        <a href="complaints.php" class="dashboard-item">
            <img src="complaint.jpeg" alt="View Complaints">
            View Complaints
        </a>

        <!-- Update Bin -->
        <a href="updatebin.php" class="dashboard-item">
            <img src="updatebin.jpeg" alt="Update Bin">
            Update Bin
        </a>

        <!-- View Driver -->
        <a href="view-driver.php" class="dashboard-item">
            <img src="viewdriver.jpg" alt="View Driver">
            View Driver
        </a>

        <!-- View Work Report -->
        <a href="view-workreport.php" class="dashboard-item">
            <img src="workreport.webp" alt="View Work Report">
            View Work Report
        </a>

        <!-- User Details -->
        <a href="user-details.php" class="dashboard-item">
            <img src="user.jpeg" alt="User Details">
            User Details
        </a>
    </div>
</div>

</body>
</html>
