const options = document.querySelector(".options");
const optionsInsideContainer = document.querySelector(".approvalOptionsinside");
const approvalOptionsoutside = document.querySelector(".approvalOptionsoutside");

options.addEventListener("click", (event) => {
    const selectedOption = event.target.closest("label");
    if (selectedOption) {
        document.querySelectorAll(".options label").forEach((label) => {
            label.classList.remove("active");
        });
        selectedOption.classList.add("active");
        if (selectedOption.textContent.trim() === "Annual Leave") {
            optionsInsideContainer.classList.add("active");
        } else {
            approvalOptionsoutside.classList.remove("active");
            optionsInsideContainer.classList.remove("active");
        }
    }
});

const Outside = document.querySelector("#Outside");
const Inside = document.querySelector("#Inside");
Outside.addEventListener("click" ,()=>{
    approvalOptionsoutside.classList.add("active")
})
Inside.addEventListener("click" ,()=>{
    approvalOptionsoutside.classList.remove("active")
})
const optionsInside = document.querySelector(".options.inside");

optionsInside.addEventListener("click", (event) => {
    const selectedOption = event.target.closest("label");
    if (selectedOption) {
        document.querySelectorAll(".options.inside label").forEach((label) => {
            label.classList.remove("active");
        });
        selectedOption.classList.add("active");
    }
});

const optionsOutside = document.querySelector(".options.outside");

optionsOutside.addEventListener("click", (event) => {
    const selectedOption = event.target.closest("label");
    if (selectedOption) {
        document.querySelectorAll(".options.outside label").forEach((label) => {
            label.classList.remove("active");
        });
        selectedOption.classList.add("active");
    }
});

const addIcon = document.querySelector(".titleAccordion .icon.plus"); 
const approvalGroup = document.querySelector(".HandOvergroup");

// حدث عند النقر على أيقونة "plus" لإضافة مجموعة جديدة
addIcon.addEventListener("click", () => {
    const approvalSections = document.querySelectorAll(".approval-section");
    if (approvalSections.length > 0 || approvalGroup) {
    
        console.log("clicked")
                const newApprovalSectionHTML = `
                    <div class="approval-section active approvalSection">
                        <div class="select-approval flex-row d-flex justify-content-between align-items-center">
                            <div class="search w90 me-0 mt-0">
                                <input type="text" placeholder="Search for employee">
                                <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <div class="icon trash">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>
                `;
                approvalGroup.insertAdjacentHTML('beforeend', newApprovalSectionHTML);
        
                const newTrashIcon = approvalGroup.querySelector(".approval-section:last-child .icon.trash");
                newTrashIcon.addEventListener("click", (event) => {
                    console.log("clicked one")
    
                    if (approvalGroup.querySelectorAll(".approval-section").length > 1) {
                        const sectionToRemove = event.target.closest(".approval-section");
                        console.log("clicked two")
    
                        if (sectionToRemove) sectionToRemove.remove();
                    }
                });
    }
});

const confirm = document.querySelector("#confirm");
const approvePopup = document.querySelector("#approve-popup");
const boxConfirmSubmit = document.querySelector(".boxConfirmSubmit");
const boxConfirmSubmitbtn = document.querySelector(".btnSubmit");

confirm.addEventListener(("click") , ()=>{
    boxConfirmSubmit.classList.toggle("active");
})

boxConfirmSubmitbtn.addEventListener(("click") , ()=>{
    approvePopup.classList.toggle("hidden")
})

