const sidebar = document.querySelector('#sidebar');
const sidebarCollapse = document.querySelector('#sidebarCollapse');

sidebarCollapse.addEventListener('click', () => {
    sidebar.classList.toggle('toggle');
});
