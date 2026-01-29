
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

// End of file - original script only manages Masonry and modal cleanup.



// Mark images that are high-resolution enough to benefit from the sharpen filter.
// This avoids sharpening and upscaling very small images (which would look worse).
function markSharpenableImages() {
  var imgs = document.querySelectorAll('.modal-img');
  imgs.forEach(function(img) {
    // If image already loaded, naturalWidth is available; otherwise wait for load
    function checkAndMark() {
      try {
        if (img.naturalWidth && img.naturalHeight) {
          // threshold: only sharpen images >= 1000px width and >= 750px height
          if (img.naturalWidth >= 1000 && img.naturalHeight >= 750) {
            img.classList.add('can-sharpen');
          }
        }
      } catch (e) {
        // ignore
      }
    }
    if (img.complete) checkAndMark(); else img.addEventListener('load', checkAndMark);
  });
}

// Run after DOM content and imagesLoaded have completed — call once now.
document.addEventListener('DOMContentLoaded', function(){
  // Defer a tick to allow browser to populate naturalWidth/Height
  setTimeout(markSharpenableImages, 50);
});

