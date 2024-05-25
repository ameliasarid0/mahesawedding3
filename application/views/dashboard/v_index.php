<div class="content-wrapper">
	<div class="container">
		<div class="content-header">
			<h1>
				Dashboard
				<small>Control panel</small>
			</h1>
		</div>
        <div class="sidebar">
            <div class="header"> 
                <div class="list-item">
                </div>
                <div class="illustration">
                    <img src="assets/mahesa_logo.png"" alt="">
                </div>
                </div>
            <div class="main">
                <div class="list-item">
                    <a href="#">
						<i class="far fa-2x fa-comment mr-4"></i>
                        <span class="description">Dashboard</span>
                   </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="assets/Analytics.svg" alt="" class="icon">
                        <span class="description">Analytics</span>
                   </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="assets/Category.svg" alt="" class="icon">
                        <span class="description">Category</span>
                   </a>
                </div>

                <div class="list-item">
                    <a href="#">
                        <img src="assets/Team.svg" alt="" class="icon">
                        <span class="description">Team</span>
                   </a>
                </div>

                <div class="list-item">
                    <a href="#">
                        <img src="assets/Event.svg" alt="" class="icon">
                        <span class="description">Event</span>
                   </a>
                </div>

                <div class="list-item">
                    <a href="#">
                        <img src="assets/Explore.svg" alt="" class="icon">
                        <span class="description">Explore</span>
                   </a>
                </div>

                <div class="list-item">
                    <a href="#">
                        <img src="assets/History.svg" alt="" class="icon">
                        <span class="description">History</span>
                   </a>
                </div>

                <div class="list-item">
                    <a href="#">
                        <img src="assets/Setting.svg" alt="" class="icon">
                        <span class="description">Setting</span>
                   </a>
                </div>

            </div>

        </div>

        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
        </div>
		<script src="script.js"></script>
        
    
		<div class="row">
			<div class="col-lg-6">
				
				<div class="box box-primary">
					<div class="box-body">
						<h3>Selamat Datang !</h3>

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tr>
									<th width="%">Nama</th>
									<th width="1px">:</th>
									<td>
										<?php 
										$id_user = $this->session->userdata('id');
										$user = $this->db->query("select * from admin where admin_id='$id_user'")->row();
										?>
										<p><?php echo $user->admin_nama; ?></p>
									</td>
								</tr>
								<tr>
									<th width="20%">Username</th>
									<th width="1px">:</th>
									<td><?php echo $this->session->userdata('username') ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

	</section>

</div>