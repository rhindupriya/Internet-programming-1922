<?php
// update-bin.php
$locality = $_GET['locality'] ?? '';
$landmark = $_GET['landmark'] ?? '';
$city = $_GET['city'] ?? '';
$load_type = $_GET['load_type'] ?? '';
$driver_email = $_GET['driver_email'] ?? '';
$cycle_period = $_GET['cycle_period'] ?? '';
$best_route = $_GET['best_route'] ?? '';
$bin_id = $_GET['bin_id'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bin</title>
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
    <h2>Update Bin</h2>
    <form action="update-bin-backend.php" method="POST">
        <input type="hidden" id="bin-id" name="bin_id" value="<?php echo htmlspecialchars($bin_id); ?>">

        <label for="locality">Locality:</label>
        <input type="text" id="locality" name="locality" value="<?php echo htmlspecialchars($locality); ?>" required>

        <label for="landmark">Landmark:</label>
        <input type="text" id="landmark" name="landmark" value="<?php echo htmlspecialchars($landmark); ?>" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city); ?>" required>

        <label for="load-type">Load Type:</label>
        <select id="load-type" name="load_type" required>
            <option value="regular" <?php if($load_type === 'regular') echo 'selected'; ?>>Regular</option>
            <option value="hazardous" <?php if($load_type === 'hazardous') echo 'selected'; ?>>Hazardous</option>
            <option value="organic" <?php if($load_type === 'organic') echo 'selected'; ?>>Organic</option>
        </select>

        <label for="driver-email">Assign Driver's Email:</label>
        <input type="text" id="driver-email" name="driver_email" value="<?php echo htmlspecialchars($driver_email); ?>" required>

        <label for="cycle-period">Cycle Period:</label>
        <select id="cycle-period" name="cycle_period" required>
            <option value="daily" <?php if($cycle_period === 'daily') echo 'selected'; ?>>Daily</option>
            <option value="weekly" <?php if($cycle_period === 'weekly') echo 'selected'; ?>>Weekly</option>
            <option value="bi-weekly" <?php if($cycle_period === 'bi-weekly') echo 'selected'; ?>>Bi-weekly</option>
            <option value="monthly" <?php if($cycle_period === 'monthly') echo 'selected'; ?>>Monthly</option>
        </select>

        <label for="best-route">Best Route:</label>
        <input type="text" id="best-route" name="best_route" value="<?php echo htmlspecialchars($best_route); ?>" required>

        <button type="submit">Update Bin</button>
    </form>
</div>

</body>
</html>
