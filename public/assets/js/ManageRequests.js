function setupPopup(buttonSelector, popupOverlayId, closeButtonId) {
    const buttons = document.querySelectorAll(buttonSelector);
    const popupOverlay = document.getElementById(popupOverlayId);
    const closeButton = document.getElementById(closeButtonId);

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

function setupButtonActivation(buttonId, formboxClass) {
    const button = document.querySelector(buttonId);
    const inputs = document.querySelectorAll(`${formboxClass} input`);

    inputs.forEach((input) => {
        input.addEventListener("change", () => {
            const checkedCount = Array.from(inputs).filter(input => input.checked).length;

            if (checkedCount >= 1) {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        });
    });
}

setupButtonActivation("#return-close-popup", ".FormboxReturnDan");
setupButtonActivation("#Reject-close-popup", ".FormboxRejectDan");


document.querySelectorAll(".switch input").forEach((toggle) => {
    toggle.addEventListener("change", (event) => {
        if (event.target.checked) {
            console.log("Toggle ON:", event.target.closest(".toggle-item").textContent.trim());
        } else {
            console.log("Toggle OFF:", event.target.closest(".toggle-item").textContent.trim());
        }
    });
});


const clearanceCheck = document.querySelector(".clearanceCheck");

document.querySelector("#noClearance").addEventListener("click", () => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You are about to hide the clearance section.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, hide it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            clearanceCheck.style.display = "none";
            Swal.fire(
                'Hidden!',
                'The clearance section has been hidden.',
                'success'
            );
        } else {
            document.querySelector("#yesClearance").checked = true
        }
    });
});


document.querySelector("#yesClearance").addEventListener("click", () => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You are about to show the clearance section.",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, show it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            clearanceCheck.style.display = "block";
            Swal.fire(
                'Visible!',
                'The clearance section is now visible.',
                'success'
            );
        } else {
            document.querySelector("#noClearance").checked = true
        }
    });
});

