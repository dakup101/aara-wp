export default () => {
const trigger = document.querySelector('.mega-menu-trigger a');
const megaMenu = document.querySelector('.mega-menu');

let timeoutId;

function showMegaMenu() {
    megaMenu.classList.add('show');
    trigger.classList.add('active')
}

function hideMegaMenu() {
    megaMenu.classList.remove('show');
    trigger.classList.remove('active');
}

function handleTriggerMouseEnter() {
    clearTimeout(timeoutId);
    showMegaMenu();
}

function handleTriggerMouseLeave() {
    timeoutId = setTimeout(hideMegaMenu, 500);
}

function handleMegaMenuMouseEnter() {
    clearTimeout(timeoutId);
}

function handleMegaMenuMouseLeave() {
    timeoutId = setTimeout(hideMegaMenu, 500);
}

// Add event listeners to trigger and mega-menu
trigger.addEventListener('mouseenter', handleTriggerMouseEnter);
trigger.addEventListener('mouseleave', handleTriggerMouseLeave);
megaMenu.addEventListener('mouseenter', handleMegaMenuMouseEnter);
megaMenu.addEventListener('mouseleave', handleMegaMenuMouseLeave);

}