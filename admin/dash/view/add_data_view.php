<?php

   // $display_category = $obj->display_category();

    if(isset($_POST['add_post'])){
        $msg = $obj->add_post($_POST);
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
              <input type="number" name="employee_salary" placeholder="" class="input" />
            </div>
            <div>
              <label>Office Cost</label>
              <input type="number" name="office_cost" placeholder="" class="input" />
            </div>
            <div>
              <label>Eating Cost</label>
              <input type="Number" name="eating_cost" placeholder="" class="input" />
            </div>
            <div>
              <label>Buy Cost</label>
              <input type="Number" name="buy_cost" placeholder="" class="input" />
            </div>
            <div>
              <label>Other Cost</label>
              <input type="Number" name="other_cost" placeholder="" class="input" />
            </div>
            
            <div>
              <label>Photo</label>
              <input type="file" name="post_img" title="profile" placeholder="City" />
            </div>
            <input type="submit" name="add_post" class="btn submit_btn" value="Submit">
          </form>
        </div>
      </section>