<main class="w-full flex bg-gray-100">
      <!-- Side Navbar Links -->
      <nav id="side_nav" class="side_nav">
        <a href="dashboard.php">
          <button style="padding: 23px 0 25px 21px;" class="btn nav_btn">
            <span class="nav_icon dashboard_icon"> </span>
            <span class="nav_text"><a href="dashboard.php">Dashboard</a></span>
          </button>

        <div class="relative">
          <button class="btn nav_btn nav_btn_toggler">
            <span class="nav_icon customer_icon"> </span>
            <span class="nav_text">Expense</span>
            <span class="nav_toggle_icon">+</span>
          </button>
          <div class="hidden hide_nav_items nav_items">
            <a href="add_data.php"><button class="sub_link">Add Expense</button></a>
              <a href="show_data.php"><button class="sub_link">Total Expense</button></a>
              <a href="show_data.php"><button class="sub_link">Today Expense</button></a>
              <a href="show_data.php"><button class="sub_link">Monthly Expense</button></a>
              <a href="show_data.php"><button class="sub_link">Full Yearly Expense</button></a>
          </div>
        </div>

        <div class="relative">
          <button class="btn nav_btn nav_btn_toggler">
            <span class="nav_icon seller_icon"> </span>
            <span class="nav_text">Employee</span>
            <span class="nav_toggle_icon">+</span>
          </button>
          <div class="hidden hide_nav_items nav_items">
            <a href="add_employee.php">
              <button class="sub_link">Add Employee</button>
            </a>
            <a href="employee.php">
              <button class="sub_link">All Employee's</button>
            </a>
          </div>
        </div>

        <div class="relative">
          <button class="btn nav_btn nav_btn_toggler">
            <span class="nav_icon product_icon"> </span>
            <span class="nav_text">Category</span>
            <span class="nav_toggle_icon">+</span>
          </button>
          <div class="hidden hide_nav_items nav_items">
            <a href="add_category.php">
              <button class="sub_link">Add Category</button>
            </a>
            <a href="category.php">
              <button class="sub_link">All Category</button>
            </a>
          </div>
        </div>

        <div class="relative">
          <button class="btn nav_btn nav_btn_toggler">
            <span class="nav_icon order_icon"> </span>
            <span class="nav_text">Order</span>
            <span class="nav_toggle_icon">+</span>
          </button>
          <div class="hidden hide_nav_items nav_items">
            <a href="pending_order.php">
              <button class="sub_link">Pending Order's</button>
            </a>
            <a href="success_order.php">
              <button class="sub_link">Success Order's</button>
            </a>
          </div>
        </div>

        <a href="setting.php">
          <button class="btn nav_btn">
            <span class="nav_icon setting_icon2"> </span>
            <span class="nav_text">Setting</span>
          </button>
        </a>

        <!-- Toggle Nav Text -->
        <div id="toggle_nav_text">
          <button class="btn">
            <span class="chevronleft_icon"></span>
          </button>
        </div>
      </nav>