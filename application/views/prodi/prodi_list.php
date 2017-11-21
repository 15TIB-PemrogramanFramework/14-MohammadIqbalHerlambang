<?php 
$this->load->view('templates/header');
 ?>
 <div  class="row">
 	<div class="col-md-12 text-right" >
 		<a href="<?php echo site_url('Prodi/tambah');?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"><i class="fa fa-plus-square"> Add</i></a>
 	</div>
 </div>
<div  class="row">
 <table id="example" class="table table-striped table-bordered">
 	<thead>
 		<tr>
 			<th>ID 	</th>
 			<th>Nama Prodi</th>
 			<th>Jurusan</th>
 			<th>Akreditasi</th>
 			<th>Aksi</th>

 		</tr>
 	</thead>
 	<tbody>
 	<?php foreach ($prodi as $key => $value) {?>
 		<tr>
 			<td><?php echo $value->id_prodi; ?></td>
 			<td><?php echo $value->nama_prodi; ?></td>
 			<td><?php echo $value->jurusan_prodi; ?></td>
 			<td><?php echo $value->akreditas_prodi; ?></td>
 			<td>
 				<a href="<?php echo site_url('Prodi/delete/'.$value->id_prodi);?>" class="btn btn-danger">
 					<i class="fa fa-trash"></i>
 				</a>
 				<a href="<?php echo site_url('Prodi/update/'.$value->id_prodi);?>" class="btn btn-warning">
 					<i class="fa fa-pencil-square"></i>
 				</a>
 			</td>

 		</tr>
	<?php }?>
 	</tbody>
 </table>
	
</div>
 <?php  
$this->load->view('templates/footer');
 ?>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#example').DataTable();

 	});
 </script>