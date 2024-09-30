const menuBtn = document.querySelector('.top-menu-btn');

export function initSupMenu() {
    menuBtn.addEventListener('click', () => {
        document.querySelector('.top-menu ul').classList.toggle('show');
    });
}