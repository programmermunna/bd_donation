const products = [
  {
    id: "1",
    name: "Asus Laptop",
    code: "F3492384",
    sell_price: "12000",
    image:
      "https://images.jdmagicbox.com/quickquotes/images_main/second-hand-laptop-327324548-2nf90.jpg",

    garage: "C",
    route: "1",
    buy_price: "21000",
    category: "Electronics",
    seller: "John",
    buying_date: "10-10-2020",
    expire_date: "not-expired",
  },
  {
    id: "2",
    name: "Desktop Computer (CPU)",
    code: "A3D49384",
    sell_price: "15000",
    image:
      "https://images.jdmagicbox.com/quickquotes/images_main/Computer-CPU-327422658-e243q.jpg",
    garage: "B",
    route: "91",
    buy_price: "28000",
    category: "Electronics",
    seller: "Smith",
    buying_date: "10-10-2019",
    expire_date: "not-expired",
  },
];

function make_show(items) {
  const products_wrapper = document.getElementById("products_wrapper");
  products_wrapper.innerHTML = "";
  items.map((product, i) => {
    products_wrapper.innerHTML += `
    <tr class="${i % 2 === 0 ? "bg-gray-50" : "bg-white"}">

    <td class="p-3 border whitespace-nowrap">
      <div class="text-center">${product.name}</div>
    </td>
    <td class="p-3 border whitespace-nowrap">
      <div class="text-center">${product.code}</div>
    </td>
    <td class="p-3 border whitespace-nowrap">
      <div class="text-center">${product.sell_price}</div>
    </td>

    <td class="p-3 border whitespace-nowrap">
      <div class="w-full h-full flex_center">
        <img
        class="rounded-sm"
          src="${product.image}"
          width="60"
          height="60"
          alt="${product.name}"
        />
    </div>
  </td>

    <td class="p-3 border whitespace-nowrap">
    <div class="text-center">${product.garage}</div>
    </td>

    <td class="p-3 border whitespace-nowrap">
      <div class="w-full flex_center gap-1">

      <a href="edit.html?id=${product.id}">
        <button class="btn table_edit_btn">Edit</button>
      </a>

        <button onclick="toggle_delete_popup(${
          product.id
        })" class="btn table_delete_btn">Delete</button>

       <a href="view.html?id=${product.id}">
        <button class="btn table_view_btn">View</button>
        </a>

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
      products,
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
  const index = products.findIndex((c) => c.id === delete_id.toString());
  index > -1 && products.splice(index, 1);
  make_show(products);
  setTimeout(() => {
    delete_popup.style.display = "none";
    show_popup_message("Successfully deleted!");
  }, 100);
}

window.addEventListener("load", () => {
  make_show(products);
});
