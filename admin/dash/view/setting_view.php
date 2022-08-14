<?php

    if(isset($_POST['submit'])){
        $msg = $obj->setting($_POST);
    }

    $posts = $obj->setting_show();

?>

<section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>Setting</small>
          </div>
        </div>

        <?php
                        while($postdata=mysqli_fetch_assoc($posts)){

                        ?>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">UPDATE COMPANY INFORMATIONS</h1>
          <form action="" method="POST" enctype="multipart/form-data" id="setting_form">
            <div>
              <label>Company Name</label>
              <input
                type="text"
                name="name"
                value="<?php echo $postdata['set_name']?>"
                class="input"
              />
            </div>
            <div>
              <label>Email</label>
              <input name="email" type="email" value="<?php echo $postdata['set_email']?>" class="input" />
            </div>
            <div>
              <label>Company Phone/Mobile</label>
              <input name="phone" type="number" value="<?php echo $postdata['set_phone']?>" class="input" />
            </div>

            <div>
              <label>Company Address</label>
              <input name="adress" type="text" value="<?php echo $postdata['set_adress']?>" class="input" />
            </div>

            <div>
              <label>City</label>
              <input name="city" type="text" value="<?php echo $postdata['set_city']?>" class="input" />
            </div>
            <div>
              <label>Country</label>
              <input name="country" type="text" value="<?php echo $postdata['set_country']?>" class="input" />
            </div>
            <div>
              <label>Zip Code</label>
              <input name="zip" type="text" value="<?php echo $postdata['set_zip']?>" class="input" />
            </div>

            <div>
              <label>Change Photo</label>
              <input name="file" type="file" title="profile" />
              <img
                src="./upload/<?php echo $postdata['set_img']?>"
                width="120"
                height="120"
                class="object-cover rounded"
              />
            </div>
            <input type="submit" name="submit" class="btn submit_btn" value="Update">
          </form>
        </div>

        <?php } ?>
      </section>