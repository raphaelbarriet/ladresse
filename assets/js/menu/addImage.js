import $ from 'jquery';
$(document).ready( (e) => {
    const addImage = $("#add-image")
    const p = $('#plat_images')
    let element = p.data("prototype")
    let counter = $('#plat_images .form-groupe').length

    addImage.click( function() {
        p.append(element.replace(/__name__/g, counter))
        buttonHandleDelete()
        counter++
    })


    function buttonHandleDelete() {
        $('button[data-action="delete"]').click( function () {
            const target = this.dataset.target;
            $(target).remove()
        })
    }

    buttonHandleDelete()

})