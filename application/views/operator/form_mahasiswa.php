<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
<div class="main-content-container container-fluid px-4 mb-3">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col">
                <span class="text-uppercase page-subtitle">Import</span>
                <h3 class="page-title">Mahasiswa</h3>
              </div>
              <div class="col d-flex">
                <div class="btn-group btn-group-sm d-inline-flex ml-auto my-auto" role="group" aria-label="Table row actions">
                 
                </div>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- File Manager - Cards -->
            <div class="row">
                    <div class="col-lg-9 col-md-12">
                      <!-- Add New Post Form -->
                      <div class="mb-3">
                      <div class="file-manager file-manager-cards">
                        <div class="card card-small mb-3">
                            <div class="row no-gutters border-bottom">
                            <div class="file-manager-cards__dropzone w-100 p-2">
                                <form action="/file-upload" class="dropzone dz-clickable"><div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
                            </div>
                            </div>
                            <div class="row no-gutters p-2">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <form method="post" action="<?php echo base_url("index.php/import_mahasiswa_op/form"); ?>" enctype="multipart/form-data">
                                <div class="input-group input-group-seamless">
                                    <input type="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" class="form-control form-control-sm file-manager-cards__search" placeholder="Search files">
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex ml-lg-auto my-auto">
                                <div class="btn-group btn-group-sm mr-2 ml-lg-auto" role="group" aria-label="Table row actions">
                                    
                                </div>
								<input type="submit" class="btn btn-sm btn-accent d-inline-block ml-auto ml-lg-0" name="preview" value="Preview">
                              
                                </div>
                            </div>
                                </form>
                            </div> <br>
							<div class="px-2 py-2 row no-gutters border-bottom">
							<div>
							<?php
	if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
		if(isset($upload_error)){ // Jika proses upload gagal
			echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
			die; // stop skrip
		}
		
		// Buat sebuah tag form untuk proses import data ke database
		echo "<form method='post' action='".base_url("index.php/import_mahasiswa_op/import")."'>";
		
		// Buat sebuah div untuk alert validasi kosong
		echo "<div style='color: red;' id='kosong'>
		Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
		</div>";
		
		echo "<table border='1' cellpadding='8'>
		<tr>
			<th colspan='5'>Preview Data</th>
		</tr>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>ID Jurusan</th>
			<th>ID Prodi</th>
			<th>No Telp</th>
			<th>Password</th>
		</tr>";
		
		$numrow = 1;
		$kosong = 0;
		
		// Lakukan perulangan dari data yang ada di excel
		// $sheet adalah variabel yang dikirim dari controller
		foreach($sheet as $row){ 
			// Ambil data pada excel sesuai Kolom
			$nim = $row['A']; // Ambil data NIS
			$nama = $row['B']; // Ambil data nama
			$id_jurusan = $row['C']; // Ambil data jenis kelamin
			$id_prodi = $row['D'];
			$telpon = $row['E'];
			$password = $row['F'];// Ambil data alamat
			// Cek jika semua data tidak diisi
			if(empty($nim) && empty($nama) && empty($id_jurusan) && empty($id_prodi)&& empty($telpon) && empty($password))
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
			
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Validasi apakah semua data telah diisi
				$nis_td = ( ! empty($nim))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
				$nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
				$jk_td = ( ! empty($id_jurusan))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
				$alamat_td = ( ! empty($id_prodi))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$a_ap = ( ! empty($telpon))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
				$aa_d = ( ! empty($password))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				
				// Jika salah satu data ada yang kosong
				if(empty($nim) && empty($nama) && empty($id_jurusan) && empty($id_prodi)&& empty($telpon) && empty($password)){
					$kosong++; // Tambah 1 variabel $kosong
				}
				
				echo "<tr>";
				echo "<td".$nis_td.">".$nim."</td>";
				echo "<td".$nama_td.">".$nama."</td>";
				echo "<td".$jk_td.">".$id_jurusan."</td>";
				echo "<td".$alamat_td.">".$id_prodi."</td>";
				echo "<td".$a_ap.">".$telpon."</td>";
				echo "<td".$aa_d.">".$password."</td>";
				echo "</tr>";
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
		
		echo "</table>";
		
		// Cek apakah variabel kosong lebih dari 0
		// Jika lebih dari 0, berarti ada data yang masih kosong
		if($kosong > 0){
		?>	
			<script>
			$(document).ready(function(){
				// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
				$("#jumlah_kosong").html('<?php echo $kosong; ?>');
				
				$("#kosong").show(); // Munculkan alert validasi kosong
			});
			</script>
		<?php
		}else{ // Jika semua data sudah diisi
			echo "<hr>";
			
			// Buat sebuah tombol untuk mengimport data ke database
			echo "<button type='submit' name='import'>Import</button>";
			echo "<a href='".base_url("index.php/import_mahasiswa_op/form")."'>Cancel</a>";
		}
		
		echo "</form>";
	}
	?>
							</div>
							</div>
                        </div>
                        
                        </div>
                      </div>
                      <!-- / Add New Post Form -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                      <!-- Post Overview -->
                      <div class='card card-small mb-3'>
                        <div class="card-header border-bottom">
                          <h6 class="m-0">Keterangan</h6>
                        </div>
                        <div class='card-body p-0'>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                              <span class=""> Format nama file yang di import  <strong>  formatMahasiswa.xls</strong></span>
                            </li>
                            
                            <li class="list-group-item ">
                              <span class=""> Contoh format excel dapat di unduh pada link berikut </span> <a class="" href="<?php echo base_url("excel/formatMahasiswa.xlsx"); ?>"><i class="material-icons">attach_file</i>File</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
          
            <!-- End File Manager - Cards -->
          </div>
		  