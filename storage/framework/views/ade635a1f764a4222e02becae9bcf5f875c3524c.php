<!DOCTYPE html>
<html>
 <head>
  <title>Laravel Pagination using Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel Pagination using Ajax</h3><br />
   <form class="form-group">
    <input class="form-control" type="search" id="search" name="search" placeholder="search customer data"/>
   </form>
   <div id="table_data">
    <?php echo $__env->make('divs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
    fetch_customer_data();
 
    function fetch_customer_data(query = '')
    {
        $.ajax({
            url:"<?php echo e(route('ajaxPagination')); ?>",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
    }
 
    $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        fetch_customer_data(query);
    });
});
</script><?php /**PATH /var/www/html/laravel/shopAjax/resources/views/ajaxPagination.blade.php ENDPATH**/ ?>