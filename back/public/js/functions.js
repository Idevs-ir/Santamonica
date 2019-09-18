function modal( name  )
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
      if(data.video)
      {
        $('#content-modal').append("<video src='"+data.video+"' controls></video>");
      }
      if(data.image)
      {
        $('#content-modal').append("<img src='"+data.image+"' >");
      }
      if(data.description)
      {
        $('#content-modal').append("<p>"+data.title+"</p>");
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

