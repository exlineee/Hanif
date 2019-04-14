$(document).ready(function() {
  alert("Test");
  var i = $('fieldset').size() + 1;
  $('a.add').click(function() {
    $('<fieldset><label>Upload Gambar Ke-'+i+':</label><br /><input type="file" name="picture[]" size="40" /> <span>File: jpg, jpeg, png atau gif</span><br /><label>Deskripsi Gambar:</label><br /><input type="text" name="picture_desc[]" size="90" /><br /></fieldset><br />').animate({ opacity: "show" }, "slow").appendTo('#inputs');
    i++;
  });
  $('a.remove').click(function() {
  if(i > 2) {
    $('fieldset:last').animate({opacity:"hide"}, "slow").remove();
    i--;
  }
  });
  $('a.reset').click(function() {
  while(i > 2) {
    $('input:last').remove();
    i--;
  }
  });
});
