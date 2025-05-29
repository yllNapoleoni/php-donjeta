const fadeElements = document.querySelectorAll('#features .col, section.py-5 .col-lg-4');

  function checkVisibility() {
    const triggerBottom = window.innerHeight * 0.9;
    fadeElements.forEach(el => {
      const top = el.getBoundingClientRect().top;
      if (top < triggerBottom) {
        el.classList.add('fade-in');
      }
    });
  }
  window.addEventListener('scroll', checkVisibility);
  window.addEventListener('load', checkVisibility);



  document.addEventListener("DOMContentLoaded", function () {
    

    // Dark Mode Toggle
    const toggleBtn = document.getElementById("darkModeToggle");

    function setDarkMode(enabled) {
      if (enabled) {
        document.body.classList.add("dark-mode");
        toggleBtn.textContent = "☀️ Light Mode";
        localStorage.setItem("darkMode", "enabled");
      } else {
        document.body.classList.remove("dark-mode");
        toggleBtn.textContent = "🌙 Dark Mode";
        localStorage.setItem("darkMode", "disabled");
      }
    }

    // Load saved preference
    if (localStorage.getItem("darkMode") === "enabled") {
      setDarkMode(true);
    }

    toggleBtn.addEventListener("click", () => {
      const isDark = document.body.classList.contains("dark-mode");
      setDarkMode(!isDark);
    });
  });




 

    



document.addEventListener("DOMContentLoaded", function () {
    const faders = document.querySelectorAll(".fade-in");

    const appearOnScroll = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1
        }
    );

    faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });
});




function filterFAQs() {
  const input = document.getElementById('faqSearch');
  const filter = input.value.toLowerCase();
  const accordions = document.querySelectorAll('.accordion .accordion-item');
  
  accordions.forEach(item => {
    const question = item.querySelector('.accordion-button').textContent.toLowerCase();
    if(question.includes(filter)) {
      item.style.display = "";
    } else {
      item.style.display = "none";
    }
  });
}