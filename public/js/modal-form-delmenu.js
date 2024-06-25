document.addEventListener('DOMContentLoaded', function() {
    var deleteBtnMenu = document.getElementById('delete_menu');
    var deleteModalMenu = document.getElementById('modal-delete-menu');
    var closeModalMenu = document.getElementById('close-delete-menu');
    var menuIdInput = document.getElementById('menuId');

    deleteBtnMenu.addEventListener('click', function(event) {
        event.preventDefault();
        var menuId = this.getAttribute('data-id-menu');
        
        console.log('ID:', menuId);

        document.getElementById('menuId_delete').value = menuId;

        deleteModalMenu.style.display = 'block';
    });

    closeModalMenu.addEventListener('click', function() {
        deleteModalMenu.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == deleteModalMenu) {
            deleteModalMenu.style.display = 'none';
        }
    });
});
