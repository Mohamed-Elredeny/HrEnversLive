// Sidebar Logic
const sideBar = document.getElementById("sideBar");
const openslider = document.getElementById("openslider");
const mainContent = document.getElementById("mainContent");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");
const overlayOpenSlider = document.getElementById("overlayOpenSlider");
const settingAccount = document.querySelector(".settingAccount");

function openSidebar() {
    if (sideBar && openslider && mainContent && overlayOpenSlider && closeBtn && openBtn) {
        sideBar.classList.add("open");
        openslider.classList.add("open");
        mainContent.classList.add("open");
        overlayOpenSlider.classList.add("open");
        closeBtn.classList.add("active");
        openBtn.classList.remove("active");
    }
}

function closeSidebar() {
    if (sideBar && openslider && mainContent && overlayOpenSlider && closeBtn && openBtn) {
        sideBar.classList.remove("open");
        openslider.classList.remove("open");
        mainContent.classList.remove("open");
        overlayOpenSlider.classList.remove("open");
        closeBtn.classList.remove("active");
        openBtn.classList.add("active");
    }
}

function openEdit() {
    if (settingAccount) {
        settingAccount.classList.toggle("open");
    }
}

function backStep() {
    window.history.back();
}

// Sidebar Links
const sidebarLinks = document.querySelectorAll("#sideBar ul li");
const sections = {
    home: document.querySelector("#home"),
    employee: document.querySelector("#employee"),
    hrStaff: document.querySelector("#hrStaff"),
    settings: document.querySelector("#settings"),
    calendar: document.querySelector("#calendar"),
};
const lights = {
    home: document.querySelector(".home-light"),
    employee: document.querySelector(".employee-light"),
    hrStaff: document.querySelector(".hrStaff-light"),
    settings: document.querySelector(".settings-light"),
    calendar: document.querySelector(".calendar-light"),
};
const darks = {
    home: document.querySelector(".home-dark"),
    employee: document.querySelector(".employee-dark"),
    hrStaff: document.querySelector(".hrStaff-dark"),
    settings: document.querySelector(".settings-dark"),
    calendar: document.querySelector(".calendar-dark"),
};

function removeAllOpenClasses() {
    sidebarLinks.forEach(link => link.classList.remove("open"));
    Object.values(sections).forEach(section => section && section.classList.remove("open"));
    Object.values(lights).forEach(light => light && light.classList.remove("active"));
}

if (sidebarLinks) {
    sidebarLinks.forEach((link, index) => {
        link.addEventListener("click", function () {
            removeAllOpenClasses();
            openSidebar();
            this.classList.add("open");
            const keys = Object.keys(sections);
            if (keys[index]) {
                const section = sections[keys[index]];
                const light = lights[keys[index]];
                const dark = darks[keys[index]];
                if (section && light && dark) {
                    section.classList.add("open");
                    light.classList.add("active");
                    dark.classList.remove("active");
                }
            }
        });
    });
}

// Slider Logic
let currentIndex = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

function showSlide(index) {
    if (slides.length === 0 || dots.length === 0) return;
    if (index >= slides.length) currentIndex = 0;
    if (index < 0) currentIndex = slides.length - 1;

    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${-100 * currentIndex}%)`;
    });

    dots.forEach(dot => dot.classList.remove("active"));
    dots[currentIndex].classList.add("active");
}

function nextSlide() {
    currentIndex++;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex--;
    showSlide(currentIndex);
}

function currentSlide(index) {
    currentIndex = index - 1;
    showSlide(currentIndex);
}

document.addEventListener("DOMContentLoaded", () => {
    showSlide(currentIndex);
});

// Calendar Logic
const overlayEvent = document.getElementById("overlayEvent");
const modalAddEvent = document.getElementById("modalAddEvent");

function closeEvent() {
    if (modalAddEvent && overlayEvent) {
        modalAddEvent.classList.remove("open");
        overlayEvent.classList.remove("open");
    }
}

function addEventBtn() {
    if (modalAddEvent && overlayEvent) {
        modalAddEvent.classList.add("open");
        overlayEvent.classList.add("open");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const calendarEl = document.getElementById("fullCalendar");
    if (!calendarEl) return;

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        events: [
            { title: "Event 1", start: "2024-09-25", description: "This is a cool event" },
            { title: "Event 2", start: "2024-09-27", end: "2024-09-29", description: "This is a multi-day event" },
        ],
        headerToolbar: {
            start: "prev today next",
            center: "title",
            end: "dayGridMonth,timeGridWeek,timeGridDay",
        },
        views: {
            dayGridMonth: { buttonText: "Month" },
            timeGridWeek: { buttonText: "Week" },
            timeGridDay: { buttonText: "Day" },
        },
        eventClick: function (info) {
            alert(`Event: ${info.event.title}\nDescription: ${info.event.extendedProps.description}`);
        },
    });

    calendar.render();

    const submitEventButton = document.getElementById("submit-event-btn");
    if (submitEventButton) {
        submitEventButton.addEventListener("click", function () {
            const eventTitle = document.getElementById("eventTitle");
            const eventDetails = document.getElementById("eventDetails");
            const eventDate = document.getElementById("eventDate");
            const labelTitle = document.getElementById("labelTitle");
            const labelDetails = document.getElementById("labelDetails");
            const labelDate = document.getElementById("labelDate");

            const isValid =
                eventTitle?.value &&
                eventDetails?.value &&
                eventDate?.value &&
                [labelTitle, labelDetails, labelDate].every(label => label);

            if (isValid) {
                calendar.addEvent({
                    title: eventTitle.value,
                    start: eventDate.value,
                    allDay: true,
                    extendedProps: { description: eventDetails.value },
                });

                modalAddEvent.classList.remove("open");
                overlayEvent.classList.remove("open");

                // Reset form fields
                eventTitle.value = "";
                eventDetails.value = "";
                eventDate.value = "";
            }
        });
    }
});
