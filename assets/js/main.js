function pwdReveal(toggle) {
    const inputClass = toggle.getAttribute('for');

    const input = document.querySelector('.' + inputClass);
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
    input.setAttribute('type', type);
    toggle.classList.toggle('bi-eye');
}