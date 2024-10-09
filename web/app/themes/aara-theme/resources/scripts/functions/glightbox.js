import GLightbox from "glightbox";

export default function lightbox() {
	console.log("--- Lightbox Loaded ---");

	const lightbox = GLightbox({
		selector: ".glightbox",
		touchNavigation: true,
		loop: true,
	});
}