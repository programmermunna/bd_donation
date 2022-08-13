<?php

    $posts = $obj->pending_order();



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
                        <td>
                            <a href="#">Edit</a> ||
                            <a href="#">Delete</a>
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

              <!-- Delete Popup -->
              <div id="delete_popup" style="display: none">
                <div id="delete_popup_overlay" onclick="cancel_delete()"></div>
                <div id="delete_popup" class="swing-show">
                  <span class="exclamation_icon"></span>
                  <p class="text-xl font-bold">Are you Want to delete?</p>
                  <small> Once Delete, This will be Permanently Delete! </small>
                  <div class="delete_popup_btns">
                    <button class="cancel" onclick="cancel_delete()">
                      Cancel
                    </button>
                    <button class="ok" onclick="confirm_delete()">OK</button>
                  </div>
                </div>
              </div>
              <!-- Delete Popup -->
            </div>
          </div>
        </section>
      </section>