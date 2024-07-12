document.addEventListener('DOMContentLoaded', function() {
    var moreButton = document.querySelectorAll('#btn-more-address');
    var moreModal = document.getElementById('moreModal');
    var closeMoreModal = document.getElementById('close-more-modal');

    moreButton.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            var districtId = this.getAttribute('data-district-id');
            var districtName = this.getAttribute('data-district-name');
            var districtCost = this.getAttribute('data-district-cost');

            // Log untuk debugging
            // console.log('ID:', districtCost);
            // console.log('QTY:', qty);

            document.getElementById('districtId').value = districtId;
            document.getElementById('districtName').value = districtName;
            document.getElementById('districtCost').value = districtCost;

            moreModal.style.display = 'block';
        });
    });

    closeMoreModal.addEventListener('click', function() {
        moreModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == moreModal) {
            moreModal.style.display = 'none';
        }
    });
});