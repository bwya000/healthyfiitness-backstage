<?php
require_once ("pdo-connect.php");
session_start();

if (!isset($_SESSION["user"])) {   // 如果尚未登入，導向登入頁面
  header("Location: ../login/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fitness | Employee</title>
  <link rel="icon" href="./user_image/logo.ico" type="image/x-icon" /> 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Theme style -->
  
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


 <!-- 側邊欄全部 start -->
 <aside class="main-sidebar sidebar-dark-warning elevation-4">

<!-- Logo圖 點選前往首頁-->
<a href="../../index.php" class="brand-link">
    <img src="./user_image/logo.png" alt=" Logo" class=" img-rounded "
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

            <!-- [目前位置] 員工列表 -> 員工管理 -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-table"></i>
                    <p>員工列表<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
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
                        <a href="member.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>會員管理</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 食物資料管理 + 新增一筆 資料 -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-bone"></i>
                    <p>食物資料管理</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../table_33/fooddata.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>員工管理</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">

                  <div class="row">
                  <div class="col-6">
                    <button type="button" id="buttonAdd" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#employeeModal">新增管理員</button>
                </div>
                </div>


                </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="employeeTable" class="table table-bordered table-hover">
                  <thead style="text-align:center">
                  <tr>
                    <th>員工編號</th>
                    <th>姓名</th>
                    <th>頭貼</th>
                    <th>帳號</th>
                    <th>密碼</th>
                    <th>性別</th>
                    <th>生日</th>
                    <th>負責事項</th>
                    <th>操作</th>
                  </tr>
                  </thead>
                  <tbody>
                        
                    </tbody>         
                
                </table>

              
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="employeeModalLabel">資料修改</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="employeeForm" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" >
                      <label for="name" class="col-form-label">姓名:</label>
                      <input type="text" class="form-control" name="name"  id="name">
                    </div>
                    <div class="form-group">
                      <label for="inputavatar" class="col-form-label">頭貼:</label>
                      <div  class="img-wrap"><img id="img1" src="./user_image/avatar.png" width="100"></div>
                      <input type="file" class="form-control" name="inputavatar" id="inputavatar" hidden>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-form-label">Email:</label>
                      <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group" hidden>
                      <label for="password" class="col-form-label">密碼:</label>
                      <input type="text" class="form-control" name="password" id="password" >
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-form-label">性別:</label>
                        <input type="text" class="form-control" name="gender"  id="gender">
                      </div>
                      <div class="form-group">
                        <label for="birthday" class="col-form-label">生日:</label>
                        <input type="date" class="form-control" name="birthday"  id="birthday">
                      </div>
                      <div class="form-group">
                        <label for="role" class="col-form-label">負責事項:</label>
                        <input type="text" class="form-control" name="role"  id="role">
                      </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                  <button id="buttonUpdate" type="button" class="btn btn-primary">儲存</button>
                </div>
              </div>
            </div>
          </div>
    </div>
<!-- jQuery -->

<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
        
        $(function () {    
      
          $(document).ready(function() {
      $('#employeeTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      }); 

  

      
      $('#img1').on('click', function () {
            $('#inputavatar').trigger('click');
            })
            $('#inputavatar').change(function(e) {
          const file = e.target.files[0];
          const reader = new FileReader();

          reader.onload = function(event) {
            $('#img1').attr('src', event.target.result);
          };

          reader.readAsDataURL(file);
          const selectedFileName = file.name;
          $('#selectedFileName').val(selectedFileName);
        });
           


           //編輯資料
          $('#employeeTable>tbody').on('click','button:nth-child(1)' ,function(){
            //讀出Table中要修改的資料
            const row = ($(this).parents('tr'));
            const id=row.children('td:nth-child(1)').text();//id
            const name=row.children('td:nth-child(2)').text();//姓名
            $('#img1').attr('src', row.find('.a_img').attr('src'));
            const email=row.children('td:nth-child(4)').text();//email
            const password=row.children('td:nth-child(5)').text();//密碼
            const gender=row.children('td:nth-child(6)').text();//性別
            const birthday=row.children('td:nth-child(7)').text();//生日
            const role=row.children('td:nth-child(8)').text();//負責事項
            
            //要把修改的資料帶入到Modal中
            $('#id').val(id);
            $('#name').val(name);
          
            $('#email').val(email);
            $('#password').val(password);
            $('#gender').val(gender);
            $('#birthday').val(birthday);
            $('#role').val(role);

            const img =  row.find('.a_img').attr('src');
           
             $('#inputavatar').text(img);
          })

          //修改或新增資料
          $('#buttonUpdate').on('click',function(event){

            
            
                
            //根據隱藏欄位中是否有值來判斷要做新增還是修改
            let idx= $('#id').val();
           

            if(idx===""){
              $('#img1').attr('src', './user_image/avatar.png');


const inputavatar = document.getElementById('inputavatar');
let filename = inputavatar.files[0]?.name; 

let img = $('#inputavatar').text();

  if(filename){
   
  }else if(filename == undefined){
    filename = 'avatar.png';
  }
               
                //將資料存進資料庫中
                $.ajax({
                    url:'employeeInsertApi.php', //將資料傳給這支PHP的程式
                    type:'POST', //透過POST方法傳送資料
                    async: false,
                    data: {
                    "id": $('#id').val(),
                    "name":$('#name').val(),
                    "avatarname":filename,
                    "email":$('#email').val(),
                    "password":$('#password').val(),
                    "gender": $('#gender').val(),
                    "birthday":$('#birthday').val(),
                    "role":$('#role').val()
        },
                    
                    dataType:'json', //Server回傳的結果為JSON格式
                    
                }).done(function(data){
                    //data為Server回傳的結果
                    //{"success":true,"errorMessage":"","postData":[]}
                    if(data.success){
                        //alert("新增成功")
                        Swal.fire('新增成功')
                        .then(()=>{
                         window.location.reload();
                            })
                        ShowEmployee();
                    }else{
                        alert(data.errorMessage)
                    }
                    

                })
            }
            else{


              
  const inputavatar = document.getElementById('inputavatar');
  let filename = inputavatar.files[0]?.name; 
  let img = $('#inputavatar').text();

    if(filename){
     
    }else if(filename == undefined){
      filename = img.replace("./user_image/",'');
    }





              console.log(filename);
                //console.log("修改");
                $.ajax({
                    url:'employeeUpdateApi.php',
                    type:'POST',
                    async: false,
                    data: {
                    "id": $('#id').val(),
                    "name":$('#name').val(),
                     "avatarname":filename,
                    "email":$('#email').val(),
                    "password":$('#password').val(),
                    "gender": $('#gender').val(),
                     "birthday":$('#birthday').val(),
                     "role":$('#role').val()
        },
                    dataType:'json'
                }).done(function(data){
                    if(data.success){
                        //alert("修改成功");
                        Swal.fire('修改成功');
                        ShowEmployee();
                    }
                    else{
                        alert(data.errorMessage)
                    }
                })
             

            }
            
            
            //儲存完關閉Modal
            $('#employeeModal').modal('hide');
    
          });


           function ShowEmployee(){
             //透過Ajax讀取employee資料
             $.ajax({
              
                url:'employeeSelectApi.php',
                type:'GET',
                async: false,
                dataType:'json',
                
             }).done(function(employee){

                const docFrag = $(document.createDocumentFragment()); //建立一個空的物件
                
                $.each(employee,function(idx,employee){
                const {e_id, name,avatarname,email,password,gender,birthday,role} = employee;
                const data = `
                   <tr>
                            <td>${e_id}</td>
                            <td>${name}</td>
                            <td><img class="a_img" src="./user_image/${avatarname}" style="height:100px;width:100px"></td>
                            <td>${email}</td>
                            <td>${password}</td>
                            <td>${gender}</td>
                            <td>${birthday}</td>
                            <td>${role}</td>
                            <td>
                            
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#employeeModal">
                             <i class="fas fa-edit" style="color: #13811b; width:40%;"></i>
                            </button>
                               
                               
                            </td>
                    </tr>`
                    docFrag.append(data);
            })

            $('#employeeTable>tbody').html(docFrag);

             })
           }

           ShowEmployee();

           //Modal隱藏
           $('#employeeModal').on('hide.bs.modal',function(){
            //清除所有input中的資料
            $('input').val("");
            $('#img1').attr('src', './user_image/avatar.png');
           })

           //Modal顯示
           $('#employeeModal').on('shown.bs.modal',function(){
            let idx= $('#id').val();
            if(idx===""){
               $('#buttonUpdate').text("新增");
               $('#employeeModalLabel').text("使用者新增");
            }
            else{
               $('#buttonUpdate').text("儲存");
               $('#employeeModalLabel').text("使用者修改");
            }
           
           })

         

        })
    </script>
</body>
</html>