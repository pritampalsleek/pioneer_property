"use strict";

/*--
        Header Sticky
    -----------------------------------*/

window.onscroll = function () {
  const left = document.getElementById("header");

  if (left.scrollTop > 50 || self.pageYOffset > 50) {
    left.classList.add("sticky");
  } else {
    left.classList.remove("sticky");
  }
};

/*--
        Menu parent Element Icon
    -----------------------------------*/
const $subMenu = document.querySelectorAll(".sub-menu");
$subMenu.forEach(function (subMenu) {
  const menuExpand = document.createElement("span");
  menuExpand.classList.add("menu-icon");
  // menuExpand.innerHTML = '+'
  subMenu.parentElement.insertBefore(menuExpand, subMenu);
  if (subMenu.classList.contains("mega-menu")) {
    subMenu.classList.remove("mega-menu");
    subMenu.querySelectorAll("ul").forEach(function (ul) {
      ul.classList.add("sub-menu");
      const menuExpand = document.createElement("span");
      menuExpand.classList.add("menu-icon");
      menuExpand.innerHTML = "+";
      ul.parentElement.insertBefore(menuExpand, ul);
    });
  }
});

/*--
        Mobile Menu
    -----------------------------------*/

/* Get Sibling */
const getSiblings = function (elem) {
  const siblings = [];
  let sibling = elem.parentNode.firstChild;
  while (sibling) {
    if (sibling.nodeType === 1 && sibling !== elem) {
      siblings.push(sibling);
    }
    sibling = sibling.nextSibling;
  }
  return siblings;
};

/* Slide Up */
const slideUp = (target, time) => {
  const duration = time ? time : 500;
  target.style.transitionProperty = "height, margin, padding";
  target.style.transitionDuration = duration + "ms";
  target.style.boxSizing = "border-box";
  target.style.height = target.offsetHeight + "px";
  target.offsetHeight;
  target.style.overflow = "hidden";
  target.style.height = 0;
  window.setTimeout(() => {
    target.style.display = "none";
    target.style.removeProperty("height");
    target.style.removeProperty("overflow");
    target.style.removeProperty("transition-duration");
    target.style.removeProperty("transition-property");
  }, duration);
};

/* Slide Down */
const slideDown = (target, time) => {
  const duration = time ? time : 500;
  target.style.removeProperty("display");
  let display = window.getComputedStyle(target).display;
  if (display === "none") display = "block";
  target.style.display = display;
  const height = target.offsetHeight;
  target.style.overflow = "hidden";
  target.style.height = 0;
  target.offsetHeight;
  target.style.boxSizing = "border-box";
  target.style.transitionProperty = "height, margin, padding";
  target.style.transitionDuration = duration + "ms";
  target.style.height = height + "px";
  window.setTimeout(() => {
    target.style.removeProperty("height");
    target.style.removeProperty("overflow");
    target.style.removeProperty("transition-duration");
    target.style.removeProperty("transition-property");
  }, duration);
};

/* Slide Toggle */
const slideToggle = (target, time) => {
  const duration = time ? time : 500;
  if (window.getComputedStyle(target).display === "none") {
    return slideDown(target, duration);
  } else {
    return slideUp(target, duration);
  }
};

/*--
		Offcanvas/Collapseable Menu
	-----------------------------------*/
const offCanvasMenu = function (selector) {
  const $offCanvasNav = document.querySelector(selector),
    $subMenu = $offCanvasNav.querySelectorAll(".sub-menu");
  $subMenu.forEach(function (subMenu) {
    const menuExpand = document.createElement("span");
    menuExpand.classList.add("menu-expand");
    // menuExpand.innerHTML = '+'
    subMenu.parentElement.insertBefore(menuExpand, subMenu);
    if (subMenu.classList.contains("mega-menu")) {
      subMenu.classList.remove("mega-menu");
      subMenu.querySelectorAll("ul").forEach(function (ul) {
        ul.classList.add("sub-menu");
        const menuExpand = document.createElement("span");
        menuExpand.classList.add("menu-expand");
        menuExpand.innerHTML = "+";
        ul.parentElement.insertBefore(menuExpand, ul);
      });
    }
  });

  $offCanvasNav.querySelectorAll(".menu-expand").forEach(function (item) {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = this.parentElement;
      if (parent.classList.contains("active")) {
        parent.classList.remove("active");
        parent.querySelectorAll(".sub-menu").forEach(function (subMenu) {
          subMenu.parentElement.classList.remove("active");
          slideUp(subMenu);
        });
      } else {
        parent.classList.add("active");
        slideDown(this.nextElementSibling);
        getSiblings(parent).forEach(function (item) {
          item.classList.remove("active");
          item.querySelectorAll(".sub-menu").forEach(function (subMenu) {
            subMenu.parentElement.classList.remove("active");
            slideUp(subMenu);
          });
        });
      }
    });
  });
};
offCanvasMenu(".offcanvas-menu");

/*--
        AOS
    -----------------------------------*/
AOS.init();

// niced select

