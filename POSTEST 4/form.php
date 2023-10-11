<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input</h1>
    <form method="post" action="process.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="saran">Saran:</label>
        <textarea id="saran" name="saran" required></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
