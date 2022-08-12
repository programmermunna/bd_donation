<?php

    $posts = $obj->display_post();

    if(isset($_GET['status'])){
        if($_GET['status']=='delete'){
            $id = $_GET['id'];
            $del_msg = $obj->delete_post($id);
        }
    }



?>

<section class="content_wrapper">
  <!-- Page Details Title -->
  <div class="page_details">
    <div>
      <a href="../../index.html" class="go_home">
        <small>Home</small>
      </a>
      <small>/</small>
      <small>Expense</small>
    </div>
  </div>
  <!-- Page Main Content -->
  <section class="page_main_content">
    <div class="main_content_container">
      <!-- Table -->
      <div class="table_content_wrapper">
        <div class="page_title">
          <h4>Expense</h4>
        </div>
        <header class="table_header">
          <div class="table_header_left">
            <p>Show</p>
            <select>
              <option>10</option>
              <option>15</option>
              <option>20</option>
              <option>25</option>
              <option>35</option>
              <option>50</option>
              <option>100</option>
            </select>
            <p>Entries</p>
          </div>
          <div class="table_header_right">
            <p>Search:</p>
            <input type="search" placeholder="Search customer" />
          </div>
        </header>
        <div class="table_parent">
          <div class="table_sub_parent">
            <table class="table">
              <thead>
                <tr>
                  <th class="table_th">
                    <div class="table_th_div">
                      <span>Employee Salary</span>
                      <span class="sort_icon"></span>
                    </div>
                  </th>
                  <th class="table_th">
                    <div class="table_th_div">
                      <span>Office Cost</span>
                      <span class="sort_icon"></span>
                    </div>
                  </th>
                  <th class="table_th">
                    <div class="table_th_div">
                      <span>Eating Cost</span>
                      <span class="sort_icon"></span>
                    </div>
                  </th>
                  <th class="table_th">
                    <span>Buy Cost</span>
                  </th>
                  <th class="table_th">
                    <div class="table_th_div">
                      <span>Other Cost</span>
                      <span class="sort_icon"></span>
                    </div>
                  </th>
                  <th class="table_th">
                    <div class="table_th_div">
                      <span>Photo</span>
                      <span class="sort_icon"></span>
                    </div>
                  </th>
                  <th class="table_th">
                    <span>Action</span>
                  </th>
                </tr>
              </thead>
              <tbody id="customers_wrapper" class="text-sm">
              <?php
            while($postdata=mysqli_fetch_assoc($posts)){

             ?>

                <tr>
                  <td><?php echo $postdata['employee_salary']?></td>
                  <td><?php echo $postdata['office_cost']?></td>
                  <td><?php echo $postdata['eating_cost']?></td>
                  <td><?php echo $postdata['buy_cost']?></td>
                  <td><?php echo $postdata['other_cost']?></td>
                  <td><img width='100px' height='50px'  src="./upload/<?php echo $postdata['post_img']; ?>" alt="img"></td>
                  <td>
                  <a class="action edit" href="update_expense.php?status=edit&&id=<?php echo $postdata['id']; ?>&&salary=<?php echo $postdata['employee_salary']?>&&office=<?php echo $postdata['office_cost']?>&&eating=<?php echo $postdata['eating_cost']?>&&buy=<?php echo $postdata['buy_cost']?>&&other=<?php echo $postdata['other_cost']?>">Edit</a>  ||
                  <a class="action delete" href="?status=delete&&id=<?php echo $postdata['id']?>">Delete</a>  
                  </td>
                </tr>

             <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="pagination_buttons">
          <p class="text-xs font-semibold"> Showing 1 to 10 of 100 Entries </p>
          <div class="flex gap-2">
            <button>Prev</button>
            <button>Next</button>
          </div>
        </div>
        <!-- Delete Popup -->
        <div id="delete_popup" style="display: none">
          <div id="delete_popup_overlay" onclick="cancel_delete()"></div>
          <div id="delete_popup" class="swing-show">
            <span class="exclamation_icon"></span>
            <p class="text-xl font-bold">Are you Want to delete?</p>
            <small> Once Delete, This will be Permanently Delete! </small>
            <div class="delete_popup_btns">
              <button class="cancel" onclick="cancel_delete()"> Cancel </button>
              <button class="ok" onclick="confirm_delete()">OK</button>
            </div>
          </div>
        </div>
        <!-- Delete Popup -->
      </div>
    </div>
  </section>
</section>