function appear(){
	var yes = document.getElementById("yes");
    var vehicle = document.getElementById("vehicle");
    vehicle.style.display = yes.checked ? "block" : "none";
}

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

function start(){

  var video = document.getElementById('video');
  if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
   navigator.mediaDevices.getUserMedia({ video: true, audio:false}).then(function(stream) {
   video.src = window.URL.createObjectURL(stream);
   video.play();
   });
  }

  var canvas = document.getElementById('canvas');
  var context = canvas.getContext('2d');
  document.getElementById('snap').addEventListener('click', function(){
  context.drawImage(video, 0, 0, 300, 250);
  var canvasURL = canvas.toDataURL();
  var img = document.getElementById("image");
  img.style.display="block"
  img.src = canvasURL;
  });
}