class lightBox {

    static init(){
        const img = document.querySelectorAll('.img-lightbox')

        img.forEach(image => {
            image.addEventListener('click', () => {
              lightboxGenerator(image);
              closeLightBox();
            })
        })
    }

}

function closeLightBox() {
    let button = document.querySelector('.close-lightbox')
    button.addEventListener('click', () => {
        document.querySelector('.lightbox').remove()
    })
}

function lightboxGenerator(image) {
    let lightbox = generateElement('div' ,['lightbox'])
      lightbox.innerHTML = `<button class="close-lightbox btn btn-danger rounded"><i class="fas fa-times"></i></button>
                              <div class="lightbox-container">
                                <img src="${image.getAttribute('src')}">
                              </div>`
 
  document.querySelector('body').appendChild(lightbox)
}

/**
 * 
 * @param {array} options take all tha className 
 * @param {string} element take the wanted element
 */
function generateElement(element, options = []){
  div = document.createElement(element)
  options.forEach(option => {
    div.classList.add(option)
  })
  return div
}


lightBox.init()
