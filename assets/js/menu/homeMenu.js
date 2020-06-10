const option = {
    root: null,
    rootMargin: '0px',
    threshold: .1,
}
 
function handleIntersc (entries, observer) {
  entries.forEach(entry => {
      if(entry.intersectionRatio > 0){
          entry.target.classList.add("reveal-visible")
      }
  })
}

var observer = new IntersectionObserver(handleIntersc, option)
observer.observe(document.querySelector('.widget'))
document.querySelectorAll('.menu-container').forEach(target => {
    observer.observe(target);
})
