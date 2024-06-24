document.addEventListener('DOMContentLoaded', function() {
    var editButtons = document.querySelectorAll('#edit-nutrition');
    var editModal = document.getElementById('modal-edit-nutrition');
    var closeEditModal = document.getElementById('close-edit-nutrition');
    var form = document.getElementById('editNutritionForm');

    editButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            var id = this.getAttribute('data-id');
            var karbohidrat = this.getAttribute('data-karbohidrat');
            var karbohidrat_unit = this.getAttribute('data-karbohidrat_unit');
            var protein = this.getAttribute('data-protein');
            var protein_unit = this.getAttribute('data-protein_unit');
            var lemak = this.getAttribute('data-lemak');
            var lemak_unit = this.getAttribute('data-lemak_unit');
            var serat = this.getAttribute('data-serat');
            var serat_unit = this.getAttribute('data-serat_unit');
            var natrium = this.getAttribute('data-natrium');
            var natrium_unit = this.getAttribute('data-natrium_unit');
            var kalori = this.getAttribute('data-kalori');
            var kalori_unit = this.getAttribute('data-kalori_unit');
            var unit_id = this.getAttribute('data-unit_id');

            // console.log('muncul data woi:', unit_id); // Log for debugging

            // form.action = '/to_sent/update/' + id;
            // document.getElementById('karbohidrat').value = karbohidrat;
            // document.getElementById('karbohidrat_unit').value = karbohidrat_unit;
            // document.getElementById('protein').value = protein;
            // document.getElementById('protein_unit').value = protein_unit;
            // document.getElementById('lemak').value = lemak;
            // document.getElementById('lemak_unit').value = lemak_unit;
            // document.getElementById('serat').value = serat;
            // document.getElementById('serat_unit').value = serat_unit;
            // document.getElementById('natrium').value = natrium;
            // document.getElementById('natrium_unit').value = natrium_unit;
            // document.getElementById('kalori').value = kalori;
            // document.getElementById('kalori_unit').value = kalori_unit;
            // document.getElementById('unit_id').value = unit_id;

            editModal.style.display = 'block';
        });
    });

    closeEditModal.addEventListener('click', function() {
        editModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == editModal) {
            editModal.style.display = 'none';
        }
    });
});