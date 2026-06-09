/* =========================================
   CUSTOM CURSOR
========================================= */
const cursor = document.getElementById('cursor');
const cursorRing = document.getElementById('cursorRing');
let cursorX = 0, cursorY = 0;
let ringX = 0, ringY = 0;

document.addEventListener('mousemove', (e) => {
  cursorX = e.clientX;
  cursorY = e.clientY;
  cursor.style.left = cursorX + 'px';
  cursor.style.top = cursorY + 'px';
});

function animateCursorRing() {
  ringX += (cursorX - ringX) * 0.12;
  ringY += (cursorY - ringY) * 0.12;
  cursorRing.style.left = ringX + 'px';
  cursorRing.style.top = ringY + 'px';
  requestAnimationFrame(animateCursorRing);
}
animateCursorRing();

document.querySelectorAll('a, button, .work-item').forEach(el => {
  el.addEventListener('mouseenter', () => {
    cursor.style.width = '20px';
    cursor.style.height = '20px';
    cursorRing.style.width = '60px';
    cursorRing.style.height = '60px';
    cursorRing.style.opacity = '1';
  });
  el.addEventListener('mouseleave', () => {
    cursor.style.width = '10px';
    cursor.style.height = '10px';
    cursorRing.style.width = '40px';
    cursorRing.style.height = '40px';
    cursorRing.style.opacity = '0.6';
  });
});

/* =========================================
   NAVIGATION SCROLL EFFECT
========================================= */
const nav = document.getElementById('mainNav');
window.addEventListener('scroll', () => {
  if (window.scrollY > 80) {
    nav.classList.add('scrolled');
  } else {
    nav.classList.remove('scrolled');
  }
});

/* =========================================
   MOBILE NAV
========================================= */
const hamburger = document.getElementById('hamburger');
const mobileNav = document.getElementById('mobileNav');

function toggleMobileNav() {
  hamburger.classList.toggle('active');
  mobileNav.classList.toggle('open');
  if (mobileNav.classList.contains('open')) {
    document.body.style.overflow = 'hidden';
  } else {
    document.body.style.overflow = '';
  }
}

hamburger.addEventListener('click', toggleMobileNav);

mobileNav.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    if (mobileNav.classList.contains('open')) {
      toggleMobileNav();
    }
  });
});

/* =========================================
   SCROLL REVEAL
========================================= */
const revealElements = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.12,
  rootMargin: '0px 0px -50px 0px'
});

revealElements.forEach(el => revealObserver.observe(el));

/* =========================================
   HERO IMAGE LOAD
========================================= */
const heroBgImage = document.getElementById('heroBgImage');
heroBgImage.addEventListener('load', () => {
  heroBgImage.classList.add('loaded');
});

if (heroBgImage.complete) {
  heroBgImage.classList.add('loaded');
}

/* =========================================
   COUNT UP ANIMATION
========================================= */
const countUpElements = document.querySelectorAll('.count-up');

const countUpObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
      const target = parseInt(entry.target.getAttribute('data-target'));
      let count = 0;
      const duration = 2000; // ms
      const increment = target / (duration / 16); 
      
      entry.target.classList.add('counted');
      
      const updateCount = () => {
        count += increment;
        if (count < target) {
          entry.target.innerText = Math.ceil(count);
          requestAnimationFrame(updateCount);
        } else {
          entry.target.innerText = target;
        }
      };
      
      updateCount();
      countUpObserver.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.5
});

countUpElements.forEach(el => countUpObserver.observe(el));

/* =========================================
   TESTIMONIAL SLIDER
========================================= */
const testimonialTrack = document.getElementById('testimonialTrack');

if (testimonialTrack) {
  const slides = Array.from(testimonialTrack.children);
  const dotsContainer = document.getElementById('testimonialDots');
  const prevBtn = document.getElementById('testimonialPrev');
  const nextBtn = document.getElementById('testimonialNext');
  const slider = document.getElementById('testimonialSlider');
  let current = 0;
  let autoTimer;

  // Build navigation dots
  slides.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.type = 'button';
    dot.className = 'testimonial-dot' + (i === 0 ? ' active' : '');
    dot.setAttribute('aria-label', `${i + 1}件目のお客様の声へ`);
    dot.addEventListener('click', () => goToSlide(i));
    dotsContainer.appendChild(dot);
  });
  const dots = Array.from(dotsContainer.children);

  function goToSlide(i) {
    current = (i + slides.length) % slides.length;
    testimonialTrack.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((dot, di) => dot.classList.toggle('active', di === current));
  }

  function startAuto() {
    autoTimer = setInterval(() => goToSlide(current + 1), 6000);
  }

  function stopAuto() {
    clearInterval(autoTimer);
  }

  prevBtn.addEventListener('click', () => goToSlide(current - 1));
  nextBtn.addEventListener('click', () => goToSlide(current + 1));

  // Pause autoplay on hover
  slider.addEventListener('mouseenter', stopAuto);
  slider.addEventListener('mouseleave', startAuto);

  // Only autoplay when more than one slide exists
  if (slides.length > 1) {
    startAuto();
  } else {
    prevBtn.style.display = 'none';
    nextBtn.style.display = 'none';
  }
}
