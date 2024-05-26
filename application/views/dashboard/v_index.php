<body>
    <div class="sidebar">
        <div class="logo">
            <a href="<?php echo base_url().'dashboard' ?>">
			<img src="<?php echo base_url('assets/mahesa_logo2.png') ?>" alt="">
            </a>
        </div>
		<ul class="menu">
            <li>
                <a href="<?php echo base_url().'dashboard' ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'dashboard/admin' ?>">
                    <i class="fas fa-user"></i>
                    <span>Admin</span>
                </a>
            </li>

            <li>
				<a href="<?php echo base_url().'dashboard/customer' ?>">
                    <i class="fas fa-user"></i>
                    <span>Customer</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-th-list"></i>
                    <span>Pesanan</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-usd"></i>
                    <span>Pembayaran</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-file"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'dashboard/keluar' ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
	<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>

            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search" />
                </div>
                <img src="<?php echo base_url('img/user.jpg') ?>" alt="">
            </div>
        </div>
        <div class="card--container">
            <h3 class="main--title">Data Hari Ini</h3>
            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">payment amount</span>
                            <span class="amount--value">$500.00</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                    <span class="card-detail">**** **** **** 1234</span>
                </div>

                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">payment order</span>
                            <span class="amount--value">$200.00</span>
                        </div>
                        <i class="fas fa-list icon dark-purple"></i>
                    </div>
                    <span class="card-detail">**** **** **** 5542</span>
                </div>

                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">payment customer</span>
                            <span class="amount--value">$350.00</span>
                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>
                    <span class="card-detail">**** **** **** 8896</span>
                </div>

                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">payment proceed</span>
                            <span class="amount--value">$150.00</span>
                        </div>
                        <i class="fa-solid fa-check icon dark-blue"></i>
                    </div>
                    <span class="card-detail">**** **** **** 5542</span>
                </div>
            </div>
        </div>

        <div class="tabular--wrapper">
            <h3 class="main--title">Finance data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction Type</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-05-25</td>
                            <td>Expenses</td>
                            <td>Office Supplies</td>
                            <td>$250</td>
                            <td>Office Expenses</td>
                            <td>Pending</td>
                            <td><button>Edit</button></td>
                        </tr>

                        <tr>
                            <td>2024-05-26</td>
                            <td>Income</td>
                            <td>Client Payment</td>
                            <td>$500</td>
                            <td>Sales</td>
                            <td>Completed</td>
                            <td><button>Edit</button></td>
                        </tr>

                        <tr>
                            <td>2024-05-27</td>
                            <td>Expenses</td>
                            <td>Travel Expenses</td>
                            <td>$250</td>
                            <td>Travel</td>
                            <td>Pending</td>
                            <td><button>Edit</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Total: $1,000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>