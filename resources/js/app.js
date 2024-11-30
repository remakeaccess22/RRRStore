import "./bootstrap";
import "preline";

//Password Eye Visibility
import { togglePasswordVisibility } from "./auth/password-visibility";
window.togglePasswordVisibility = togglePasswordVisibility;

//Sidebar
import { toggleSidebar, closeSidebar } from "./layout/sidebar";

document.addEventListener("DOMContentLoaded", () => {
    toggleSidebar();
    closeSidebar();
});
