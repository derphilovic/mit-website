let cart = [
    {id: 1, name:"Ryzen 7 7800X3D", price:455, quantity:0, finalprice: 0, img:"graphics/r7x3d.png",},
    {id: 2, name:"r9_9900X", price:470, quantity:0, finalprice: 0, img:"",},
    {id: 3, name:"r9_9800X3D", price:760, quantity:0, finalprice: 0, img:"",},
    {id: 4, name:"r5_7500f", price:122, quantity:0, finalprice: 0, img:"",},
    {id: 5, name:"rx_7900XTX", price:910, quantity:0, finalprice: 0, img:"",},
    {id: 6, name:"Herr Dreier", price:69420, quantity:0, finalprice: 0, img:"",},
    {id: 7, name:"rx_7700XT", price:540, quantity:0, finalprice: 0, img:"",},
    {id: 8, name:"r7_7800X3D", price:455, quantity:0, finalprice: 0, img:"",},
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
  if(cart[objIndex].quantity < 1) {
    cart[objIndex].quantity = cart[objIndex].quantity + 1;
  };
  console.log(cart);
  window.alert(cart[objIndex].quantity);
  save_cart();
};

function get_quantity(y)
{
quantity = cart[y].quantity;
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

function addCartItem(img, Names, price, id) {
    const cartList = document.querySelector("#cart ul"); 
    const li = document.createElement("li");
    li.innerHTML = `
    <div class="item">
     <img src="${img}" alt="">
    <p id="1me">${Names}</p>
    <label for="Quantity">Quantity</label>
    <select name="Quantity" id="${id}">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
    <p>${price}</p>
    <button><i class="fa-solid fa-xmark"></i></button>
    </div>
`;
 cartList.appendChild(li);
}

function cart_loader() {
    load_cart();
    x = 0;
    while(x <= cart.length) {
        price_calc(x);
    if(cart[x].quantity >=1) {
        addCartItem(cart[x].img, cart[x].name, cart[x].finalprice+"€", cart[x].id)
};
x++;
};
};


cart_loader();