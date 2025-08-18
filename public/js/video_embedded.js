$(function() {
  const $openModalButtons = $('.request-loader');
  const $overlay = $('#modal-overlay');
  const $closeModal = $('.my-close');
  const $videoFrame = $('#my-video-frame');

  $openModalButtons.on('click', function() {
      let videoUrl = $(this).attr('data-video');

      // If URL already has "?", append with "&"
      if (videoUrl.includes('?')) {
          videoUrl += '&autoplay=1';
      } else {
          videoUrl += '?autoplay=1';
      }

      $videoFrame.attr('src', videoUrl);
      $overlay.css('display', 'flex');
  });

  $closeModal.on('click', function() {
      $overlay.hide();
      $videoFrame.attr('src', "");
  });

  $overlay.on('click', function(e) {
      if (e.target === this) {
          $overlay.hide();
          $videoFrame.attr('src', "");
      }
  });
});
