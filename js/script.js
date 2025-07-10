const galleries = {
  rack: ["images/rack1.jpg", "images/rack2.jpg", "images/rack3.jpg"],
  fiber: ["images/fiber1.jpg", "images/fiber2.jpg"]
};

function showGallery(skill) {
  const lightbox = document.getElementById("lightbox");
  const imageContainer = document.getElementById("lightbox-images");

  // Clear existing images
  imageContainer.innerHTML = "";

  // Add new images
  if (galleries[skill]) {
    galleries[skill].forEach(src => {
      const img = document.createElement("img");
      img.src = src;
      imageContainer.appendChild(img);
    });
  }

  // Show lightbox
  lightbox.classList.remove("hidden");
}

function closeGallery() {
  document.getElementById("lightbox").classList.add("hidden");
}
