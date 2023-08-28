
// cart js section veg part 1

const product = [
  {
    id: 1,
    image: '/image/Soya.jpg',
    title: 'SoyaBean',
    type: 'Veg',
    price: 20,
  },
  {
    id: 2,
    image: '/image/dhonka.jpg',
    title: 'Dhoka danla',
    type: 'Veg',
    price: 25,
  },
  {
    id: 3,
    image: '/image/dal.jpg',
    title: 'Dal',
    type: 'Veg',
    price: 15,
  },
  {
    id: 4,
    image: '/image/paneer.jpg',
    title: 'Panner',
    type: 'Veg',
    price: 25,
  },
  {
    id: 5,
    image: '/image/dal.jpg',
    title: 'Chicken',
    type: 'Veg',
    price: 45,
  },
  {
    id: 6,
    image: '/image/dal.jpg',
    title: 'Egg',
    type: 'Veg',
    price: 20,
  },
  {
    id: 7,
    image: '/image/dal.jpg',
    title: 'Fish',
    type: 'Veg',
    price: 35,
  },
  {
    id: 8,
    image: '/image/dal.jpg',
    title: 'prawn',
    type: 'Veg',
    price: 40,
  },
  {
    id: 9,
    image: '/image/chicken.jpg',
    title: 'Chicken',
    type: 'Non-Veg',
    price: 45,
  },
  {
    id: 10,
    image: '/image/egg.jpg',
    title: 'Egg',
    type: 'Non-Veg',
    price: 20,
  },
  {
    id: 11,
    image: '/image/fish.jpg',
    title: 'Fish',
    type: 'Non-Veg',
    price: 35,
  },
  {
    id: 12,
    image: '/image/prawn.jpg',
    title: 'prawn',
    type: 'Non-Veg',
    price: 35,
  },
  {
    id: 13,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Non-Veg',
    price: 100,
  },
  {
    id: 14,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Non-Veg',
    price: 20,
  },
  {
    id: 15,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Non-Veg',
    price: 40,
  },
  {
    id: 16,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Non-Veg',
    price: 80,
  },
  {
    id: 17,
    image: '/image/mishti.jpg',
    title: 'Mistidoi',
    type: 'Dessert',
    price: 20,
  },
  {
    id: 18,
    image: '/image/cold.jpg',
    title: 'Cold drink',
    type: 'Dessert',
    price: 20,
  },
  {
    id: 19,
    image: '/image/tokdoi.jpg',
    title: 'Tokdoi',
    type: 'Dessert',
    price: 20,
  },
  {
    id: 20,
    image: '/image/lassi.jpg',
    title: 'Lassi',
    type: 'Dessert',
    price: 20,
  },
  {
    id: 21,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Dessert',
    price: 40,
  },
  {
    id: 22,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Dessert',
    price: 80,
  },
  {
    id: 23,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Dessert',
    price: 100,
  },
  {
    id: 24,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Dessert',
    price: 20,
  },
  {
    id: 25,
    image: '/image/veg_thali.jpg',
    title: 'Veg-Thali',
    type: 'Thali',
    price: 35,
  },
  {
    id: 26,
    image: '/image/Chicken_thali.jpg',
    title: 'Chiken-thali',
    type: 'Thali',
    price: 55,
  },
  {
    id: 27,
    image: '/image/fish_thali.jpg',
    title: 'Fish-thali',
    type: 'Thali',
    price: 40,
  },
  {
    id: 28,
    image: '/image/biriyani.jpg',
    title: 'Biriany',
    type: 'Thali',
    price: 80,
  },
  {
    id: 29,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Thali',
    price: 20,
  },
  {
    id: 30,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Thali',
    price: 20,
  },
  {
    id: 31,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Thali',
    price: 20,
  },
  {
    id: 32,
    image: '/image/dal.jpg',
    title: 'rice',
    type: 'Thali',
    price: 20,
  },

];


var cart = [];

function addtocart(a) {
  cart.push({ ...product[a] });
  displaycart();
}

var code = document.getElementById('productid').value;

// Extract the product_id from orderDetails and assign it to the bedr variable
const bedr = code;


let productIdsToShow = [];

productIdsToShow = bedr;


function displaycart() {
  
  const productsToShow = product.filter((item) => productIdsToShow.includes(item.id));

  document.getElementById("orderDetails").innerHTML = productsToShow
    .map((item) => {
      var { image, title, price, type } = item;
      return `
        <div class="ordercase">
          <a href="#" class="ordercase-img">
            <img alt="dal" width="70" class="showcase-img" src=${image}>
          </a>
          <div class="ordercase-content">
            <a href="#">
              <h4 class="ordercase-title">${title}</h4>
            </a>
            <a href="#" class="ordercase-category">${type}</a>
            <div class="ordercase-pb">
              <p class="ordercase-p">₹${price}.00</p>
            </div>
          </div>
        </div>`;
    })
    .join("");
}

// Example usage:
addtocart();
