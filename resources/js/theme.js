document.addEventListener('DOMContentLoaded', () => {
  // Set viewport
  const viewport = document.querySelector('meta[name=viewport]');
  viewport.setAttribute('content', 'width=device-width, initial-scale=1, shrink-to-fit=no');

  // Add hidden class to sidebar
  const sidebar = document.querySelector('.w-sidebar');
  sidebar.classList.add('sidebar-hidden');

  // Add hamburger menu to header
  const hamburger = document.createElement('span');
  hamburger.className = 'hamburger-menu';
  const contentHeader = document.querySelector('.content .h-header');
  contentHeader.prepend(hamburger);

  // Hamburger click event
  hamburger.addEventListener('click', (e) => {
    e.stopPropagation();
    document.querySelector('.w-sidebar').classList.toggle('sidebar-hidden');
  }, true);

  // Sidebar links click event
  const sidebarLinks = document.querySelectorAll('.w-sidebar a, .w-sidebar .cursor-pointer');
  sidebarLinks.forEach((sidebarLink) => {
    sidebarLink.addEventListener('click', () => {
      document.querySelector('.w-sidebar').classList.add('sidebar-hidden');
    }, false);
  });

  // Hide sidebar when clicking outside
  const rootElements = document.querySelectorAll('body,html');
  rootElements.forEach((rootElement) => {
    rootElement.addEventListener('click', (e) => {
      const sidebarEl = document.querySelector('.w-sidebar');
      if (e.target !== sidebarEl && !sidebarEl.contains(e.target)) {
        sidebarEl.classList.add('sidebar-hidden');
      }
    });
  });
}, false);
