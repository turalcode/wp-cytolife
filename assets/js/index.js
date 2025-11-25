"use strict";

if (
  "ontouchstart" in window ||
  (window.DocumentTouch && document instanceof DocumentTouch)
) {
  console.log("this is a touch device");
} else {
  console.log("this is not a touch device");
  document.body.classList.add("no-touch");
}

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
    const navMob = document.getElementById("nav-mob");
    document.getElementById("user-menu-list-mob").classList.remove("visible");
    navMob.classList.toggle("visible");

    if (navMob.classList.contains("visible")) {
      document.querySelectorAll(".user-menu-js").forEach(function (menu) {
        menu.classList.remove("visible");
      });

      document.querySelector(".ajax-s").classList.remove("active");

      document.querySelectorAll(".search-action-js").forEach(function (btn) {
        btn.classList.remove("active");
      });

      setTimeout(() => {
        document.body.style.overflow = "initial";
      }, 200);
    }
  });

  document.querySelectorAll(".user-menu-js").forEach(function (menu) {
    menu.addEventListener("click", function (e) {
      e.preventDefault();
      this.classList.toggle("visible");
      document.getElementById("nav-mob").classList.remove("visible");
      document.querySelector(".ajax-s").classList.remove("active");

      setTimeout(() => {
        document.body.style.overflow = "initial";
        document.body.style.paddingRight = 0;
        document.querySelector(".header").style.paddingRight = 0;
      }, 200);

      document.querySelectorAll(".search-action-js").forEach(function (btn) {
        btn.classList.remove("active");
      });
    });
  });

  // CALLBACK BUTTON

  document.querySelectorAll(".cb-button-js").forEach(function (btn) {
    btn.addEventListener("click", function () {
      openModal('modal-form-cb');
    });
  });

  // WRITE TO US BUTTON

  document.querySelectorAll(".write-button-js").forEach(function (btn) {
    btn.addEventListener("click", function () {
      openModal('modal-form-write');
    });
  });

  // CERTIFICATE

  if (document.getElementById("certificate")) {
    document
      .getElementById("certificate")
      .addEventListener("click", function (e) {
        if (e.target.classList.contains("certificate-img-js")) {
          document.getElementById("modal-certificate-img").src =
            e.target.dataset.src;
          openModal("modal-cert");
        }
      });
  }

  // MODAL

  const scrollWidthInitial = window.innerWidth - document.documentElement.clientWidth;

  document.querySelectorAll(".modal-js").forEach(function (modal) {
    modal.addEventListener("click", function (e) {
      if (
        e.target.classList.contains("modal-close-js") ||
        e.target.classList.contains("modal-bg-js")
      ) {
        this.classList.remove("visible");

        setTimeout(() => {
          document.body.style.paddingRight = "0px";

          if (document.querySelector(".ajax-s").classList.contains('active')) {
            document.body.style.paddingRight = `${scrollWidthInitial}px`;
          }

          if (!document.querySelector(".ajax-s").classList.contains('active')) {
            document.body.style.overflow = "initial";
            document.querySelector(".header").style.paddingRight = 0;
          }
        }, 200);
      }
    });
  });

  // ACCORDION

  if (document.querySelector(".accordion")) {
    document
      .querySelectorAll(".accordion-panel.active")
      .forEach(function (panel) {
        panel.style.height = `${panel.querySelector(".accordion-hidden").clientHeight
          }px`;
      });

    document
      .querySelector(".accordion")
      .addEventListener("click", function (e) {
        if (e.target.classList.contains("accordion-trigger-action")) {
          e.target.parentElement.classList.toggle("active");

          if (e.target.parentElement.classList.contains("active")) {
            e.target.parentElement.nextElementSibling.style.height = `${e.target.parentElement.nextElementSibling.querySelector(
              ".accordion-hidden"
            ).clientHeight
              }px`;
          } else {
            e.target.parentElement.nextElementSibling.style.height = "0px";
          }
        } else if (e.target.classList.contains("certificate-img-js")) {
          document.getElementById("modal-certificate-img").src =
            e.target.dataset.src;
          openModal("modal-cert");
        }
      });
  }

  // SWITCH

  if (document.querySelector(".switch-js")) {
    document
      .querySelector(".switch-js")
      .addEventListener("click", function (e) {
        if (e.target.classList.contains("switch-action-js")) {
          document
            .querySelectorAll(".switch-action-js")
            .forEach(function (btn) {
              btn.classList.remove("active");
            });
          e.target.classList.add("active");

          document
            .querySelectorAll(".switch-content-js")
            .forEach(function (content) {
              content.classList.remove("active");
            });
          document
            .querySelector(`.${e.target.dataset.switchContent}`)
            .classList.add("active");
        }
      });
  }

  // FILTER DISTRIBUTORS

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
    const filterResultItems = document.querySelectorAll(".filter-result-item");
    const filterResultMore = document.querySelector(".filter-result-more");
    const step = 4;
    const limitInitial = 8;
    let limit = limitInitial;

    showFilteredElements(filterResultItems, filterClasses, limit);

    const count = getCountVisibleElements(filterResultItems, filterClasses);

    if (count <= limit) {
      filterResultMore.style.display = "none";
    }

    document
      .querySelector(".filter-distributors")
      .addEventListener("click", function (e) {
        // КЛИК ПО ТАБУ

        if (e.target.classList.contains("filter-dropdown-action")) {
          const listWrapper = e.target.parentElement.querySelector(
            ".filter-dropdown-list-wrapper"
          );

          if (e.target.classList.contains("active")) {
            e.target.classList.remove("active");
            listWrapper.classList.remove("active");
          } else {
            getElementAndRemoveClass(this, ".filter-dropdown-action", "active");
            e.target.classList.add("active");
            getElementAndRemoveClass(
              this,
              ".filter-dropdown-list-wrapper",
              "active"
            );
            listWrapper.classList.add("active");
          }
        }

        // КЛИК ПО ЭЛЕМЕНТУ СПИСКА

        if (e.target.classList.contains("filter-dropdown-list-item")) {
          getElementAndRemoveClass(this, ".filter-dropdown-action", "active");
          getElementAndRemoveClass(
            this,
            ".filter-dropdown-list-wrapper",
            "active"
          );
          getElementAndRemoveClass(
            e.target.parentElement,
            ".filter-dropdown-list-item",
            "active"
          );
          e.target.classList.add("active");
          this.querySelector(`.${e.target.dataset.actionClass}`).textContent =
            e.target.textContent;

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

          limit = limitInitial;

          showFilteredElements(filterResultItems, filterClasses, limit);

          const count = getCountVisibleElements(
            filterResultItems,
            filterClasses
          );

          if (count <= limit) {
            filterResultMore.style.display = "none";
          } else {
            filterResultMore.style.display = "block";
          }
        }

        // КЛИК ПО КНОПКЕ MORE

        if (e.target.classList.contains("filter-result-more")) {
          limit += step;

          showFilteredElements(filterResultItems, filterClasses, limit);

          const count = getCountVisibleElements(
            filterResultItems,
            filterClasses
          );

          if (count <= limit) {
            filterResultMore.style.display = "none";
          }
        }
      });

    // ПОИСК ДИСТРИБЬЮТЕРОВ

    document
      .querySelector(".filter-distributors")
      .addEventListener("input", function (e) {
        if (e.target.classList.contains("filter-search")) {
          this.querySelector(`.${e.target.dataset.search}`)
            .querySelectorAll(".filter-dropdown-list-item")
            .forEach(function (li) {
              if (
                li.textContent
                  .trim()
                  .toLowerCase()
                  .includes(e.target.value.trim().toLowerCase())
              ) {
                li.style.display = "block";
              } else {
                li.style.display = "none";
              }
            });
        }
      });
  }

  // PRODUCT QUANTITY

  if (document.querySelector(".products-js")) {
    document.querySelectorAll(".products-js").forEach(function (q) {
      q.addEventListener("click", function (e) {
        if (e.target.parentElement.classList.contains("product-quantity-js")) {
          e.preventDefault();

          const input = e.target.parentElement.querySelector("input");
          const addToCartBtn = e.target.parentElement.nextElementSibling;

          if (e.target.classList.contains("decrement-js")) {
            if (parseInt(input.value) > parseInt(input.min)) {
              input.value = parseInt(input.value) - 1;

              if (addToCartBtn?.dataset) {
                addToCartBtn.dataset.quantity = input.value;
              }
            }
          } else if (e.target.classList.contains("increment-js")) {
            if (parseInt(input.value)) {
              input.value = parseInt(input.value) + 1;

              if (addToCartBtn?.dataset) {
                addToCartBtn.dataset.quantity = input.value;
              }
            }
          }
        }
      });
    });
  }

  // CATALOG TABS FILTER

  if (document.querySelector(".tabs-filter-js")) {
    const tabsFilter = document.querySelector(".tabs-filter-js");
    const allProducts = document.querySelectorAll(".products-js .all");
    const buttonMore = document.querySelector(".button-more-js");
    const buttonsFilter = document.querySelectorAll(".button-filter-js");
    const step = 3;
    const limitInitial = 3;
    let limit = 3;

    if (allProducts.length < limit) limit = allProducts.length;
    if (allProducts.length <= limit && buttonMore) {
      buttonMore.classList.add("d-none");
    }

    removingOrAddingClasses(allProducts, limit, "d-none");

    tabsFilter.addEventListener("click", function (e) {
      if (e.target.classList.contains("button-filter-js")) {
        if (e.target.classList.contains("active")) return;

        removingOrAddingClasses(buttonsFilter, buttonsFilter.length, "active");

        e.target.classList.add("active");

        removingOrAddingClasses(
          allProducts,
          allProducts.length,
          "d-none",
          false
        );

        const filterProducts = document.querySelectorAll(
          `.products-js .${e.target.dataset.filter}`
        );

        limit = limitInitial;

        if (filterProducts.length < limit) limit = filterProducts.length;

        if (buttonMore) {
          if (filterProducts.length <= limit) {
            buttonMore.classList.add("d-none");
          } else {
            buttonMore.classList.remove("d-none");
          }
        }

        removingOrAddingClasses(filterProducts, limit, "d-none");

        if (buttonMore) {
          buttonMore.dataset.filter = e.target.dataset.filter;
        }
      }
    });

    if (buttonMore) {
      buttonMore.addEventListener("click", function () {
        if (this.dataset.filter) {
          const filterProducts = document.querySelectorAll(
            `.products-js .${this.dataset.filter}`
          );
          limit += step;

          if (filterProducts.length < limit) limit = filterProducts.length;
          if (filterProducts.length <= limit)
            buttonMore.classList.add("d-none");

          removingOrAddingClasses(filterProducts, limit, "d-none");
        } else {
          limit += step;

          if (allProducts.length < limit) limit = allProducts.length;
          if (allProducts.length <= limit) buttonMore.classList.add("d-none");

          removingOrAddingClasses(allProducts, limit, "d-none");
        }
      });
    }

    function removingOrAddingClasses(arr, limit, cls, isRemove = true) {
      if (isRemove) {
        for (let i = 0; i < limit; i++) {
          arr[i].classList.remove(cls);
        }
      } else {
        for (let i = 0; i < limit; i++) {
          arr[i].classList.add(cls);
        }
      }
    }
  }

  // SHARE LINK

  if (document.querySelector(".share-link-js")) {
    document
      .querySelector(".share-link-js")
      .addEventListener("click", function (e) {
        e.preventDefault();

        if (navigator.share) {
          navigator
            .share({
              title: "Поделиться",
              url: window.location.href,
            })
            .catch((error) => console.log("Error sharing", error));
        }
      });
  }

  // AJAX SEARCH

  const searchAjax = document.querySelector(".ajax-s");

  if (searchAjax) {
    const header = document.querySelector(".header");

    document.querySelectorAll(".search-action-js").forEach(function (btn) {
      btn.addEventListener("click", function () {
        btn.classList.toggle("active");
        searchAjax.classList.toggle("active");

        if (searchAjax.classList.contains("active")) {
          document.getElementById("nav-mob").classList.remove("visible");

          document.querySelectorAll(".user-menu-js").forEach(function (menu) {
            menu.classList.remove("visible");
          });

          const scrollWidth =
            window.innerWidth - document.documentElement.clientWidth;

          document.body.style.overflow = "hidden";
          header.style.paddingRight = `${scrollWidth}px`;
          document.body.style.paddingRight = `${scrollWidth}px`;
        } else {
          setTimeout(() => {
            document.body.style.overflow = "initial";
            document.body.style.paddingRight = "0";
            header.style.paddingRight = "0";
          }, 200);
        }
      });
    });
  }

  const searchInput = document.querySelector(".ajax-search-js");
  const searchResult = document.querySelector(".ajax-search-result-js");
  const searchLoader = document.querySelector(".ajax-search-loader-js");

  if (searchInput && searchResult && searchLoader) {
    searchInput.addEventListener("input", function () {
      const query = searchInput.value.trim();
      const ajaxUrl = `https://${window.location.hostname}/wp-admin/admin-ajax.php`;

      if (query.length < 2) {
        searchResult.innerHTML = "";
        return;
      }

      searchLoader.classList.add("active");

      fetch(`${ajaxUrl}?action=ajax_search&query=${encodeURIComponent(query)}`)
        .then((response) => response.json())
        .then((response) => {
          if (response.success) {
            searchResult.innerHTML = response.data.length
              ? response.data
              : "<p>Ничего не найдено</p>";
          } else {
            searchResult.innerHTML = "<p>Ошибка выполнения поиска</p>";
          }
        })
        .catch(() => {
          searchResult.innerHTML = "<p>Ошибка соединения</p>";
        })
        .finally(() => {
          searchLoader.classList.remove("active");
        });
    });
  }
});

