<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Hello, world!</title>
  </head>
  <body>
    @include('partials.navbar')

    @yield('container')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
    <script>
$(document).ready(function() {
    $(document).on('click', '.filter_checkbox', function () {

        var ids = [];

        var counter = 0;
        $('.filter_checkbox').each(function () {
            if ($(this).is(":checked")) {
                ids.push($(this).attr('id'));
                counter++;
            }
        });
console.log(ids);
        if (counter != 0)  
        {
            fetchCauseAgainstCategory(ids);
        }
    });
});

function fetchCauseAgainstCategory(id) {

    $('.result_div').empty();

    $.ajax({
        type: 'GET',
        url: '/project/projectFilterResult/'+ id,
        success: function (response) {
            var response = JSON.parse(response);
          
            console.log(response);
        },
        error: function(xhr){
          console.log(xhr.responseText);
        }
    });
}
      </script>
  </body>
</html>