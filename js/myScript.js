$(".clickable").click(function () {
    $(this).attr("href");
    window.location.href = href;
});
/*
$('.thumbnail').click(function(){
  	$('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
*/