<div class="static-sidebar-wrapper sidebar-default">
    <div class="static-sidebar">
    	<div class="sidebar">
    		<!-- user info -->
			<div class="widget">
			    <div class="widget-body">
			        <div class="userinfo">
			            <div class="avatar">
			                <img src="{{ Auth::nonsubs()->get()->gravatar }}" class="img-responsive img-circle"> 
			            </div>
			            <div class="info">
			                <span class="username" style="display: block; margin-bottom: 5px;">{{ Auth::nonsubs()->get()->customer_name }}</span>
			                <span class="useremail" style="display: block; text-transform: uppercase;">{{ Auth::nonsubs()->get()->pic_email }}</span>
			            </div>
			        </div>
			    </div>
			</div>
    		<!-- /.end user info -->

    		<!-- Main menu -->
    		<div class="widget stay-on-collapse" id="widget-sidebar">
    			<nav role="navigation" class="widget-body">
    				<ul class="acc-menu">
    					<li class="nav-separator"><span>NAVIGATION MENU</span></li>
    					<li class="{{ Request::is('nonsubs') ? 'active ' : null }}"><a href="{{ url('nonsubs') }}"><i class="ti ti-home"></i><span>Dashboard</span></a></li>

    					<!-- Ads -->
                        <li><a href="javascript:;"><i class="ti ti-layout-accordion-list"></i><span>ADS</span></a>
                        	<ul class="acc-menu">
                        		<li><a href="<?php echo url('nonsubs/ads-wizard') ?>">Buy Ads</a></li>
                        		<li><a href="<?php echo url('nonsubs/ads') ?>">Ads Management</a></li>
                        	</ul>
                        </li>

    				</ul>
    			</nav>
    		</div>
    		<!-- /.end Main menu -->

    		<!-- System status -->
    		<div class="widget" id="widget-progress">
		        <div class="widget-heading">
		            Progress
		        </div>
		        <div class="widget-body">

		            <div class="mini-progressbar">
		                <div class="clearfix mb-sm">
		                    <div class="pull-left">Bandwidth</div>
		                    <div class="pull-right">50%</div>
		                </div>
		                
		                <div class="progress">    
		                    <div class="progress-bar progress-bar-lime" style="width: 50%"></div>
		                </div>
		            </div>
		            <div class="mini-progressbar">
		                <div class="clearfix mb-sm">
		                    <div class="pull-left">Storage</div>
		                    <div class="pull-right">25%</div>
		                </div>
		                
		                <div class="progress">    
		                    <div class="progress-bar progress-bar-info" style="width: 25%"></div>
		                </div>
		            </div>

		        </div>
		    </div>
		    <!-- /.end system status -->
    	</div>
    </div>
</div>