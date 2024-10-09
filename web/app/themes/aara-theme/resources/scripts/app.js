import domReady from '@roots/sage/client/dom-ready';
import heroSwiper from '@scripts/functions/heroSwiper';
// import offerPropertiesSwiper from './functions/offerPropertiesSwiper';
// import offerInteractive from './functions/offerInteractive';
import offerCarouselSwiper from './functions/offerCarouselSwiper';
import portfolioSwiper from './functions/portfolioSwiper';
import map from './functions/map';
import faq from './functions/faq';
import megamenu from './functions/megamenu';
import mobileMenu from './functions/mobileMenu';
import windowOnScroll from './functions/windowOnScroll';
import glightbox from './functions/glightbox';

/**
 * Application entrypoint
 */
domReady(async () => {
  heroSwiper();
  // offerPropertiesSwiper();
  // offerInteractive();
  offerCarouselSwiper();
  portfolioSwiper();
  map();
  faq();
  megamenu();
  mobileMenu();
  windowOnScroll();
  glightbox();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
