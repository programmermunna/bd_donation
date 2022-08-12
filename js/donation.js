// payment method
const payment_methods = {
  Bkash: {
    message: "Send Money Bkash PERSONAL ",
    wallet: "01719182586",
    "1_coin_price": 1,
    currency: "BDT",
    receive_from: "Bkash Number",
  },
  Nagat: {
    message: "Send Money Nagat PERSONAL ",
    wallet: "01719182586",
    "1_coin_price": 1,
    currency: "BDT",
    receive_from: "Nagat Number",
  },
  Rocket: {
    message: "Send Money Rocket PERSONAL ",
    wallet: "01719182586",
    "1_coin_price": 1,
    currency: "BDT",
    receive_from: "Rocket Number",
  },
  Payoneer: {
    message: "Payoneer Account Email",
    wallet: "shamimlem@yahoo.com",
    "1_coin_price": 0.012,
    currency: "USD",
    receive_from: "Payoneer Email",
  },
  Bank: {
    message: "Islami Bank Account No",
    wallet: "20501380100525314",
    "1_coin_price": 1,
    currency: "BDT",
    receive_from: "Bank Account Number",
  },
  "Visa Card": {
    message: "Card Number",
    wallet: "4170338046268264",
    "1_coin_price": 0.012,
    currency: "USD",
    receive_from: "Card Number",
  },
};

const copy_svg_icon = `<i class="fa-solid fa-copy"></i>`;

const select_payment_method = document.getElementById("select_payment_method");
const payment_message = document.getElementById("payment_message");
const total_payment = document.getElementById("total_payment");

const payment_label = document.getElementById("payment_label");
const payment_input = document.getElementById("payment_input");

Object.keys(payment_methods).map((key) => {
  select_payment_method.innerHTML += `
   <option value="${key}">${key}</option> 
  `;
});

let selected_send_currency = "BDT";
let selected_coin_price = 1;

select_payment_method.addEventListener("change", function (e) {
  selected_coin_price = payment_methods[this.value]["1_coin_price"];
  selected_send_currency = payment_methods[this.value].currency;

  payment_label.innerHTML = `Enter Your ${
    payment_methods[this.value].receive_from
  }`;

  payment_input.setAttribute(
    "placeholder",
    payment_methods[this.value].receive_from
  );

  payment_message.innerHTML = ` 
  <div class="my-5 bg-primary text-white p-3 rounded shadow w-full text-sm relative">
  <input class="absolute top-0 opacity-0" value="${
    payment_methods[this.value].wallet
  }" id="copy_wallet_input" />
  <p class="break-words mb-2">${payment_methods[this.value].message}</p> 
  <div class="p-2 rounded bg-green-600 text-white shadow flex items-center justify-between">
  <p class="w-8/12 break-words text-base">
  ${payment_methods[this.value].wallet}
  </p>
  <button id="copy_wallet_btn"> 
   ${copy_svg_icon}
  </button>
 </div> 
  `;

  const copy_wallet_input = document.getElementById("copy_wallet_input");
  const copy_wallet_btn = document.getElementById("copy_wallet_btn");

  copy_wallet_btn.addEventListener("click", function () {
    navigator.clipboard.writeText(copy_wallet_input.value);
    this.innerHTML = `<small>Copied</small>`;
    setTimeout(() => {
      copy_wallet_btn.innerHTML = copy_svg_icon;
    }, 1000);
  });
});
