const deleteButtons = document.querySelectorAll(".button-table");

deleteButtons.forEach(button => {
    button.addEventListener("click", confirmDelete);
});

function confirmDelete(event) {
    event.preventDefault();
    const confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce progrès ?");
    if (confirmation) {
        const url = event.target.getAttribute("href");
        window.location.href = url;
    }
}
