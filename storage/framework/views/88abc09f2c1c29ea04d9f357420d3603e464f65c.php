<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo e(asset('/frontend')); ?>/img/fav.png">
<link rel="stylesheet" href="<?php echo e(asset('css/fontstyle.css')); ?>">
</head>
<body>
<div id="particles-js"></div>
<form action ='/create' method ='post'>
	<input type ='hidden' name ='_token' value ='<?php echo csrf_token(); ?>'>
	<div class="wrapper">
		<div class="title">Registration Form</div>

			<?php if(session()->has('notifsuccess')): ?>
			    <div class="alert alert-success alert-block"> 
	          		<strong><?php echo e(session()->get('notifsuccess')); ?></strong>
	      		</div>
			<?php endif; ?>

			<?php if(session()->has('notifpending')): ?>
			    <div class="alert alert-info alert-block"> 
	          		<strong><?php echo e(session()->get('notifpending')); ?></strong>
	      		</div>
			<?php endif; ?>
		
			<div class="form">
				<div class="inputfield">
					<label class="control-label col-sm-2" for="name">Nama</label>
					<input type="text" class="input form-control <?php if($errors->has('name')): ?> border-danger <?php endif; ?>" id="name" placeholder="Masukan Nama Lengkap" name="name">
				</div>
				<div class="salahinput">
					<label class="control-label col-sm-4"></label>
					<?php if($errors->has('name')): ?>
						<span class="text-danger"><small><?php echo e($errors->first('name')); ?></small></span>
					<?php endif; ?>
				</div>
				<div class="inputfield">
					<label class="control-label col-sm-2" for="email">Email</label>
					<input type="text" class="input form-control" id="email" placeholder="Masukan Email" name="email">
				</div>
				<div class="salahinput">
					<label class="control-label col-sm-4"></label>
					<?php if($errors->has('email')): ?>
						<span class="text-danger"><small><?php echo e($errors->first('email')); ?></small></span>
					<?php endif; ?>
				</div>
				<div class="inputfield">
					<label class="control-label col-sm-2" for="mobile_number">Nomor Telepon</label>
					<input type="text" class="input form-control" id="mobile_number" placeholder="Masukan No Telpon" name="mobile_number">
				</div>
				<div class="salahinput">
					<label class="control-label col-sm-4"></label>
					<?php if($errors->has('mobile_number')): ?>
						<span class="text-danger"><small><?php echo e($errors->first('mobile_number')); ?></small></span>
					<?php endif; ?>
				</div>
				<div class="inputfield">
					<label class="control-label col-sm-2" for="pilihan">Webinar</label>
					<div class="custom_select">
						<select name="pilihan">
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $namaseminar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($namaseminar->id); ?>"><?php echo e($namaseminar->judul); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</div> 
				<div class="salahinput">
					<label class="control-label col-sm-4"></label>
					<?php if($errors->has('pilihan')): ?>
						<span class="text-danger"><small><?php echo e($errors->first('pilihan')); ?></small></span>
					<?php endif; ?>
				</div>
				<div class="inputfield">
					<label class="control-label col-sm-2" for="alamat">Alamat</label>
					<textarea class="textarea" type="text" id="alamat" placeholder="Masukan Alamat" name="alamat"></textarea>
				</div>
				<div class="salahinput">
					<label class="control-label col-sm-4"></label>
					<?php if($errors->has('alamat')): ?>
						<span class="text-danger"><small><?php echo e($errors->first('alamat')); ?></small></span>
					<?php endif; ?>
				</div>

	            <br><br>
				<div class="inputfield">
					<input type="submit" class="btn">
				</div>
			</div>
		</div>
	</div>
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html><?php /**PATH D:\sidanar\resources\views/daftarseminar.blade.php ENDPATH**/ ?>