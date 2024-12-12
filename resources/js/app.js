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

import { initializeAreaChart } from "./layout/area-chart";

// Initialize the chart
document.addEventListener("DOMContentLoaded", () => {
    initializeAreaChart();
});

import { initializeDropdown } from "./layout/dropdown";

// Initialize dropdown functionality
document.addEventListener("DOMContentLoaded", () => {
    initializeDropdown();
});

// import { initializePieChart } from "./layout/pie-chart";

// document.addEventListener("DOMContentLoaded", () => {
//     initializePieChart();
// });

import { initializeMostSoldBarChartRace } from "./layout/bar-chart";

document.addEventListener("DOMContentLoaded", () => {
    initializeMostSoldBarChartRace();
});

//Modal

// import { showModal } from "./layout/modal";

// document.addEventListener("DOMContentLoaded", () => {
//     document.getElementById("triggerModal").addEventListener("click", () => {
//         showModal({
//             title: "Create Item",
//             content: `
//                 <div class="mb-4">
//                     <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
//                     <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
//                 </div>
//                 <div class="mb-4">
//                     <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
//                     <textarea id="description" name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
//                 </div>
//             `,
//             submitText: "Create",
//             action: "/item/store",
//             method: "POST",
//         });
//     });
// });
