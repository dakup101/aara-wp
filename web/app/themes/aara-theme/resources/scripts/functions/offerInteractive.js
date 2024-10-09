import { createApp } from 'vue';
import OfferInteractive from "../components/OfferInteractive.vue";

export default () => {
    const offerInteractiveWrapper = document.querySelector("#offerInteractive");
    if (!offerInteractiveWrapper) return;
      const pinsData = offerInteractiveWrapper.getAttribute("data-pins");
      const img = offerInteractiveWrapper.getAttribute("data-img");
      const pins = JSON.parse(pinsData);
  
      offerInteractiveWrapper.removeAttribute("data-pins");
      offerInteractiveWrapper.removeAttribute("data-img");
  
      const offerInteractiveApp = createApp(OfferInteractive, {
        pins: pins,
        background: img,
      }).mount("#offerInteractive")
}