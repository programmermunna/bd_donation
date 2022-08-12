<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <div class="header_container">
        <div class="header_left">
          <!-- LOGO -->
          <div class="header_brand">
            <!-- <a href="index.html" class="go_home"> -->
            <a href="dashboard.php" class="go_home">
              <div>
                <span>Dash</span>
                <span>Board</span>
              </div>
            </a>
          </div>

          <button onclick="toggle_nav()" class="menu_icon"></button>

          <!-- Header Search Form -->
          <div class="header_search">
            <button id="search_toggle" class="search_icon"></button>
            <form id="header_search_form">
              <button class="search_icon"></button>
              <input type="search" placeholder="Type here for search..." />
            </form>
          </div>
        </div>

        <div class="header_right">
          <!-- Header Notifications -->
          <div>
            <div id="notifications_button">
              <button class="notification_icon"></button>
              <span class="notification_count"><small>4</small> </span>
            </div>
            <!-- Profile Options -->
            <div id="notifications_overlay"></div>
            <div id="notifications">
              <p class="noti_title">Notifications</p>

              <button class="noti_button">
                <p>New user registered!</p>
                <small>You have 10 unread messages</small>
              </button>

              <button class="noti_button">
                <p>New settings</p>
                <small>There are new setting available</small>
              </button>

              <button class="noti_button">
                <p>Updates</p>
                <small>These are 2 new updates available</small>
              </button>

              <button class="see_all_noti">See all notifications</button>
            </div>
          </div>

          <button onclick="toggle_full_screen()" class="expand_icon"></button>

          <button class="message_icon"></button>

          <!-- Header Profile Image -->
          <div class="profile_image_wrapper">
            <button id="header_profile_image">
              <img
                src="https://store.bangladeshisoftware.com/public/admin/images/avatar-1.jpg"
                alt=""
              />
            </button>

            <!-- Profile Options -->
            <div id="profile_options_overlay"></div>
            <div id="profile_options">
              <p>
                <span class="user_icon"></span>
                <span>Profile</span>
              </p>
              <a>
                <p>
                  <span class="setting_icon"></span>
                  <span>Setting</span>
                </p>
              </a>
              <p>
                <span class="lock_icon"></span>
                <span>Lock Screen </span>
              </p>
              <p>
                <span class="logout_icon"></span>
                <span><a href="?admin_logout=logout">Logout</a></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header -->