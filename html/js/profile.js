document.addEventListener('DOMContentLoaded', () => {
        const profileLeftBtns = document.querySelectorAll('.profile__left-btn:not(:last-child)');
        const profileResults = document.querySelectorAll('.profile__result');
        profileLeftBtns.forEach(button => {
            button.addEventListener('click', () => {
                profileLeftBtns.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                const targetContent = button.dataset.profileBtn;
                profileResults.forEach(result => result.classList.remove('active'));
                const activeContentBlock = document.querySelector(`.profile__result[data-profile-content="${targetContent}"]`);
                if (activeContentBlock) {
                    activeContentBlock.classList.add('active');
                }
                if (targetContent === 'user-data') {
                    const profileUserBtns = activeContentBlock.querySelectorAll('.profile__user-btn');
                    const profileUserResults = activeContentBlock.querySelectorAll('.profile__user-result');

                    if (profileUserBtns.length > 0) {
                        profileUserBtns.forEach(btn => btn.classList.remove('active'));
                        profileUserBtns[0].classList.add('active');
                    }

                    if (profileUserResults.length > 0) {
                        profileUserResults.forEach(form => form.classList.remove('active'));
                        profileUserResults[0].classList.add('active');
                    }
                }
            });
        });
        const profileUserBtns = document.querySelectorAll('.profile__user-btn');
        const profileUserForms = document.querySelectorAll('.profile__user-result.profile__form');
        profileUserBtns.forEach(button => {
            button.addEventListener('click', () => {
                profileUserBtns.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                const targetUserForm = button.dataset.profileUserBtn;
                profileUserForms.forEach(form => form.classList.remove('active'));
                const activeUserForm = document.querySelector(`.profile__user-result.profile__form[data-profile-user-result="${targetUserForm}"]`);
                if (activeUserForm) {
                    activeUserForm.classList.add('active');
                }
            });
        });



      const orderStarts = document.querySelectorAll('.profile__orders-start');
    orderStarts.forEach(orderStart => {
        orderStart.addEventListener('click', () => {
            const orderItem = orderStart.closest('.profile__orders-item');
            if (orderItem) {
                orderItem.classList.toggle('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const changeEmailButton = document.querySelector('.change-email');
    const changePhoneButton = document.querySelector('.change-phone');
    const changePasswordButton = document.querySelectorAll('.change-password');
    const changeNumberSection = document.querySelector('section[data-userData="change-number"]');
    const changePasswordSection = document.querySelector('section[data-userData="change-password"]');
    const changeEmailSection = document.querySelector('section[data-userData="change-email"]');
    if (changeEmailButton) {
        changeEmailButton.addEventListener('click', () => {
            if (changeEmailSection) {
                changeEmailSection.classList.add('active');
            }
        });
    }
    if (changePhoneButton) {
        changePhoneButton.addEventListener('click', () => {
            if (changeNumberSection) {
                changeNumberSection.classList.add('active');
            }
        });
    }
    if (changePasswordButton) {
        changePasswordButton.forEach(element => {
            element.addEventListener('click', () => {
                if (changePasswordSection) {
                    changePasswordSection.classList.add('active');
                }
            });
        });
    }
});