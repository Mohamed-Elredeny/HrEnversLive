
document.addEventListener('DOMContentLoaded', function () {
    const circles = document.querySelectorAll('.progress-ring__circle');
    const values = document.querySelectorAll('.number_applied');
    
    values.forEach((valueElement, index) => {
        const value = parseInt(valueElement.getAttribute('data-value')); 
        setProgress(circles[index], value); 
    });
});
const statistics = document.querySelector(".statistics p");
const statisticsContent = document.querySelector(".statistics_Content");
const info = document.querySelector(".info");
const company_section = document.querySelector(".company_section");
const filter_section = document.querySelector(".filter_section");
const table_section = document.querySelector(".table_section");
statistics.addEventListener(("click") ,()=>{
    if (statistics.textContent === "Show Info Employee") {
        statistics.textContent = "Hide Info Employee";
    } else {
        statistics.textContent = "Show Info Employee";
    }
    statisticsContent.classList.toggle("active");
    statisticsContent.classList.toggle("activeMarg");
})