// HELPERS

function openModal(id) {
  const scrollWidth = window.innerWidth - document.documentElement.clientWidth;
  document.getElementById(id).classList.add("visible");
  document.body.style.paddingRight = `${scrollWidth}px`;
  document.body.style.overflow = "hidden";

  if (scrollWidth !== 0) {
    document.querySelector(".header").style.paddingRight = `${scrollWidth}px`;
  }
}

function showFilteredElements(arr, filters, limit) {
  let l = limit;

  arr.forEach(function (li) {
    li.style.display = "none";
  });

  arr.forEach(function (li) {
    if (l <= 0) return;

    if (
      (filters.region === "all" || li.classList.contains(filters.region)) &&
      (filters.area === "all" || li.classList.contains(filters.area)) &&
      (filters.city === "all" || li.classList.contains(filters.city)) &&
      (filters.distributor === "all" ||
        li.classList.contains(filters.distributor))
    ) {
      li.style.display = "block";
      l--;
    }
  });
}

function getCountVisibleElements(arr, filters) {
  return Array.from(arr).filter(function (elem) {
    return (
      (filters.region === "all" || elem.classList.contains(filters.region)) &&
      (filters.area === "all" || elem.classList.contains(filters.area)) &&
      (filters.city === "all" || elem.classList.contains(filters.city)) &&
      (filters.distributor === "all" ||
        elem.classList.contains(filters.distributor))
    );
  }).length;
}

