/* J&J IBD Summit 2026 — site interactions */
(function () {
  // Mobile nav toggle
  var toggle = document.querySelector('.nav-toggle');
  var links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      links.classList.toggle('open');
    });
  }

  // Sticky CTA (injected on every page except the programme page itself)
  if (!/\/programme\/?$/.test(location.pathname)) {
    var sticky = document.createElement('div');
    sticky.className = 'sticky-cta';
    sticky.innerHTML = '<a class="btn" href="/programme">View the programme <span class="arrow">→</span></a>';
    document.body.appendChild(sticky);
    var onScroll = function () { sticky.classList.toggle('show', window.scrollY > 600); };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // Agenda day tabs
  var tabs = document.querySelectorAll('.daytab');
  if (tabs.length) {
    tabs.forEach(function (t) {
      t.addEventListener('click', function () {
        var day = t.getAttribute('data-day');
        document.querySelectorAll('.daytab').forEach(function (x) { x.classList.remove('active'); });
        t.classList.add('active');
        document.querySelectorAll('.agenda-day').forEach(function (d) {
          d.classList.toggle('show', d.getAttribute('data-day') === day);
        });
      });
    });
  }
})();
