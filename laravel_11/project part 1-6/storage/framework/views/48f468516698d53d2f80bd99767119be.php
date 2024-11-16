<a <?php echo e($attributes); ?>

    class="<?php echo e(request()->fullUrlIs(url($href))? "bg-zinc-700 text-white":"text-zinc-300 hover:bg-zinc-800 hover:text-white"); ?>block rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
    <?php echo e($slot); ?>

</a><?php /**PATH C:\Users\nadiy\Herd\project\resources\views/components/navbar/dropdown-item.blade.php ENDPATH**/ ?>