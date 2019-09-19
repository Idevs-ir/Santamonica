function modal( name  )
{
  $('#name-modal').css('display','none');
  $('#maincat-modal').css('display','none');
  $('#precat-modal').css('display','none');
  $('#'+name).css('display','block');
  $('.modal').css('display','block');
}
$('.close').on('click',function(){
  $('#content-modal').html('');
  $('.modal').css('display','none');
});

$('#cover').on('change', function(){
  coverPrev(this);
});
$('#file').on('change', function(){
  videoPrev(this);
});

function showItem(url)
{
  $('#content-modal').html('');
  $.ajax({
    url: url,
    type: "GET",
    processData: false,
    contentType: false,
    dataType: 'json',
    success: function (data) {
      if(data.title)
      {
        $('#content-modal').append("<h3>"+data.title+"</h3>");
      }
      if(data.facebook)
      {
        $('#content-modal').append("<h3>"+data.facebook+"</h3>");
      }
      if(data.whatsapp)
      {
        $('#content-modal').append("<h3>"+data.whatsapp+"</h3>");
      }
      if(data.telegram)
      {
        $('#content-modal').append("<h3>"+data.telegram+"</h3>");
      }
      if(data.instagram)
      {
        $('#content-modal').append("<h3>"+data.instagram+"</h3>");
      }
      if(data.video)
      {
        $('#content-modal').append("<video src='"+data.video+"' controls style='width:100%; height:300px;'></video>");
      }
      if(data.image)
      {
        $('#content-modal').append("<img src='"+data.image+"' style='width:100%; height:300px; object-fit:cover;'>");
      }
      if(data.description)
      {
        $('#content-modal').append("<p>"+data.description+"</p>");
      }
      if(data.created_at)
      {
        $('#content-modal').append("<p>تاریخ : " + data.created_at + "</p>");
      }
    }
  });
}


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

