function firebase_upload() {


    const image_uploaded_file = document.querySelector('#image')
    const image_name = document.querySelector('#image_name').value
    const create_course_form = document.querySelector('#form')
    const inputs = create_course_form.querySelectorAll('.form-control')
    const main_text = document.getElementById('main_text');
    const brief_text = document.getElementById('brief_text');
    let storageRef = initialize_firebase()
    const image_input = document.getElementById('image').files[0];
    const form = document.getElementById('form');
    const input = document.createElement('input');
    let fileRef = storageRef.child(`choco/` + image_input.name + image_name);
    fileRef.put(image_input).then(function (response) {
        fileRef.getDownloadURL().then(function (url) {
            input.type = 'hidden';
            input.name = 'image_name';
            input.id = 'url';
            input.value = `${url}`;
            form.append(input)

            if (window.location.href = '/admin/images/create') {
                send_create_image_ajax(image_name, input.value, main_text.value, brief_text.value, image_input.name + image_name)
                window.location.href = '/admin/images'
            }

            window.location.href = '/admin/images';
        });
    });





}