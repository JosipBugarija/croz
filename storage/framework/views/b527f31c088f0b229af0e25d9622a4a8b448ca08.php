<?php $__env->startSection('title', 'New Joke'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Joke</h3>
                        </div>

                        <!-- form start -->
                        <form role="form" action="<?php echo e(route('jokes.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('POST')); ?>


                            <div class="card-body">
                                <div class="form-group">
                                    <label>Content <span class="text-danger">*</span></label>
                                    <textarea name="content" rows="8" class="form-control" placeholder="Content"><?php echo e(old('content')); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>

                                    <select class="form-control" data-style="btn-default" name="category_id">
                                        <option selected disabled>Select...</option>

                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($c->id); ?>" <?php echo e(old('category_id') == $c->id ? 'selected':''); ?>><?php echo e($c->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer py-3">
                                <button type="submit" class="btn btn-dark pull-right"><i class="fa fa-save mr-1"></i> Save changes</button>
                                <a href="<?php echo e(route('jokes.index')); ?>" class="btn btn-default pull-right mr-1">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>