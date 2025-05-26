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


    //Dark mode theme + 
    document.addEventListener("DOMContentLoaded", function () {
        const body = document.body;
        const themeToggleBtn = document.getElementById("themeToggleBtn");
        const themeIcon = document.getElementById("themeIcon");
        const userName = document.getElementById("userName");
        const userRole = document.getElementById("userRole");
    
        // Toggle theme on icon click
        themeToggleBtn.addEventListener("click", () => {
            body.classList.toggle("light-theme");
    
            if (body.classList.contains("light-theme")) {
                themeIcon.classList.replace("bi-sun-fill", "bi-moon-fill");
                
               
            } else {
                themeIcon.classList.replace("bi-moon-fill", "bi-sun-fill");
               
            }
        });
    

    });