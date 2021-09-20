
<?php $__env->startSection('content'); ?>

          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

           <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data LowKer<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <a href=" <?php echo e(route('lowker1.create')); ?> " class="btn btn-success"><i class="fa fa-plus"></i></a>
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>                          
                          <th>Posisi </th>                     
                          <th>Perusahaan </th>
                          <th>Lokasi</th>
                          <th>Gaji</th>
                          <th>Level Pekerjaan </th>
                          <th>Tipe Pekerjaan </th>
                          <th>Pendidikan</th>
                          <th>Kualifikasi</th>
                          <th>Deskripsi Pekerjaan</th>
                          <th>Di Posting pada</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;?>
                        <?php $__currentLoopData = $lowker1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($a->posisi); ?></td>
                                <td><?php echo e($a->perusahaan); ?> </td>
                                <td><?php echo e($a->lokasi); ?></td>
                                <td><?php echo e($a->gaji); ?></td>
                                <td><?php echo e($a->level); ?> </td>
                                <td><?php echo e($a->tipe); ?></td>
                                <td><?php echo e($a->pendidikan); ?></td>
                                <td><?php echo e($a->kualifikasi); ?></td>
                                <td><?php echo e($a->deskripsi); ?></td>
                                <td><?php echo e($a->created_at); ?></td>
                                
                                 
                               <td>
                                  <form method="post" action=" <?php echo e(route('lowker1.destroy', $a->id_lowker)); ?> ">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                        
                                  <a href=" <?php echo e(route('lowker1.edit', $a->id_lowker)); ?> " class="btn btn-primary "><i class="fa fa-pencil"></i></a>

                                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                  </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           

                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\findJob\resources\views/admin/dataLowker/index.blade.php ENDPATH**/ ?>