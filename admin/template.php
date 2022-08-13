<?php include('class/function.php');
    $obj = new adminBlog();

    session_start();
    $id = $_SESSION['adminID'];
    if(empty($id)){
        header('location:index.php');
    }

    if(isset($_GET['admin_logout'])){
        if($_GET['admin_logout']=='logout'){
            $obj->admin_logout();
        }
    }
?>

        <?php include('dash/header.php'); ?>

    <!-- Main Content -->
    <main class="w-full flex bg-gray-100">
      <!-- Side Navbar Links -->
      <?php include('dash/side_bar.php'); ?>

      <!-- Side Navbar  -->

      <!-- Content -->
      <?php //include('dashboard_part/dash_content.php'); ?>
      <?php
                        if(isset($view)){
                            if($view=="dashboard"){
                                include("dash/view/dash_view.php");
                            }elseif($view=="add_data"){
                                include("dash/view/add_data_view.php");
                            }elseif($view=="show_data"){
                                include("dash/view/show_data_view.php");
                            }elseif($view=="update_expense"){
                                include("dash/view/update_expense_view.php");
                            }elseif($view=="add_employee"){
                                include("dash/view/add_employee_view.php");
                            }elseif($view=="employee"){
                                include("dash/view/employee_view.php");
                            }elseif($view=="add_category"){
                                include("dash/view/add_category_view.php");
                            }elseif($view=="category"){
                                include("dash/view/category_view.php");
                            }elseif($view=="pending_order"){
                                include("dash/view/pending_order_view.php");
                            }elseif($view=="success_order"){
                                include("dash/view/success_order_view.php");
                            }elseif($view=="setting"){
                                include("dash/view/setting_view.php");
                            }
                        }
                        
                         ?>

      <!-- Content -->
    </main>
    <!-- Main Content -->
    <script src="dist/js/header.js"></script>
    <script src="dist/js/svg_icons.js"></script>
    <script src="dist/js/sidebar_nav.js"></script>
  </body>
</html>
