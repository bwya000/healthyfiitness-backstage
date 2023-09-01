
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

    // 檢查表單是否提交
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 取得表單提交的資料
        //$foodID = $_POST["foodID"];
        $foodName = $_POST["foodName"];
        $calorie = $_POST["calorie"];
        $fat = $_POST["fat"];
        $protein = $_POST["protein"];
        $carbohydrates = $_POST["carbohydrates"];
        $foodImgID = $_POST["foodImgID"];
        $foodCategoryID = $_POST["foodCategoryID"];

        // 執行 INSERT 語句
        $insert = "INSERT INTO `fooddata` (`FoodID`, `FoodName`, `Calorie`, `Fat`, `Protein`, `Carbohydrates`, `FoodImgID`, `Food_categoryID`) " .
            "VALUES (NULL, :foodName, :calorie, :fat, :protein, :carbohydrates, :foodImgID, :foodCategoryID)";
        
        $pdoStmt = $pdo->prepare($insert);

        //$pdoStmt->bindValue(":id", $foodID, PDO::PARAM_INT);
        $pdoStmt->bindValue(":foodName", $foodName, PDO::PARAM_STR);
        $pdoStmt->bindValue(":calorie", $calorie, PDO::PARAM_INT);
        $pdoStmt->bindValue(":fat", $fat, PDO::PARAM_INT);
        $pdoStmt->bindValue(":protein", $protein, PDO::PARAM_INT);
        $pdoStmt->bindValue(":carbohydrates", $carbohydrates, PDO::PARAM_INT);
        $pdoStmt->bindValue(":foodImgID", $foodImgID, PDO::PARAM_STR);
        $pdoStmt->bindValue(":foodCategoryID", $foodCategoryID, PDO::PARAM_INT);
        
        $pdoStmt->execute();
        //$num = $pdoStmt->rowCount();
        //echo "新增紀錄的筆數 = $num<br>";
        echo "<script>alert('新增成功');</script>";

    }

    
}
catch(Exception $ex) {
    echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
    echo "苦主:" . $ex->getFile() . "<br>";
    echo "行號:" . $ex->getLine() . "<br>";
    echo "Code:" . $ex->getCode() . "<br>";
    echo "堆疊:" . $ex->getTraceAsString() . "<br>";

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">  

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


  
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="../tables/fooddata.php" class="nav-link active">
                <i class="nav-icon fas fa-bone"></i>
                <p>FoodData</p>
              </a>
            </li> 
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>新增食物資料</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="fooddata.php">FoodData</a></li>
                <li class="breadcrumb-item active">新增食物資料</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <button class="btn btn-secondary mb-2" id="backbutton"><i class="fas fa-arrow-left"></i> 返回上一頁</button>
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                
                <!-- form start -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="foodName">FoodName</label>
                      <input type="text" class="form-control" name="foodName" id="foodName" placeholder="食物名稱" required>
                    </div>
                    <div class="form-group">
                      <label for="calorie">cal</label>
                      <input type="text" class="form-control" name="calorie" id="calorie" placeholder="卡路里" required>
                    </div>
                    <div class="form-group">
                      <label for="fat">fat</label>
                      <input type="text" class="form-control" name="fat" id="fat" placeholder="脂肪" required>
                    </div>
                    <div class="form-group">
                      <label for="protein">pro</label>
                      <input type="text" class="form-control" name="protein" id="protein" placeholder="蛋白質" required>
                    </div>
                    <div class="form-group">
                      <label for="carbohydrates">car</label>
                      <input type="text" class="form-control" name="carbohydrates" id="carbohydrates" placeholder="碳水化合物" required>
                    </div>
                    <div class="form-group">
                      <label for="foodImgID">圖片</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foodImgID" id="foodImgID" required>
                          <label class="custom-file-label" for="foodImgID">選擇圖片</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="foodCategoryID">CatID</label>
                      <select id="foodCategoryID" name="foodCategoryID" class="form-control">
                        <option>1. 飯</option>
                        <option>2. 麵</option>
                        <option>3. 早餐</option>
                        <option>4. 湯</option>
                        <option>5. 飲料</option>
                        <option>6. 其他</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info" id="submit">儲存</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- Sweet Alter -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>



  <!-- Page specific script -->
  <script>
    $(function () {
      bsCustomFileInput.init();
      $('#backbutton').on('click', function() {
        window.location.href="fooddata.php";
      })

      // $('#submit').on('click', function(e) {
      //   e.preventDefault(); // 阻止表單的預設提交行為

      //   Swal.fire({
      //     title: '確定要儲存新增嗎?',
      //     showDenyButton: true,
      //     showCancelButton: true,
      //     confirmButtonText: '儲存',
      //     denyButtonText: '取消',
      //   }).then((result) => {
      //     if (result.isConfirmed) {
      //       // 在這裡執行儲存操作或提交表單的程式碼
      //       Swal.fire('已儲存！', '', 'success');
      //       // 可以使用下面的程式碼提交表單
      //       $(this).off('submit').submit();
      //       console.log('成功');
      //     } else if (result.isDenied) {
      //       Swal.fire('變更未儲存', '', 'info');
      //     }
      //   });
      // });
    });
  </script>


</body>

</html>