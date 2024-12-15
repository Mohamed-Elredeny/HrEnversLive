const buttonForEmployee = document.querySelector(".buttonForEmployee");
const ForEmployeeContent = document.querySelector(".ForEmployeeContent");
const FirstApprovalReview = document.querySelector(".FirstApprovalReview");
const ForEmployeeArrow = document.querySelector("#ForEmployeeArrow");
const ForEmployeeArrowBtn = document.querySelector("#ForEmployeeArrowBtn");
const FirstApprovalReviewContent = document.querySelector(".FirstApprovalReviewContent");
const FirstApprovalReviewArrow = document.querySelector("#FirstApprovalReviewArrow");
const FirstApprovalReviewArrowBtn = document.querySelector("#FirstApprovalReviewArrowBtn");
const buttonForFirstApproval = document.querySelector(".buttonForFirstApproval");
const btnTableRowReview = document.querySelectorAll(".btnTableRowReview");
const boxReviewTable = document.querySelector(".boxReviewTable");
const overlayBoxForEmployee = document.querySelector(".overlayBoxForEmployee");

btnTableRowReview.forEach((btn)=>{
    btn.addEventListener("click" ,()=>{
        boxReviewTable.classList.toggle("active");
        overlayBoxForEmployee.classList.toggle("active");
    })
})
ForEmployeeArrowBtn.addEventListener("click", () => {
    ForEmployeeContent.classList.toggle("active");
    ForEmployeeArrow.classList.toggle("active");
    FirstApprovalReview.classList.toggle("upMargin")
    FirstApprovalReviewContent.classList.toggle("upMargin")
});
FirstApprovalReviewArrowBtn.addEventListener("click", () => {
    FirstApprovalReviewContent.classList.toggle("active");
    FirstApprovalReviewArrow.classList.toggle("active");
    buttonForFirstApproval.classList.toggle("upMarginOnMargin");
});

const btnSave = document.querySelector("#btnSave");
const btnReturn = document.querySelector(".btnReturn");
const boxReturnDanFirst = document.querySelector(".boxReturnDanFirst");
const boxSaveAsDraft = document.querySelector(".boxSaveAsDraft");
const boxReviewTure = document.querySelector(".boxReviewTure");
const boxReviewfalse = document.querySelector(".boxReviewfalse");


btnSave.addEventListener("click", () => {
    overlayBoxForEmployee.classList.add("active");
    boxSaveAsDraft.classList.add("active"); 
});
btnReturn.addEventListener("click", () => {
    overlayBoxForEmployee.classList.add("active");
    boxReturnDanFirst.classList.add("active"); 
});

overlayBoxForEmployee.addEventListener("click", () => {
    overlayBoxForEmployee.classList.remove("active");
    boxReviewTure.classList.remove("active");
    boxReviewfalse.classList.remove("active");
    boxSaveAsDraft.classList.remove("active");
    boxReturnDanFirst.classList.remove("active");
    boxReviewTable.classList.remove("active");
});


const FirstReturnDan = document.querySelectorAll(".FirstReturnDan input");
const BtnFirstReturn = document.querySelector(".BtnFirstReturn");

FirstReturnDan.forEach((input)=>{
    input.addEventListener("change", ()=>{
        
        const checkedCount = Array.from(FirstReturnDan).filter(input => input.checked).length;
        
        if (checkedCount >= 1) {
            BtnFirstReturn.classList.add("active")
        } else{
            BtnFirstReturn.classList.remove("active")
        }
    })
})




const addRowTablethird = document.querySelector('#addRowTablethird');
const thirdSectionBody = document.getElementById('thirdSectionBody');

let rowCountthird = 3; // تأكد من أن هذا يعكس عدد الصفوف الموجودة

