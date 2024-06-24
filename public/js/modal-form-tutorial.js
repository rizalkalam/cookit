document.addEventListener('DOMContentLoaded', function() {
    var addButton = document.getElementById('add-tutorial');
    var addModal = document.getElementById('modal-add-tutorial');
    var closeAddModal = document.getElementById('close-add-tutorial');
    
    addButton.addEventListener('click', function(event) {
        event.preventDefault();
        console.log('muncul data woi:', addButton); // Log for debugging
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
    var editButtons = document.querySelectorAll('#edit-tutorial');
    var editModal = document.getElementById('modal-edit-tutorial');
    var closeEditModal = document.getElementById('close-edit-tutorial');
    var form = document.getElementById('editTutorialForm');

    editButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            // Ambil id dan instruction dari data attribute
            var tutorialId = this.getAttribute('data-id_tutorial');
            var instruction = this.getAttribute('data-instruction');

            // Log untuk debugging
            console.log('ID:', tutorialId);
            console.log('Instruction:', instruction);
            

            document.getElementById('tutorialId').value = tutorialId;
            document.getElementById('instructionInput').value = instruction;

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
    var delButtons = document.querySelectorAll('#delete-tutorial');
    var delModal = document.getElementById('modal-delete-tutorial');
    var closeDelModal = document.getElementById('close-delete-tutorial');
    var deleteForm = document.getElementById('deleteForm');

    delButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var tutorialId = this.getAttribute('data-id_tutorial');
            
            console.log('ID:', tutorialId);

            document.getElementById('tutorialId_delete').value = tutorialId;

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