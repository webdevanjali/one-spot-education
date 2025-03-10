document.addEventListener("DOMContentLoaded", () => {
  let arrow = document.querySelectorAll(".arrow");
  for (let i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
      let arrowParent = e.target.parentElement.parentElement; // Selecting main parent of arrow
      arrowParent.classList.toggle("showMenu");
    });
  }

  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  if (sidebarBtn) {
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  } else {
    console.error("Sidebar button not found.");
  }
});