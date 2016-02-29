		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
		<a href="index.php/main/dashboard" class="ajax-link ">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-envelope"></i>
		<span class="hidden-xs">Messages</span>
	</a>
	<ul class="dropdown-menu">
	<li>
		<a href="index.php/main/create_incident" class="ajax-link ajax-full">
			<i class="fa fa-envelope"></i>
			<span class="hidden-xs">Create Incident</span>
		</a>
	</li>
		<li>
		<a href="index.php/main/incidents" class="ajax-link ajax-full">
			<i class="fa fa-flag"></i>
			<span class="hidden-xs">Incidents</span>
		</a>
	</li>
	
	<li>
		<a href="index.php/main/create" class="ajax-link ajax-full">
			<i class="fa fa-envelope"></i>
			<span class="hidden-xs">Create SMS</span>
		</a>
	</li>
	<li>
		<a href="index.php/main/group_message" class="ajax-link ajax-full">
			<i class="fa fa-group"></i>
			<span class="hidden-xs">Group SMS</span>
		</a>
	</li>


	<li>
		<a href="index.php/main/messages" class="ajax-link ajax-full">
			<i class="fa fa-inbox"></i>
			<span class="hidden-xs">Inbox</span>
		</a>
	</li>

	<li>
		<a href="index.php/main/outbox" class="ajax-link ajax-full">
			<i class="fa fa-exchange"></i>
			<span class="hidden-xs">Outbox</span>
		</a>
	</li>

	<li>
		<a href="index.php/main/sent" class="ajax-link ajax-full">
			<i class="fa fa-reply"></i>
			<span class="hidden-xs">Sent</span>
		</a>
	</li>

<!--
	<li>
		<a href="index.php/main/draft" class="ajax-link ajax-full">
			<i class="fa fa-pencil"></i>
			<span class="hidden-xs">Drafts</span>
		</a>
	</li>


	<li>
		<a href="index.php/main/trash" class="ajax-link ajax-full">
			<i class="fa fa-trash-o"></i>
			<span class="hidden-xs">Trash</span>
		</a>
	</li>

-->
</ul>
</li>


<li class="dropdown">
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-list"></i>
		<span class="hidden-xs">Contacts</span>
	</a>
	<ul class="dropdown-menu">
		<li>
			<a href="index.php/main/contacts" class="ajax-link ajax-full">
				<i class="fa fa-book"></i>
				<span class="hidden-xs">Contact Lists</span>
			</a>
		</li>
		<li>
			<a href="index.php/main/create_contact" class="ajax-link ajax-full">
				<i class="fa fa-user"></i>
				<span class="hidden-xs">Create Contact</span>
			</a>
		</li>
		<li>
			<a href="index.php/main/create_group" class="ajax-link ajax-full">
				<i class="fa fa-users"></i>
				<span class="hidden-xs">Create Group</span>
			</a>
		</li>
		</ul>
</li>

			<li>
			<a href="index.php/main/modems" class="ajax-link ajax-full">
				<i class="fa fa-phone"></i>
				<span class="hidden-xs">Modems</span>
			</a>
		</li>
	

