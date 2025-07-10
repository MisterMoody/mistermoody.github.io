const galleries = {
  rack: ["images/rack1.jpg", "images/rack2.jpg"],
  fiber: ["images/fiber1.jpg", "images/fiber2.jpg"]
};

function showGallery(skill) {
  const lightbox = document.getElementById('lightbox');
  const imageContainer = document.getElementById('lightbox-images');
  imageContainer.innerHTML = '';

  galleries[skill].forEach(src => {
    const img = document.createElement('img');
    img.src = src;
    imageContainer.appendChild(img);
  });

  lightbox.classList.remove('hidden');
}

function closeGallery() {
  document.getElementById('lightbox').classList.add('hidden');
}