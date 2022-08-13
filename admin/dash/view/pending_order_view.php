<?php

    $posts = $obj->pending_order();

    if(isset($_GET['status'])){
      if($_GET['status']=='delete'){
          $id = $_GET['id'];
          $del_msg = $obj->delete_donation($id);
      }
  }



    if(isset($_GET['status'])){
      if($_GET['status']=='edit'){
          $id = $_GET['id'];
          $del_msg = $obj->edit_donation($id);
      }
  }



    if(isset($_GET['status'])){
      if($_GET['status']=='pending'){
          $del_msg = $obj->status_donation($_POST);
      }
  }



?>

<section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>Success Order</small>
          </div>
        </div>

        <!-- Page Main Content -->
        <section class="page_main_content">
          <div class="main_content_container">
            <!-- Table -->
            <div class="table_content_wrapper">
              <div class="page_title">
                <h4>SUCCESS ORDER</h4>
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
                  <input type="search" placeholder="Search order" />
                </div>
              </header>

              <div class="table_parent">
                <div class="table_sub_parent">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Name</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Phone</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Adress</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Email</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>NID</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Amount</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Method</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Method Number</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Transaction ID</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Cause</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Facebook</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Image</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Status</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <span>Action</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="orders_wrapper" class="text-sm">
                    <?php
                        while($postdata=mysqli_fetch_assoc($posts)){

                        ?>
                    <tr>
                    <td><?php echo $postdata['dn_name']?></td>
                    <td><?php echo $postdata['dn_phone']?></td>
                    <td><?php echo $postdata['dn_address']?></td>
                    <td><?php echo $postdata['dn_email']?></td>
                    <td><?php echo $postdata['dn_nid']?></td>
                    <td><?php echo $postdata['dn_amount']?></td>
                    <td><?php echo $postdata['dn_method']?></td>
                    <td><?php echo $postdata['dn_method_number']?></td>
                    <td><?php echo $postdata['dn_tr_id']?></td>
                    <td><?php echo $postdata['dn_cause']?></td>
                    <td><?php echo $postdata['dn_fb']?></td>
                    <td><?php echo $postdata['dn_img']?></td>
                    <td><a href="?status=pending&&id=<?php echo $postdata['id']?>"><?php echo $postdata['dn_status']?></a></td>
                        <td>
                            <a class="action delete" href="?status=delete&&id=<?php echo $postdata['id']?>">Delete</a> 
                        </td>
                    </tr>
                          <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="pagination_buttons">
                <p class="text-xs font-semibold">
                  Showing 1 to 10 of 100 Entries
                </p>

                <div class="flex gap-2">
                  <button>Prev</button>
                  <button>Next</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>