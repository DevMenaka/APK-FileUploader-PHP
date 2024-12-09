<!-- admin.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin APK Upload & Download</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body class="hero">
    <div class="container2">
        <h1>Admin APK Upload & Download</h1>
        <input type="file" id="apkFile" accept=".apk">
        <button class="btn" onclick="uploadApk()">Upload APK</button>
        <p id="message"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
