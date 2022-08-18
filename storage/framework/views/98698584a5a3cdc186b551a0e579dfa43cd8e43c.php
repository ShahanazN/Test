




<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Tasks</h2>

            </div>

            <div class="pull-right">

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task-create')): ?>

                <a class="btn btn-success" href="<?php echo e(route('task.create')); ?>"> Create New task</a>

                <?php endif; ?>

            </div>

        </div>

    </div>



    <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success">

            <p><?php echo e($message); ?></p>

        </div>

    <?php endif; ?>



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Date</th>
            <th>Start time</th>
            <th>End Time</th>
             <th>status</th>  
         <?php if(Auth::user()->hasRole('Admin')): ?>   <th>Time taken</th> <?php endif; ?>
            <th width="280px">Action</th>

        </tr>

	    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	    <tr>

	        <td><?php echo e(++$i); ?></td>

	        <td><?php echo e($product->Task_Title); ?></td>

	        <td><?php echo e($product->Date); ?></td>
            <td><?php echo e($product->Start_time); ?></td>
            <td><?php echo e($product->End_time); ?></td>
         
            <?php if($product->status == 1 ): ?>  <td>Approved</td>
            <?php elseif($product->status == 0 ): ?> 
            <td>Waiting</td>
            
              <?php endif; ?>
            
            
         <?php if(Auth::user()->hasRole('Admin')): ?>
             <td> 
                <?php
                    
                    $endTime = Carbon\Carbon::parse($product->Start_time);
                    $startTime = Carbon\Carbon::parse($product->End_time);
                    $timeleft = $startTime->diffForHumans($endTime);
                    //dd($timeleft);
                    echo $timeleft;
                ?>
           </td>  
        
         <?php endif; ?>

         
	        <td>

                <form action="<?php echo e(route('task.destroy',$product->id)); ?>" method="POST">

                    

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task-edit')): ?>

                    <a class="btn btn-primary" href="<?php echo e(url('edittask',$product->id)); ?>">Edit</a>

                    <?php endif; ?>



                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task-delete')): ?>

                    <button type="submit" class="btn btn-danger">Delete</button>

                    <?php endif; ?>


                    
                     <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                   
                     <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task-reject')): ?>

                    <button type="submit" class="btn btn-outline-warning">Task Reject</button>

                    <?php endif; ?>

                </form>
              
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('task-approve')): ?>

                      <?php if($product->status != 1 ): ?><button type="submit" class="btn btn-outline-success"><a href="<?php echo e(url('approve/'.$product->id)); ?>" style="text-decoration:none;"> Task Approve</button> <?php endif; ?> 

                    <?php endif; ?>
                 
	        </td>

	    </tr>

	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>



    <?php echo $products->links(); ?>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\sample projects\salford\resources\views/task/index.blade.php ENDPATH**/ ?>