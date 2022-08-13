<?php

    $posts = $obj->employee();

    if(isset($_GET['status'])){
      if($_GET['status']=='delete'){
          $id = $_GET['id'];
          $del_msg = $obj->delete_employee($id);
      }
  }


?>

<section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>All Sellers</small>
          </div>
        </div>

        <!-- Page Main Content -->
        <section class="page_main_content">
          <div class="main_content_container">
            <!-- Table -->
            <div class="table_content_wrapper">
              <div class="page_title">
                <h4>ALL SELLERS</h4>
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
                  <input type="search" placeholder="Search seller" />
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
                            <span>Email</span>
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
                            <span>Address</span>
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
                            <span>Facebook</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Github</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Type</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Salary</span>
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
                          <div class="table_th_div">
                            <span>Date</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Action</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="sellers_wrapper" class="text-sm">
                    <?php
            while($postdata=mysqli_fetch_assoc($posts)){

             ?>

                <tr>
                        <tr>
                        <td><?php echo $postdata['emp_name']?></td>
                        <td><?php echo $postdata['emp_email']?></td>
                        <td><?php echo $postdata['emp_phone']?></td>
                        <td><?php echo $postdata['emp_address']?></td>
                        <td><?php echo $postdata['emp_nid']?></td>
                        <td><a href="<?php echo $postdata['emp_facebook']?>"><?php echo $postdata['emp_name']?></a></td>
                        <td><a href="<?php echo $postdata['emp_github']?>"><?php echo $postdata['emp_name']?></a></td>
                        <td><?php echo $postdata['emp_type']?></td>
                        <td><?php echo $postdata['emp_salary']?></td>
                        <td><img width='100px' height='50px'  src="./upload/<?php echo $postdata['emp_photo']; ?>" alt="img"></td>
                        <td><?php echo $postdata['date']?></td>
                            <td>
                                <a href="#">Edit</a> ||
                                <a class="action delete" href="?status=delete&&id=<?php echo $postdata['id']?>">Delete</a>
                            </td>
                          </tr>
                          <?php }; ?>
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