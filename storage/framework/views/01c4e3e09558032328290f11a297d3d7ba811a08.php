<!DOCTYPE html>
<html>
<head>
	<title>Data Calon</title>
</head>
<body>

	<caption><h1>Data Calon</h1></caption>
	<table border="1">

<a href=" <?php echo e(route('calon.create')); ?> "><b>Tambah Data<b></a>
<br><br>
		<tr>
			<th>No</th>
			<th>Nama Calon</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Jenis Kelamin</th>
			<th>Motivasi</th>
			<th>Aksi</th>
		</tr> 
		<?php $no = 1; ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td> <?php echo e($no++); ?> </td>
			<td> <?php echo e($d->nama_calon); ?> </td>
			<td> <?php echo e($d->alamat); ?> </td>
			<td> <?php echo e($d->umur); ?> </td>
			<td> <?php echo e($d->jk); ?> </td>
			<td> <?php echo e($d->motivasi); ?> </td>
			<td>
				<form method="post" action="<?php echo e(route('calon.destroy', $d->id_calon)); ?>">
					<?php echo method_field('DELETE'); ?>
					<?php echo csrf_field(); ?>
				<a href=" <?php echo e(route('calon.edit', $d->id_calon)); ?> ">Edit</a>
				<button type="submit">Hapus</button>
				</form>



			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<br>
	<tr>
				<td><a href=" <?php echo e(('/')); ?> ">Back</a></td>
			</tr>
</body>
</html><?php /**PATH D:\xampp\htdocs\UtsLaravelSitiNuraisah\resources\views/calon/index.blade.php ENDPATH**/ ?>