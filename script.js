let cart = [
    {id: 1, name:"r7_7800X3D", price:455, quantity:0, finalprice: 0,},
    {id: 2, name:"r9_9900X", price:470, quantity:0, finalprice: 0,},
    {id: 3, name:"r9_9800X3D", price:760, quantity:0, finalprice: 0,},
    {id: 4, name:"r5_7500f", price:122, quantity:0, finalprice: 0,},
    {id: 5, name:"rx_7900XTX", price:910, quantity:0, finalprice: 0,},
    {id: 6, name:"Herr Dreier", price:69420, quantity:0, finalprice: 0,},
    {id: 7, name:"rx_7700XT", price:540, quantity:0, finalprice: 0,},
    {id: 8, name:"r7_7800X3D", price:455, quantity:0, finalprice: 0,},
];

console.log(cart);

function save_cart() {
    localStorage.setItem("cart", JSON.stringify(cart));
};

function load_cart() {
    const savedCart = JSON.parse(localStorage.getItem("cart"));
    if (savedCart) {
    cart.length = 0;
    savedCart.forEach(item => cart.push(item));
};
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

function get_name(y)
{
nsame = cart[y].name;
};

function get_price(y)
{
price = cart[y].price;
};

function price_calc(y){
    get_price(y);
    get_quantity(y);
    cart[y].finalprice = (quantity * price);
    finalprice = (quantity * price);
    }

function alert_cart() {
    i = 0
while ( i < (cart.length + 1)) {
    price_calc(i);
    get_quantity(y = i);
    if (quantity > 0)
    {
window.alert(cart[i].quantity + ", " + cart[i].name + " Price for that is: " + finalprice + "€");
};
i++;
};
};
