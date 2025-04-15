function openModal(text) {
    document.getElementById('modal-text').textContent = text;
    document.getElementById('modal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

// Close modal when clicking outside content
window.onclick = function(event) {
    if (event.target === document.getElementById('modal')) {
        closeModal();
    }
}


//Dark Mode

