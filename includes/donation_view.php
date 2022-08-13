<?php

    if(isset($_POST['add_request'])){
        $add_request = $obj->add_request($_POST);
    }

    $posts = $obj->category();

?>

<div class="right_column">
        <div class="page_content_title">
          <h4>DONATION</h4>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="rounded p-5 space-y-5 bg-gray-100 dark:bg-gray-800">

        <div class="hide_when_check flex flex-col lg:flex-row gap-5">
            <div class="w-full flex flex-col justify-start">
              <label class="mb-1">Full name</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-user"></i>
                </span>
                <input name="name" required type="text" class="input_with_icon" placeholder="Enter Your Name" />
              </div>
            </div>

            <div class="hide_when_check w-full flex flex-col justify-start">
              <label class="mb-1" for="address">Phone Number</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-address-book"></i>
                </span>
                <input name="phone" required type="number" class="input_with_icon" id="number" placeholder="Enter Your Number" />
              </div>
            </div>
          </div>
          

        <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Adress</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <input name="adress" required type="text" class="input_with_icon" name="adress" placeholder="Enter Your Adress" />
            </div>
          </div>

        <div class="hide_when_check flex flex-col lg:flex-row gap-5">
            <div class="w-full flex flex-col justify-start">
              <label class="mb-1">Email</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-user"></i>
                </span>
                <input name="email" required type="email" class="input_with_icon" placeholder="Enter Your Email" />
              </div>
            </div>

            <div class="hide_when_check w-full flex flex-col justify-start">
              <label class="mb-1" for="address">NID</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-address-book"></i>
                </span>
                <input name="nid" required type="number" class="input_with_icon" id="nid" placeholder="Enter Your NID" />
              </div>
            </div>
          </div>

          <div>
            <div class="flex flex-col lg:flex-row gap-5">
              

              <div class="w-full">
                <div class="w-full flex flex-col justify-start">
                  <label class="mb-1">Donation Amount</label>
                  <div class="w-full flex relative">
                    <span class="input_icon">
                      ৳
                    </span>
                    <input name="amount" required id="deposit_amount_input" type="number" placeholder="100" class="input_with_icon"/>
                  </div>
                </div>
              </div>

              <div class="w-full flex flex-col justify-start">
                <label class="mb-1">Payment Method</label>
                <select name="method" required id="select_payment_method" class="select">
                  <option disabled selected value="">Select</option>
                  <option>Bkash</option>
                  <option>Nagad</option>
                 <option>Rocket</option>
                 <option>Payoneer</option>
                 <option>Islami Bank</option>
                 <option>Datch Bangla Bank</option>
                 <option>Visa Card</option>
                 <option>Master Card Card</option>
                 <option>Paypal</option>
                </select>
              </div>

              

            </div>
          </div>

        <div class="hide_when_check flex flex-col lg:flex-row gap-5">
            <div class="w-full flex flex-col justify-start">
            <label class="mb-1" id="payment_label">Payment Method Number</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-wallet"></i>
              </span>
              <input name="method_number" required type="number" id="payment_input" class="input_with_icon" name="method_number"
                placeholder="Enter Payment Method Number" />
            </div>
            </div>

            <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Please Enter Your Transaction ID</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <input name="tr_id" required type="text" class="input_with_icon" name="tr_id" placeholder="transaction id" />
            </div>
            </div>
          </div>

        <div class="hide_when_check flex flex-col lg:flex-row gap-5">
            <div class="w-full flex flex-col justify-start">
            <label class="mb-1">Donation Cause</label>
            <select name="donation_cause" required id="select_payment_method" class="select">
            <?php
            while($postdata=mysqli_fetch_assoc($posts)){
              echo "<option>".$postdata['category_name']."</option>";
            } ?>
            </select>
            </div>

            <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Facebook Account</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <input name="fb" required type="text" class="input_with_icon" name="fb" placeholder="Facebook Profile link" />
            </div>
            </div>
          </div>     

          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Your Image</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <input name="file" required type="file" class="input_with_icon" placeholder="" />
            </div>
          </div>

          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Term & Condition</label>
            <div class="w-full flex relative">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nemo qui cupiditate commodi explicabo quas fuga ad, blanditiis nostrum, ut eos corporis aperiam odit exercitationem alias aliquid doloribus! Quasi nam, accusamus iste harum ab laudantium nisi eius quo, nobis explicabo sit ipsam porro ea consequuntur! Non asperiores et necessitatibus similique.
            </div>
          </div>

          

          <div class="flex items-center justify-start gap-2">
            <input required class="styled-checkbox" id="checkbox2" type="checkbox" value="1">
            <label for="checkbox2">
              I agree with <a href="term-and-condition.html" class="underline text-blue-500">terms and condition</a>
            </label>
          </div>
          <input type="submit" name="add_request" class="btn" value="Request">

        </form>



      </div>


