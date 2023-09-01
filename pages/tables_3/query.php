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

    // 執行 SELECT 查詢
    $query = "SELECT * FROM `fooddata`";
    $pdoStmt = $pdo->query($query);

    // 建立表格的開始標籤和標頭行
    

    // 讀取結果並放入表格內容
    while ($row = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['FoodID'] . "</td>";
        echo "<td>" . $row['FoodName'] . "</td>";
        echo "<td>" . $row['Calorie'] . "</td>";
        echo "<td>" . $row['Fat'] . "</td>";
        echo "<td>" . $row['Protein'] . "</td>";
        echo "<td>" . $row['Carbohydrates'] . "</td>";
        echo "<td><img src='img/" . $row['FoodImgID'] . "' alt='Food Image' style='width: 150px; height: 120px;'></td>";
        echo "<td>" . $row['Food_categoryID'] . "</td>";
        echo "<td class='text-center f align-middle'>
        <div class='btn-group btn-group-sm'>
        <a href='update.php?FoodID={$row['FoodID']}' class='btn btn-info'><i class='fas fa-pen-nib'></i></a>
        <a href='delete.php?FoodID=" . $row['FoodID'] . "' class='btn btn-danger'><i class='fas fa-trash'></i></a>
        </div>
        </td>";
        echo "</tr>";
    }    
} catch (Exception $ex) {
    echo "存取資料庫時發生錯誤，訊息: " . $ex->getMessage() . "<br>";
    echo "苦主: " . $ex->getFile() . "<br>";
    echo "行號: " . $ex->getLine() . "<br>";
    echo "Code: " . $ex->getCode() . "<br>";
    echo "堆疊: " . $ex->getTraceAsString() . "<br>";
}
?>
