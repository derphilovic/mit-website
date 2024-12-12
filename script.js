cart = [];

console.log(cart);

function save_cart() {
    sessionStorage.setItem("cart", JSON.stringify(cart));
};

function load_cart() {
    const cart = JSON.parse(sessionStorage.getItem("cart"));
};

