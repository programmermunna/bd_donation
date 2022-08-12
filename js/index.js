const copy_ref_val = document.getElementById("copy_ref_val");
const copy_ref_btn = document.getElementById("copy_ref_btn");
copy_ref_btn.addEventListener("click", function () {
  /* Get the text field */

  /* Select the text field */
  copy_ref_val.select();
  copy_ref_val.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copy_ref_val.value);
  this.innerHTML = `<small>copied</small>`;
  setTimeout(() => {
    copy_ref_btn.innerHTML = `<i class="fas fa-copy"></i>`;
  }, 1000);
});
