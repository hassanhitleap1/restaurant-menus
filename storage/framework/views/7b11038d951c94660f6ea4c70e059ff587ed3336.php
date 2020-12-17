<div class="form-group<?php echo e($errors->has($id) ? ' has-danger' : ''); ?>">
    <br />
    <label class="form-control-label"><?php echo e(__($name)); ?></label>  
   
    <select class="form-control col-sm"  name="<?php echo e($id); ?>" id="<?php echo e($id); ?>">
        <option disabled selected value> <?php echo e(__('Select')." ".$name); ?> </option>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($value)&&$key==$value): ?>
                <option value="<?php echo e($key); ?>" selected><?php echo e($item); ?></option>
            <?php else: ?>
                <option value="<?php echo e($key); ?>"><?php echo e($item); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    
    <?php if(isset($additionalInfo)): ?>
        <small class="text-muted"><strong><?php echo e(__($additionalInfo)); ?></strong></small>
    <?php endif; ?>
    <?php if($errors->has($id)): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first($id)); ?></strong>
        </span>
    <?php endif; ?>
</div>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/partials/select.blade.php ENDPATH**/ ?>