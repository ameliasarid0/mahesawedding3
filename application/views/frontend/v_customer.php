      <br>
      <br>
      <div class="tabular--wrapper">
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th colspan="3">DATA CUSTOMER</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <?php 
							$id = $_SESSION['customer_id'];
							$customer = $this->db->query("select * from customer where customer_id='$id'");
							$i = $customer->row();
							?>
							<tr>
								<th width="20%">Nama</th>	
								<td><?php echo $i->customer_nama ?></td>
							</tr>
							<tr>
								<th width="20%">Email</th>	
								<td><?php echo $i->customer_email ?></td>
							</tr>
							<tr>
								<th>HP</th>	
								<td><?php echo $i->customer_hp ?></td>
							</tr>
							<tr>
								<th>Alamat</th>	
								<td><?php echo $i->customer_alamat ?></td>
				        </th>
                </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </form>
        </div>
        </div>
      <br>
      <br>
      <!-- Login Button  -->
      <form action="<?php echo base_url('home/keluar')?>" method="post">
        <input type="submit" class="btn btn-primary btn-md" value="Logout">
      </form>

  

 