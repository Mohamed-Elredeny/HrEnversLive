document.addEventListener("DOMContentLoaded", () => {
    // Toggle Active Header
    window.toggleActive = function (button) {
        const headerButtons = document.querySelectorAll('.btnHeader');
        headerButtons.forEach(btn => btn.classList.remove('activeHeader'));
        button.classList.add('activeHeader');

        const isMyRequests = button.textContent.trim() === "My Requests";
        const rows = document.querySelectorAll("tbody tr");
        rows.forEach(row => {
            const actionCell = row.querySelector("td:last-child");
            if (actionCell) {
                actionCell.innerHTML = isMyRequests
                    ? `<button class="btn btnTra"><a href="TrackRequest.html">Track</a></button>`
                    : `<button class="btn btnTra"><a href="ManageRequest.html">Manage</a></button>`;
            }
        });
    };

    // Toggle Accordion
    window.toggleAccordion = function (button) {
        const content = button.nextElementSibling;
        if (content) {
            content.classList.toggle("open");
        }
    };

    // Accordion Header Toggle
    window.toggleAccordionHeader = function (head) {
        const iconArrowDown = head.querySelector(".iconArrowDown");
        if (head.classList.contains('accordion-item-green')) {
            // Deactivate current item
            if (iconArrowDown) {
                iconArrowDown.style.color = "#42b26b";
                iconArrowDown.style.transform = "rotate(0deg) translateY(-50%)";
            }
            head.classList.remove('accordion-item-green');
        } else {
            // Reset all items
            document.querySelectorAll('.accordion-item').forEach(item => {
                const arrow = item.querySelector(".iconArrowDown");
                if (arrow) {
                    arrow.style.color = "#42b26b";
                    arrow.style.transform = "rotate(0deg) translateY(-50%)";
                }
                item.classList.remove('accordion-item-green');
            });

            // Activate current item
            if (iconArrowDown) {
                iconArrowDown.style.color = "#eee";
                iconArrowDown.style.transform = "rotate(90deg) translateY(0%)";
            }
            head.classList.add('accordion-item-green');
        }
    };

    // Show Details
    window.showDetails = function () {
        const printButton = document.querySelector('#print_button');
        const btnPlus = document.querySelector('#btnPlus');
        if (printButton && btnPlus) {
            printButton.classList.toggle('activeClose');
            btnPlus.classList.toggle('activeClose');
        }
    };

    // Popup Logic
    const openPopupButton = document.getElementById('open-popup');
    const closePopupButton = document.getElementById('close-popup');
    const popupOverlay = document.getElementById('popup-overlay');

    if (openPopupButton && closePopupButton && popupOverlay) {
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
    }

    // Toggle Buttons for Accordion
    const buttons = document.querySelectorAll(".toggle-btn");
    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            buttons.forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");
        });
    });
});
