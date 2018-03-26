<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
	  		<div class="panel-heading">
	    		<h3 class="panel-title"><b>Data Master Diagnosa</b></h3> 
	  		</div>
	  		<div class="panel-body">
		  		<?php echo anchor('master_diagnosa/tambah_diagnosa','<i class="glyphicon glyphicon-ok"></i> Tambah Master Data Diagnosa',array('class'=>'btn btn-primary btn-md'));?>
		  		<?php echo anchor('master_diagnosa/cetak','<i class="glyphicon glyphicon-print"></i> Cetak Master Data Diagnosa',array('class'=>'btn btn-primary btn-md', 'target'=>'_blank'));?>
	  			
	  			<hr>
	  			<?php echo $this->session->flashdata('pesan');?>
	  		<div id="unseen">
	    		<table class="table table-bordered table-hover table-condensed data-table order-table ">
				<thead>
					<tr>	 				
						<th>Kode ICD</th>
						<th>Nama Penyakit</th>
						<th>Kelola</th>
					</tr>
				</thead>
				<tbody>
				<?php if(empty($query)){
					echo '<tr><td colspan="6">Data tidak tersedia.</td></tr>';
					}else{
						
						foreach($query as $row) :
						?>
					<tr> 
						<td><?php echo $row->kode_icd;?></td>
						<td><?php echo $row->nama_penyakit;?></td>
						<td>
							<?php echo anchor('master_diagnosa/ubah/'.$row->diagnosa_id,'<i class="glyphicon glyphicon-pencil"></i>',array('class'=>'btn btn-sm btn-info', 'title'=>'Ubah Data'));?>
							<?php echo anchor('master_diagnosa/hapus/'.$row->diagnosa_id,'<i class="glyphicon glyphicon-trash"></i>',array('class'=>'btn btn-sm btn-danger','title'=>'Hapus Data','onclick'=>"return confirm('Yakin mau hapus data ini?')"));?>
						</td>
					</tr>	
						<?php
						endforeach;
					}
					?>
				</tbody>
			</table>
			<ul class="pagination pagination-large pull-right">
				<?php // echo $halaman;?>
			</ul>
			</div>
	 	</div>
	</div>
</div>

	</div>
</div>