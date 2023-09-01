<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connString = "mysql:host=localhost; port=3306; dbname=project; charset=utf8";
        $user = "root";
        $password = "";
        $accessOptions = array(
            PDO::ATTR_EMULATE_PREPARES => false, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_PERSISTENT => true
        );
        try {
            $pdo = new PDO($connString, $user, $password, $accessOptions);
            //echo "連結資料庫成功!!!<br>";
            $FoodID = $_GET['FoodID'];

                        
            $delete = "DELETE FROM `fooddata` " . " WHERE FoodID = :id" ;
            //e跟WHERE前面都要留空白
            $pdoStmt = $pdo->prepare($delete);
            $pdoStmt->bindValue(":id", $FoodID, PDO::PARAM_INT);


            $pdoStmt->execute();
            $num = $pdoStmt->rowCount();
            //echo "刪除紀錄的筆數=$num<br>";
            echo "<script>alert('刪除成功');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'fooddata.php'; }, 300);</script>";
            //header("Location: test2.php");
            exit();
        }
        catch(Exception $ex) {
            echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
            echo "苦主:" . $ex->getFile() . "<br>";
            echo "行號:" . $ex->getLine() . "<br>";
            echo "Code:" . $ex->getCode() . "<br>";
            echo "堆疊:" . $ex->getTraceAsString() . "<br>";
        
        }
        
    ?>
</body>
</html>