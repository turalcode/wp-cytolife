"use strict";

document.addEventListener("DOMContentLoaded", () => {
  // SWIPER SLIDER

  const swiperProducts = new Swiper(".swiper-products", {
    slidesPerView: 1.1,
    spaceBetween: 10,

    breakpoints: {
      567: {
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1199: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  const swiperCertificate = new Swiper(".swiper-certificate", {
    slidesPerView: 2.2,
    spaceBetween: 10,

    breakpoints: {
      567: {
        spaceBetween: 20,
        slidesPerView: 2.5,
      },
      767: {
        spaceBetween: 20,
        slidesPerView: 3.5,
      },
      991: {
        spaceBetween: 20,
        slidesPerView: 4.5,
      },
    },
  });

  const swiperTabs = new Swiper(".swiper-tabs", {
    slidesPerView: "auto",
    spaceBetween: 5,
  });

  // BURGER AND USER MENU

  document.getElementById("burger-btn").addEventListener("click", function (e) {
    document.getElementById("user-menu-list-mob").classList.remove("visible");
    document.getElementById("nav-mob").classList.toggle("visible");
  });

  document.getElementById("user-menu-btn").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("nav-mob").classList.remove("visible");
    document.getElementById("user-menu-list-mob").classList.toggle("visible");
  });

  // CERTIFICATE

  if (document.getElementById("certificate")) {
    document.getElementById("certificate").addEventListener("click", function (e) {
      if (e.target.classList.contains("certificate-img-js")) {
        openModal(e);
      }
    });
  }
  // MODAL

  document.getElementById("modal").addEventListener("click", function (e) {
    if (e.target.classList.contains("modal-close-js") || e.target.classList.contains("modal-bg-js")) {
      this.classList.remove("visible");

      setTimeout(() => {
        document.body.style.paddingRight = "0px";
        document.body.style.overflow = "initial";
      }, 200);
    }
  });

  // ACCORDION

  if (document.querySelector(".accordion")) {
    document.querySelectorAll(".accordion-panel.active").forEach(function (panel) {
      panel.style.height = `${panel.querySelector(".accordion-hidden").clientHeight}px`;
    });

    document.querySelector(".accordion").addEventListener("click", function (e) {
      if (e.target.classList.contains("accordion-trigger-action")) {
        e.target.parentElement.classList.toggle("active");

        if (e.target.parentElement.classList.contains("active")) {
          e.target.parentElement.nextElementSibling.style.height = `${
            e.target.parentElement.nextElementSibling.querySelector(".accordion-hidden").clientHeight
          }px`;
        } else {
          e.target.parentElement.nextElementSibling.style.height = "0px";
        }
      } else if (e.target.classList.contains("certificate-img-js")) {
        openModal(e);
      }
    });
  }

  // SWITCH

  if (document.querySelector(".switch-js")) {
    document.querySelector(".switch-js").addEventListener("click", function (e) {
      if (e.target.classList.contains("switch-action-js")) {
        document.querySelectorAll(".switch-action-js").forEach(function (btn) {
          btn.classList.remove("active");
        });
        e.target.classList.add("active");

        document.querySelectorAll(".switch-content-js").forEach(function (content) {
          content.classList.remove("active");
        });
        document.querySelector(`.${e.target.dataset.switchContent}`).classList.add("active");
      }
    });
  }

  // FILTER

  if (document.querySelector(".filter-distributors")) {
    const categories = {
      region: "region",
      area: "area",
      city: "city",
      distributor: "distributor",
    };
    const filterClasses = {
      region: "all",
      area: "all",
      city: "all",
      distributor: "all",
    };

    document.querySelector(".filter-distributors").addEventListener("click", function (e) {
      // КЛИК ПО ТАБУ

      if (e.target.classList.contains("filter-dropdown-action")) {
        const listWrapper = e.target.parentElement.querySelector(".filter-dropdown-list-wrapper");

        if (e.target.classList.contains("active")) {
          e.target.classList.remove("active");
          listWrapper.classList.remove("active");
        } else {
          getElementAndRemoveClass(this, ".filter-dropdown-action", "active");
          e.target.classList.add("active");
          getElementAndRemoveClass(this, ".filter-dropdown-list-wrapper", "active");
          listWrapper.classList.add("active");
        }
      }

      // КЛИК ПО ЭЛЕМЕНТУ СПИСКА

      if (e.target.classList.contains("filter-dropdown-list-item")) {
        getElementAndRemoveClass(this, ".filter-dropdown-action", "active");
        getElementAndRemoveClass(this, ".filter-dropdown-list-wrapper", "active");
        getElementAndRemoveClass(e.target.parentElement, ".filter-dropdown-list-item", "active");
        e.target.classList.add("active");
        this.querySelector(`.${e.target.dataset.actionClass}`).textContent = e.target.textContent;

        switch (e.target.dataset.category) {
          case categories.region:
            filterClasses.region = e.target.dataset.filterClass;
            break;
          case categories.area:
            filterClasses.area = e.target.dataset.filterClass;
            break;
          case categories.city:
            filterClasses.city = e.target.dataset.filterClass;
            break;
          case categories.distributor:
            filterClasses.distributor = e.target.dataset.filterClass;
            break;
        }

        this.querySelectorAll(".filter-result-item").forEach(function (li) {
          if (
            (filterClasses.region === "all" || li.classList.contains(filterClasses.region)) &&
            (filterClasses.area === "all" || li.classList.contains(filterClasses.area)) &&
            (filterClasses.city === "all" || li.classList.contains(filterClasses.city)) &&
            (filterClasses.distributor === "all" || li.classList.contains(filterClasses.distributor))
          ) {
            li.style.display = "block";
          } else {
            li.style.display = "none";
          }
        });
      }
    });

    // ПОИСК

    document.querySelector(".filter-distributors").addEventListener("input", function (e) {
      if (e.target.classList.contains("filter-search")) {
        this.querySelector(`.${e.target.dataset.search}`)
          .querySelectorAll(".filter-dropdown-list-item")
          .forEach(function (li) {
            if (li.textContent.trim().toLowerCase().includes(e.target.value.trim().toLowerCase())) {
              li.style.display = "block";
            } else {
              li.style.display = "none";
            }
          });
      }
    });
  }

  // PRODUCT QUANTITY

  if (document.querySelector(".product-quantity-js")) {
    
    document.querySelectorAll(".product-quantity-js").forEach(function (q) {
      q.addEventListener("click", function (e) {
        const input = this.querySelector("input");

        if (e.target.classList.contains("decrement-js")) {
          if (parseInt(input.value) > parseInt(input.min)) {
            input.value = parseInt(input.value) - 1;
          }
        } else if (e.target.classList.contains("increment-js")) {
          if (parseInt(input.value) < parseInt(input.max)) {
            input.value = parseInt(input.value) + 1;
          }
        }
      });
    });
  }

  function openModal(e) {
    document.getElementById("modal-certificate-img").src = e.target.dataset.src;
    document.getElementById("modal").classList.add("visible");
    document.body.style.paddingRight = `${window.innerWidth - document.documentElement.clientWidth}px`;
    document.body.style.overflow = "hidden";
  }

  function getElementAndRemoveClass(parent, elemClass, removeClass) {
    parent.querySelectorAll(elemClass).forEach(function (elem) {
      elem.classList.remove(removeClass);
    });
  }
});