<?php if ($usertype == "admin") { ?>

<li class="dropdown">
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-gears"></i>
		<span class="hidden-xs">Settings</span>
	</a>
	<ul class="dropdown-menu">
		<li>
			<a href="index.php/main/users" class="ajax-link ajax-full">
				<i class="fa fa-file-text"></i>
				<span class="hidden-xs">User Lists</span>
			</a>
		</li>
		<li>
			<a href="index.php/main/create_user" class="ajax-link ajax-full">
				<i class="fa fa-user"></i>
				<span class="hidden-xs">Create User</span>
			</a>
		</li>
		<li>
			<a href="index.php/main/incident_types" class="ajax-link ajax-full">
				<i class="fa fa-folder"></i>
				<span class="hidden-xs">Incident Type Lists</span>
			</a>
		</li>
		<li>
			<a href="index.php/main/add_operation_type" class="ajax-link ajax-full">
				<i class="fa fa-folder"></i>
				<span class="hidden-xs">Operation Type</span>
			</a>
		</li>
	
		<li>
			<a href="index.php/main/create_incident_type" class="ajax-link ajax-full">
				<i class="fa fa-eye"></i>
				<span class="hidden-xs">Create Incident Type </span>
			</a>
		</li>
		<li>
			<a href="index.php/main/reference" class="ajax-link ajax-full">
				<i class="fa fa-tag"></i>
				<span class="hidden-xs">Reference Number</span>
			</a>
		</li>
	
		<li>
			<a href="index.php/main/database_settings" class="ajax-link ajax-full">
				<i class="fa fa-save"></i>
				<span class="hidden-xs">Database</span>
			</a>
		</li>
		</ul>
</li>

<?php } ?>

<!--

<li class="dropdown">
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-bar-chart-o"></i>
		<span class="hidden-xs">Charts</span>
	</a>
	<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/charts_xcharts.html">xCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_amcharts.html">AmCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_chartist.html">Chartist</a></li>
						<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Tables</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/tables_simple.html">Simple Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_datatables.html">Data Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Forms</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/forms_elements.html">Elements</a></li>
						<li><a class="ajax-link" href="ajax/forms_layouts.html">Layouts</a></li>
						<li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">UI Elements</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/ui_grid.html">Grid</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
						<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
						<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Pages</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="ajax/page_login.html">Login</a></li>
						<li><a href="ajax/page_register.html">Register</a></li>
						<li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>
						<li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>
						<li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>
						<li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>
						<li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>
						<li><a class="ajax-link" href="ajax/page_product.html">Product</a></li>
						<li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>
						<li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>
						<li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
						<li><a href="ajax/page_500.html">Error 500</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-map-marker"></i>
						<span class="hidden-xs">Maps</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/maps.html">OpenStreetMap</a></li>
						<li><a class="ajax-link" href="ajax/map_fullscreen.html">Fullscreen map</a></li>
						<li><a class="ajax-link" href="ajax/map_leaflet.html">Leaflet</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Gallery</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/gallery_simple.html">Simple Gallery</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>
				<li>
					 <a class="ajax-link" href="ajax/typography.html">
						 <i class="fa fa-font"></i>
						 <span class="hidden-xs">Typography</span>
					</a>
				</li>
				 <li>
					<a class="ajax-link" href="ajax/calendar.html">
						 <i class="fa fa-calendar"></i>
						 <span class="hidden-xs">Calendar</span>
					</a>
				 </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Multilevel menu</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">First level menu</a></li>
						<li><a href="#">First level menu</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<i class="fa fa-plus-square"></i>
								<span class="hidden-xs">Second level menu group</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Second level menu</a></li>
								<li><a href="#">Second level menu</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">
										<i class="fa fa-plus-square"></i>
										<span class="hidden-xs">Three level menu group</span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Three level menu</a></li>
										<li><a href="#">Three level menu</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle">
												<i class="fa fa-plus-square"></i>
												<span class="hidden-xs">Four level menu group</span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="#">Four level menu</a></li>
												<li><a href="#">Four level menu</a></li>
												<li class="dropdown">
													<a href="#" class="dropdown-toggle">
														<i class="fa fa-plus-square"></i>
														<span class="hidden-xs">Five level menu group</span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#">Five level menu</a></li>
														<li><a href="#">Five level menu</a></li>
														<li class="dropdown">
															<a href="#" class="dropdown-toggle">
																<i class="fa fa-plus-square"></i>
																<span class="hidden-xs">Six level menu group</span>
															</a>
															<ul class="dropdown-menu">
																<li><a href="#">Six level menu</a></li>
																<li><a href="#">Six level menu</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#">Three level menu</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
-->
			</ul>
		</div>



