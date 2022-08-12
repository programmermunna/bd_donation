const customers = [
  {
    id: "1",
    name: "Linus",
    image:
      "https://scontent.fdac4-1.fna.fbcdn.net/v/t39.30808-1/283158924_116859991023742_2126874511692419102_n.jpg?stp=c0.0.100.100a_dst-jpg_p100x100&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHJN5dCREg3jDrU03Q8rilMaVQzMJJ3EKdpVDMwkncQpwXs03nD6YbhUnABrkKRuanij316UbxdCRVurb4IQxts&_nc_ohc=WqH5fcqzP6IAX_U8eF8&_nc_ad=z-m&_nc_cid=1160&_nc_ht=scontent.fdac4-1.fna&oh=00_AT_6d9xA-LGcmmpEhWaSQ2AwNrQJ4RL8FLKwwPdsJ5WCow&oe=628E5735",
    phone: "01739712229",
    address: "Mohammadpur",
    city: "Rangpur",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
  {
    id: "2",
    name: "Steve",
    image:
      "https://scontent.fjsr1-1.fna.fbcdn.net/v/t39.30808-1/280584617_1391681361347870_1861081585521525223_n.jpg?stp=c0.0.100.100a_dst-jpg_p100x100&_nc_cat=105&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeFn9HvrCCnbY9CycwxGagNAscX0q6w4LYGxxfSrrDgtgSY42YszXag_rZAFepqNNKp7uo52XJjeFyph5wKDZATJ&_nc_ohc=ITmkKYJSEGgAX8vt_Ox&_nc_ad=z-m&_nc_cid=1112&_nc_ht=scontent.fjsr1-1.fna&oh=00_AT9fj9tiVNGUc-z5mgRs-pdDC7CGloqNpZhoikuZwOb6qA&oe=628F03CE",
    phone: "01739712229",
    address: "Shibganj",
    city: "Dinajpur",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
  {
    id: "3",
    name: "Asif",
    image:
      "https://scontent.fjsr1-1.fna.fbcdn.net/v/t39.30808-1/273116542_3392452217648504_3570633216386717297_n.jpg?stp=dst-jpg_p100x100&_nc_cat=100&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHaqs7exOAyDoFWMFzQ4eENpYOO_Q8BN_Olg479DwE387tW6_m3T6_h7aqEgZlBdGYns1pujSLLKW-Ex-ewNRrD&_nc_ohc=Ja9U84X0Dz4AX_T1otE&_nc_ad=z-m&_nc_cid=1112&_nc_ht=scontent.fjsr1-1.fna&oh=00_AT8oy9nrBNt6rRD4wHLUIPp57TnNjlSMqy1WoesnUjfn5g&oe=628E9228",
    phone: "01739712229",
    address: "Jamalpur",
    city: "Rajshahi",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
  {
    id: "4",
    name: "Villers",
    image:
      "https://scontent.fjsr1-1.fna.fbcdn.net/v/t1.6435-1/120191530_100698798471166_8729913533458725377_n.jpg?stp=dst-jpg_p100x100&_nc_cat=106&ccb=1-7&_nc_sid=1eb0c7&_nc_eui2=AeE5wZ_yZuZU4Pfv2rxk49WvVFUeBqV6PV9UVR4GpXo9Xz26TuLOYhtgGbn2HbbkYcFD4y6kwz4aVNSxJKyoVQMe&_nc_ohc=bm0F8V3uaL8AX86cI-Q&_nc_ad=z-m&_nc_cid=1112&_nc_ht=scontent.fjsr1-1.fna&oh=00_AT9Kz6rV1qFpFN82uc-7kreGPtHJuYaNEwxgG1knYAwtHg&oe=62AFF802",
    phone: "01739712229",
    address: "Gobindonagar",
    city: "Dhaka",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
];

function make_show(items) {
  const customers_wrapper = document.getElementById("customers_wrapper");
  customers_wrapper.innerHTML = "";
  items.map((customer, i) => {
    customers_wrapper.innerHTML += `
  <tr class="${i % 2 === 0 ? "bg-gray-50" : "bg-white"}">

  <td class="p-3 border whitespace-nowrap">
    <div class="text-center">${customer.name}</div>
  </td>
  <td class="p-3 border whitespace-nowrap">
    <div class="text-center">${customer.phone}</div>
  </td>
  <td class="p-3 border">
    <div class="text-center w-36 mx-auto font-medium">${customer.address}</div>
  </td>
  <td class="p-3 border whitespace-nowrap">
    <div class="w-full h-full flex_center">
      <img
      class="rounded-sm"
        src="${customer.image}"
        width="60"
        height="60"
        alt="${customer.name}"
      />
  </div>
</td>
<td class="p-3 border whitespace-nowrap">
  <div class="text-lg text-center">${customer.city}</div>
</td>
  <td class="p-3 border whitespace-nowrap">
    <div class="w-full flex_center gap-1">

    <a href="edit.html?id=${customer.id}">
      <button class="btn table_edit_btn">Edit</button>
    </a>

      <button onclick="toggle_delete_popup(${
        customer.id
      })" class="btn table_delete_btn">Delete</button>

     <a href="view.html?id=${customer.id}">
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
      customers,
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
  const index = customers.findIndex((c) => c.id === delete_id.toString());
  index > -1 && customers.splice(index, 1);
  make_show(customers);
  setTimeout(() => {
    delete_popup.style.display = "none";
    show_popup_message("Successfully deleted!");
  }, 100);
}

window.addEventListener("load", () => {
  make_show(customers);
});
