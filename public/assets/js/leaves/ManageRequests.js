document.addEventListener('DOMContentLoaded', () => {
    // Setup Popup Function
    function setupPopup(buttonSelector, popupOverlayId, closeButtonId) {
        const buttons = document.querySelectorAll(buttonSelector);
        const popupOverlay = document.getElementById(popupOverlayId);
        const closeButton = document.getElementById(closeButtonId);

        if (!popupOverlay || !closeButton) return;

        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                popupOverlay.classList.remove('hidden');
            });
        });

        closeButton.addEventListener('click', () => {
            popupOverlay.classList.add('hidden');
        });

        popupOverlay.addEventListener('click', (e) => {
            if (e.target === popupOverlay) {
                popupOverlay.classList.add('hidden');
            }
        });
    }

    setupPopup(".btnApproval.btnApprove", "approve-popup", "approve-close-popup");
    setupPopup(".btnApproval.btnReturn", "return-popup", "return-close-popup");
    setupPopup(".btnApproval.btnReject", "Reject-popup", "Reject-close-popup");

    // Setup Button Activation Based on Input Changes
    function setupButtonActivation(buttonId, formboxClass) {
        const button = document.querySelector(buttonId);
        const inputs = document.querySelectorAll(`${formboxClass} input`);

        if (!button || inputs.length === 0) return;

        inputs.forEach((input) => {
            input.addEventListener("change", () => {
                const checkedCount = Array.from(inputs).filter(input => input.checked).length;
                button.classList.toggle("active", checkedCount >= 1);
            });
        });
    }

    setupButtonActivation("#return-close-popup", ".FormboxReturnDan");
    setupButtonActivation("#Reject-close-popup", ".FormboxRejectDan");

    // Handle Toggle Switch Change Events
    document.querySelectorAll(".switch input").forEach((toggle) => {
        toggle.addEventListener("change", (event) => {
            const toggleItem = event.target.closest(".toggle-item");
            if (toggleItem) {
                const status = event.target.checked ? "ON" : "OFF";
                console.log(`Toggle ${status}: ${toggleItem.textContent.trim()}`);
            }
        });
    });

    // Handle Clearance Section Visibility
    const clearanceChecks = document.querySelectorAll(".clearanceCheck");
    const handleClearanceToggle = (action, message, icon) => {
        Swal.fire({
            title: 'Are you sure?',
            text: message,
            icon: icon,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                clearanceChecks.forEach(check => {
                    check.style.display = action === 'hide' ? 'none' : 'block';
                });
                Swal.fire(`${action === 'hide' ? 'Hidden!' : 'Visible!'}`, `The clearance section is now ${action === 'hide' ? 'hidden' : 'visible'}.`, 'success');
            } else {
                document.querySelector(action === 'hide' ? "#yesClearance" : "#noClearance").checked = true;
            }
        });
    };

    document.querySelector("#noClearance")?.addEventListener("click", () => handleClearanceToggle('hide', "You are about to hide the clearance section.", 'warning'));
    document.querySelector("#yesClearance")?.addEventListener("click", () => handleClearanceToggle('show', "You are about to show the clearance section.", 'info'));

    // Accordion Button Handlers
    document.querySelectorAll('.accordion-item').forEach(accordion => {
        const approveBtn = accordion.querySelector('.btnApprove');
        const returnBtn = accordion.querySelector('.btnReturn');
        const rejectBtn = accordion.querySelector('.btnReject');
        const images = accordion.querySelectorAll('.accordion-header img');

        function resetButtonsAndImages() {
            [approveBtn, returnBtn, rejectBtn].forEach(btn => btn?.classList.remove('active'));
            images.forEach(img => (img.style.display = 'none'));
        }

        approveBtn?.addEventListener('click', () => {
            resetButtonsAndImages();
            approveBtn.classList.add('active');
            const evaluatedImage = accordion.querySelector('img[alt="Evaluated"]');
            evaluatedImage?.style.setProperty('display', 'block');
        });

        returnBtn?.addEventListener('click', () => {
            resetButtonsAndImages();
            returnBtn.classList.add('active');
            const pendingImage = accordion.querySelector('img[alt="Pending"]');
            pendingImage?.style.setProperty('display', 'block');
        });

        rejectBtn?.addEventListener('click', () => {
            resetButtonsAndImages();
            rejectBtn.classList.add('active');
            const returnedImage = accordion.querySelector('img[alt="Returned"]');
            returnedImage?.style.setProperty('display', 'block');
        });
    });

    // Print Button Functionality
    const printButton = document.querySelector(".Print_Requests");
    printButton?.addEventListener("click", (event) => {
        event.preventDefault();
        const sectionToPrint = document.querySelector(".LeaveTap_section");
        const headerToPrint = document.querySelector(".info_section");

        if (sectionToPrint && headerToPrint) {
            const printWindow = window.open("", "_blank", "width=800,height=600");
            printWindow.document.write(`
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Print Section</title>
                    <link rel="stylesheet" href="../../../assets/css/Leave_Requests.css">
                    <link rel="stylesheet" href="../../../assets/css/Leave_Requests_print.css">
                    <style>
                        @media print { body { margin: 0; } }
                    </style>
                </head>
                <body>
                    ${headerToPrint.outerHTML}
                    <main>${sectionToPrint.outerHTML}</main>
                    <script>window.print();</script>
                </body>
                </html>
            `);
            printWindow.document.close();
        }
    });

    // Approval Group Handlers
    document.querySelectorAll(".approval-group").forEach((approvalGroup, groupIndex) => {
        const approvalBtn = approvalGroup.querySelector(".approvalBtn");
        const approvalOptions = approvalGroup.querySelector(".approvalOptions");
        const approvalLabels = approvalOptions?.querySelectorAll("label") || [];

        approvalBtn?.addEventListener("click", () => {
            approvalOptions?.classList.toggle("active");
        });

        approvalLabels.forEach((label) => {
            label.addEventListener("click", () => {
                const selectedText = label.textContent.trim();
                approvalBtn.textContent = selectedText;
                approvalOptions.classList.remove("active");
            });
        });
    });
});
