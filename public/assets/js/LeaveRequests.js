function toggleActive(clickedButton) {
    const buttons = document.querySelectorAll('.btnHeader');
    buttons.forEach(button => button.classList.remove('activeHeader'));
    clickedButton.classList.add('activeHeader');
}

function showDelails(){
    document.querySelector('#print_button').classList.toggle('activeClose');
    document.querySelector('#btnPlus').classList.toggle('activeClose');
}

const openPopupButton = document.getElementById('open-popup');
const closePopupButton = document.getElementById('close-popup');
const popupOverlay = document.getElementById('popup-overlay');

openPopupButton.addEventListener('click', () => {
    popupOverlay.classList.remove('hidden');
});
closePopupButton.addEventListener('click', () => {
    popupOverlay.classList.add('hidden');
});
popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) {
        popupOverlay.classList.add('hidden');
    }
});



function toggleAccordion(button) {
    const content = button.nextElementSibling;

    if (content.classList.contains("open")) {
        content.classList.remove("open");
    } else {
        content.classList.add("open");
    }
}
document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".toggle-btn");
    
    buttons.forEach((button) => {
        button.addEventListener("click", () => {
        buttons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
        });
    });
});
function toggleAccordionHeader(head){
    document.querySelectorAll('.accordion-item').forEach(btn => {
        btn.classList.remove('accordion-item-green');
    })
    head.classList.add('accordion-item-green');
}
function toggleActive(button) {
    document.querySelectorAll('.btnHeader').forEach(btn => {
        btn.classList.remove('activeHeader');
    });
    button.classList.add('activeHeader');

    const isMyRequests = button.textContent.trim() === "My Requests";
    document.querySelectorAll("tbody tr").forEach(row => {
        const actionCell = row.querySelector("td:last-child");
        if (isMyRequests) {
            actionCell.innerHTML = `
                <button class="btn btnTra">
                    <a href="TrackRequest.html">Track</a>
                </button>`;
        } else {
            actionCell.innerHTML = `
                <button class="btn btnTra">
                    <a href="ManageRequest.html">Manage</a>
                </button>`;
        }
    });
}
