const galleries = {
  rack: ["images/rack1.jpg", "images/rack2.jpg"],
  fiber: ["images/fiber1.jpg", "images/fiber2.jpg"]
};

document.querySelectorAll('.skill').forEach(el => {
  el.addEventListener('click', () => {
    const skill = el.dataset.skill;
    showGallery(skill);
  });
});

document.querySelector('.close').addEventListener('click', closeGallery);

function showGallery(skill) {
  const container = document.getElementById('lightbox-images');
  container.innerHTML = ''; // Clear previous

  (galleries[skill] || []).forEach(src => {
    const img = document.createElement('img');
    img.src = src;
    container.appendChild(img);
  });

  document.getElementById('lightbox').classList.remove('hidden');
}

function closeGallery() {
  document.getElementById('lightbox').classList.add('hidden');
}
