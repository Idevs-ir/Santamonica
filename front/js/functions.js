function modal( name )
{
  $('#name-modal').css('display','none');
  $('#maincat-modal').css('display','none');
  $('#precat-modal').css('display','none');
  $('#'+name).css('display','block');
  $('.modal').css('display','block');
}
$('.close').on('click',function(){
  $('.modal').css('display','none');
});

$('#cover').on('change', function(){
  coverPrev(this);
});
$('#file').on('change', function(){
  videoPrev(this);
});
$('#person').on('change', function(){
  personPrev(this);
});
$('#maincat').on('change', function(){
  showPreCats(this);
  showPreCatsTable(this);
});



function coverPrev(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();
      $('#video-image').html("<img src='' alt='preview' >");
    reader.onload = function(e) {
      $('#video-image img').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}


function videoPrev(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#video-prev').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

function personPrev(op)
{
  var formdata = new FormData();
  formdata.append('id', $(op).val());
  $.ajax({
    url: "../core/getPersonImage.php",
    data: formdata ,
    type: "POST",
    processData: false,
    contentType: false,
    dataType: 'text',
    success: function (data) {
      $('#person-image').html("<img src='' alt='preview' >");
      $('#person-prev img').attr('src', data);
    }
  });
}

function showPreCats(op)
{
  var type = $('#type').val();
  var formdata = new FormData();
  formdata.append('main', $(op).val());
  formdata.append('type', type);
  $.ajax({
    url: "../core/getPreCatOption.php",
    data: formdata ,
    type: "POST",
    processData: false,
    contentType: false,
    dataType: 'text',
    success: function (data) {
      $('#precat').html(data);
    }
  });
}

function showPreCatsTable(op)
{
  var type = $('#type').val();
  var formdata = new FormData();
  formdata.append('main', $(op).val());
  formdata.append('type', type);
  $.ajax({
    url: "../core/getPreCatTable.php",
    data: formdata ,
    type: "POST",
    processData: false,
    contentType: false,
    dataType: 'text',
    success: function (data) {
      $('#precat').html(data);
    }
  });
}
