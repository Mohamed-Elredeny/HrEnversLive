function setProgress(circle, value) {
    const radius = circle.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;

    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = circumference;

    const offset = circumference - (value / 1000) * circumference;
    circle.style.strokeDashoffset = offset;
}

document.addEventListener('DOMContentLoaded', function () {
    // Set up progress circles
    const circles = document.querySelectorAll('.progress-ring__circle');
    const values = document.querySelectorAll('.number_applied');

    values.forEach((valueElement, index) => {
        const value = parseInt(valueElement.getAttribute('data-value'));
        setProgress(circles[index], value);
    });

    // Handle statistics section
    const statistics = document.querySelector(".statistics p");
    const statisticsContent = document.querySelector(".statistics_Content");

    // Check if the statistics element exists before adding the event listener
    if (statistics) {
        statistics.addEventListener("click", () => {
            if (statistics.textContent === "Available Leaves") {
                statistics.textContent = "Hide Leaves";
            } else {
                statistics.textContent = "Available Leaves";
            }
            if (statisticsContent) {
                statisticsContent.classList.toggle("active");
                statisticsContent.classList.toggle("activeMarg");
            }
        });
    } else {
        console.log("Statistics element not found in the DOM.");
    }

    // Handle other sections (info, company_section, filter_section, table_section)
    const info = document.querySelector(".info");
    const company_section = document.querySelector(".company_section");
    const filter_section = document.querySelector(".filter_section");
    const table_section = document.querySelector(".table_section");

    // Example: Add event listeners or logic for other sections if needed
    if (info) {
        console.log("Info section found:", info);
    }
    if (company_section) {
        console.log("Company section found:", company_section);
    }
    if (filter_section) {
        console.log("Filter section found:", filter_section);
    }
    if (table_section) {
        console.log("Table section found:", table_section);
    }
});
