<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Jenis Biaya
                <a href="<?php echo e(route('tambah.biaya')); ?>" class="btn btn-success btn-md float-right">Tambah Data</a>
                </div>
                
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                                <th>NO.</th>
                                <th>JENIS</th>
                                <th>BIAYA</th>
                                <th>AKSI</th>
                        </tr>
                        <?php $__currentLoopData = $biaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($b->id_biaya); ?></td>
                            <td><?php echo $b->jenis ?></td>
                            <td>Rp. <?php echo e($b->biaya); ?></td>
                            <td>
                                <a href="<?php echo e(route('edit.biaya', $b->id_biaya)); ?>" class="btn btn-xs btn-primary">EDIT</a>
                                <a href="<?php echo e(route('hapus.biaya', $b->id_biaya)); ?>" class="btn btn-xs btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cuci4o\resources\views/biaya/index.blade.php ENDPATH**/ ?>