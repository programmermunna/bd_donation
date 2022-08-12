<div class="right_column">
        <div class="page_content_title">
          <h4>DONATION</h4>
        </div>
        <form class="rounded p-5 space-y-5 bg-gray-100 dark:bg-gray-800">


          <div>
            <div class="flex flex-col lg:flex-row gap-5">

              <div class="w-full">
                <div class="w-full flex flex-col justify-start">
                  <label class="mb-1">Donation Amount</label>
                  <div class="w-full flex relative">
                    <span class="input_icon">
                      ৳
                    </span>
                    <input required id="deposit_amount_input" type="number" placeholder="100" class="input_with_icon"
                      name="email" />
                  </div>
                </div>
                <div id="total_payment"></div>
              </div>

              <div class="w-full flex flex-col justify-start">
                <label class="mb-1">Payment Method</label>
                <select required id="select_payment_method" class="select">
                  <option disabled selected value="">Select</option>
                </select>
              </div>

            </div>
            <div id="payment_message"></div>
          </div>

          <div class="flex border rounded p-3 items-center justify-start gap-2">
            <input class="styled-checkbox" id="hide_entity_checkbox" type="checkbox" value="value1">
            <label for="hide_entity_checkbox">Are you want to hide your identity!</label>
          </div>

          <div class="hide_when_check flex flex-col lg:flex-row gap-5">
            <div class="w-full flex flex-col justify-start">
              <label class="mb-1">Full name</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-user"></i>
                </span>
                <input required type="text" class="input_with_icon" placeholder="Name" />
              </div>
            </div>

            <div class="hide_when_check w-full flex flex-col justify-start">
              <label class="mb-1" for="address">Your Address</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-address-book"></i>
                </span>
                <input required type="text" class="input_with_icon" id="address" placeholder="Address" />
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col justify-start">
            <label class="mb-1">Donation Cause</label>
            <select required id="select_payment_method" class="select">
              <option disabled selected value="">Select</option>
              <option>All</option>
              <option>Sylhet</option>
              <option>Kurigram</option>
            </select>
          </div>

          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1" id="payment_label">Enter Your (Email/Number)</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-wallet"></i>
              </span>
              <input required type="text" id="payment_input" class="input_with_icon" name="email"
                placeholder="Wallet" />
            </div>
          </div>

          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Please Enter Your Transaction ID</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <input required type="text" class="input_with_icon" name="email" placeholder="transaction id" />
            </div>
          </div>

          <div class="">
            <label class="mb-1">Terms & Conditions</label>
            <br>
            <div class="term_conditions">
              <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>
            </div>
          </div>

          <div class="flex items-center justify-start gap-2">
            <input required class="styled-checkbox" id="checkbox2" type="checkbox" value="value1">
            <label for="checkbox2">
              I agree with <a href="term-and-condition.html" class="underline text-blue-500">terms and condition</a>
            </label>
          </div>

          <button type="submit" class="btn">Request</button>

        </form>



      </div>