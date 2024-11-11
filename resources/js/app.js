import "./bootstrap";
import Alpine from "alpinejs";
// import intlTelInput from "intl-tel-input";

// const initIntTelInput = (phoneInput, configs = {}) => {
//     const iti = intlTelInput(phoneInput, {
//         utilsScript: "/node_modules/intl-tel-input/build/js/utils.js",
//         ...configs,
//     });

//     return iti;
// };

window.Alpine = Alpine;
// window.initIntTelInput = initIntTelInput;
// window.intlTelInput = intlTelInput;

Alpine.data("hamburgerMenu", () => ({
    mobileMenuOpen: false,
    isScrolled: false,
    toggleMenu() {
        this.mobileMenuOpen = !this.mobileMenuOpen;
    },
}));

Alpine.start();
