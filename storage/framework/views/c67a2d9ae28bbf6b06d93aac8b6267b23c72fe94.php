<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data </div>
                
                <div class="card-body">
                  
                   <form action="" method="POST" class="form-item">
                        <div class="form-group">
                            <label>No</label>
                            <input type="text" class="form-control col-sm-9" value="" placeholder="Masukkan No">
                        </div>

                        <div class="form-group">
                            <label>Masukkan Jenis</label>
                            <input type="text" class="form-control col-sm-9" value="" placeholder="Masukkan Jenis">
                        </div>

                        <div class="form-group">
                            <label>Masukkan Biaya</label>
                            <input type="text" class="form-control col-sm-9" value="" placeholder="Masukkan Jenis">
                        </div>
                   </form>
                                <a href="#" class="btn btn-xs btn-primary">EDIT</a>
                                <a href="#" class="btn btn-xs btn-danger">HAPUS</a>
                            </td><br><br>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cuci4o\resources\views/biaya/tambah.blade.php ENDPATH**/ ?>