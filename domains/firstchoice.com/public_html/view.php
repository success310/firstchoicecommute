<?php
$servername = "localhost";
$username = "firstch8_base";
$password = "dkjdidejekdiduejkd";
$dbname = "firstch8_base";
$firstName = $_POST["name"];
$rate = $_POST["rate"];
$feedback = $_POST["feedback"];

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    $dbconn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbconn->exec("CREATE TABLE IF NOT EXISTS `reviews` (
                `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                `firstname` varchar(20),
                `rate` INT(5),
                `feedback` text
              ) CHARACTER SET utf8 COLLATE utf8_general_ci;");
    $stmt = $dbconn->prepare("SELECT * FROM reviews");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>FirstChoiceCommute</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
  <style>
  	.container {
        background-color: #fff;
      	min-height: 100vh;
    }

    .main {
        background: #fff;
        max-width: 1000px;
        margin: auto;
        background: #fff;
    }

    .header {
        background: url('./images/Header.png') no-repeat center;
        background-size: cover;
        height: 350px;
        position: relative;
    }

    .heading {
        text-align: center;
    }

    .heading {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: absolute;
        top: 5px;
        left: 20px;
    }

    .navbar {
        background: url('./images/Road.png') no-repeat center;
        background-size: cover;
        height: 60px;
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navbar a {
        margin: 0 55px;
        background: #000;
    }

    .content {
        background: #000;
        padding: 20px 5px;
    }

    .army {
        background: #fff;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 10px;
    }

    .reviews {
        background: #fff;
        padding: 20px;
    }

    .reviews {
        text-align: center;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        background-color: #000;
        color: #fff;
        text-align: left;
        padding: 20px 30px 55px 40px;
        margin-bottom: 20px;
    }

    .list-head {
        display: flex;
        font-size: 23px;
        align-items: center;
        margin-left: 30px;
        margin-bottom: 20px;
      	position: relative;
    }
    
      .list-head > div {
          position: absolute;
          right: 5px;
      }

    .list-head img {
        margin-top: 4px;
    }

    .list-head img:first-child {
        margin-left: 20px;
    }

    .list-content {
        font-size: 20px;
        word-break: break-all;
    }
  </style>
</head>

<body>
    <div class="container view">
        <div class="main">
            <div class="header">
                <div class="heading">
                    <img src="./images/FirstChoiceCommute.png" alt="logo">
                    <img src="./images/ServicingJBSASanAnto.png" alt="logo caption">
                </div>
                <div class="caption"></div>
                <div class="navbar">
                    <a href="./index.php">
                        <img src="./images/ButtonHome.png" alt="home button">
                    </a>
                    <a href="./aboutus.php">
                        <img src="./images/ButtonAboutus.png" alt="about button">
                    </a>
                    <a href="./view.php">
                        <img src="./images/Buttonreviews.png" alt="reviews button">
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="army">
                    <img src="./images/Army.png" alt="army">
                    <img src="./images/Navy.png" alt="navy">
                    <img src="./images/Airforce.png" alt="airforce">
                    <img src="./images/ProudlyServicingthos.png" alt="text">
                    <img src="./images/Coastguard.png" alt="coastguard">
                    <img src="./images/Marines.png" alt="marines">
                    <img src="./images/Spaceforce.png" alt="spaceforce">
                </div>
                <div class="reviews">
                    <img src="./images/OurLatestReviews.png" class="reviews-heading" alt="review">
                    <ul><?php
                        foreach ($stmt->fetchAll() as $x => $x_value) {
                            $str = "";
                            $number = (int)$x_value['rate'];
                            for ($i = 0; $i < $number; $i++) {
                                $str .= '<img src="./images/Star.png" alt="start">';
                            }
                            echo ('<li><div class="list-head">' . $x_value['firstname'] . '<div>' . $str . '</div></div><div class="list-content">" ' . $x_value['feedback'] . ' "</div></li>');
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</body>

</html>