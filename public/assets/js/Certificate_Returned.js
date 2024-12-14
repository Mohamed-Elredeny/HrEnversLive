const btnCertificateReasons = document.querySelector(".btnCertificateReasons");
const overlayCertificate = document.querySelector(".overlayCertificate");
const boxCertificateReasons = document.querySelector(".boxCertificateReasons");

btnCertificateReasons.addEventListener("click", () => {
    overlayCertificate.classList.toggle("active");
    boxCertificateReasons.classList.toggle("active");
});

overlayCertificate.addEventListener("click", () => {
    overlayCertificate.classList.remove("active");
    boxCertificateReasons.classList.remove("active");
});
