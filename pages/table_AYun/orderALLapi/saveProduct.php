<?php
require __DIR__ . '/db_database.php';
header('Content-Type:application/json');

$output = [
    'success' => false,
    'errorMessage' => '',
    'postData' => $_POST
];


$sql = "INSERT INTO `orderreal_detail`(`orderrealdetail_orderrealID`, `orderrealdetail_PID`, `buynum`) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['orderID'],
    $_POST['productID'],
    $_POST['quantity']
]);

if($stmt->rowCount() == 1){
    $output['success'] = true;
}else{
    $output['errorMessage'] = "新增失敗";
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>