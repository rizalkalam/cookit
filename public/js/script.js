function initializeSlick() {
  if (window.innerWidth <= 480) {
      if (!$(".item-list-home").hasClass('slick-initialized')) {
          $(".item-list-home").slick({
              centerMode: true,
              autoplay: false,
              dots: false,
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              
          });
      }

      if (!$(".card-list-sec3").hasClass('slick-initialized3')) {
          $(".card-list-sec3").slick({
            centerMode: true,
            autoplay: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            // slidesToShow: 1,
            // slidesToScroll: 1,
          })
      }
  } else if(window.innerWidth <= 835) {
      if (!$(".item-list-home").hasClass('slick-initialized')) {
        $(".item-list-home").slick({
            centerMode: true,
            autoplay: false,
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            
        });
      }

      if (!$(".card-list-sec3").hasClass('slick-initialized3')) {
          $(".card-list-sec3").slick({
            centerMode: false,
            autoplay: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            // slidesToShow: 1,
            // slidesToScroll: 1,
          })
      }
  } else {
    if ($(".item-list-home").hasClass('slick-initialized')) {
        $(".item-list-home").slick('unslick');
    }
  }
}






function navPopup() {
  var x = document.getElementById("nav-links");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}

// kode untuk edit img menu/bahan
(function() {
  // Function to handle image upload and preview for menu
  const loadFileMenu = event => {
      const output = document.getElementById('output_img_menu');
      const defaultImg = document.getElementById('default_img_menu');

      if (output && defaultImg) {
          output.src = URL.createObjectURL(event.target.files[0]);
          output.style.display = 'block';
          defaultImg.style.display = 'none';

          output.onload = () => {
              URL.revokeObjectURL(output.src); // Free memory
          };
      }
  };

  const clearMenuImage = () => {
      const inputImg = document.getElementById('input_img_menu');
      const output = document.getElementById('output_img_menu');
      const defaultImg = document.getElementById('default_img_menu');

      if (inputImg && output && defaultImg) {
          inputImg.value = ""; // Clear file input
          output.src = defaultImg.src; // Reset to default image
          output.style.display = 'none'; // Hide preview image
          defaultImg.style.display = 'block'; // Show default image
      }
  };

  // Adding event listeners for menu image upload
  const inputMenu = document.getElementById('input_img_menu');
  const clearBtnMenu = document.getElementById('clearBtnMenu'); // Make sure to change the id to 'clearBtnMenu'

  if (inputMenu) {
      inputMenu.addEventListener('change', loadFileMenu);
  }
  if (clearBtnMenu) {
      clearBtnMenu.addEventListener('click', clearMenuImage);
  }

  // Function to handle image upload and preview for bahan
  const loadFileBahan = event => {
      const output = document.getElementById('output_img_bahan');
      const defaultImg = document.getElementById('default_img_bahan');

      if (output && defaultImg) {
          output.src = URL.createObjectURL(event.target.files[0]);
          output.style.display = 'block';
          defaultImg.style.display = 'none';

          output.onload = () => {
              URL.revokeObjectURL(output.src); // Free memory
          };
      }
  };

  const clearBahanImage = () => {
      const inputImg = document.getElementById('input_img_bahan');
      const output = document.getElementById('output_img_bahan');
      const defaultImg = document.getElementById('default_img_bahan');

      if (inputImg && output && defaultImg) {
          inputImg.value = ""; // Clear file input
          output.src = defaultImg.src; // Reset to default image
          output.style.display = 'none'; // Hide preview image
          defaultImg.style.display = 'block'; // Show default image
      }
  };

  // Adding event listeners for bahan image upload
  const inputBahan = document.getElementById('input_img_bahan');
  const clearBtnBahan = document.getElementById('clearBtnBahan'); // Make sure to change the id to 'clearBtnBahan'

  if (inputBahan) {
      inputBahan.addEventListener('change', loadFileBahan);
  }
  if (clearBtnBahan) {
      clearBtnBahan.addEventListener('click', clearBahanImage);
  }
})();
