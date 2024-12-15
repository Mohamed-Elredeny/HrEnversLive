const itemTypes = document.querySelectorAll(".item_type");
const BtnSubmit = document.querySelector(".submitCertificate");
const itemEmbassy = document.querySelector(".item_embassy");
const embassyName = document.querySelector(".embassy_name");
const RemarkCertificate = document.querySelector(".RemarkCertificate");

itemTypes.forEach((itemType) => {
    itemType.addEventListener("click", () => {
        itemTypes.forEach((item) => {
            item.classList.remove("active");
            item.querySelector(".image img").classList.add("gray_Evaluated");
        });
        itemType.classList.add("active");
        itemType.querySelector(".image img").classList.remove("gray_Evaluated");
        BtnSubmit.classList.add("active");
    });
});


