document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll(".dshb-monthly-links li a");
    const sections = document.querySelectorAll(".dshb-product-list");

    function showSection(sectionId) {
        sections.forEach((section) => {
            if (section.id === sectionId) {
                section.style.display = "flex";
            } else {
                section.style.display = "none";
            }
        });
    }

    buttons.forEach((button) => {
        button.addEventListener("click", (e) => {
            e.preventDefault();  // Mencegah tindakan default dari anchor tag

            // Hapus kelas 'selected' dari semua li
            buttons.forEach((btn) => {
                btn.parentElement.classList.remove("selected");
            });

            // Tambahkan kelas 'selected' ke li yang diklik
            button.parentElement.classList.add("selected");

            const targetId = button.getAttribute("data-target");
            showSection(targetId);
        });
    });

    // Menampilkan section pertama secara default ketika halaman dimuat
    if (sections.length > 0) {
        showSection(sections[0].id);
    }
});



//   // Hapus kelas "active" dari semua tombol
//   buttons.forEach((btn) => {
//     btn.classList.remove("active");
//   });

//   // Tambahkan kelas "active" ke tombol yang diklik
//   button.classList.add("active");