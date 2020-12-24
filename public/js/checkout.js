let csrf_token = document.getElementsByName('csrf-token')[0].content
const catrElement = document.querySelector('.ps-cart--mini')
const cart = JSON.parse(sessionStorage.getItem('cart'))
// console.log(csrf_token)
const tBody = document.querySelector('#table-body')
catrElement.remove()
const formDiv = document.querySelector('.ps-checkout__left')
let total = 0

let checkoutProductsArray = []

console.log(cart.length)
if (cart.length > 0) {
    cart.forEach((product) => {
        const checkoutProductObject = {
            name: product.name,
            image: product.image,
            price: product.price,
            quantity: product.quantity
        }
        checkoutProductsArray.push(checkoutProductObject)
    });




    cart.forEach((product) => {
        const tableRow = createElement('tr');
        tableRow.innerHTML = `
    <td>
    <div class="ps-product--cart">
        <div class="ps-product__thumbnail"><img src="${product.image}" alt=""><a class="ps-product__overlay" href=""></a></div>
        <div class="ps-product__content"><a class="ps-product__title" href="">${product.name}</a></div>
    </div>
    </td>
    <td class="product-price">ر.س${product.price}</td>
    <td>
    <div class="form-group--number">
        <input class="form-control" type="hidden"  placeholder="1" value="${product.quantity}">
    </div>
    </td>
    <td class="ps-table__actions"><a class="ps-btn--close"></a></td>
    `
        tableRow.querySelector('.ps-btn--close').addEventListener('click', removeCartItem)
        tBody.append(tableRow)
        total += Math.round((product.quantity * product.price) * 100) / 100
    })

    const cartDiv = createElement('figure', 'ps-shopping-cart__total')
    cartDiv.innerHTML = `
<figcaption>  المجموع </figcaption>
<table class="table">
  <tr>
    <td> المجموع الكلي  </td>
    <td><strong id="subtotal">ر.س${total}</strong></td>
  </tr>
  <tr>
    <td> طريقة الدفع </td>
    <td>
      
      <div class="ps-radio">
        <input class="form-control" type="radio" id="shipping-2" selected name="shipping"/>
        <label for="shipping-2"> الدغع عند الاستلام </label>
      </div>
    </td>
  </tr>
  
</table>
`

    document.querySelector('.ps-checkout').append(cartDiv)
    let checkoutTotal = document.querySelector('#checkout-total')
    let subTotal = document.querySelector('#subtotal')
    subTotal.textContent = 'ر.س' + total

    const input = createElement('input');
    input.type = 'hidden';
    input.name = 'cart';
    input.id = 'cart';
    input.value = JSON.stringify(cart);

    const checkoutForm = createElement('form', 'ps-form--checkout')
    checkoutForm.innerHTML = `
    <h4 id="billing_id">   تفاصيل التوصيل  </h4>
    <input type="hidden" value="${csrf_token}" name="_token">   
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
        <div class="form-group">
        <label>First Name</label>
        <input class="form-control" id="name_input" name="name" type="text" placeholder="Enter Your Name">
        </div>
    </div>
    
    </div>
    
    <div class="form-group">
    <label>Address</label>
    <input class="form-control" id="address_input" name="address" type="text" placeholder="Enter Your Address">
    </div>
    
    <div class="row">
    
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
        <div class="form-group">
        <label>Phone</label>
        <input class="form-control" id="phone_input" type="text" name="phone" placeholder="Enter Your Phone">
        </div>
    </div>
    </div>
    <button class="ps-btn ps-btn--fullwidth">Checkout</button>
             `


    const checkoutBtn = checkoutForm.querySelector('.ps-btn--fullwidth')
    checkoutForm.method = 'post'
    checkoutForm.action = '/checkout'
    checkoutBtn.addEventListener('click', validateInputs)
    checkoutForm.append(input)
    formDiv.append(checkoutForm)
}

// function clearSession() {
//   sessionStorage.clear()
// }

function removeCartItem(event) {
    const removedProductName = event.target.parentElement.parentElement.querySelector('.ps-product__title').textContent
    const itemRow = event.target.parentElement.parentElement.remove()
    const itemPrice = parseInt(event.target.parentElement.parentElement.querySelector('.product-price').textContent.replace('ر.س', ''))
    total -= itemPrice
    let filteredProducts = checkoutProductsArray.filter((product) => {
        return product.name != removedProductName
    })
    console.log(filteredProducts)

    sessionStorage.setItem('cart', JSON.stringify(filteredProducts))
    checkoutProductsArray = filteredProducts
    document.querySelector('#subtotal').textContent = 'ر.س' + total
    if (filteredProducts.length < 1) {
        document.querySelector('.ps-shopping-cart__total').remove()
        document.querySelector('.ps-form--checkout').remove()
        // checkoutForm.remove()
        console.log('a')
    }
}