document.querySelectorAll(".approval-group").forEach((approvalGroup) => {
    const addApprovalBtn = approvalGroup.querySelector(".add-approval-btn"); // زر إضافة الموافقة
    const addApprovalBtnIcon = addApprovalBtn.querySelector(".icon"); // أيقونة الزر
    const approvalSection = approvalGroup.querySelector(".approvalSection"); // القسم المرتبط
    const approvalBtn = approvalGroup.querySelector(".approvalBtn"); // زر "Select Approval"
    const approvalOptions = approvalGroup.querySelector(".approvalOptions"); // خيارات الموافقة
    const approvalLabels = approvalOptions?.querySelectorAll("label") || []; // جميع الخيارات
    const searchBox = approvalGroup.querySelector(".search"); // مربع البحث

    addApprovalBtn?.addEventListener("click", () => {
        addApprovalBtnIcon?.classList.toggle("active");
        approvalSection?.classList.toggle("active");
        approvalOptions?.classList.remove("active");
    });

    approvalBtn?.addEventListener("click", () => {
        approvalOptions?.classList.toggle("active");
    });

    approvalLabels.forEach((label) => {
        label.addEventListener("click", () => {
            approvalLabels.forEach((item) => {
                const img = item.querySelector(".img-fluid img");
                img?.classList.remove("active");
            });

            const selectedImg = label.querySelector(".img-fluid img");
            selectedImg?.classList.add("active");

            const selectedText = label.textContent.trim();
            if (approvalBtn) approvalBtn.textContent = selectedText;

            if (selectedText === "N/A") {
                searchBox?.style.setProperty("display", "none");
                approvalBtn?.classList.add("spanCenter");
            } else {
                searchBox?.style.setProperty("display", "flex");
                approvalBtn?.classList.remove("spanCenter");
            }

            approvalOptions?.classList.remove("active");
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(accordion => {
        const approveBtn = accordion.querySelector('.btnApprove');
        const returnBtn = accordion.querySelector('.btnReturn');
        const rejectBtn = accordion.querySelector('.btnReject');

        const images = accordion.querySelectorAll('.accordion-header img');

        function resetButtonsAndImages() {
            approveBtn.classList.remove('active');
            returnBtn.classList.remove('active');
            rejectBtn.classList.remove('active');
            images.forEach(img => (img.style.display = 'none'));
        }

        approveBtn.addEventListener('click', () => {
            resetButtonsAndImages();
            approveBtn.classList.add('active');
            returnBtn.classList.remove('active');
            rejectBtn.classList.remove('active');
            const evaluatedImage = accordion.querySelector('img[alt="Evaluated"]');
            if (evaluatedImage) evaluatedImage.style.display = 'block';
        });

        returnBtn.addEventListener('click', () => {
            resetButtonsAndImages();
            returnBtn.classList.add('active');
            approveBtn.classList.remove('active');
            rejectBtn.classList.remove('active')
            const pendingImage = accordion.querySelector('img[alt="Pending"]');
            if (pendingImage) pendingImage.style.display = 'block';
        });

        rejectBtn.addEventListener('click', () => {
            resetButtonsAndImages();
            rejectBtn.classList.add('active');
            returnBtn.classList.remove('active');
            approveBtn.classList.remove('active')
            const returnedImage = accordion.querySelector('img[alt="Returned"]');
            if (returnedImage) returnedImage.style.display = 'block';
        });
    });
});

const printButton = document.querySelector(".Print_Requests");

printButton.addEventListener("click", (event) => {
    event.preventDefault(); // منع السلوك الافتراضي

    const sectionToPrint = document.querySelector(".LeaveTap_section");
    
    const alertMessage = `
        <div class="printNo" style="padding: 20px; font-size: 16px; background-color: #f8d7da; border-radius: 5px; color: #721c24; border: 1px solid #f5c6cb; margin: 20px;">
            <strong>ملاحظة:</strong> عند الطباعة، تأكد من تفعيل خيار <strong>"Background Graphics"</strong> في إعدادات الطباعة.
            <strong>ملاحظة:</strong> عند الطباعة، تأكد من تفعيل خيار <strong>"Pages Per Sheet 4"</strong> في إعدادات الطباعة.
            
            <button class="printbtn" onclick="window.print()">
                Print
            </button>
        </div>
    `;


    const inputsapprovals = sectionToPrint.querySelectorAll('.select-approval');
    inputsapprovals.forEach(inputsapproval => {
        let input = inputsapproval.querySelector('input[type="text"]');
        
        if (input) {
            let span = inputsapproval.parentElement.querySelector('p');
            
            if (span) {
                span.textContent = input.value;
            } else {
                span = document.createElement('p');
                span.classList.add("approval-section-p")
                span.textContent = input.value;
                inputsapproval.parentElement.appendChild(span);
            }
        }
    });

    const staInfoPositions = sectionToPrint.querySelectorAll('.staInfoPosition');
    staInfoPositions.forEach(staInfoPosition => {
        let input = staInfoPosition.querySelector('input[type="text"]');
        let boxInfoName = staInfoPosition.querySelector('.boxInfoName');
        
        if (input) {
            let span = staInfoPosition.querySelector('p');

            if (span) {
                console.log("span موجود");
                span.textContent = input.value;
            } else {
                console.log("span موجود مش");
                span = document.createElement('p');
                span.classList.add("text-black-50");
                span.textContent = input.value;
                boxInfoName.appendChild(span);
            }
        }
    
    });


    const textareas = sectionToPrint.querySelectorAll('.comments-section textarea');
    textareas.forEach(textarea => {
        let span = textarea.parentElement.querySelector('span');
        
        if (span) {
            span.textContent = textarea.value;
        } else {
            span = document.createElement('span');
            span.classList.add("comments-section-span")
            span.textContent = textarea.value;
            textarea.parentElement.appendChild(span);
        }
    });

    const toggleItems = sectionToPrint.querySelectorAll('.toggle-item');
    toggleItems.forEach(toggleItem => {
        const checkbox = toggleItem.querySelector('input[type="checkbox"]');
        const slider = toggleItem.querySelector('.slider');
        if (checkbox.checked) {
            slider.classList.add("toggle")
        } else {
            slider.classList.remove("toggle")
        }
        
    });

    const printWindow = window.open("", "_blank", "width=800,height=600");
    printWindow.document.write(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Print Section</title>
            <link rel="stylesheet" href="../../../assets/css/Leave_Requests.css">
            <link rel="stylesheet" href="../../../assets/css/Personal_Certificate.css">
            <link rel="stylesheet" href="../../../assets/css/KPI.css">
            <link rel="stylesheet" href="../../../assets/css/dashboard.css">
            <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../../assets/css/all.min.css">
            <!-- google font Syne-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
            
            <!-- google font Poppins -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            
            <!-- google font Inter -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

            <style>
                /* تخصيص تنسيق الطباعة */
                @media print {
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #000000;
                        margin: 0;  /* إزالة الهوامش */
                        padding: 0; /* إزالة الحشوة */
                        width: 100%;
                        height: 100%;
                        transform-origin: top left; /* تحديد نقطة الأصل للمقياس */
                    }
                    main{
                        margin-top: 0; 
                    }
                    @page {
                        size: landscape; 
                        margin: 0; 

                    }
                    .printbtn{
                        display: none;
                    }
                    .printNo{
                        display: none;
                    }

                    .content-to-print {
                        visibility: visible;
                    }

                    .content-to-print * {
                        visibility: visible;
                    }

                    /* تخصيص تنسيق خاص للطباعة */
                    .content-to-print {
                        text-align: center;
                    }

                    .accordion-header.active {
                        display: block !important;
                    }

                    .accordion-content.open {
                        display: block !important;
                    }

                    .accordion-content {
                        display: block !important;
                    }
                }
                
                .printbtn {
                    background-color: #1758ad;
                    color: #ffffff;
                    padding: 10px 15px;
                    border-radius: 10px;
                }
            </style>
        </head>
        <body>
            ${alertMessage}
            
            <main>
                <article class="container">
                    ${sectionToPrint.outerHTML}
                </article>
                
            </main>
            <script>
                const accordionItems = document.querySelectorAll('.accordion-item');
                accordionItems.forEach((accordion) => {
                    const accordionHeader = accordion.querySelector('.accordion-header');
                    const accordionContent = accordion.querySelector('.accordion-content');
                    const accordionApproval = accordion.querySelector('.button-Approval');
    
                    // تفعيل الأكورديونات والمحتوى قبل الطباعة
                    accordionHeader.classList.add('active');
                    accordionContent.classList.add('open');
                    accordion.classList.add('nontEvent');
                    accordionHeader.classList.add('nontEvent');
                    accordionContent.classList.add('nontEvent');
                    accordionApproval.style.display = "none";
                });
            </script>
            <!-- bootstrap -->
            <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
            <script src="../../../assets/js/all.min.js"></script>

            <!-- FullCalendar JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            
            <!-- custom javaScript -->
            <script src="../../../assets/js/KPI.js"></script>
            <script src="../../../assets/js/LeaveRequests.js"></script>
            <script src="../../../assets/js/ManageRequests.js"></script>
            <script src="../../../assets/js/Personal_Certificate.js"></script>
            <script src="../../../assets/js/dashboard.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        </html>
    `);

    // تأكد من أن المحتوى تم تحميله تمامًا قبل الطباعة
    printWindow.document.close();




    // const checkContentLoaded = setInterval(() => {
    //     if (printWindow.document.readyState === 'complete') {
    //         clearInterval(checkContentLoaded);
    //         setTimeout(() => {
    //             printWindow.focus();  // تأكد من أن نافذة الطباعة مفتوحة ومركزة
    //             printWindow.print();   // بدء الطباعة
    //         }, 500);
    //     }
    // }, 100);
});
