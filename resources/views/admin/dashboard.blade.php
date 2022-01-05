<x-admin.header />
<x-admin.nav />
<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Admin Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard </li>
							</ol>
						</div>
						<!--page-header closed-->
<div class="row">
	<x-admin.dashboard title="Total Order" count=100 color="card bg-danger" icon="fa-cart-plus "/>
	<x-admin.dashboard title="Total Income" count=1050 color="card bg-success" icon="fa-line-chart "/>
	<x-admin.dashboard title="Total Sales" count=20 color="card bg-info" icon="fa-paper-plane"/>
	<x-admin.dashboard title="Total Profit" count=1600 color="card bg-warning" icon="fa-credit-card"/>
</div>
<x-admin.pie-chart />
<x-admin.report-list  />


</section>
</div>

<x-admin.footer />