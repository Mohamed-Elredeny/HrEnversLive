// Cache DOM elements and add null checks
const options = document.querySelector(".options");
const optionsInsideContainer = document.querySelector(".approvalOptionsinside");
const approvalOptionsoutside = document.querySelector(".approvalOptionsoutside");
const Annual = document.querySelectorAll(".Annual");
const AnnualOut = document.querySelectorAll(".AnnualOut");

/*Start Leave type section*/
// Add event listeners for leave type radio buttons
document.querySelectorAll('input[name="leaveType"]').forEach(leaveTypeInput => {
    leaveTypeInput.addEventListener('change', function () {
        const leaveType = this.value;

        // Remove active class from all labels and set it to the selected one
        document.querySelectorAll('label[for]').forEach(label => label.classList.remove('active'));
        const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
        if (selectedLabel) selectedLabel.classList.add('active');

        // Reset visibility of all nested options
        resetOptions();

        if (leaveType === 'Annual Leave') {
            document.getElementById('insideOption').style.display = 'block';
            document.getElementById('outsideOption').style.display = 'block';

            // Add listeners for "Inside" or "Outside" Qatar dynamically
            document.querySelectorAll('input[name="annualType"]').forEach(annualTypeInput => {
                annualTypeInput.addEventListener('change', function () {
                    // Remove active class for annualType and set for the selected one
                    document.querySelectorAll('label[for]').forEach(label => label.classList.remove('active'));
                    const annualLabel = document.querySelector(`label[for="${this.id}"]`);
                    if (annualLabel) annualLabel.classList.add('active');

                    if (this.value === 'Outside Qatar') {
                        activateOutsideOptions(); // Always activate "Outside Qatar" options
                    } else {
                        handleInsideOption();
                    }
                });
            });
        }
    });
});

// Function to handle "Inside Qatar" selection
function handleInsideOption() {
    document.querySelectorAll('.AnnualOut').forEach(el => el.style.display = 'none');
}

// Function to activate "Outside Qatar" options
function activateOutsideOptions() {

    resetOutsideOptions();

    // Show both options explicitly
    document.getElementById('purchaseTicketOption').style.display = 'block';
    document.getElementById('companyArrangeOption').style.display = 'block';

    // Add event listeners for ticket options
    var purchaseTicketInput = document.getElementById('purchaseTicket');
    var requestCompanyInput = document.getElementById('requestCompany');
    var dateInput = document.getElementById('dateInput');

    purchaseTicketInput.addEventListener('change', function () {
        if (this.checked) {
            document.getElementById('companyArrangeOption').style.display = 'none';
            dateInput.style.display = 'none';
        }
    });

    requestCompanyInput.addEventListener('change', function () {
        if (this.checked) {
            document.getElementById('purchaseTicketOption').style.display = 'none';
            dateInput.style.display = 'block';
        }
    });
}

// Function to reset "Outside Qatar" options
function resetOutsideOptions() {
    // Reset ticket options
    document.getElementById('purchaseTicket').checked = false;
    document.getElementById('requestCompany').checked = false;
    // Hide date input and clear its value
    var dateInput = document.getElementById('dateInput');
    var dateField = document.getElementById('ticketDate');
    if (dateField) dateField.value = '';
    dateInput.style.display = 'none';
}

// Reset visibility for all options
function resetOptions() {
    document.querySelectorAll('.Annual, .AnnualOut').forEach(el => el.style.display = 'none');
    document.getElementById('insideOption').style.display = 'none';
    document.getElementById('outsideOption').style.display = 'none';
    document.getElementById('purchaseTicketOption').style.display = 'none';
    document.getElementById('companyArrangeOption').style.display = 'none';
    document.getElementById('dateInput').style.display = 'none';
}

// Add click event for option labels
document.querySelectorAll('.options label').forEach(label => {
    label.addEventListener('click', function () {
        // Remove active class from all labels
        document.querySelectorAll('.options label').forEach(l => l.classList.remove('active'));

        // Add active class to the clicked label
        this.classList.add('active');

        // Handle special cases based on the text
        const optionText = this.textContent.trim();
        if (optionText === 'Annual Leave') {
            document.querySelectorAll('.Annual').forEach(AN => {
                AN.style.display = 'grid';
            });
        } else if (
            ['Inside Qatar', 'Outside Qatar', 'I Will Purchase my ticket'].includes(optionText)
        ) {
            document.querySelectorAll('.Annual').forEach(AN => {
                AN.style.display = 'grid';
            });
            if (optionText === 'I Will Purchase my ticket') {
                document.querySelector('#Outside').classList.add('active');
            }
        } else {
            document.querySelectorAll('.AnnualOut').forEach(ANoUT => {
                ANoUT.style.display = 'none';
            });
            document.querySelectorAll('.Annual').forEach(AN => {
                AN.style.display = 'none';
            });
        }
    });
});

/*End Leave type section*/


/**/
// Cache shared elements only once
const Outside = document.querySelector("#Outside");
const Inside = document.querySelector("#Inside");
const Annualclick = document.querySelector("#AnnualSide");

if (Outside) {
    Outside.addEventListener("click", () => {
        Annualclick.classList.add("active");
        AnnualOut.forEach((ANoUT) => {
            ANoUT.style.display = "grid";
        });
    });
}

