<?php

    if(isset($_POST['add_employee'])){
        $employee = $obj->add_employee($_POST);
    }


?>

<section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>Add Seller</small>
          </div>
        </div>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">Add New Seller</h1>
          <form id="new_seller_form" action="" method="POST" enctype="multipart/form-data">
            <div>
              <label>Full Name</label>
              <input type="text" name="name" placeholder="Enter Your Full name" class="input" />
            </div>
            <div>
              <label>Email</label>
              <input type="email" name="email" placeholder="Enter Your Email" class="input" />
            </div>
            <div>
              <label>Phone</label>
              <input type="number" name="phone" placeholder="Enter Your Phone" class="input" />
            </div>
            <div>
              <label>Address</label>
              <input type="text" name="address" placeholder="Enter Your Address" class="input" />
            </div>
            <div>
              <label>Facebook</label>
              <input type="text" name="facebook" placeholder="Account LInk" class="input" />
            </div>
            <div>
              <label>Github</label>
              <input type="text" name="github" placeholder="Account LInk" class="input" />
            </div>
            <div>
              <label>Type</label>
              <input type="text" name="type" placeholder="Type of Programming" class="input" />
            </div>
              <label>Photo</label>
              <input type="file" name="file"  placeholder="" />
              <!-- <br> -->
              <input type="submit" name="add_employee" class="btn submit_btn" value="Add Employee">
            </div>
          </form>
        </div>
      </section>