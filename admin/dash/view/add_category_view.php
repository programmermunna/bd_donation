<?php

    if(isset($_POST['add_category'])){
        $add_category = $obj->add_category($_POST);
    }


?>
      <section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>Add Category</small>
          </div>
        </div>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">Add New Category</h1>
          <form action="" method="POST" id="new_category_form">
            <div>
              <label>Category Name</label>
              <input type="text" name="category" placeholder="Category name" class="input" />
            </div>
            <input type="submit" name="add_category" class="btn submit_btn" value="Add Category">
          </form>
        </div>
      </section>