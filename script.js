const cart = [
    {id: 1, name:"r5_7500f", price:115, quantity:0,},
    {id: 2, name:"r5_7500f", price:115, quantity:0,},
    {id: 3, name:"r5_7500f", price:115, quantity:0,},
    {id: 4, name:"r5_7500f", price:115, quantity:0,},
    {id: 5, name:"r5_7500f", price:115, quantity:0,},
];

console.log(cart);

function save_cart() {
    sessionStorage.setItem("cart", JSON.stringify(cart));
};

function load_cart() {
    const cart = JSON.parse(sessionStorage.getItem("cart"));
};

var button1 = document.getElementById("1");

if (button1) {
  objIndex = cart.findIndex(obj => obj.id = 1);
  cart[objIndex].quantity = cart[objIndex].quantity + 1;
  console.log(cart);
}
