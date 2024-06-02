        <div class="tabular--wrapper">
          <div class="table-container">
          <table>
          <?php 
	  			  $id = $_SESSION['customer_id'];
					  $customer = $this->db->query("select * from customer where customer_id='$id'");
					  $i = $customer->row();
				  ?>
            <thead>
              <tr>
                <th colspan="3">DATA CUSTOMER</th>
              </tr>
            </thead>
            <tbody>
            <tr>
							<tr>
								<td width="20%">Nama</td>	
								<td><?php echo $i->customer_nama ?></td>
							</tr>
							<tr>
								<td width="20%">Email</td>	
								<td><?php echo $i->customer_email ?></td>
							</tr>
							<tr>
								<td>HP</td>	
								<td><?php echo $i->customer_hp ?></td>
							</tr>
							<tr>
								<td>Alamat</t>	
								<td><?php echo $i->customer_alamat ?></td>
				        </th>
              </tr>
              </tbody>
              <tfoot>
              </tfoot>
          </table>
          </div>
        </div>
    </div>

  

 