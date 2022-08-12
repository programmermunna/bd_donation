<?php
  


    if(isset($_GET['status'])){
        if($_GET['status']=='edit'){
            $id = $_GET['id'];
            $up_salary = $_GET['salary'];
            $up_office = $_GET['office'];
            $up_eating = $_GET['eating'];
            $up_buy = $_GET['buy'];
            $up_other = $_GET['other'];
           // $post_msg = $obj->update_post($post_id);
        }
    }

    if(isset($_POST['update_cost'])){
        $up_post = $obj->update_cost($_POST);
    }




?>


<section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>Add Customer</small>
          </div>
        </div>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">Add New Customer</h1>
          <form id="new_customer_form" action="" method="POST" enctype="multipart/form-data">
            <div>
              <label>Employee Salary</label>
              <input value="<?php echo $up_salary; ?>" type="number" name="employee_salary" placeholder="" class="input" />
            </div>
            <div>
              <label>Office Cost</label>
              <input value="<?php echo $up_office; ?>" type="number" name="office_cost" placeholder="" class="input" />
            </div>
            <div>
              <label>Eating Cost</label>
              <input value="<?php echo $up_eating; ?>" type="Number" name="eating_cost" placeholder="" class="input" />
            </div>
            <div>
              <label>Buy Cost</label>
              <input value="<?php echo $up_buy; ?>" type="Number" name="buy_cost" placeholder="" class="input" />
            </div>
            <div>
              <label>Other Cost</label>
              <input value="<?php echo $up_other; ?>" type="Number" name="other_cost" placeholder="" class="input" />
            </div>
            <input value="<?php echo $id; ?>" type="hidden" name="hidden_id" placeholder="" class="input" />
            
            <div>
              <label>Photo</label>
              <input type="file" name="post_img" title="profile" placeholder="City" />
            </div>
            <input type="submit" name="update_cost" class="btn submit_btn" value="Submit">
          </form>
        </div>
      </section>

