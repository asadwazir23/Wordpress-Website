const hero = document.querySelector('.hero');
const cards = document.querySelectorAll('.hero-card');

if (hero && cards.length) {
  hero.addEventListener('mousemove', (event) => {
    const { left, top, width, height } = hero.getBoundingClientRect();
    const x = (event.clientX - left) / width - 0.5;
    const y = (event.clientY - top) / height - 0.5;

    cards.forEach((card, index) => {
      const depth = (index + 1) * 6;
      card.style.transform = `translate3d(${x * depth}px, ${y * depth}px, 0)`;
    });
  });

  hero.addEventListener('mouseleave', () => {
    cards.forEach((card) => {
      card.style.transform = '';
    });
  });
}
