//category
function category(category) {
  var query = category;
  var _token = $('input[name="_token"]').val();
  
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });

  $.ajax({
    url:"/product/category",
    method:"post",
    data:{query:query, _token:_token},
    success:function(data){
      $('.product-container').html(data);
    }
  });
}
