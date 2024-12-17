const cart = [
    {id: 1, name:"r7_7800X3D", price:115, quantity:0,},
    {id: 2, name:"r9_9900X", price:115, quantity:0,},
    {id: 3, name:"r7_9800X3D", price:115, quantity:0,},
    {id: 4, name:"r5_7500f", price:115, quantity:0,},
    {id: 5, name:"rx_7900XTX", price:115, quantity:0,},
    {id: 6, name:"Herr Dreier", price:115, quantity:0,},
    {id: 7, name:"rx_7700XT", price:115, quantity:0,},
    {id: 8, name:"r7_7800X3D", price:115, quantity:0,},
];

console.log(cart);

function save_cart() {
    localStorage.setItem("cart", JSON.stringify(cart));
};

function load_cart() {
    cart = JSON.parse(localStorage.getItem("cart"));
};
function add_item(x) {

  if (x === undefined) { x = 1;}
  button1 = true; 
  objIndex = cart.findIndex(obj => obj.id === x);
  cart[objIndex].quantity = cart[objIndex].quantity + 1;
  console.log(cart);
  window.alert(cart[objIndex].quantity);
  save_cart();
};

function get_quantity(y)
{
quantity = cart[y].quantity;
};

function alert_cart() {
    i = 0
while ( i < (cart.length + 1)) {
    get_quantity(y = i);
    if (quantity > 0)
    {
window.alert(cart[i].quantity + ", " + cart[i].name);
};
i++;
};
display_list();
};

