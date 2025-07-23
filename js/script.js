
//Bootstrap Modal Management Script
  // This script handles the opening and closing of Bootstrap modals,
  // ensuring that the body class is updated
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


// Bootstrap Masonry Layout Initialization
document.addEventListener("DOMContentLoaded", function () {
  // Manually reinitialize Masonry
  var grid = document.querySelector('[data-masonry]');
  if (grid) {
    // Ensure all images are loaded before triggering Masonry
    imagesLoaded(grid, function () {
      new Masonry(grid, {
        itemSelector: '.col-12', // Adjust if needed
        percentPosition: true
      });
    });
  }
});

// Handle browser back/forward navigation (bfcache restore)
window.addEventListener('pageshow', function (event) {
  if (event.persisted || performance.getEntriesByType("navigation")[0].type === "back_forward") {
    // Re-run Masonry after page is restored from cache
    var grid = document.querySelector('[data-masonry]');
    if (grid) {
      imagesLoaded(grid, function () {
        new Masonry(grid, {
          itemSelector: '.col-12',
          percentPosition: true
        });
      });
    }
  }
});