$(document).ready(function () {
  $(".nice_select").niceSelect();
});

var swiper = new Swiper(".cate_slider", {
  loop: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".next_cate",
    prevEl: ".prev_cate",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
  },
});

var swiper = new Swiper(".trend_slider", {
  loop: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".next_trend",
    prevEl: ".prev_trend",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
  },
});

var swiper = new Swiper(".blog_slider", {
  loop: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".next_blog",
    prevEl: ".prev_blog",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");
  const duration = 2000;

  const animateCounters = (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        counters.forEach((counter) => {
          const target = +counter.getAttribute("data-target");
          const start = 0;
          const range = target - start;
          const startTime = performance.now();

          const updateCount = () => {
            const currentTime = performance.now();
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            counter.innerText = Math.floor(progress * range).toLocaleString();

            if (progress < 1) {
              requestAnimationFrame(updateCount);
            } else {
              counter.innerText = target.toLocaleString();
            }
          };

          updateCount();
        });

        // Unobserve after animation is done
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(animateCounters, {
    threshold: 0.1,
  });

  counters.forEach((counter) => {
    observer.observe(counter);
  });
});

var swiper = new Swiper(".mySwiper_hero", {
  autoplay: { delay: 2500 },
  loop: true,
  navigation: {
    nextEl: ".hero_swiper-button-next",
    prevEl: ".hero_swiper-button-prev",
  },
});

// for filter modal

$(document).ready(function () {
  $("#more_option").click(function () {
    $(".more_filter_card").fadeIn(300);
    $(".backdrop").fadeIn(300);
  });

  $("#backdrop").click(function () {
    $(".more_filter_card").fadeOut(300);
    $(".backdrop").fadeOut(300);
  });
});

$(document).ready(function () {
  $("#budget_box").click(function () {
    $(".slider_box").slideToggle();
  });


  $(document).click(function (event) {
    if (!$(event.target).closest(".slider_box, #budget_box").length) {
      $(".slider_box").slideUp();
    }
  });
});

/* ==============================================================================
                              Loan Calculator
============================================================================== */
document.addEventListener("DOMContentLoaded", () => {
  const loanAmountInput = document.getElementById("loan-amount");
  const downPaymentInput = document.getElementById("down-payment");
  const interestRateInput = document.getElementById("interest-rate");
  const loanTermInput = document.getElementById("loan-term");

  const loanAmountValue = document.getElementById("loan-amount-value");
  const downPaymentValue = document.getElementById("down-payment-value");
  const interestRateValue = document.getElementById("interest-rate-value");
  const loanTermValue = document.getElementById("loan-term-value");

  function updateValue(input, valueElement) {
    valueElement.innerText = input.value;
  }

  loanAmountInput.addEventListener("input", () =>
    updateValue(loanAmountInput, loanAmountValue)
  );
  downPaymentInput.addEventListener("input", () =>
    updateValue(downPaymentInput, downPaymentValue)
  );
  interestRateInput.addEventListener("input", () =>
    updateValue(interestRateInput, interestRateValue)
  );
  loanTermInput.addEventListener("input", () =>
    updateValue(loanTermInput, loanTermValue)
  );

  updateValue(loanAmountInput, loanAmountValue);
  updateValue(downPaymentInput, downPaymentValue);
  updateValue(interestRateInput, interestRateValue);
  updateValue(loanTermInput, loanTermValue);
});

function calculateEMI() {
  const loanAmount = parseFloat(document.getElementById("loan-amount").value);
  const downPayment = parseFloat(document.getElementById("down-payment").value);
  const interestRate = parseFloat(
    document.getElementById("interest-rate").value
  );
  const loanTerm = parseInt(document.getElementById("loan-term").value);

  const principal = loanAmount - downPayment;
  const monthlyInterestRate = interestRate / 100 / 12;
  const numberOfPayments = loanTerm * 12;

  const emi =
    (principal *
      monthlyInterestRate *
      Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
    (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);
  const totalAmountPayable = emi * numberOfPayments;
  const totalInterestPayable = totalAmountPayable - principal;

  document.getElementById("emi").innerText = emi.toFixed(2);
  document.getElementById("total-interest").innerText =
    totalInterestPayable.toFixed(2);
  document.getElementById("total-amount").innerText =
    totalAmountPayable.toFixed(2);

  updateChart(principal, totalInterestPayable);
}

function updateChart(principal, totalInterest) {
  const ctx = document.getElementById("emiChart").getContext("2d");
  if (window.myChart) {
    window.myChart.destroy();
  }
  window.myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: ["Principal", "Total Interest"],
      datasets: [
        {
          data: [principal, totalInterest],
          backgroundColor: ["#23446b", "#eb1b23"],
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "top",
        },
        tooltip: {
          callbacks: {
            label: function (context) {
              let label = context.label || "";
              if (label) {
                label += ": ";
              }
              label += new Intl.NumberFormat("en-IN", {
                style: "currency",
                currency: "INR",
              }).format(context.raw);
              return label;
            },
          },
        },
      },
    },
  });
}
