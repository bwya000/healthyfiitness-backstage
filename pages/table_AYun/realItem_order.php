<?php
require_once ("./orderALLapi/db_database.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fitness | Commodity order management</title>
  <link rel="icon" href="./orderALLimg/user_image/logo.ico" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  
<style>
  [type="date"] {
      background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
    }

    [type="date"]::-webkit-inner-spin-button {
      display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
      opacity: 0;
    }

    .AYunlabel {
      display: block;
      margin-left: 10px;
    }

    .AYunDate {
      border: 1px solid #c4c4c4;
      border-radius: 5px;
      background-color: #fff;
      padding: 3px 5px;
      box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
      width: 150px;
      height: 30px;
      margin-left: 10px;
    }
</style>

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
            <li class="nav-item ">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-bone"></i>
                    <p>食物資料管理</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../table_33/fooddata.php" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>食物資料列表</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../table_33/insert.php" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>新增一筆資料</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!--  商品管理 -> 商品檢視 -->
            <li class="nav-item">
                <a href="#" class="nav-link ">
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
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="fas  fa-shopping-cart nav-icon"></i>
                    <p>訂單管理<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                <!-- [目前位置] -->
                    <li class="nav-item">
                        <a href="order_chart.php" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>銷售圖表分析</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>商品訂單管理</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="vedio_order.php" class="nav-link">
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
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div id="test"></div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header justify-content-between" style="display: flex; align-items: center; ">
                  <div class="card-title">
                    <h1 style=" font-size: 50px; font-weight: bold; ">實體商品訂單管理</h1>
                  </div>


                      <div style="display: flex; align-items: center; margin-left: 20px;">
                        <div>
                          <label for="dateofbirth" style=" font-size: 15px; margin-left: 50px;" class="AYunlabel">起始日期</label>
                          <input type="date" name="dateofbirth" id="startDate" class="AYunDate">
                        </div>
                        <div>
                          <label for="dateofbirth" style=" font-size: 15px;  margin-left: 50px;" class="AYunlabel" >結束日期</label>
                          <input type="date" name="dateofbirth" id="endDate" class="AYunDate">
                        </div>
                      </div>
                      <button type="button" class="btn btn-outline-info" id="getdate"
                        style="width: 180px; height: 60px; font-size: 20px; font-weight: bold; ">查詢日期
                      </button>
                      <button type="button" class="btn btn-outline-primary ml-2" id="addreaIitem"
                        style="width: 180px; height: 60px; font-size: 20px; font-weight: bold; ">新增訂單
                      </button>
                      <button type="button" class="btn btn-outline-warning ml-2" id="todayOrder"
                        style="width: 180px; height: 60px; font-size: 20px; font-weight: bold; ">本日成立
                      </button>
                      <button type="button" class="btn btn-outline-success ml-2" id="historyOrder"
                        style="width: 180px; height: 60px; font-size: 20px; font-weight: bold; ">所有歷史
                      </button>

              


                </div>
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr style="text-align: center;">
                        <th>實物訂單編號</th>
                        <th>訂購會員編號</th>
                        <th>付款方式</th>
                        <th>物流方式</th>
                        <th>收件人</th>
                        <th>聯絡電話</th>
                        <th>收件地址</th>
                        <th>配送物流條碼</th>
                        <th>訂單成立日期</th>
                      </tr>
                    </thead>
                    <tbody id="tbodyshowtalbe"></tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
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

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  
  <script>
    $(document).ready(function () {

      //查詢日期區間的訂單
      function getaDate(startDate, endDate) {
        $.ajax({
          url: './orderALLapi/getDate.php', // Replace with your server-side script URL
          type: 'POST',
          data: {
            startDate: startDate,
            endDate: endDate
          },
          dataType: 'json'
        }).done(function (users) {
          const docFrag = $(document.createDocumentFragment()); //建立一個空的物件

          $.each(users, function (idx, user) {
            const { orderrealID, orderrealmemberID, PAY_methods, Shipping_methods, receiver, receiver_phone, Shipping_address, Shipping_code, orderreal_date } = user;
            const data = `
                        <tr data-widget="expandable-table" aria-expanded="false" >
                        <td class="d-flex align-items-center">
                          <div style="width:40%;">${orderrealID}</div>
                          <i class="fas fa-edit" style="color: #13811b; width:40%;" id="edit${orderrealID}"></i>
                          <i class="fas fa-trash-alt" style="color: #db0606; width:20%;" id="delet${orderrealID}"></i>
                        </td>
                        <td style="text-align: center;" >${orderrealmemberID}</td>
                        <td style="text-align: center;">${PAY_methods}</td>
                        <td style="text-align: center;">${Shipping_methods}</td>
                        <td style="text-align: center;">${receiver}</td>
                        <td style="text-align: center;">${receiver_phone}</td>
                        <td style="text-align: center;">${Shipping_address}</td>
                        <td style="text-align: center;">${Shipping_code}</td>
                        <td style="text-align: center;">${orderreal_date}</td>
                      </tr>
                      <tr class="expandable-body d-none">
                        <td colspan="9" id="${orderrealID}">
                        </td>
                      </tr>`;

            docFrag.append(data);

          });
          $('#tbodyshowtalbe').html(docFrag);

          $('#tbodyshowtalbe tr').each(function () {
            $(this).find('[colspan="9"]').each(function () {
              const orderID = $(this).attr('id');
              $.ajax({
                url: './orderALLapi/getrealitem.php',
                type: 'GET',
                data: { "id": orderID },
                dataType: 'json'
                // orderID就是訂單的編號
              }).done(function (product) {
                // console.log(orderID);
                $.each(product, function (idx, realitem) {

                  const { orderrealdetail_PID, buynum } = realitem;
                  // 例如:訂單1  買了P_ID2 的   買了3個
                  $.ajax({
                    url: './orderALLapi/getProductall.php',
                    type: 'GET',
                    data: { "id": orderrealdetail_PID },
                    dataType: 'json'
                  }).done(function (productall) {

                    $.each(productall, function (idx, productalldetail) {
                      const { p_name, p_specification, p_price, p_size, p_image } = productalldetail;
                      const p_color = p_specification === '' ? "單色系" : p_specification;
                      const p_prosize = p_size === '' ? "零碼" : p_size;

                      const data = `<div style="display: none; background-color: rgb(248, 245, 240); font-size: 18px; font-weight: bold; border-bottom: 0.4rem solid;" class="d-flex align-items-center" >
                            <div style="width:15%" >
                              <img src="./orderALLimg/product_img/${p_image}" style="width:100px;height:100px">
                            </div >
                            <div style="width:25% ">
                              品名 : ${p_name} 
                            </div>
                            <div style="width:15%">
                              顏色:${p_color} 
                            </div>
                            <div style="width:15%">
                                尺寸:${p_prosize} 
                            </div>
                            <div style="width:15%">  
                              單價 : ${p_price} 
                            </div>
                            <div style="width:15%">
                              購買數量 : ${buynum}
                            </div>
                          </div>`;
                      $('#' + orderID).append(data);

                    })
                  });
                })
              })
            });
          });
        });
      }

      //輸出整個table
      function ShowUsers() {
        //透過Ajax讀取Users資料
        $.ajax({
          url: './orderALLapi/showtable.php',
          type: 'GET',
          dataType: 'json'
        }).done(function (users) {
          const docFrag = $(document.createDocumentFragment()); //建立一個空的物件

          $.each(users, function (idx, user) {
            const { orderrealID, orderrealmemberID, PAY_methods, Shipping_methods, receiver, receiver_phone, Shipping_address, Shipping_code, orderreal_date } = user;
            const data = `
                        <tr data-widget="expandable-table" aria-expanded="false" >
                        <td class="d-flex align-items-center">
                          <div style="width:40%;">${orderrealID}</div>
                          <i class="fas fa-edit" style="color: #13811b; width:40%;" id="edit${orderrealID}"></i>
                          <i class="fas fa-trash-alt" style="color: #db0606; width:20%;" id="delet${orderrealID}"></i>
                        </td>
                        <td style="text-align: center;" >${orderrealmemberID}</td>
                        <td style="text-align: center;">${PAY_methods}</td>
                        <td style="text-align: center;">${Shipping_methods}</td>
                        <td style="text-align: center;">${receiver}</td>
                        <td style="text-align: center;">${receiver_phone}</td>
                        <td style="text-align: center;">${Shipping_address}</td>
                        <td style="text-align: center;">${Shipping_code}</td>
                        <td style="text-align: center;">${orderreal_date}</td>
                      </tr>
                      <tr class="expandable-body d-none">
                        <td colspan="9" id="${orderrealID}">
                        </td>
                      </tr>`;

            docFrag.append(data);

          });
          $('#tbodyshowtalbe').html(docFrag);

          $('#tbodyshowtalbe tr').each(function () {
            $(this).find('[colspan="9"]').each(function () {
              const orderID = $(this).attr('id');
              $.ajax({
                url: './orderALLapi/getrealitem.php',
                type: 'GET',
                data: { "id": orderID },
                dataType: 'json'
                // orderID就是訂單的編號
              }).done(function (product) {
                // console.log(orderID);
                $.each(product, function (idx, realitem) {
                  const { orderrealdetail_PID, buynum } = realitem;
                  // 例如:訂單1  買了P_ID2 的   買了3個
                  $.ajax({
                    url: './orderALLapi/getProductall.php',
                    type: 'GET',
                    data: { "id": orderrealdetail_PID },
                    dataType: 'json'
                  }).done(function (productall) {

                    $.each(productall, function (idx, productalldetail) {
                      const { p_name, p_specification, p_price, p_size, p_image } = productalldetail;
                      const p_color = p_specification === '' ? "單色系" : p_specification;
                      const p_prosize = p_size === '' ? "零碼" : p_size;
                      const data = `<div style="display: none; background-color: rgb(248, 245, 240); font-size: 18px; font-weight: bold; border-bottom: 0.4rem solid;" class="d-flex align-items-center" >
                            <div style="width:15%" >
                              <img src="./orderALLimg/product_img/${p_image}" style="width:100px;height:100px">
                            </div >
                            <div style="width:25% ">
                              品名 : ${p_name} 
                            </div>
                            <div style="width:15%">
                              顏色:${p_color} 
                            </div>
                            <div style="width:15%">
                                尺寸:${p_prosize} 
                            </div>
                            <div style="width:15%">  
                              單價 : ${p_price} 
                            </div>
                            <div style="width:15%">
                              購買數量 : ${buynum}
                            </div>
                          </div>`;
                      $('#' + orderID).append(data);
                    })

                  });

                })


              })
            });
          });
        });
      }

      //打開新增訂單彈跳視窗
      function openOrderModal() {
        Swal.fire({
          title: '新增訂單',
          html: `
            <input type="text" id="memberID" class="swal2-input" placeholder="訂購會員編號">
            <input type="text" id="paymentMethod" class="swal2-input" placeholder="付款方式">
            <input type="text" id="shippingMethod" class="swal2-input" placeholder="物流方式">
            <input type="text" id="receiver" class="swal2-input" placeholder="收件人">
            <input type="text" id="contactNumber" class="swal2-input" placeholder="聯絡電話">
            <input type="text" id="shippingAddress" class="swal2-input" placeholder="收件地址">
            <input type="text" id="shippingCode" class="swal2-input" placeholder="配送物流條碼">
          `,
          focusConfirm: false,
          preConfirm: () => {
            const memberID = Swal.getPopup().querySelector('#memberID').value;
            const paymentMethod = Swal.getPopup().querySelector('#paymentMethod').value;
            const shippingMethod = Swal.getPopup().querySelector('#shippingMethod').value;
            const receiver = Swal.getPopup().querySelector('#receiver').value;
            const contactNumber = Swal.getPopup().querySelector('#contactNumber').value;
            const shippingAddress = Swal.getPopup().querySelector('#shippingAddress').value;
            const shippingCode = Swal.getPopup().querySelector('#shippingCode').value;

            // Perform an AJAX request to save the order data
            // You need to implement the server-side logic to handle this request
            $.ajax({
              url: './orderALLapi/saveOrder.php', // Replace with your server-side script URL
              type: 'POST',
              data: {
                memberID: memberID,
                paymentMethod: paymentMethod,
                shippingMethod: shippingMethod,
                receiver: receiver,
                contactNumber: contactNumber,
                shippingAddress: shippingAddress,
                shippingCode: shippingCode
              },
              dataType: 'json'
            }).done(function (response) {
              if (response.success) {
                // Order saved successfully, show a confirmation message
                Swal.fire('新增訂單成功', '', 'success').then(() => {
                  // console.log(response.orderID);
                  openProductModal(response.orderID); // Open the product modal for the newly created order
                });
              } else {
                Swal.fire('新增訂單失敗', response.message, 'error');
              }
            }).fail(function () {
              Swal.fire('新增訂單失敗', '發生錯誤，請稍後再試。', 'error');
            });
          }
        });
      }

      //新增購物內容彈跳視窗
      function openProductModal(orderID) {
        function addProductToOrder() {
          Swal.fire({
            title: '新增購物內容',
            html: `
            <input type="text" id="productID" class="swal2-input" placeholder="產品編號">
            <input type="number" id="quantity" class="swal2-input" placeholder="購買數量">
          `,
            focusConfirm: false,
            // showCancelButton: true,
            confirmButtonText: '加入商品細項',
            // cancelButtonText: '結束並完成',
            // showCloseButton: true,  // Add close button to the dialog
            preConfirm: () => {
              const productID = Swal.getPopup().querySelector('#productID').value;
              const quantity = Swal.getPopup().querySelector('#quantity').value;

              // Perform an AJAX request to save the product data for the order
              // You need to implement the server-side logic to handle this request
              $.ajax({
                url: './orderALLapi/saveProduct.php', // Replace with your server-side script URL
                type: 'POST',
                data: {
                  orderID: orderID,
                  productID: productID,
                  quantity: quantity
                },
                dataType: 'json'
              }).done(function (response) {
                if (response.success) {
                  // Product saved successfully, show a confirmation message
                  Swal.fire({
                    title: '新增購物內容成功',
                    // showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: '繼續新增',
                    cancelButtonText: '結束並完成'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      addProductToOrder(); // Continue adding products if "繼續新增" button is clicked
                    } else {
                      ShowUsers(); // Refresh the table when "結束並完成" button is clicked
                    }
                  });
                } else {
                  Swal.fire('新增購物內容失敗', response.message, 'error');
                }
              }).fail(function () {
                Swal.fire('新增購物內容失敗', '發生錯誤，請稍後再試。', 'error');
              });
            }
          });
        }



        addProductToOrder(); // Initial call to addProductToOrder function
      }

      //新增訂單執行
      $('#addreaIitem').on('click', function () {
        openOrderModal();
      });

      ShowUsers();

      // 查詢日期區間方法 開始...
     
      $('#getdate').on('click', function () {
        const Date1 = new Date($('#startDate').val());
        Date1.setDate(Date1.getDate());
        const startDate = Date1.toISOString().split('T')[0];
        //startDate 是起始日期

        const Date2 = new Date($('#endDate').val());
        Date2.setDate(Date2.getDate());
        const endDate = Date2.toISOString().split('T')[0];
        //endDate 是結束日期

        getaDate(startDate, endDate);
      })
      // 查詢日期區間方法 結束...

      //修改訂單的小icon
      $('#tbodyshowtalbe').on('click', '.fa-edit', function () {
        var orderidTarget = $(this).attr('id').replace('edit', '');
        event.stopPropagation();
        // console.log(orderid);
        // console.log($(`#${orderidTarget}`).html());
        $.ajax({
          url: './orderALLapi/fixrealitem.php',
          type: 'GET',
          data: { "id": orderidTarget },
          dataType: 'json'
        }).done(function (Target) {
          $.each(Target, function (idx, targetproduct) {
            const { orderrealID, orderrealmemberID, PAY_methods, Shipping_methods, receiver, receiver_phone, Shipping_address, Shipping_code, orderreal_date } = targetproduct;
            // console.log(receiver_phone);
            Swal.fire({
              title: `訂單編號${orderrealID} 會員編號${orderrealmemberID}`,
              html: `
            付款方式: <input type="text" id="PAY_methods_ID" class="swal2-input"  value="${PAY_methods}"></br>
            物流方式:   <input type="text" id="Shipping_methods_ID" class="swal2-input" value="${Shipping_methods}" ></br>
            收貨人名:     <input type="text" id="receiver_ID" class="swal2-input" value="${receiver}" ></br>
            聯絡方式:   <input type="text" id="receiver_phone_ID" class="swal2-input" value="${receiver_phone}" ></br>
            收件地址:   <input type="text" id="Shipping_address_ID" class="swal2-input" value="${Shipping_address}" >
          `,
              focusConfirm: false,
              showCancelButton: true,
              confirmButtonText: '確定修改',
              cancelButtonText: '取消',
              // showCloseButton: true,  // Add close button to the dialog
              preConfirm: () => {
                const PAY_methods_ID = Swal.getPopup().querySelector('#PAY_methods_ID').value;
                const Shipping_methods_ID = Swal.getPopup().querySelector('#Shipping_methods_ID').value;
                const receiver_ID = Swal.getPopup().querySelector('#receiver_ID').value;
                const receiver_phone_ID = Swal.getPopup().querySelector('#receiver_phone_ID').value;
                const Shipping_address_ID = Swal.getPopup().querySelector('#Shipping_address_ID').value;
                console.log(Shipping_address_ID);

                $.ajax({
                  url: './orderALLapi/fix_ordermain.php',
                  type: 'POST',
                  data: {
                    ordermain_ID: orderrealID,
                    PAY_methods_ID: PAY_methods_ID,
                    Shipping_methods_ID: Shipping_methods_ID,
                    receiver_ID: receiver_ID,
                    receiver_phone_ID: receiver_phone_ID,
                    Shipping_address_ID: Shipping_address_ID
                  },
                  dataType: 'json'
                }).done(function (response) {
                  if (response.success) {
                    Swal.fire('修改訂單成功', '', 'success').then(function () {
                      ShowUsers();
                    }
                    );

                  }
                })


              }
            });
          })

        })

      })

      //刪除訂單的功能
      $('#tbodyshowtalbe').on('click', '.fa-trash-alt', function () {
        var deleteTarget = $(this).attr('id').replace('delet', '');
        event.stopPropagation();
        Swal.fire({
          title: `您將刪除訂單編號${deleteTarget}?`,
          text: "確定刪除後將無法回復操作",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: '確定刪除!',
          cancelButtonText: '取消動作!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: './orderALLapi/deleteData.php',
              type: 'POST',
              data: {
                deleteTarget: deleteTarget
              },
              dataType: 'json'
            }).done(function (response) {
              console.log(response);
              if (response.success) {
                console.log("456");
                Swal.fire(
                  '刪除成功!',
                  `訂單編號${deleteTarget}已刪除`,
                  'success'
                ).then(function () {
                  ShowUsers();
                }
                );

              }
            })




          }
        })
      })

      //今天成立的訂單(id="todayOrder")
      $('#todayOrder').on('click', function () {
        // 獲取今天的日期
        var today = new Date();

        // 獲取年、月、日
        var year = today.getFullYear();
        var month = today.getMonth() + 1; // 月份從 0 開始，因此需要加 1
        var day = today.getDate();

        // 格式化月份和日期為兩位數
        month = month < 10 ? '0' + month : month;
        day = day < 10 ? '0' + day : day;

        // 構建日期字串
        var formattedDate = year + '-' + month + '-' + day;

        // 執行
        getaDate(formattedDate, formattedDate);

      })

      //所有歷史
      $('#historyOrder').on('click', function () {
        ShowUsers();
      })
    });
  </script>
</body>

</html>