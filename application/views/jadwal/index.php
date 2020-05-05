<div class="container">
    <div class="page-header">
			<div class="page-title">
				<h3>Jadwal Prodi Informatika  </h3>
			</div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="row">
            <<!-- div class="col-md-12">
                <div class="widget-content">
                <table class="table table-striped table-bordered table-hover table-checkable datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th>Ruang</th>
                            <th>Jam</th>
                            <th>Kelas</th>
                            <th>Dosen Pengawas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> -->
                    <?php
                include_once('connection.php');

                // start tampungan kelas
                $result = $con->query("
                SELECT daftar_ruangkls.ruang
                FROM daftar_ruangkls
                WHERE kelas='INFORMATIKA D3 REGULER'");

                $array_a = array();

                while($baris = $result->fetch_object()){
                    $array_a[] = $baris;
                }
                // end tampungan kelas


                // start daftar pagi dan siang
                $array_b = array();
                $array_b[0] = "pagi";
                $array_b[1] = "siang";
                // end daftar pagi dan siang

                // start daftar makul
                $result = $con->query("
                SELECT daftar_mk.daftar_makul
                FROM daftar_mk
                WHERE daftar_mk.kelas='IK-1 REGULER' OR daftar_mk.kelas='IK-2 REGULER' OR daftar_mk.kelas='IK-3 REGULER'  ");

                $array_c = array();

                while($baris = $result->fetch_object()){
                    $array_c[] = $baris;
                }
                // end daftar makul

                // start daftar kelas
                $result = $con->query("
                SELECT daftar_mk.kelas
                FROM daftar_mk
                WHERE daftar_mk.kelas='IK-1 REGULER' OR daftar_mk.kelas='IK-2 REGULER' OR daftar_mk.kelas='IK-3 REGULER'  ");

                $array_d = array();

                while($baris = $result->fetch_object()){
                    $array_d[] = $baris;
                }
                // end daftar kelas

                // start tampungan dosen
                $result = $con->query("
                SELECT daftar_dosen.nama
                FROM daftar_dosen");
                $array_f = array();

                while($baris = $result->fetch_object()){
                    $array_f[] = $baris;
                }
                // end tampungan dosen

                //start iterasi dosen
                $dosen = 0;

                // looping pagi dan siang
                for($x = 0; $x < sizeof($array_b); $x++){
                    // looping daftar makul
                    for($y=0; $y < sizeof($array_c); $y++){
                        //kondisi kelas pagi
                        if($array_b[$x] == "pagi" && (get_object_vars($array_d[$y])['kelas'] == "IK-1 REGULER" || get_object_vars($array_d[$y])['kelas'] == "IK-3 REGULER")){
                            // looping ruangan
                            
                            for($z=0; $z < sizeof($array_a); $z++)
                            {   
                                print_r(get_object_vars($array_a[$z])['ruang']);
                                echo " | ";
                                print_r($array_b[$x]);
                                echo " | ";
                                print_r(get_object_vars($array_c[$y])['daftar_makul']);
                                echo " | ";
                                // keterangan kloter
                                if($z%2==0){
                                    print_r(get_object_vars($array_d[$y])['kelas']);
                                    echo " 1-12";
                                }
                                // keterangan kloter 2
                                else{
                                    print_r(get_object_vars($array_d[$y])['kelas']);
                                    echo " 13-24";
                                }
                                echo " | ";
                                print_r(get_object_vars($array_f[$dosen])['nama']);
                                // iterasi dosen
                                $dosen++;

                                echo "<br>";
                                // kondisi satu makul, memakai 2 ruang
                                if($z%2!=0 && $y < sizeof($array_c)-1){
                                    $y++;
                                }
                                // kondisi makul sudah habis
                                elseif($z%2!=0 && $y <sizeof($array_c)){
                                    break;
                                }
                            }
                        }
                        // kondisi siang
                        elseif($array_b[$x] == "siang" && (get_object_vars($array_d[$y])['kelas'] == "IK-2 REGULER")){
                            for($z=0; $z < sizeof($array_a); $z++)
                            {
                                print_r(get_object_vars($array_a[$z])['ruang']);
                                echo " | ";
                                print_r($array_b[$x]);
                                echo " | ";
                                print_r(get_object_vars($array_c[$y])['daftar_makul']);
                                echo " | ";
                                if($z%2==0){
                                    print_r(get_object_vars($array_d[$y])['kelas']);
                                    echo " 1-12";
                                }
                                else{
                                    print_r(get_object_vars($array_d[$y])['kelas']);
                                    echo " 13-24";
                                }
                                echo " | ";
                                print_r(get_object_vars($array_f[$dosen])['nama']);
                                $dosen++;
                                
                                echo "<br>";
                                if($z%2!=0 && $y < sizeof($array_c)-1){
                                    $y++;
                                }
                                elseif($z%2!=0 && $y <sizeof($array_c)){
                                    break;
                                }
                            }
                        }
                    }
                } 
                ?>
							<tr>
								<td class="checkbox-column">
									<input type="checkbox" class="uniform">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
                </table>
            </div>
        </div>
    </div>
            
</div>
