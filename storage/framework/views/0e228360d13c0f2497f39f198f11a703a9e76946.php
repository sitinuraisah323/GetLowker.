

<?php $__env->startSection('content'); ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Profil</li>
        </ol>
        <h2>Profil</h2>

      </div>
    </section><!-- End Breadcrumbs -->

     <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">
        
          
 <!-- ======= Contact Section ======= -->
       <div> 
        <div class="contact container row" data-aos="fade-up" data-aos-delay="100">

          <div class="card-body">
          <?php if(count($errors) > 0): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert alert-warning"><?php echo e($error); ?></div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          <?php if($message = Session::get('error')): ?>
              <div class="alert alert-warning">
                  <p><?php echo e($message); ?></p>
              </div>
          <?php endif; ?>
          <?php if($message = Session::get('success')): ?>
              <div class="alert alert-success">
                  <p><?php echo e($message); ?></p>
              </div>
          <?php endif; ?>
        </div>

          <div class="col-lg-12">
             <?php $__currentLoopData = $edit_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('profil.update', $r->id_profil)); ?>" method="post" class="php-email-form">
              <?php echo method_field('PUT'); ?>
              <?php echo csrf_field(); ?>
              <div>
                <div class="section-title">
                  <h2>Ubah Profil</h2>
                </div>
              </div>
             
              <input type="hidden" class="form-control" value=" <?php echo e($r->id_profil); ?> " name="id_profil" id="id" placeholder="id" required>
              <div class="row">
                 <input type="hidden" class="form-control" value=" <?php echo e($r->id); ?> " name="id" id="id" placeholder="id" required>
                 <label class="col-2 form-group">Jenis Kelamin</label>:
                <div class="col-2 form-group">
                 
                  <input type="radio" name="jenis_kelamin" class="" value="Laki-laki" placeholder="Your Jenis" required> Laki-Laki
                </div>
                <div class="col-2 form-group">
                  <input type="radio" name="jenis_kelamin" class="" value="Perempuan" placeholder="Your Jenis" required> Perempuan
                </div>
              </div>
            <div class="row">
              <div class="col-6 form-group">
                <input type="file" class="form-control" value=" <?php echo e($r->foto); ?> " name="foto" id="foto" placeholder="Foto" required>
              </div>
              <div class="col-6 form-group">
                <input type="text" class="form-control" value=" <?php echo e($r->no_hp); ?> " name="no_hp" id="no_hp" placeholder="Nomor Handphone" required>
              </div>
            </div>  
            <div class="row">
              <div class="col-6 form-group">
                <input type="text" class="form-control" value=" <?php echo e($r->tempat_lahir); ?> " name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
              </div>
              <div class="col-6 form-group">
                <input type="date" class="form-control" value=" <?php echo e($r->tanggal_lahir); ?> " name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
              </div>
            </div>

            
             <div class="row">
              <div class="col-12 form-group">
                <input type="text" class="form-control" value=" <?php echo e($r->alamat); ?> " name="alamat" id="alamat" placeholder="Alamat" required>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="my-3">
                
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-succes">Ubah</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



       </div>
     </div>
      </div>
    </section>

  </main><!-- End #main -->


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\findJob\resources\views/user/edit_profil.blade.php ENDPATH**/ ?>