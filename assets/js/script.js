// Ambil semua elemen menu
const menuItems = document.querySelectorAll(".nav-link");

// Tambahkan event listener untuk setiap menu
menuItems.forEach((menuItem) => {
	menuItem.addEventListener("click", function () {
		// Hilangkan kelas 'active' dari semua menu
		menuItems.forEach((item) => {
			item.classList.remove("active");
		});

		// Tambahkan kelas 'active' pada menu yang diklik
		this.classList.add("active");
	});
});