function getElementAndRemoveClass(parent, elemClass, removeClass) {
  parent.querySelectorAll(elemClass).forEach(function (elem) {
    elem.classList.remove(removeClass);
  });
}

// JQUERY

jQuery(document).ready(function ($) {
  // WISHLIST

  $(".wishlist-js").on("click", function (e) {
    if (
      !(
        $(e.target).hasClass("wishlist-icon-js") ||
        $(e.target).hasClass("wishlist-icon-mob-js")
      )
    ) {
      return;
    }

    e.preventDefault();

    var productId = $(e.target).data("id");
    var ajaxLoader = $(e.target)
      .closest(".ajax-loader-parent-js")
      .find(".ajax-loader");
    ajaxLoader.fadeIn();

    var wishlist = $.cookie("cytolife_wishlist");

    $(e.target).toggleClass("active");

    if ($(e.target).hasClass("wishlist-icon-js")) {
      $(".wishlist-icon-mob-js").toggleClass("active");

      if ($(e.target).hasClass("active")) {
        $(e.target).children(".tooltip").addClass("active");

        setTimeout(() => {
          $(e.target).children(".tooltip").removeClass("active");
        }, 1000);
      }
    } else {
      $(".wishlist-icon-js").toggleClass("active");
    }

    if (wishlist === undefined) {
      wishlist = [productId];
      $.cookie("cytolife_wishlist", JSON.stringify(wishlist), {
        expires: 30,
        path: "/",
      });
    } else {
      wishlist = JSON.parse(wishlist);
      if (wishlist.includes(productId)) {
        var index = wishlist.indexOf(productId);
        wishlist.splice(index, 1);
      } else {
        wishlist.push(productId);
      }
      $.cookie("cytolife_wishlist", JSON.stringify(wishlist), {
        expires: 30,
        path: "/",
      });
    }

    var updatedWishlist = $.cookie("cytolife_wishlist");
    updatedWishlist = JSON.parse(updatedWishlist);
    updatedWishlist = updatedWishlist.filter((wish) => !!wish);
    $(".wishlist-link span").text(updatedWishlist.length);

    ajaxLoader.fadeOut();
  });
});
