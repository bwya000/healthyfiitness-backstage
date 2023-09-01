
<?php
session_start();
require_once ("connect.php");

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
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fitness | General Form Elements</title>
  <link rel="icon" href="./img/logo.ico" type="image/x-icon" />
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
    <!-- 側邊欄全部 start -->
    <aside class="main-sidebar sidebar-dark-warning elevation-4">

<!-- Logo圖 點選前往首頁-->
<a href="../../index.php" class="brand-link">
    <img src="../tables_7/user_image/logo.png" alt=" Logo" class=" img-rounded "
        style="opacity: .9;display:block ;margin:auto;">
</a>

<!-- 側邊欄位開始 -->
<div class="sidebar">
    <!-- 個人資料 -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../tables_7/user_image/<?php echo $_SESSION["avatar"];?>" class="img-circle elevation-2"
                    alt="User Image"/>
                    <!-- 頭像 -->
                </div>
            <div class="info">
                <a href="../../index.php" class="d-block ml-3">
                    <?php echo  $_SESSION["user"] ; ?>
                </a>
                <!-- 員工名字 -->
            </div>
        </div>
    
    <!--  側欄內容 -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <!-- 員工列表 -> 員工管理 -->
            <li class="nav-item ">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-table"></i>
                    <p>員工列表<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../tables_7/employee.php" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>員工管理</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- 會員列表 -> 會員管理 -->
            <li class="nav-item ">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-table"></i>
                    <p>會員列表<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../tables_7/member.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>會員管理</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 食物資料管理 + 新增一筆 資料 -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-bone"></i>
                    <p>食物資料管理</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="fooddata.php" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>食物資料列表</p>
                        </a>
                    </li>
                    <!-- [目前位置] -->
                    <li class="nav-item">
                        <a href="insert.php" class="nav-link active">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>新增一筆資料</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 商品管理 -> 商品檢視-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>商品管理<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../table_Tung/product1.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>商品檢視</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 影音列表 -> 影音管理 + 影音管理 -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-video nav-icon" ></i>
                    <p>影音列表<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../tables_Luna/mainpageajax.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>影音管理</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../tables_Luna/charts.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>圖表分析</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 訂單管理 -> 銷售圖表分析 + 商品訂單管理 + 影片訂單管理 -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas  fa-shopping-cart nav-icon"></i>
                    <p>訂單管理<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../table_AYun/order_chart.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>銷售圖表分析</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../table_AYun/realItem_order.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>商品訂單管理</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../table_AYun/vedio_order.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>影片訂單管理</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        
    </nav>
    <a href="../login/logOut.php" class="mt-auto sidebar-link">登出</a>
        <!-- 登出按鈕 -->
</div>

</aside>
<!-- 側邊欄結束 End -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header pt-3 pb-0">
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

      <hr style="border: 1px solid gray">

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <button class="btn btn-secondary mb-2" id="backbutton"><i class="fas fa-arrow-left"></i> 返回上一頁</button>
              <div class="card card-navy">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                
                <!-- form start -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  <div class="card-body row">
                    <div class="form-group col-md-12">
                      <label for="foodName">FoodName</label>
                      <input type="text" class="form-control" name="foodName" id="foodName" placeholder="食物名稱" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="calorie">cal</label>
                      <input type="text" class="form-control" name="calorie" id="calorie" placeholder="卡路里" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="fat">fat</label>
                      <input type="text" class="form-control" name="fat" id="fat" placeholder="脂肪" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="protein">pro</label>
                      <input type="text" class="form-control" name="protein" id="protein" placeholder="蛋白質" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="carbohydrates">car</label>
                      <input type="text" class="form-control" name="carbohydrates" id="carbohydrates" placeholder="碳水化合物" required>
                    </div>
                    <div class="form-group col-md-12">
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
                    <div class="form-group col-md-12">
                      <label for="foodImgID">圖片</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foodImgID" id="foodImgID" required>
                          <label class="custom-file-label" for="foodImgID">選擇圖片</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                    <button type="submit" class="btn bg-navy color-palette" id="submit">儲存</button>
                  </div>
                  <!-- /.card-body -->
                  
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