<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Category (basic) form</h2>
    <form method="POST" id='formdata'>
      <meta name="_token" content="{{csrf_token()}}" />

    <div class='all'>
    <div class="form-group">
      <label for="email">Category</label>

      <select class="form-control category" >
        <option selected>Select Category</option>
       <!--@foreach ($categories as $item) in case  you run the seeders we can use this code
        <option value="{{$item->Slug}}">{{$item->category_name}}</option>
        @endforeach-->

        <!-- in case you did not run the seeders we can use this code-->
        <option value="A">Category A</option>
        <option value="B">Category B</option>
        <option value="C">Category C</option>
      </select>
      
    </div>
  </div>
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">  </script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

  
  $(document).on('change','.category',function(e){
    e.preventDefault();
      var val = $(this).val();
      if($(this).children(":selected").attr("id") !== undefined){
      var count = $(this).children(":selected").attr("id")
       count = count+1
      }else{
        var count = 1
      }
      val = 'SUB '+(val)
      var html = ''
      html +='<div class="form-group">'
      html +='<label for="email"> Select Category</label>'
      html +='<select class="form-control category">'
      html +='<option >Select Category</option>'
      html +='<option value="'+val+'" id='+count+'>'+val+' '+count.toString().split('').join('-')+'</option>'
      data_first = val+' '+count.toString().split('').join('-')
      data_first_slug = val

      count++
      html +='<option value="'+val+'" id='+count+'>'+val+'  '+count.toString().split('').join('-')+'</option>'
      data_sec = val+' '+count.toString().split('').join('-')
      data_secound_slug = val
      html +='</select>'
      $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
      $.ajax({
        type: "post",
        url: "{{ route('categories.store')}}",
        data: {
          data_first_sub_cate_name:data_first,
          data_first_sub_cate_slug:data_first_slug,
          data_sec_sub_cate_name:data_sec,
          data_sec_sub_cate_slug:data_secound_slug,

        },
        success: function (response) {
          $('.all').append(html);   

        }
      });
    });


});
</script>

</body>
</html>