function toggleAddRowButtonThird() {
    if (rowCountthird >= 5) {
        addRowTablethird.style.display = 'none';
    } else {
        addRowTablethird.style.display = 'block';
    }
}
addRowTablethird.addEventListener('click', () => {
    if (rowCountthird < 5) {
        rowCountthird++;
        const newRowthird = document.createElement('tr');
        newRowthird.innerHTML = `
            <td><textarea required placeholder="type Here" name="TypeOfTraining" id="TypeOfTrainingthird${rowCountthird}"></textarea></td>
            <td><textarea required  placeholder="type Here" name="Description" id="Descriptionthird${rowCountthird}"></textarea></td>
            <td><textarea required  placeholder="type Here" name="Level" id="Levelthird${rowCountthird}"></textarea></td>
            <td><textarea required  placeholder="type Here" name="TargetDate" id="TargetDate${rowCountthird}third"></textarea></td>
            <td><textarea required  placeholder="type Here" name="CostOfThe" id="CostOfThe${rowCountthird}third"></textarea></td>
            <td>
                <div class="buttonTableRowReview buttonTableRow d-flex justify-content-center flex-column">
                    <button class="btn btnTableRow" onclick="deleteRowthird(this)">Delete Row</button>
                </div>
            </td>
        `;
        thirdSectionBody.appendChild(newRowthird);

        newRowthird.querySelectorAll('textarea').forEach(textarea => {
            textarea.addEventListener('click', () => openPopup(textarea));
        });
    }
    toggleAddRowButtonThird();
});

function deleteRowthird(button) {
    const row = button.closest('tr');
    const rowIndex = row.cells[0].innerText; // الحصول على رقم الصف
    
    if (rowCountthird > 3){
        Swal.fire({
            title: 'Are you sure?',
            text: `Do you really want to delete row ${rowIndex}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                row.remove(); // حذف الصف
                rowCountthird--;
                toggleAddRowButtonThird();
                Swal.fire('Deleted!', 'Your row has been deleted.', 'success');
            }
        });
    } else{
        Swal.fire({
            title: 'It is not Possible',
            text: `Minimum number of rows: 3`,
            icon: 'Danger',
            confirmButtonColor: '#f06561',
            confirmButtonText: 'Cancel'
        })
    }
}
const btnReview = document.querySelector("#btnReview");

btnReview.addEventListener("click", () => {
    overlayBoxForEmployee.classList.add("active");

    // تحديث قائمة الـ textarea في كل مرة يتم فيها النقر على الزر
    boxTableSecond = document.querySelectorAll("#second_Section_For_Employee table textarea");
    boxTableThird = document.querySelectorAll("#third_Section_For_Employee table textarea");

    let allFilled = true;

    boxTableSecond.forEach((textarea, index) => {
        if (textarea.value.trim() === "") {
            textarea.style.border = "2px solid #e1322d"; // تغيير الحدود إلى الأحمر
            allFilled = false;
        } else {
            textarea.style.border = "2px solid #0F3464"; 
        }
    });

    boxTableThird.forEach((textarea, index) => {
        if (textarea.value.trim() === "") {
            textarea.style.border = "2px solid #e1322d"; // تغيير الحدود إلى الأحمر
            allFilled = false;
        } else {
            textarea.style.border = "2px solid #0F3464"; 
        }
    });

    if (allFilled) {
        boxReviewTure.classList.add("active");
    } else {
        boxReviewfalse.classList.add("active");
    }
});



const popup = document.getElementById('popup');
const popupTextarea = document.getElementById('popup-textarea');
let activeTextarea = null; // لتحديد أي textarea تم النقر عليها

// فتح الـ popup وتعبئة البيانات
function openPopup(textarea) {
    activeTextarea = textarea; // تخزين الـ textarea الحالية
    popupTextarea.value = textarea.value; // تعبئة الـ popup بالبيانات الموجودة
    popup.style.visibility = 'visible'; // إظهار الـ popup
    popup.style.opacity = '1'; // إظهار الـ popup
    popup.style.zIndex = '1000'; // إظهار الـ popup
}

// إغلاق الـ popup وتحديث القيمة في textarea
function closePopup() {
    if (activeTextarea) {
        activeTextarea.value = popupTextarea.value; // تحديث الـ textarea بالقيمة الجديدة
    }
    popup.style.visibility = 'hidden'; // إخفاء الـ popup
    popup.style.opacity = '0'; // إخفاء الـ popup
    popup.style.zIndex = '-1'; // إخفاء الـ popup
}

// ربط الـ textarea بفتح الـ popup عند النقر
document.querySelectorAll('textarea').forEach(textarea => {
    textarea.addEventListener('click', () => openPopup(textarea));
});

// إغلاق الـ popup عند النقر خارج المحتوى
popup.addEventListener('click', (event) => {
    if (event.target === popup) {
        closePopup();
    }
});

// زر الحفظ داخل الـ popup
document.getElementById('saveButton').addEventListener('click', () => {
    if (activeTextarea) {
        activeTextarea.value = popupTextarea.value; // تأكيد نقل المحتوى من الـ popup إلى الـ textarea
    }
    closePopup(); // إغلاق الـ popup بعد الحفظ
});