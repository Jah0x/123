(function () {
    var telegramLinks = document.querySelectorAll('[data-telegram]');
    var header = document.getElementById('site-header');
    var overlay = document.getElementById('intro-overlay');
    var telegramUrl = (window.kadenceChild && window.kadenceChild.telegramUrl) || '#';
    telegramLinks.forEach(function (link) {
        link.setAttribute('href', telegramUrl);
    });
    var anchors = document.querySelectorAll('[data-scroll]');
    anchors.forEach(function (link) {
        link.addEventListener('click', function (event) {
            var targetId = link.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                event.preventDefault();
                var target = document.querySelector(targetId);
                if (target) {
                    window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
                }
            }
        });
    });
    var toggleHeader = function () {
        if (!header) return;
        if (window.scrollY > 12) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    toggleHeader();
    window.addEventListener('scroll', toggleHeader, { passive: true });
    if (overlay && typeof sessionStorage !== 'undefined') {
        var shown = sessionStorage.getItem('kadence_intro_shown');
        if (!shown) {
            document.body.classList.add('no-scroll');
            overlay.classList.add('visible');
            setTimeout(function () {
                overlay.style.opacity = '0';
                overlay.style.visibility = 'hidden';
                document.body.classList.remove('no-scroll');
                sessionStorage.setItem('kadence_intro_shown', '1');
            }, 1700);
        }
    }
})();
