export function toggleSidebar() {
    const toggleButton = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");

    toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });
}

export function closeSidebar() {
    const closeButton = document.getElementById("closeSidebar");
    const sidebar = document.getElementById("sidebar");

    closeButton.addEventListener("click", () => {
        sidebar.classList.add("-translate-x-full");
    });
}
