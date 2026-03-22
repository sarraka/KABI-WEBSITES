$(function () {
  function setupDrawer(triggerSelector, drawerSelector) {
    const $trigger = $(triggerSelector);
    const $drawer = $trigger.next(drawerSelector);

    $drawer.hide();

    $trigger.on('click', function (e) {
      e.preventDefault();
      $drawer.stop(true, true).slideToggle(200);
    });

    $(document).on('click', function (e) {
      if (
        !$trigger.is(e.target) &&
        !$drawer.is(e.target) &&
        $drawer.has(e.target).length === 0
      ) {
        $drawer.slideUp(200);
      }
    });
  }

  setupDrawer('.drawer-trigger', '.drawer');
  setupDrawer('.drawer-trigger2', '.drawer2');
  setupDrawer('.drawer-trigger3', '.drawer3');
});


// aos
AOS.init();

//  slider
$(document).ready(function () {
  $(".carousel-container").each(function () {
    const $carousel = $(this);
    let currentIndex = 0;
    const $slides = $carousel.find(".carousel-slide");
    const $dots = $carousel.find(".dot");
    const $next = $carousel.find(".next");
    const $prev = $carousel.find(".prev");

    function showSlide(index) {
      $slides.removeClass("active").eq(index).addClass("active");
      $dots.removeClass("active").eq(index).addClass("active");
    }

    $next.click(function () {
      currentIndex = (currentIndex + 1) % $slides.length;
      showSlide(currentIndex);
    });

    $prev.click(function () {
      currentIndex = (currentIndex - 1 + $slides.length) % $slides.length;
      showSlide(currentIndex);
    });

    $dots.click(function () {
      currentIndex = $(this).index();
      showSlide(currentIndex);
    });

    // Optional: ensure first slide is visible initially
    showSlide(currentIndex);
  });
});


// number animation
const counters = document.querySelectorAll(".counter");

const animateCounter = (counter) => {
  const target = +counter.getAttribute("data-target");
  const duration = 1000;
  const startTime = performance.now();

  const update = (currentTime) => {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const currentValue = Math.floor(progress * target);
    counter.innerText = `${currentValue}%`;

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  };

  requestAnimationFrame(update);
};

const observer = new IntersectionObserver(
  (entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        obs.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.6,
  }
);

counters.forEach((counter) => {
  observer.observe(counter);
});


// swiper slider
const swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 42,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});


// FAQ
// Tabs functionality
const tabs = document.querySelectorAll('.tab-button');
const sections = document.querySelectorAll('.faq-section');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    // Handle tab active state
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');

    // Show correct section
    sections.forEach(section => section.classList.remove('active'));
    document.getElementById(tab.dataset.tab).classList.add('active');
  });
});

// Only one <details> open at a time per tab
document.querySelectorAll('.faq-section').forEach(section => {
  const detailsList = section.querySelectorAll('details');

  detailsList.forEach(detail => {
    detail.addEventListener('toggle', () => {
      if (detail.open) {
        detailsList.forEach(d => {
          if (d !== detail) d.removeAttribute('open');
        });
      }
    });
  });
});

// product slder
const slides = document.querySelectorAll(".slide");
const nextButtons = document.querySelectorAll(".next");
const prevButtons = document.querySelectorAll(".prev");
let currentIndex = 0;

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove("active"));
  slides[index].classList.add("active");
}

nextButtons.forEach(btn => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  });
});

prevButtons.forEach(btn => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  });
});

// logo slider Toggle animation direction based on page direction 
const track = document.getElementById('slider-track');
if (document.dir === 'rtl') {
  track.classList.add('rtl');
}

// load number§
// Animate number only once when visible
// Animate number only once when visible
const statNumbers = document.querySelectorAll('.stat-number');

const animateCount = (el) => {
  const target = +el.getAttribute('data-target');
  const speed = 50;
  const update = () => {
    const current = +el.innerText.replace(/,/g, '');
    const increment = Math.ceil(target / speed);
    if (current < target) {
      el.innerText = Math.min(current + increment, target).toLocaleString();
      requestAnimationFrame(update);
    } else {
      el.innerText = target.toLocaleString();
    }
  };
  update();
};

// Use IntersectionObserver to trigger animation on scroll


document.addEventListener("DOMContentLoaded", () => {
  const statNumbers = document.querySelectorAll(".stat-number");

  const animateCount = (el) => {
    const target = parseInt(el.getAttribute("data-target"), 10);
    const duration = 2000; // duration in ms
    let startTime = null;

    const step = (timestamp) => {
      if (!startTime) startTime = timestamp;
      const progress = timestamp - startTime;
      const current = Math.min(Math.floor((progress / duration) * target), target);
      el.textContent = current.toLocaleString();

      if (current < target) {
        requestAnimationFrame(step);
      }
    };

    requestAnimationFrame(step);
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCount(entry.target);
        obs.unobserve(entry.target); // stop observing once triggered
      }
    });
  }, { threshold: 0.5 });

  statNumbers.forEach(num => observer.observe(num));
});



// home
