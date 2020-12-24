function validateInputs(event) {

    const user_name = document.getElementById('name_input').value
    const user_phone = document.getElementById('phone_input').value
    const user_address = document.getElementById('address_input').value
    const checkout_form = document.querySelector('.ps-form--checkout')
    const _cart = checkout_form.querySelector('#cart').value
    console.log(_cart)

    event.preventDefault();
    $.ajax({
        url: '/checkout',
        method: 'POST',
        data: { '_token': csrf_token, name: user_name, phone: user_phone, address: user_address, cart: _cart },
        success: function (response) {
            if (response.errors) {
                if (document.querySelector('.list-group') != null) {
                    document.querySelector('.list-group').remove()
                }
                const errorsList = document.createElement('ul')
                errorsList.classList.add('list-group')
                response.errors.forEach((error) => {
                    const li = document.createElement('li')
                    li.classList.add('list-group-item')
                    let error_div = document.createElement('div')
                    error_div.classList.add('alert')
                    error_div.classList.add('alert-danger')
                    error_div.innerHTML = error
                    li.append(error_div)
                    errorsList.append(li)
                })
                checkout_form.querySelector('#billing_id').insertAdjacentElement('afterend', errorsList)
            } else {
                checkout_form.submit()
                sessionStorage.clear()
            }
        }
    })
}