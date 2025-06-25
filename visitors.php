
<?php
// File to store the visitor count
$counter_file = "counter.txt";

// Create file with 0 if it doesn't exist
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, "0");
}

// Read current count
$count = (int)file_get_contents($counter_file);

// Increase count
$count++;

// Save updated count
file_put_contents($counter_file, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>
    <h1>Visitor Counter</h1>
    <p>Total Visitors: <?php echo $count; ?></p>
</body>
</html>
