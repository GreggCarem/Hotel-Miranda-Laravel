document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("nav-bar");

  //Hide
  let lastScrollTop = -10;

  window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY;
    if (scrollTop > lastScrollTop) {
      navbar.classList.add("hidden");
    } else if (scrollTop === 0) {
      navbar.classList.remove("hidden");
    } else {
    }

    lastScrollTop = scrollTop;
  });

  //Display
  let mouseTop = 0;

  document.addEventListener("mousemove", (e) => {
    if (e.clientY < 200) {
      navbar.classList.add("drop-down-nav");
      mouseTop = true;
    } else if (!e.clientY < 200) {
      navbar.classList.remove("drop-down-nav");
      mouseTop = false;
    } else {
    }
  });
});
