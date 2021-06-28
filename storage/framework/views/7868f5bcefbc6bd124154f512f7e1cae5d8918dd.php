<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Biaya</div>

                <div class="card-body">
                    <form action="<?php echo e(route('update.biaya', $biaya->id_biaya)); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="from-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="">Jenis Kendaraan</label>
                                <input type="text" value=<?php echo e(is_null($biaya) ? '' : $biaya->jenis); ?> name="jenis" class="form-control" placeholder="Masukkan Jenis">
                            </div>
                            <div class="col">
                                <label for="">Biaya</label>
                                <input type="number" value=<?php echo e(is_null($biaya) ? '' : $biaya->biaya); ?> name="biaya" class="form-control" placeholder="Rp.">
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="row float-right">
                                    <div class="col">
                                    <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                    <a href="<?php echo e(route('biaya')); ?>" class="btn btn-sm btn-danger">BATAL</a>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cuci4o\resources\views/biaya/edit.blade.php ENDPATH**/ ?>