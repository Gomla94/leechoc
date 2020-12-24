// const _image_name = document.getElementById('name')
// const image_file = document.getElementById('image')
let csrf_token = document.getElementsByName('_token')[0]
const create_course_form = document.querySelector('#form')

function send_create_image_ajax(_image_name, _image_url, _main_text, _brief_text, _image_firebase_name = null, image_input = null) {

    let method = 'store';
    $.ajax({
        url: '/admin/images',
        method: 'POST',
        data: {
            _token: csrf_token.value,
            method: method,
            image_name: _image_name,
            image_url: _image_url,
            image: _image_url,
            image_firebase_name: _image_firebase_name,
            main_text: _main_text,
            brief_text: _brief_text,
        },
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
                create_course_form.prepend(errorsList)
            }
        }
    })

}