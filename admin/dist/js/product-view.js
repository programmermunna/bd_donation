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

const params = new URLSearchParams(window.location.search);
const get_id = params.get("id");

const view_product = products.find((c) => c.id === get_id);

const view_product_form = document.getElementById("view_product_form");

function edit_info_btn() {
  location.replace(`edit.html?id=${get_id}`);
}

view_product_form.innerHTML = `
    <div>
        <img
        width="200"
        height="200"
        class="rounded"
        src="${view_product.image}"
        />
    </div>

           <div>
              <b>Product Name</b>
              <p>${view_product.name}</p>
            </div>

            <div>
              <b>Sell Price</b>
              <p>${view_product.sell_price}</p>
            </div>

            <div>
              <b>Buying Price</b>
              <p>${view_product.buy_price}</p>
            </div>

            <div>
              <b>Category</b>
              <p>${view_product.category}</p>
            </div>

            <div>
              <b>Seller</b>
              <p>${view_product.seller}</p>
            </div>

            <div>
              <b>Buying Date</b>
              <p>${view_product.buying_date}</p>
            </div>
            <div>
              <b>Expire Date</b>
              <p>${view_product.expire_date}</p>
            </div>

            <div>
              <b>Garage</b>
              <p>${view_product.garage}</p>
            </div>

            <div>
              <b>Product Route</b>
              <p>${view_product.route}</p>
            </div>


  `;

view_product_form.addEventListener("submit", function (e) {
  e.preventDefault();

  //   Update function (1)

  // Then go to products page (2)
  location.replace("all-products.html");
});
