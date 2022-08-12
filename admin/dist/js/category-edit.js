const categories = [
  { id: "1", name: "Hyundai" },
  { id: "2", name: "Archar" },
  { id: "3", name: "Mitshubishi" },
  { id: "4", name: "Echovell" },
  { id: "5", name: "Joyota" },
  { id: "6", name: "Motorbike" },
];

const params = new URLSearchParams(window.location.search);
const get_id = params.get("id");

const edit_category = categories.find((c) => c.id === get_id);

const edit_category_form = document.getElementById("edit_category_form");
edit_category_form.innerHTML = `
      <div>
      <label>Full Name</label>
      <input type="text" placeholder="Full name" class="input" value="${edit_category.name}" />
      </div>
      <button class="btn submit_btn" type="submit">Update</button>
  `;

edit_category_form.addEventListener("submit", function (e) {
  e.preventDefault();

  //   Update function (1)

  // Then go to categories page (2)
  location.replace("all.html");
});
