const all_nav_sibling_toggler = document.querySelectorAll(
  ".nav_sibling_toggler"
);
all_nav_sibling_toggler.forEach((btn) => {
  let open_nav_btn_sibling = false;
  btn.addEventListener("click", function (e) {
    open_nav_btn_sibling = !open_nav_btn_sibling;
    if (open_nav_btn_sibling) {
      this.nextElementSibling.style.transform = "scaleY(1)";
      this.classList.add("active_button");
    } else {
      this.classList.remove("active_button");
      this.nextElementSibling.style.transform = "scaleY(0)";
    }
  });
  btn.onblur = (e) => {
    open_nav_btn_sibling = false;
    setTimeout(() => {
      e.target.nextElementSibling.style.transform = "scaleY(0)";
      e.target.classList.remove("active_button");
    }, 100);
  };
});

const nav_items = document.getElementById("nav_items");
const toggle_nav_items = document.getElementById("toggle_nav_items");
const nav_items_overaly = document.getElementById("nav_items_overaly");
let open_nav_items = false;
toggle_nav_items.addEventListener("click", function () {
  open_nav_items = !open_nav_items;
  if (open_nav_items) {
    this.classList.add("show_nav_items");
    nav_items.style.transform = "scaleY(1)";
    nav_items_overaly.classList.remove("hidden");
  } else {
    this.classList.remove("show_nav_items");
    nav_items_overaly.classList.add("hidden");
    nav_items.style.transform = "scaleY(0)";
  }
});
nav_items_overaly.addEventListener("click", () => {
  open_nav_items = false;
  toggle_nav_items.classList.remove("show_nav_items");
  nav_items.style.transform = "scaleY(0)";
  nav_items_overaly.classList.add("hidden");
});

// dark_theme can be true/false
let dark_theme = false;
window.addEventListener("DOMContentLoaded", () => {
  var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
  var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

  if (localStorage.getItem("theme") === "dark") {
    dark_theme = true;
  }

  function toggle(is_dark) {
    if (is_dark) {
      themeToggleLightIcon.classList.remove("hidden");
      themeToggleDarkIcon.classList.add("hidden");
      document.documentElement.classList.add("dark");
      localStorage.setItem("theme", "dark");
    } else {
      themeToggleDarkIcon.classList.remove("hidden");
      themeToggleLightIcon.classList.add("hidden");
      document.documentElement.classList.remove("dark");
      localStorage.removeItem("theme");
    }
  }

  toggle(dark_theme);

  document.getElementById("theme-toggle").addEventListener("click", () => {
    dark_theme = !dark_theme;
    toggle(dark_theme);
  });
});
// Dark&Light theme Toggler ☝

// Alert Message
function show_alert(message) {
  const alert_container = document.getElementById("alert_container");
  alert_container.innerHTML = `<div class="w-fit h-fit p-3 text-base font-medium rounded bg-green-600 text-white shadow fixed right-10 top-20 z-20">${message}</div>`;

  setTimeout(() => {
    alert_container.innerHTML = ``;
  }, 1500);
}

// Modal Toggler Functions
function show_modal(get_modal_wrapper_id, get_modal_content_id) {
  document.getElementById(get_modal_wrapper_id).classList.remove("hidden");
  document.getElementById(get_modal_wrapper_id).classList.add("flex");
  setTimeout(() => {
    document.getElementById(get_modal_content_id).style.transform = "scaleY(1)";
  }, 10);
}

function hide_modal(get_modal_wrapper_id, get_modal_content_id) {
  document.getElementById(get_modal_content_id).style.transform = "scaleY(0)";
  setTimeout(() => {
    document.getElementById(get_modal_wrapper_id).classList.remove("flex");
    document.getElementById(get_modal_wrapper_id).classList.add("hidden");
  }, 100);
}
