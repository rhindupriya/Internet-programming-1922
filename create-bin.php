<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bin</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightblue;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Create New Bin</h2>
    <form action="create-bin-backend.php" method="POST">
        <label for="locality">Locality:</label>
        <input type="text" id="locality" name="locality" placeholder="Enter locality" required>

        <label for="landmark">Landmark:</label>
        <input type="text" id="landmark" name="landmark" placeholder="Enter landmark" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" placeholder="Enter city" required>

        <label for="load-type">Load Type:</label>
        <select id="load-type" name="load_type" required>
            <option value="">Select load type</option>
            <option value="regular">Regular</option>
            <option value="hazardous">Hazardous</option>
            <option value="organic">Organic</option>
        </select>

        <label for="driver-email">Assign Driver's Email:</label>
        <input type="text" id="driver-email" name="driver_email" placeholder="Enter driver's email" required>

        <label for="cycle-period">Cycle Period:</label>
        <select id="cycle-period" name="cycle_period" required>
            <option value="">Select cycle period</option>
            <option value="daily">Daily</option>
            <option value="weekly">Weekly</option>
            <option value="bi-weekly">Bi-weekly</option>
            <option value="monthly">Monthly</option>
        </select>

        <label for="best-route">Best Route:</label>
        <input type="text" id="best-route" name="best_route" placeholder="Enter best route" required>

        <button type="submit">Create Bin</button>
    </form>
</div>

</body>
</html>
