

window.addEventListener("pageshow", function (event) {
  // Remove modal artifacts when navigating back
  document.body.classList.remove("modal-open");

  // Remove lingering backdrops
  let backdrops = document.querySelectorAll(".modal-backdrop");
  backdrops.forEach(el => el.remove());

  // Hide any open modals (just in case)
  let modals = document.querySelectorAll(".modal.show");
  modals.forEach(modal => modal.classList.remove("show"));
});
