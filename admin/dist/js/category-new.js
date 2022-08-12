const new_category_form = document.getElementById("new_category_form");

new_category_form.addEventListener("submit", (e) => {
  e.preventDefault();
  adjust_active_icon();

  location.replace("all.html");
});
