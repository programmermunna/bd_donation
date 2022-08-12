const orders = [
  {
    id: "1",
    name: "aJohn Doe",
    shop_name: "John Store",
    addres: "Mohammadpur Dhaka",
    city: "Dhaka",
    date: "2022-04-04",
    quantity: 4,
    phone: "01339393939",
    order_status: "pending",
    order_id: "322",
    payment: "handcash",
    pay: 50000,
    due: 4000,
    sub_total: 54000,
    vat: 1000,
    total: 53000,
    products: [
      {
        id: "1",
        name: "Asus Laptop",
        code: "F3492384",
        quantity: 2,
        unit_cost: 1000,
        total: 30000,
      },
      {
        id: "2",
        name: "Desktop Computer (CPU)",
        code: "A4392384",
        quantity: 2,
        unit_cost: 1000,
        total: 24000,
      },
    ],
  },

  {
    id: "2",
    name: "Smith",
    shop_name: "Smith Store",
    addres: "Mohammadpur",
    city: "Rangpur",
    date: "2022-04-04",
    quantity: 2,
    phone: "01339393939",
    order_status: "pending",
    order_id: "122",
    payment: "handcash",
    pay: 50000,
    due: 4000,
    sub_total: 27000,
    vat: 500,
    total: 26500,
    products: [
      {
        id: "1",
        name: "Asus Laptop",
        code: "F3492384",
        quantity: 1,
        unit_cost: 1000,
        total: 30000,
      },
      {
        id: "2",
        name: "Desktop Computer (CPU)",
        code: "A4392384",
        quantity: 1,
        unit_cost: 1000,
        total: 24000,
      },
    ],
  },
];

function make_show(items) {
  const orders_wrapper = document.getElementById("orders_wrapper");
  orders_wrapper.innerHTML = "";
  items.map((order, i) => {
    orders_wrapper.innerHTML += `
        <tr class="${i % 2 === 0 ? "bg-gray-50" : "bg-white"}">

        <td class="p-3 border whitespace-nowrap capitalize">
          <div class="text-center">${order.name}</div>
        </td>
        <td class="p-3 border whitespace-nowrap">
          <div class="text-center">${order.date}</div>
        </td>
        <td class="p-3 border whitespace-nowrap">
          <div class="text-center">${order.quantity}</div>
        </td>
        <td class="p-3 border whitespace-nowrap">
          <div class="text-center">${order.total}</div>
        </td>
        <td class="p-3 border whitespace-nowrap capitalize">
          <div class="text-center">${order.payment}</div>
        </td>
        <td class="p-3 border whitespace-nowrap capitalize">
          <div class="text-center w-fit mx-auto px-2 py-1 rounded bg-red-600 text-white">${
            order.order_status
          }</div>
        </td>

        <td class="p-3 border whitespace-nowrap">
          <div class="w-full flex_center gap-1">
           <a href="view.html?id=${order.id}">
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
      orders,
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
  const index = orders.findIndex((c) => c.id === delete_id.toString());
  index > -1 && orders.splice(index, 1);
  make_show(orders);
  setTimeout(() => {
    delete_popup.style.display = "none";
    show_popup_message("Successfully deleted!");
  }, 100);
}

window.addEventListener("load", () => {
  make_show(orders);
});
