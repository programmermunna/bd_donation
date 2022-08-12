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
    buying_date: "2020-10-10",
    expire_date: "2040-12-12",
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
    buying_date: "2019-10-10",
    expire_date: "2040-12-12",
  },
];

const params = new URLSearchParams(window.location.search);
const get_id = params.get("id");

const edit_product = products.find((c) => c.id === get_id);

function view_info_btn() {
  location.replace(`view.html?id=${get_id}`);
}

const edit_product_form = document.getElementById("edit_product_form");
edit_product_form.innerHTML = `

<div>
<label>Product Name</label>
<input type="text" value="${edit_product.name}" placeholder="Product name" class="input" />
</div>

<div>
<label>Sell Price</label>
<input type="text" value="${edit_product.sell_price}" placeholder="Sell price" class="input" />
</div>

<div>
<label>Buying Price</label>
<input type="text" value="${edit_product.buy_price}" placeholder="Buying price" class="input" />
</div>

<div>
<label>Select Category</label>
<select class="select_input">
  <option disabled>Select category</option>
  <option selected value="Hyundai">Hyundai</option>
  <option value="Archar">Archar</option>
  <option value="Mitshubishi">Mitshubishi</option>
  <option value="Echovell">Echovell</option>
  <option value="Joyota">Joyota</option>
  <option value="Motorbike">Motorbike</option>
</select>
</div>

<div>
<label>Select Seller</label>
<select class="select_input">
  <option disabled>Select seller</option>
  <option selected value="Linus">Linus</option>
  <option value="Steve">Steve</option>
  <option value="Asif">Asif</option>
  <option value="Villers">Villers</option>
</select>
</div>

<div>
<label>Buying Date</label>
<input type="date" class="input" value="${edit_product.buying_date}" placeholder="mm/dd/yy" />
</div>
<div>
<label>Expire Date</label>
<input type="date" class="input" value="${edit_product.expire_date}" placeholder="mm/dd/yy" />
</div>

<div>
<label>Garage</label>
<input type="text" value="${edit_product.garage}" placeholder="Garage" class="input" />
</div>

<div>
<label>Product Route</label>
<input type="text" value="${edit_product.route}" placeholder="Product route" class="input" />
</div>


      <div>
      <label for="change_photo">
      <img width="80" height="80" class="rounded" src="${edit_product.image}"/>
      <span>Change Photo</span>
      </label>
      <input type="file" title="profile" id="change_photo" />
      </div>
      <button class="btn submit_btn" type="submit">Update</button>
  `;

edit_product_form.addEventListener("submit", function (e) {
  e.preventDefault();

  //   Update function (1)

  // Then go to products page (2)
  location.replace("all.html");
});
