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
								<th width="20%">Nama</th>
								<th width="2%">:</th>	
								<th><?php echo $i->customer_nama ?></th>
							</tr>
							<tr>
								<th width="20%">Username</th>
								<th width="2%">:</th>		
								<th><?php echo $i->customer_email ?></th>
							</tr>
				        </th>
              </tr>
              </tbody>
              <tfoot>
              </tfoot>
          </table>
          </div>
        </div>
  

 