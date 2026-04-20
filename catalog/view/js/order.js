document.querySelectorAll('input[name="delivery-option"]').forEach(radio => {
    radio.addEventListener('change', () => {
        document.querySelectorAll('.order__delivery-block').forEach(block => {
            block.classList.remove('active');
        });
        const selectedBlock = radio.closest('.order__delivery-block');
        if (selectedBlock) {
            selectedBlock.classList.add('active');
        }
    });
});

document.querySelectorAll('input[name="get-delivery"]').forEach(radio => {
    radio.addEventListener('change', () => {
        const formBox = radio.closest('.order__form-box');
        const inputsBlock = formBox.querySelector('.order__form-inputs');

        if (radio.id === 'receiver-me' && radio.checked) {
            inputsBlock.style.display = 'none';
        } else if (radio.id === 'receiver-other' && radio.checked) {
            inputsBlock.style.display = '';
        }
    });
});
window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input[name="get-delivery"]').forEach(radio => {
        radio.dispatchEvent(new Event('change'));
    });
});
