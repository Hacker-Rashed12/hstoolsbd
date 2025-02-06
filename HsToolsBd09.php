<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HS TOOLS BD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            background-color: #0e0e0e;
            color: #00ff00;
            position: relative;
        }

        .profile-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            color: #00ff00;
            cursor: pointer;
            z-index: 100;
        }

        .tool-box {
            display: flex;
            flex-wrap: wrap;
            margin: 20px;
        }

        .tool {
            width: 150px;
            margin: 10px;
            text-align: center;
            cursor: pointer;
            position: relative;
        }

        .tool img {
            width: 100px;
            height: 100px;
        }

        .tool p {
            margin: 5px 0 0;
            font-size: 16px;
        }

        h1 {
            text-align: center;
            color: #00ff00;
            animation: colorChange 3s infinite;
        }

        @keyframes colorChange {
            0% { color: #FF5733; }
            25% { color: #33FF57; }
            50% { color: #3357FF; }
            75% { color: #F3FF33; }
            100% { color: #FF33F6; }
        }
    </style>
    <script>
        function checkPassword() {
            var password = prompt("Please enter the password to access this tool:", "");
            if (password === "HsToolsBd09") {
                window.location.href = "https://bdtools.top/site.php"; // Redirect to the link if password is correct
            } else {
                alert("Incorrect password! Access denied.");
            }
        }
    </script>
</head>

<body>

<!-- Tool Section -->
<h1>HS TOOL BD</h1>

<div class="tool-box">
    <div class="tool" onclick="window.location.href='https://bdtools.top/ff.php'">
        <img src="https://firebasestorage.googleapis.com/v0/b/bdrt-34847.appspot.com/o/fm%2F1000105088.jpg?alt=media&token=27fecd08-3f00-4a7b-a67d-f434cc72cf45" alt="Free Fire Info (free)">
        <p>Free Fire Info (free)</p>
    </div>

    <div class="tool" onclick="checkPassword()">
        <img src="https://firebasestorage.googleapis.com/v0/b/bdrt-34847.appspot.com/o/fm%2F1000105093.jpg?alt=media&token=9e67c5ae-f995-48ba-b25c-9de53d587cc8" alt="Create Site (free)">
        <p>Create Site (free)</p>
    </div>

    <div class="tool" onclick="window.location.href='https://bdtools.top/nagad.php'">
        <img src="https://firebasestorage.googleapis.com/v0/b/bdrt-34847.appspot.com/o/fm%2F1000104914.png?alt=media&token=ac9cbeae-40be-4626-8529-bcbc0e13f293" alt="Nagad fake screenshot (free)">
        <p>Nagad fake screenshot (free)</p>
    </div>

    <div class="tool" onclick="window.location.href='https://bdtools.top/bkash.php'">
        <img src="https://firebasestorage.googleapis.com/v0/b/bdrt-34847.appspot.com/o/fm%2F1000105089.png?alt=media&token=0ed62170-eca5-4352-9aef-6cee6df02087" alt="Bkash fake screenshot (free)">
        <p>Bkash fake screenshot (free)</p>
    </div>

    <div class="tool" onclick="window.location.href='https://bdtools.top/freebom.php'">
        <img src="https://firebasestorage.googleapis.com/v0/b/bdrt-34847.appspot.com/o/fm%2F1000105090.jpg?alt=media&token=04c241ed-713c-456c-a3fb-edffed1c90c5" alt="Bomber (free)">
        <p>Bomber (free)</p>
    </div>

    <div class="tool" onclick="window.location.href='https://bdtools.top/nid.php'">
        <img src="https://firebasestorage.googleapis.com/v0/b/bdrt-34847.appspot.com/o/fm%2F1000105092.jpg?alt=media&token=59dd072d-43f8-4009-b810-64fd94905508" alt="Fake NID Maker (free)">
        <p>Fake NID Maker (free)</p>
    </div>
</div>

</body>
</html>