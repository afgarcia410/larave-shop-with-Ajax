<div class="table-responsive">
     <table class="table table-striped table-bordered">
      <tr>
       <th width="5%">ID</th>
       <th width="38%">Name</th>
       <th width="19%">Description</th>
       <th width="20%">Price</th>
       <th width="20%">Image</th>
      </tr>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
       <td><?php echo e($products->id); ?></td>
       <td><?php echo e($products->name); ?></td>
       <td><?php echo e($products->description); ?></td>
       <td><?php echo e($products->price); ?></td>
       <td><?php echo e($products->image); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </table>

     <?php echo $data->links(); ?>


    </div><?php /**PATH /var/www/html/laravel/shopAjax/resources/views/divs.blade.php ENDPATH**/ ?>