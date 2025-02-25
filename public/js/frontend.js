document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".view-details").forEach((button) => {
        button.addEventListener("click", function () {
            document.getElementById("modalCarImage").src = "./cars/" + this.dataset.image;
            document.getElementById("modalCarName").textContent =
                this.dataset.name;
            document.getElementById("modalCarBrand").textContent =
                this.dataset.brand;
            document.getElementById("modalCarModel").textContent =
                this.dataset.model;
            document.getElementById("modalCarType").textContent =
                this.dataset.type;
            document.getElementById("modalCarYear").textContent =
                this.dataset.year;
            document.getElementById("modalCarPrice").textContent =
                this.dataset.price;

            let bookNowBtn = document.getElementById("modalBookNow");
            if (bookNowBtn) {
                bookNowBtn.href = "car/book/" + this.dataset.id;
            }

            let modal = new bootstrap.Modal(
                document.getElementById("carDetailsModal")
            );
            modal.show();
        });
    });

    let carTypeFilter = document.getElementById("carType");
    let brandFilter = document.getElementById("brand");
    let priceFilter = document.getElementById("price");

    function filterCars() {
        let selectedType = carTypeFilter.value;
        let selectedBrand = brandFilter.value;
        let maxPrice = priceFilter.value
            ? parseFloat(priceFilter.value)
            : Infinity;

        document.querySelectorAll(".car-item").forEach((car) => {
            let carType = car.dataset.type; // Keep as is (case-sensitive)
            let carBrand = car.dataset.brand; // Keep as is (case-sensitive)
            let carPrice = parseFloat(car.dataset.price);

            let typeMatch = selectedType === "" || carType === selectedType;
            let brandMatch = selectedBrand === "" || carBrand === selectedBrand;
            let priceMatch = carPrice <= maxPrice;
            car.style.display =
                typeMatch && brandMatch && priceMatch ? "block" : "none";
        });
    }

    carTypeFilter.addEventListener("change", filterCars);
    brandFilter.addEventListener("change", filterCars);
    priceFilter.addEventListener("input", filterCars);
});
