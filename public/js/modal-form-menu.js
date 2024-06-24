document.addEventListener('DOMContentLoaded', function() {
    var addButton = document.getElementById('add-tosent');
    var addModal = document.getElementById('modal-add-tosent');
    var closeAddModal = document.getElementById('close-add-modal');
    
    addButton.addEventListener('click', function(event) {
        event.preventDefault();
        addModal.style.display = 'block';
    });

    closeAddModal.addEventListener('click', function() {
        addModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == addModal) {
            addModal.style.display = 'none';
        }
    });
});



document.addEventListener('DOMContentLoaded', function() {
    var editButtons = document.querySelectorAll('#edit-tosent');
    var editModal = document.getElementById('modal-edit-tosent');
    var closeEditModal = document.getElementById('close-edit-modal');

    editButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            var tosentId = this.getAttribute('data-id-tosent');
            var materialId = this.getAttribute('data-material-id');
            var qty = this.getAttribute('data-qty');
            var unitId = this.getAttribute('data-unit-id');

            // Log untuk debugging
            console.log('ID:', tosentId);
            console.log('QTY:', qty);

            document.getElementById('tosentId').value = tosentId;
            document.getElementById('material_id').value = materialId;
            document.getElementById('qtyInput').value = qty;
            document.getElementById('unit_id').value = unitId;

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

document.addEventListener('DOMContentLoaded', function() {
    var delButtons = document.querySelectorAll('#delete-tosent');
    var delModal = document.getElementById('modal-delete-tosent');
    var closeDelModal = document.getElementById('close-delte-modal');
    var deleteForm = document.getElementById('deleteForm');

    delButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var tosentId = this.getAttribute('data-id-tosent');

            console.log('Delete button clicked, ID:', tosentId); // Log for debugging
            
            document.getElementById('tosentId_delete').value = tosentId;

            delModal.style.display = 'block';
        });
    });

    closeDelModal.addEventListener('click', function() {
        delModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == delModal) {
            delModal.style.display = 'none';
        }
    });
});
