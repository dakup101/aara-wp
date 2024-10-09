export default () => {
    const stickyArrow = document.querySelector('.sticky-arrow');

    window.addEventListener('scroll', function() {
      const scrollPosition = window.scrollY;
  
      if (scrollPosition > 150) {
        stickyArrow.classList.remove('show');
      } else {
        stickyArrow.classList.add('show');
      }
    });
}