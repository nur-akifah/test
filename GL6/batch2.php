									<!-- === CARA AMBIL DATA DI DROPDOWN DENGAN TABEL BERBEDA ===
									<form action="" method="POST">
										<div class="form-group">
											<label for="sel1">Select List</label>
											<select class="form-control" name="cell" id="">
												<option selected="">Select Cell</option>
												=== RA 100 === 
												<?php
												// include "connection.php";
												// $query = sqlsrv_query($conn, "SELECT * FROM dbo.TB_PD_RA100");
												// while ($data = sqlsrv_fetch_array($query)) {
												?>
													<option value="<?php echo $data['Cell']; ?>">
														<?php echo $data['Cell']; ?>
													</option>
												<?php
												// }
												?>
												 === RA 101 === 
												<?php
												// include "connection.php";
												// $query = sqlsrv_query($conn, "SELECT * FROM dbo.TB_PD_RA101");
												// while ($data = sqlsrv_fetch_array($query)) {
												// 
												?>
													<option value="<?php echo $data['Cell']; ?>">
														<?php echo $data['Cell']; ?>
													</option>
												<?php
												// }
												?>
											</select>
											 <input type="text" name="query" placeholder="Cari Data"> 
											<input type="button" name="hour" value="Current Hour">
											<input type="button" name="shift" value="Current Shift">
											<input name="tgl_mulai" value="<?php echo $tgl_mulai; ?>" type="datetime-local" id="from" class="form-control mx-sm-3" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
											<input name="tgl_selesai" value="<?php echo $tgl_selesai; ?>" type="datetime-local" id="from" class="form-control mx-sm-3" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
											<input type="submit" name="cari" value="Search">
										</div>


									</form> -->