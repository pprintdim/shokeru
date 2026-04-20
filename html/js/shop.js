document.addEventListener("DOMContentLoaded", function () {
    const filtersContainer = document.querySelector(".shop__filters");
    const toggleFiltersBtn = document.querySelector(".shop__filters-open");
    const closeFiltersBtn = document.querySelector(".shop__filters-close");
    const backFiltersBtn = document.querySelector(".shop__filters-back");

    function openOrCloseFilters() {
        filtersContainer.classList.toggle("active");
    }

    function closeFilters() {
        filtersContainer.classList.remove("active");
    }

    if (toggleFiltersBtn) toggleFiltersBtn.addEventListener("click", openOrCloseFilters);
    if (closeFiltersBtn) closeFiltersBtn.addEventListener("click", closeFilters);
    if (backFiltersBtn) backFiltersBtn.addEventListener("click", closeFilters);

    const filterTabButtons = document.querySelectorAll(".filters-open-title[data-filter-target]");
    const filterPanels = document.querySelectorAll(".shop__filters-box");
    const filterPanelTitles = document.querySelectorAll(".shop__filters-title");

    filterTabButtons.forEach(tabBtn => {
        tabBtn.addEventListener("click", () => {
            const targetId = tabBtn.dataset.filterTarget;

            filterPanels.forEach(panel => {
                if (panel.dataset.filterId === targetId) {
                    panel.classList.add("active");
                } else {
                    panel.classList.remove("active");
                }
            });
        });
    });

    filterPanelTitles.forEach(title => {
        title.addEventListener("click", () => {
            filterPanels.forEach(panel => panel.classList.remove("active"));
        });
    });

    const resetButtons = document.querySelectorAll(".shop__filters-resets");
    resetButtons.forEach(button => {
        button.addEventListener("click", () => {
        const filterBox = button.closest(".shop__filters-box");
        if (!filterBox) return;

        const inputs = filterBox.querySelectorAll('input[type="checkbox"]');
        inputs.forEach(input => {
            input.checked = false;
        });
        });
    });
});
