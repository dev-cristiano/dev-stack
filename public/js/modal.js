document.addEventListener("DOMContentLoaded", () => {
    const modalTriggers = document.querySelectorAll(".js-modal-trigger");
    const modalCloses = document.querySelectorAll(".modal-close, .modal-background");

    // Open modal
    modalTriggers.forEach((trigger) => {
        trigger.addEventListener("click", () => {
            const target = trigger.dataset.target;
            const modal = document.getElementById(target);
            modal.classList.add("is-active");
        });
    });

    // Close modal
    modalCloses.forEach((close) => {
        close.addEventListener("click", () => {
            close.closest(".modal").classList.remove("is-active");
        });
    });
});