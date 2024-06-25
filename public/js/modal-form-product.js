document.addEventListener('DOMContentLoaded', function() {
    var editButtons = document.querySelectorAll('#editLiveproduct');
    var editModal = document.getElementById('modal-edit-liveproduct');
    var closeEditModal = document.getElementById('close-modal-liveproduct');

    editButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            var liveproductId = this.getAttribute('data-id-liveproduct');
            var section_name = this.getAttribute('data-section_name-liveproduct');
            var deliveryData = this.getAttribute('data-delivery-liveproduct');
            var fromDate = this.getAttribute('data-from-liveproduct');
            var untilDate = this.getAttribute('data-until-liveproduct');
            var statusLive = this.getAttribute('data-status-liveproduct');

            // Log untuk debugging
            console.log('data:', liveproductId);
            console.log('data:', section_name);
            console.log('data:', deliveryData);
            console.log('data:', fromDate);
            console.log('data:', untilDate);
            console.log('data:', statusLive);

            document.getElementById('liveproductId').value = liveproductId;
            document.getElementById('section_name').textContent = '#Section '+section_name;  
            document.getElementById('deliveryDate').value = deliveryData;
            document.getElementById('fromDate').value = fromDate;
            document.getElementById('untilDate').value = untilDate;
            document.getElementById('statusLive').value = statusLive;

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