export function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const eyeOpenIcon = document.getElementById("eye-open-icon");
    const eyeSlashIcon = document.getElementById("eye-slash-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        // Show "eye open" and hide "eye slash"
        eyeOpenIcon.style.display = "inline";
        eyeSlashIcon.style.display = "none";
    } else {
        passwordInput.type = "password";
        // Show "eye slash" and hide "eye open"
        eyeOpenIcon.style.display = "none";
        eyeSlashIcon.style.display = "inline";
    }
}
