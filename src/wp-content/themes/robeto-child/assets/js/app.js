$(document).ready(function () {
  if (!isMobile()) {
    handlerOpenMasterCate();
    handlerSubLv1();
    closeMenuByOverlay();
    closeMenuByClose();
  }
});

const $html = $("html");
const $menuShop = $(".menu-shop");
const $megaMenu = $menuShop.children(".mega-menu");
const $headerOverlay = $(".header-overlay");
const $headerClose = $(".header-close");

function isMobile() {
  const userAgent = navigator.userAgent.toLowerCase();
  return /iphone|ipod|android|windows phone|blackberry|mobile/i.test(userAgent);
}

function toggleBodyOverflow(isOpen) {
  if (isOpen) {
    $html.css("overflow", "hidden");
  } else {
    $html.css("overflow", "auto");
  }
}

function showMenu() {
  $megaMenu.addClass("active");
  $headerOverlay.removeClass("d-none");
  $headerClose.removeClass("d-none");
  toggleBodyOverflow(true);
}

function hideMenu() {
  $megaMenu.removeClass("active");
  $headerOverlay.addClass("d-none");
  $headerClose.addClass("d-none");
  toggleBodyOverflow(false);

  $megaMenu.find("li.active").removeClass("active");
}

function handlerOpenMasterCate() {
  $menuShop.on("click", (e) => {
    // Detect Clicking on $megaMenu
    if (!$megaMenu.is(e.target) && $megaMenu.has(e.target).length === 0) {
      e.preventDefault();
    }
    showMenu();
  });
}

function handlerSubLv1() {
  $(".mega-menu-main li").each(function (index) {
    const $subMenuItem = $(this)
      .children(".sub-menu")
      .children(".menu-item-has-children");
    $subMenuItem.on("click", function (e) {
      // e.preventDefault();

      if (
        $subMenuItem.is(e.target) &&
        $subMenuItem.has(e.target).length === 0
      ) {
        $(this).toggleClass("active");
      }
    });
  });
}

function closeMenuByOverlay() {
  $headerOverlay.on("click", () => {
    hideMenu();
  });
}

function closeMenuByClose() {
  $headerClose.on("click", () => {
    hideMenu();
  });
}
