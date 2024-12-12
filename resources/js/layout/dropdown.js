export function initializeDropdown() {
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    // Toggle the dropdown menu on button click
    if (dropdownButton) {
        dropdownButton.addEventListener("click", (e) => {
            e.stopPropagation(); // Prevent triggering the window click event
            if (dropdownMenu) {
                dropdownMenu.classList.toggle("hidden");
            }
        });
    }

    // Close dropdown when clicking outside
    window.addEventListener("click", (e) => {
        if (
            dropdownMenu &&
            dropdownButton &&
            !dropdownButton.contains(e.target) &&
            !dropdownMenu.contains(e.target)
        ) {
            dropdownMenu.classList.add("hidden");
        }
    });
}
