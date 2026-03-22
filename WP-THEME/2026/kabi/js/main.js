/* =========================
   Drawer Toggle
========================= */
$(function () {
  function setupDrawer(triggerSelector, drawerSelector) {
    const $trigger = $(triggerSelector);
    const $drawer = $trigger.next(drawerSelector);

    if (!$trigger.length || !$drawer.length) return;

    $drawer.hide();

    $trigger.on("click", function (e) {
      e.preventDefault();
      $drawer.stop(true, true).slideToggle(200);
    });

    $(document).on("click", function (e) {
      if (
        !$trigger.is(e.target) &&
        !$drawer.is(e.target) &&
        $drawer.has(e.target).length === 0
      ) {
        $drawer.slideUp(200);
      }
    });
  }

  setupDrawer(".drawer-trigger", ".drawer");
  setupDrawer(".drawer-trigger2", ".drawer2");
  setupDrawer(".drawer-trigger3", ".drawer3");
});

/* =========================
   AOS
========================= */
if (typeof AOS !== "undefined") {
  AOS.init();
}

/* =========================
   Simple Carousel
========================= */
$(document).ready(function () {
  $(".carousel-container").each(function () {
    const $carousel = $(this);
    let currentIndex = 0;

    const $slides = $carousel.find(".carousel-slide");
    const $dots = $carousel.find(".dot");
    const $next = $carousel.find(".next");
    const $prev = $carousel.find(".prev");

    if (!$slides.length) return;

    function showSlide(index) {
      $slides.removeClass("active").eq(index).addClass("active");
      if ($dots.length) $dots.removeClass("active").eq(index).addClass("active");
    }

    $next.off("click").on("click", function () {
      currentIndex = (currentIndex + 1) % $slides.length;
      showSlide(currentIndex);
    });

    $prev.off("click").on("click", function () {
      currentIndex = (currentIndex - 1 + $slides.length) % $slides.length;
      showSlide(currentIndex);
    });

    $dots.off("click").on("click", function () {
      currentIndex = $(this).index();
      showSlide(currentIndex);
    });

    showSlide(currentIndex);
  });
});

/* =========================
   Swiper Slider
========================= */
if (typeof Swiper !== "undefined" && document.querySelector(".mySwiper")) {
  new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 42,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    breakpoints: {
      768: { slidesPerView: 1 },
      1024: { slidesPerView: 4 },
    },
  });
}

/* =========================
   FAQ Tabs + One details open
========================= */
(function () {
  const tabs = document.querySelectorAll(".tab-button");
  const sections = document.querySelectorAll(".faq-section");

  if (tabs.length && sections.length) {
    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        tab.classList.add("active");

        sections.forEach((section) => section.classList.remove("active"));
        const target = document.getElementById(tab.dataset.tab);
        if (target) target.classList.add("active");
      });
    });

    document.querySelectorAll(".faq-section").forEach((section) => {
      const detailsList = section.querySelectorAll("details");

      detailsList.forEach((detail) => {
        detail.addEventListener("toggle", () => {
          if (detail.open) {
            detailsList.forEach((d) => {
              if (d !== detail) d.removeAttribute("open");
            });
          }
        });
      });
    });
  }
})();

/* =========================
   Product Slider
========================= */
(function () {
  const slides = document.querySelectorAll(".product-slider .slide");
  let currentIndex = 0;

  if (!slides.length) return;

  function showSlide(index) {
    slides.forEach((slide) => slide.classList.remove("active"));
    slides[index].classList.add("active");

    const currentSlide = slides[index];
    const nextBtn = currentSlide.querySelector(".next");
    const prevBtn = currentSlide.querySelector(".prev");

    if (nextBtn) {
      nextBtn.onclick = (e) => {
        e.preventDefault();
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
      };
    }

    if (prevBtn) {
      prevBtn.onclick = (e) => {
        e.preventDefault();
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
      };
    }
  }

  showSlide(currentIndex);
})();

/* =========================
   Logo Slider RTL direction
   (FIXED: class selector + robust RTL detection)
========================= */
document.addEventListener("DOMContentLoaded", () => {
  const track = document.querySelector(".logo-slider .slider-track");

  // robust dir detection
  const pageDir =
    document.documentElement.getAttribute("dir") ||
    document.documentElement.dir ||
    document.body.getAttribute("dir") ||
    document.body.dir ||
    "ltr";

  if (track && pageDir.toLowerCase() === "rtl") {
    track.classList.add("rtl");
  }
});

/* =========================
   Percent Counters (on view)
========================= */
(function () {
  function animatePercentCounter(el) {
    if (el.dataset.animated === "1") return;

    const target = parseInt(el.getAttribute("data-target"), 10);
    if (isNaN(target)) return;

    el.dataset.animated = "1";

    const duration = 1200;
    const start = performance.now();

    function step(now) {
      const p = Math.min((now - start) / duration, 1);
      const val = Math.floor(p * target);
      el.textContent = val + "%";
      if (p < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  function isInView(el) {
    const r = el.getBoundingClientRect();
    return r.top < window.innerHeight * 0.85 && r.bottom > 0;
  }

  function run() {
    document.querySelectorAll(".counter").forEach((el) => {
      if (isInView(el)) animatePercentCounter(el);
    });
  }

  window.addEventListener("load", () => {
    run();
    window.addEventListener("scroll", run, { passive: true });
  });

  document.addEventListener("aos:in", run);
})();

/* =========================
   Stat Counters (IntersectionObserver)
========================= */
document.addEventListener("DOMContentLoaded", () => {
  const statNumbers = document.querySelectorAll(".stat-number");
  if (!statNumbers.length) return;

  const animateCount = (el) => {
    const target = parseInt(el.getAttribute("data-target"), 10);
    if (isNaN(target)) return;

    const duration = 2000;
    let startTime = null;

    const step = (timestamp) => {
      if (!startTime) startTime = timestamp;
      const progress = timestamp - startTime;
      const current = Math.min(
        Math.floor((progress / duration) * target),
        target
      );

      el.textContent = current.toLocaleString();

      if (current < target) requestAnimationFrame(step);
    };

    requestAnimationFrame(step);
  };

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  statNumbers.forEach((num) => observer.observe(num));
});

// sroll-head
  window.addEventListener("scroll", function () {
    const header = document.getElementById("site-header");
    header.classList.toggle("scrolled", window.scrollY > 50);
  });

  window.addEventListener("scroll", function () {
    const header = document.getElementById("site-mob-header");
    header.classList.toggle("scrolled", window.scrollY > 50);
  });


