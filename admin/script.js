const tabLinks = document.querySelectorAll('nav a[data-tab]');
const panelItems = document.querySelectorAll('.panel');

function showTab(tabId) {
  panelItems.forEach(panel => {
    panel.hidden = panel.id !== tabId;
  });

  tabLinks.forEach(link => {
    if (link.dataset.tab === tabId) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
}

tabLinks.forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault();
    showTab(link.dataset.tab);
  });
});

// Default landing tab
showTab('dashboard');
