<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	</head>
<body>
	<div class="row">
		<div class="container">	
			<div class="table-responsive">	
				<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nomor Registrasi</th>
						<th>Nama Angkatan</th>
						<th>Nama Lengkap</th>
						<th>Nama Lapangan</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Nomor Handphone</th>
						<th>Nomor Whatsapp</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($data_anggota as $member){ ?>
					<tr>
						<td><?php echo $member->nomor_registrasi?></td>
						<td><?php echo $member->nama_angkatan?></td>
						<td><?php echo $member->nama_lengkap?></td>
						<td><?php echo $member->nama_lapangan?></td>
						<td><?php echo $member->tanggal_lahir?></td>
						<td><?php echo $member->alamat?></td>
						<td><?php echo $member->nomor_handphone?></td>
						<td><?php echo $member->nomor_whatsapp?></td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
		</div>
	</div>
</body>
	


</html>
	
<script src="<?php echo base_url()?>asset/jquery-3.3.1.js"></script>
<script src="<?php echo base_url()?>asset/DataTables-1.10.18/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>asset/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url()?>asset/DataTables-1.10.18/js/dataTables.bootstrap.js"></script>
<script>
   	$(document).ready(function(){
    $('#tabel-data').DataTable();
   	});
</script>