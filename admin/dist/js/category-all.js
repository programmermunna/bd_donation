const categories = [
  { id: "1", name: "Hyundai" },
  { id: "2", name: "Archar" },
  { id: "3", name: "Mitshubishi" },
  { id: "4", name: "Echovell" },
  { id: "5", name: "Joyota" },
  { id: "6", name: "Motorbike" },
];

function make_show(items) {
  const category_wrapper = document.getElementById("category_wrapper");
  category_wrapper.innerHTML = "";
  items.map((category, i) => {
    category_wrapper.innerHTML += `
    <tr class="${i % 2 === 0 ? "bg-gray-50" : "bg-white"}">

    <td class="p-3 border whitespace-nowrap">
      <div class="text-center">${i + 1}</div>
    </td>
    <td class="p-3 border whitespace-nowrap">
      <div class="text-center">${category.name}</div>
    </td>
    <td class="p-3 border whitespace-nowrap">
      <div class="w-full flex_center gap-1">

      <a href="edit.html?id=${category.id}">
        <button class="btn table_edit_btn">Edit</button>
      </a>

        <button onclick="toggle_delete_popup(${
          category.id
        })" class="btn table_delete_btn">Delete</button>
      </div>
    </td>
  </tr>
      `;
  });
}

const all_table_th_div = document.querySelectorAll(".table_th_div");
all_table_th_div.forEach((ele, i) => {
  ele.addEventListener("click", function () {
    for (let i = 0; i < all_table_th_div.length; i++) {
      all_table_th_div[i].children[1].classList.remove("active");
    }
    this.children[1].classList.add("active");

    // Called Sort func
    make_sort(
      this.children[0].innerText.toLowerCase(),
      categories,
      this.children[1]
    );
  });
});

// Delete Popup functionality
const delete_popup = document.getElementById("delete_popup");
let delete_id = "";
function toggle_delete_popup(id) {
  delete_id = id;
  delete_popup.style.display = "block";
}
function cancel_delete() {
  delete_popup.style.display = "none";
}
function confirm_delete() {
  const index = categories.findIndex((c) => c.id === delete_id.toString());
  index > -1 && categories.splice(index, 1);
  make_show(categories);
  setTimeout(() => {
    delete_popup.style.display = "none";
    show_popup_message("Successfully deleted!");
  }, 100);
}

window.addEventListener("load", () => {
  make_show(categories);
});
