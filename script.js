//opening modal
function openModal(text) {
    document.getElementById('modal-text').textContent = text;
    document.getElementById('customModal').style.display = 'flex';
}

//closing modal
function closeModal() {
    document.getElementById('customModal').style.display = 'none';
}

// Close modal when clicking outside content
window.onclick = function(event) {
    if (event.target === document.getElementById('customModal')) {
        closeModal();
    }
}


    //Dark mode theme + color picker
    document.addEventListener("DOMContentLoaded", function () {
        const body = document.body;
        const sidebar = document.querySelector('.sidebar'); // Select the sidebar
        const topBar = document.querySelector('.top-bar'); // Select the top bar
        const toggle = document.getElementById("themeToggle");
        const colorPicker = document.getElementById("colorPicker");
    
        // Default mode
        body.classList.add("dark-mode");
    
        toggle.addEventListener("click", () => {
            body.classList.toggle("dark-mode");
            body.classList.toggle("light-mode");
    
            // Change icon or text if you like
            toggle.innerHTML = body.classList.contains("light-mode") ? '🌙' : '☀️';
        });
    
        colorPicker.addEventListener("input", function() {
            const selectedColor = this.value; // Get the selected color value
            body.style.backgroundColor = selectedColor; // Set body background color
            sidebar.style.backgroundColor = selectedColor; // Set sidebar background color
            topBar.style.backgroundColor = selectedColor; // Set top bar background color
            // Optionally change text color based on background color
            document.body.style.color = (selectedColor === "#000000") ? "#FFFFFF" : "#000000"; // Change text color based on background
        });
    });
    


