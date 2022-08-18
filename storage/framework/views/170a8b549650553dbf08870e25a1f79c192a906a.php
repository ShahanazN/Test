



<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Task</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(route('task.index')); ?>"> Back</a>

            </div>

        </div>

    </div>



    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>



    <form action="<?php echo e(route('task.update',$product->id)); ?>" method="POST">

    	<?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>



         

 <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Name:</strong>

		            <input type="text" name="Task_Title" value="<?php echo e($product->Task_Title); ?>" class="form-control" placeholder="Name">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Date</strong>

		            <input type="date" name="Date" value="<?php echo e($product->Date); ?>" class="form-control" placeholder="Name">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Start time</strong>

		            <input type="time" name="Start_time" value="<?php echo e($product->Start_time); ?>" class="form-control" placeholder="Name">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>End time</strong>

		            <input type="time" name="End_time"value="<?php echo e($product->End_time); ?>" class="form-control" placeholder="Name">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sample projects\salford\resources\views/task/edit.blade.php ENDPATH**/ ?>