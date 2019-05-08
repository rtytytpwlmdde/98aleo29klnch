<script>
   function printlayer(layer){
       var generator=window.open(",'name,");
       var layetext = document.getElementById(layer);
       generator.document.write(layetext.innerHTML.replace("Print Me"));
       generator.document.close();
       generator.print();
       generator.close();
   }
   </script>
<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
  <body style=""> <a href="" id="print" onclick="javascript:printlayer('div-id-name')">Klik disini untuk mencetak</a>
    <div  id="div-id-name">
    <div  >
        <div class="bg-white py-4">
        <div class=" pt-0">
            <div style="">
                <div class="" style="overflow-x:auto; ">
                <table>
                    <thead >
                    <tr >
                    <td><img src="<?php echo base_url(); ?>/assets/images/ub.png" style="max-width: 120px;"></td>
                    <td style="padding-left:1.5cm; text-align: center;">
                    <div style="text-align:center;">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</div>
                    <div style="text-align:center;">UNIVERSITAS BRAWIJAYA</div>
                    <div style="font-weight:bold">FAKULTAS EKONOMI DAN BISNIS</div>
                    <div style="font-size:12px;">Jl. MT. Haryono 165 Malang, 65145, Indonesia</div>
                    <div style="font-size:12px;">Telp. : +62-341-555000; Fax : +341-553834</div>
                    <div style="font-size:12px; ">http://feb.ub.ac.id/  <span style="color:#fff;">aaa</span> E-mail : feb@ub.ac.id</div>
                    </td>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <p style="border-bottom: 2.8px solid black; "></p>
                <p style="text-align:center; font-size:21px;">FORM PEMINJAMAN RUANG DAN SARANA PRASARANA</p>

                <table> 
                <?php 
                    $no = 1;
                    foreach ($peminjaman_barang as $u){ 
                    ?>
                    <thead >
                        <tr>
                            <td>NIM/NIK</td>
                            <td>: <?php echo $u->id_peminjam ?></td>
                            <td style="padding-left:4cm;"></td>
                            <td>Jenis Peminjaman </td>
                            <td>: Rutin</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php foreach ($dosen as $a){if ($a->NIP == $u->id_peminjam) :echo $a->Nama;endif;}  ?>
                           <?php foreach ($mahasiswa as $a){if ($a->nim == $u->id_peminjam) :echo $a->nama;endif;}  ?></td>
                            <td style="padding-left:4cm;"></td>
                            <td>Tanggal Pemakaian </td>
                            <td>: <?php $date = date_create($u->tanggal_pemakaian); echo date_format($date, "d/m/Y") ; ?></td>
                        </tr>
                        <tr>
                            <td>Penyelenggara</td>
                            <td>: <?php foreach ($penyelenggara as $a){if ($a->id_penyelenggara == $u->penyelenggara) :echo $a->penyelenggara;endif;} ?></td>
                            <td style="padding-left:4cm;"></td>
                            <td>Jam </td>
                            <td>: <?php 
                            if (strlen($u->jam_mulai) == 1){
                            echo "0".$u->jam_mulai.":00"; 
                            }else{
                                echo $u->jam_mulai.":00"; 
                            }
                            
                            ?> - 
                            <?php
                            if (strlen($u->jam_selesai) == 1){
                                echo "0".$u->jam_selesai.":00"; 
                            }else{
                                echo $u->jam_selesai.":00"; 
                            } 
                           ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="padding-left:4cm;"></td>
                            <td>Status </td>
                            <td>: <?php echo $u->status ?></td>
                        </tr>
                        
                     
                    </thead>
                    <tbody>
                    </tbody>
                    <?php } ?>
                </table>




                <p>Sarana Prasarana : </p>
                <table style="border-collapse: collapse;width: 100%; text-align:center; " border="1">
                <thead  class="">
                <tr style="">
                    <th style="width: 20%;">No</th>
                    <th>Sarana Prasarana</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    foreach ($detail_peminjaman_barang as $u){ 
                    ?>
                <tr style="">
                    <td style="width: 20%;"><?php echo $no++;?></td>
                    <td><?php foreach ($barang as $a){if ($a->id_barang == $u->id_barang) :echo $a->nama_barang;endif;}  ?></td>
                </tr>
                
                <?php } ?>
                <tr style="">
                    <td>Jumlah</td>
                    <td><?php echo $no-1; ?></td>
                </tr>
                
                </tbody>
                 </table>

                 <table style="padding-top:100px;  width: 100%; "> 
                <?php 
                    $no = 1;
                    foreach ($peminjaman_barang as $u){ 
                    ?>
                    <thead >
                        <tr>
                        <td style="width: 60%;">
                           <div>Keterangan<span style="color:#fff;"></span>: <br><?php echo $u->keterangan ?></div><br><br><br><br><br>
                          

                        <td style="width: 40%;">
                           <div>Malang, <?php echo date("d-m-Y") . "<br>"?></div>
                           <div>Kepala Tata Usaha,<br><br><br><br>
                           <?php  foreach ($ktu as $k){ ?>
                           <div><u><?php echo $k->Nama;?></u><br>
                           <div>NIP.<?php echo $k->NIP;?><br>
                            <?php } ?>
                        </td>
                        </tr>
                     
                    </thead>
                    <tbody>
                    </tbody>
                    <?php } ?>
                </table>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
  </body>
</html>