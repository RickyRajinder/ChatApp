<?php
session_start();
include 'dbh.php'


?>


<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="/socket.io/socket.io.js"></script>
</head>
<body>
<div id="main">
    <h1 ><?php echo $_SESSION['name']?> is online</h1>
    <div class="output">
    <?php   $sql = "SELECT * FROM posts ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            echo "" . $row["msg"]. " " .":: " . $row["name"]." --" .$row["date"]. "<br>";
            echo "<br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
    }

    </div>



    <form id = "send" method="post" action="send.php">
        <textarea name="msg" placeholder="Type a message" class="form-control"></textarea><br>
        <input type="submit" name="Send" value="Send">
    </form>
    <br>
    <form action="logout.php">
        <input type="submit" value="Logout">
    </form>
</div>

</body>
</html>