if (Annualclick) {
    Annualclick.addEventListener("click", () => {
        AnnualOut.forEach((ANoUT) => {
            ANoUT.style.display = "none";
        });
    });
}

if (Inside) {
    Inside.addEventListener("click", () => {
        Annualclick.classList.add("active");
        AnnualOut.forEach((ANoUT) => {
            ANoUT.style.display = "none";
        });
    });
}

// Handle options inside
const optionsInside = document.querySelector(".options.inside");

if (optionsInside) {
    optionsInside.addEventListener("click", (event) => {
        const selectedOption = event.target.closest("label");
        if (selectedOption) {
            document.querySelectorAll(".options.inside label").forEach((label) => {
                label.classList.remove("active");
            });
            selectedOption.classList.add("active");
        }
    });
}

// Handle options outside
const optionsOutside = document.querySelector(".options.outside");

if (optionsOutside) {
    optionsOutside.addEventListener("click", (event) => {
        const selectedOption = event.target.closest("label");
        if (selectedOption) {
            document.querySelectorAll(".options.outside label").forEach((label) => {
                label.classList.remove("active");
            });
            selectedOption.classList.add("active");
        }
    });
}
document.addEventListener("DOMContentLoaded", () => {
    // Variables for date inputs and counter
    const fromDateInput = document.getElementById("FromDate");
    const toDateInput = document.getElementById("ToDate");
    const counterNum = document.getElementById("conuterNum");
    const boxCounter = document.querySelector(".boxCounter");

    // Calculate the difference in days
    function calculateDays() {
        const fromDate = new Date(fromDateInput?.value);
        const toDate = new Date(toDateInput?.value);

        if (fromDate && toDate && !isNaN(fromDate) && !isNaN(toDate)) {
            const dayDifference = (toDate - fromDate) / (1000 * 3600 * 24);
            if (dayDifference >= 0) {
                counterNum.textContent = dayDifference;
                boxCounter.style.background = "#42b26b";
            } else {
                counterNum.textContent = dayDifference;
                boxCounter.style.background = "#e1322d";
            }
            document.getElementById("days").value=dayDifference;
        } else {
            counterNum.textContent = "Zero";
            document.getElementById("days").value=0;
        }
    }

    // Add event listeners to date inputs
    fromDateInput?.addEventListener("change", calculateDays);
    toDateInput?.addEventListener("change", calculateDays);

    // Approval Group Logic
    const addIcon = document.querySelector(".titleAccordion .icon.plus");
    const approvalGroup = document.querySelector(".HandOvergroup");

    addIcon?.addEventListener("click", () => {
        const approvalSections = document.querySelectorAll(".approval-section");
        if (approvalSections.length <= 4) {
            const newApprovalSectionHTML = `
                                                <div class="col-12 col-lg-6">
                                                    <div class="approval-section  active approvalSection">
                                                        <div
                                                            class="select-approval d-flex flex-row justify-content-between align-items-center">

                                                            <div class="search w-100 me-0 mt-0">
                                                                <select class="dynamic-select"
                                                                        style="width: 100%"></select>
                                                                <button class="search-icon"><i
                                                                        class="fa-solid fa-magnifying-glass"></i>
                                                                </button>
                                                            </div>
                                                            <div class="icon trash">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
            `;
            approvalGroup.insertAdjacentHTML('beforeend', newApprovalSectionHTML);

            // Add click event to new trash icons
            approvalGroup.querySelectorAll(".approval-section .icon.trash").forEach(icon => {
                icon.addEventListener("click", (event) => {
                    const sectionToRemove = event.target.closest(".col-12.col-lg-6");
                    if (sectionToRemove) {
                        sectionToRemove.remove();
                        addIcon.style.display = approvalSections.length > 3 ? 'none' : 'grid';
                    }
                });
            });
        }

        if (approvalSections.length > 3) {
            addIcon.style.display = 'none';
        }
    });

    // Confirm Button Logic
    const confirmBtn = document.getElementById("confirm");
    const boxConfirmSubmit = document.querySelector(".boxConfirmSubmit");

    confirmBtn?.addEventListener("click", () => {
        boxConfirmSubmit?.classList.toggle("active");
    });

    // File Upload Logic
    function setupFileInput(fileInputId, fileNameId, iconContainerSelector) {
        const fileInput = document.getElementById(fileInputId);
        const fileName = document.getElementById(fileNameId);
        const iconContainer = document.querySelector(iconContainerSelector);
        const uploadIcon = iconContainer?.querySelector(".divuploa");
        const checkIcon = iconContainer?.querySelector(".divcheck");

        fileInput?.addEventListener("change", (event) => {
            const files = event.target.files;

            if (files.length > 0) {
                const fileList = Array.from(files).map(file => file.name).join(", ");
                fileName.textContent = fileList;
                uploadIcon.style.display = "none";
                checkIcon.style.display = "block";
            } else {
                fileName.textContent = "No file selected";
                uploadIcon.style.display = "block";
                checkIcon.style.display = "none";
            }
        });
    }

    setupFileInput("signature-upload", "file-name", ".iconUploadDis");
    setupFileInput("signature-down", "file-name-down", ".iconDownloadDis");

    // SweetAlert Popup
    function showAlert() {
        Swal.fire({
            title: 'Confirmation',
            text: 'Do you want to proceed?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                alert("Confirmed");
            } else {
                alert("Cancelled");
            }
        });
    }
});
