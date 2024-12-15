const ForEmployeeContent = document.querySelector(".ForEmployeeContent");
const ForEmployeeArrow = document.querySelector("#ForEmployeeArrow");
const ForEmployeeArrowBtn = document.querySelector("#ForEmployeeArrowBtn");
const FirstApprovalReview = document.querySelector(".FirstApprovalReview");
const FirstApprovalReviewContent = document.querySelector(".FirstApprovalReviewContent");
const FirstApprovalReviewArrow = document.querySelector("#FirstApprovalReviewArrow");
const FirstApprovalReviewArrowBtn = document.querySelector("#FirstApprovalReviewArrowBtn");
const SecondApprovalReview = document.querySelector(".SecondApprovalReview");
const SecondApprovalReviewContent = document.querySelector(".SecondApprovalReviewContent");
const SecondApprovalReviewArrow = document.querySelector("#SecondApprovalReviewArrow");
const SecondApprovalReviewArrowBtn = document.querySelector("#SecondApprovalReviewArrowBtn");
const buttonForFirstApproval = document.querySelector(".buttonForFirstApproval");

ForEmployeeArrowBtn.addEventListener("click", () => {
    ForEmployeeContent.classList.toggle("active");
    ForEmployeeArrow.classList.toggle("active");
    FirstApprovalReview.classList.toggle("upMargin")

});
FirstApprovalReviewArrowBtn.addEventListener("click", () => {
    FirstApprovalReviewContent.classList.toggle("active");
    FirstApprovalReviewArrow.classList.toggle("active");
    SecondApprovalReview.classList.toggle("upMarginButton")
});
SecondApprovalReviewArrowBtn.addEventListener(("click"), () =>{
    SecondApprovalReviewContent.classList.toggle("active");
    SecondApprovalReviewArrow.classList.toggle("active");
    buttonForFirstApproval.classList.toggle("upMarginButton");
})