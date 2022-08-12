const setting_form = document.getElementById("setting_form");

setting_form.addEventListener("submit", (e) => {
  e.preventDefault();
  show_popup_message("Information Update Successfully");
});
