<?= $this->extend('layout/template.php'); ?>


<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h1>Contact Us</h1>
			<table class="table">
				<thead>
					<th>Tipe</th>
					<th>Alamat</th>
				</thead>
		    <?php foreach($alamat as $a) : ?>
		    	
		    		<tr>
		    			<td><?= $a['tipe'] ?></td>
		    			<td><?= $a['alamat'] ?></td>
		    		</tr>
		    	
		  	<?php endforeach; ?>	
		  	</table>
		</div>
	</div>
</div>
    
<?= $this->endSection(); ?>