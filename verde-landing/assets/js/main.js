const introOverlay = document.getElementById('intro-overlay');
const body = document.body;
const header = document.getElementById('site-header');
const overlayDuration = 1200;

function showIntro() {
    if (!introOverlay || sessionStorage.getItem('verdeIntro')) {
        body.classList.remove('no-scroll');
        return;
    }
    body.classList.add('no-scroll');
    introOverlay.classList.add('visible');
    sessionStorage.setItem('verdeIntro', 'seen');
    setTimeout(() => {
        introOverlay.classList.add('hidden');
        body.classList.remove('no-scroll');
    }, overlayDuration + 400);
}

function handleScroll() {
    if (!header) return;
    const compact = window.scrollY > 50;
    header.classList.toggle('is-compact', compact);
}

function smoothAnchors() {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach((link) => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);
            if (!target) return;
            event.preventDefault();
            const headerHeight = header ? header.getBoundingClientRect().height : 0;
            const offset = target.getBoundingClientRect().top + window.scrollY - headerHeight;
            window.scrollTo({ top: offset, behavior: 'smooth' });
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    showIntro();
    smoothAnchors();
    handleScroll();
    window.addEventListener('scroll', handleScroll, { passive: true });
});
