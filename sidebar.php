<?php
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
?>
<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="img/logo.png" alt="Le Rouge Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="header-menu">General</li>
							<li  class="sidebar-dropdown <?php if($url == 'index.php' || $url == 'sales-dashboard.php' || $url == 'crm-dashboard.php' || $url == 'ecommerce-dashboard.php') echo 'active '; ?>">
								<a href="#" >
									<i class="icon-devices_other"></i>
									<span class="menu-text">Dashboards</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
									     <li >
											<a href="index.php" class="<?php if($url == 'index.php') echo 'current-page'; ?>">Admin Dashboard</a>
										</li>
										 <li >
											<a href="sales-dashboard.php" class="<?php if($url == 'sales-dashboard.php') echo 'current-page'; ?>">Sales Dashboard</a>
										</li>
										 <li >
											<a href="crm-dashboard.php" class="<?php if($url == 'crm-dashboard.php') echo 'current-page'; ?>">CRM Dashboard</a>
										</li>
										 <li >
											<a href="ecommerce-dashboard.php" class="<?php if($url == 'ecommerce-dashboard.php') echo 'current-page'; ?>">Ecommerce Dashboard</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'chat.php') echo 'active'; ?>">
								<a href="chat.php">
									<i class="icon-message-circle"></i>
									<span class="menu-text" >Chat</span>
								</a>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'calendar.php' || $url == 'calendar-external-draggable.php' || $url == 'calendar-google.php' || $url == 'calendar-list-view.php' || $url == 'calendar-selectable.php' || $url == 'calendar-week-numbers.php') echo 'active '; ?>">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Calendars</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li >
											<a href="calendar.php" class="<?php if($url == 'calendar.php') echo 'current-page'; ?>">Daygrid View</a>
										</li>
										<li>
											<a href="calendar-external-draggable.php" class="<?php if($url == 'calendar-external-draggable.php') echo 'current-page'; ?>">External Draggable</a>
										</li>
										<li>
											<a href="calendar-google.php" class="<?php if($url == 'calendar-google.php') echo 'current-page'; ?>">Google Calendar</a>
										</li>
										<li>
											<a href="calendar-list-view.php" class="<?php if($url == 'calendar-list-view.php') echo 'current-page'; ?>">List View</a>
										</li>
										<li>
											<a href="calendar-selectable.php" class="<?php if($url == 'calendar-selectable.php') echo 'current-page'; ?>">Selectable</a>
										</li>
										<li>
											<a href="calendar-week-numbers.php" class="<?php if($url == 'calendar-week-numbers.php') echo 'current-page'; ?>">Week Numbers</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'contacts.php') echo 'active'; ?>">
								<a href="contacts.php">
									<i class="icon-phone1"></i>
									<span class="menu-text">Contacts</span>
								</a>
							</li>
							<li class="<?php if($url == 'documents.php') echo 'active'; ?>">
								<a href="documents.php">
									<i class="icon-documents"></i>
									<span class="menu-text">Documents</span>
								</a>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'default-layout.php' || $url == 'slim-sidebar.php' || $url == 'card-options.php' || $url == 'drag-drop-cards.php') echo 'active '; ?>">
								<a href="#">
									<i class="icon-layout"></i>
									<span class="menu-text">Layouts</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
									    <li>
											<a href="default-layout.php" class="<?php if($url == 'default-layout.php') echo 'current-page'; ?>">Default Layout</a>
										</li>
										<li>
											<a href="slim-sidebar.php" class="<?php if($url == 'slim-sidebar.php') echo 'current-page'; ?>">Slim Layout</a>
										</li>
										<li>
											<a href="card-options.php" class="<?php if($url == 'card-options.php') echo 'current-page'; ?>">Card Options</a>
										</li>
										<li>
											<a href="drag-drop-cards.php" class="<?php if($url == 'drag-drop-cards.php') echo 'current-page'; ?>">Drag and Drop Cards</a>
										</li>
									</ul>
								</div>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'account-settings.php' || $url == 'blog.php' || $url == 'cards.php' || $url == 'datepickers.php'  || $url == 'faq.php' || $url == 'invoice.php' || $url == 'search-results.php' || $url == 'timeline.php' || $url == 'comments.php') echo 'active '; ?>">
								<a href="#">
									<i class="icon-book-open"></i>
									<span class="menu-text">Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										
										<li>
											<a href="account-settings.php" class="<?php if($url == 'account-settings.php') echo 'current-page'; ?>">Account Settings</a>
										</li>
										<li>
											<a href="blog.php" class="<?php if($url == 'blog.php') echo 'current-page'; ?>">Blog</a>
										</li>
										<li>
											<a href="cards.php" class="<?php if($url == 'cards.php') echo 'current-page'; ?>">Cards</a>
										</li>
										<li>
											<a href="datepickers.php" class="<?php if($url == 'datepickers.php') echo 'current-page'; ?>">Datepickers</a>
										</li>
										<li>
											<a href="faq.php" class="<?php if($url == 'faq.php') echo 'current-page'; ?>">Faq</a>
										</li>
										<li>
											<a href="invoice.php" class="<?php if($url == 'invoice.php') echo 'current-page'; ?>">Invoice</a>
										</li>
										<li>
											<a href="search-results.php" class="<?php if($url == 'search-results.php') echo 'current-page'; ?>">Search Results</a>
										</li>
										<li>
											<a href="timeline.php" class="<?php if($url == 'timeline.php') echo 'current-page'; ?>">Timeline</a>
										</li>
										<li>
											<a href="comments.php" class="<?php if($url == 'comments.php') echo 'current-page'; ?>">User Comments</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'pricing.php') echo 'active'; ?>">
								<a href="pricing.php">
									<i class="icon-dollar-sign"></i>
									<span class="menu-text">Pricing Plans</span>
								</a>
							</li>
							<li class="<?php if($url == 'user-profile.php') echo 'active'; ?>">
								<a href="user-profile.php">
									<i class="icon-user1"></i>
									<span class="menu-text">User Profile</span>
								</a>
							</li>
							<li class="<?php if($url == 'tasks.php') echo 'active'; ?>">
								<a href="tasks.php">
									<i class="icon-check-circle"></i>
									<span class="menu-text">Tasks</span>
								</a>
							</li>
							<li class="header-menu">Forms</li>
							<li  class="sidebar-dropdown <?php if($url == 'form-inputs.php' || $url == 'input-groups.php' || $url == 'check-radio.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Inputs</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="form-inputs.php" class="<?php if($url == 'form-inputs.php') echo 'current-page'; ?>">Form Inputs</a>
										</li>
										<li>
											<a href="input-groups.php" class="<?php if($url == 'input-groups.php') echo 'current-page'; ?>">Input Groups</a>
										</li>
										<li>
											<a href="check-radio.php" class="<?php if($url == 'check-radio.php') echo 'current-page'; ?>">Check Boxes</a>
										</li>
									</ul>
								</div>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'contact.php' || $url == 'contact2.php' || $url == 'contact3.php' || $url == 'contact4.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-file-text"></i>
									<span class="menu-text">Contact Forms</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="contact.php" class="<?php if($url == 'contact.php') echo 'current-page'; ?>">Contact Form</a>
										</li>
										<li>
											<a href="contact2.php" class="<?php if($url == 'contact2.php') echo 'current-page'; ?>">Contact Form #2</a>
										</li>
										<li>
											<a href="contact3.php" class="<?php if($url == 'contact3.php') echo 'current-page'; ?>">Contact Form #3</a>
										</li>
										<li>
											<a href="contact4.php" class="<?php if($url == 'contact4.php') echo 'current-page'; ?>">Contact Form #4</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'bs-select.php') echo 'active'; ?>">
								<a href="bs-select.php">
									<i class="icon-pocket"></i>
									<span class="menu-text">BS Select</span>
								</a>
							</li>
							<li class="<?php if($url == 'editor.php') echo 'active'; ?>">
								<a href="editor.php">
									<i class="icon-edit-3"></i>
									<span class="menu-text">Editor</span>
								</a>
							</li>
							<li class="<?php if($url == 'input-masks.php') echo 'active'; ?>">
								<a href="input-masks.php">
									<i class="icon-eye-off"></i>
									<span class="menu-text">Input Masks</span>
								</a>
							</li>
							<li class="<?php if($url == 'input-tags.php') echo 'active'; ?>">
								<a href="input-tags.php">
									<i class="icon-terminal"></i>
									<span class="menu-text">Input Tags</span>
								</a>
							</li>
							<li class="<?php if($url == 'range-sliders.php') echo 'active'; ?>">
								<a href="range-sliders.php">
									<i class="icon-toggle-right"></i>
									<span class="menu-text">Range Sliders</span>
								</a>
							</li>
							<li class="<?php if($url == 'wizard.php') echo 'active'; ?>">
								<a href="wizard.php">
									<i class="icon-triangle"></i>
									<span class="menu-text">Wizards</span>
								</a>
							</li>
							<li class="header-menu">UI Elements</li>
							<li  class="sidebar-dropdown <?php if($url == 'accordion.php' || $url == 'accordion-icons.php' || $url == 'accordion-arrows.php' || $url == 'accordion-lg.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-list2"></i>
									<span class="menu-text">Accordions</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="accordion.php" class="<?php if($url == 'accordion.php') echo 'current-page'; ?>">Accordion</a>
										</li>
										<li>
											<a href="accordion-icons.php" class="<?php if($url == 'accordion-icons.php') echo 'current-page'; ?>">Accordion Icons</a>
										</li>
										<li>
											<a href="accordion-arrows.php" class="<?php if($url == 'accordion-arrows.php') echo 'current-page'; ?>">Accordion Arrows</a>
										</li>
										<li>
											<a href="accordion-lg.php" class="<?php if($url == 'accordion-lg.php') echo 'current-page'; ?>">Accordion Large</a>
										</li>
									</ul>
								</div>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'buttons.php' || $url == 'button-groups.php' || $url == 'dropdowns.php'  ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-disc"></i>
									<span class="menu-text">Buttons</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="buttons.php" class="<?php if($url == 'buttons.php') echo 'current-page'; ?>">Buttons</a>
										</li>
										<li>
											<a href="button-groups.php" class="<?php if($url == 'button-groups.php') echo 'current-page'; ?>">Button Groups</a>
										</li>
										<li>
											<a href="dropdowns.php" class="<?php if($url == 'dropdowns.php') echo 'current-page'; ?>">Dropdowns</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'carousel.php') echo 'active'; ?>">
								<a href="carousel.php">
									<i class="icon-toll"></i>
									<span class="menu-text">Carousels</span>
								</a>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'jumbotron.php' || $url == 'labels-badges.php' || $url == 'list-items.php' || $url == 'pagination.php' || $url == 'progress.php' || $url == 'pills.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-star2"></i>
									<span class="menu-text">Components</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="jumbotron.php" class="<?php if($url == 'jumbotron.php') echo 'current-page'; ?>">Jumbotron</a>
										</li>
										<li>
											<a href="labels-badges.php" class="<?php if($url == 'labels-badges.php') echo 'current-page'; ?>">Labels &amp; Badges</a>
										</li>
										<li>
											<a href="list-items.php" class="<?php if($url == 'list-items.php') echo 'current-page'; ?>">List Items</a>
										</li>
										<li>
											<a href="pagination.php" class="<?php if($url == 'pagination.php') echo 'current-page'; ?>">Paginations</a>
										</li>
										<li>
											<a href="progress.php" class="<?php if($url == 'progress.php') echo 'current-page'; ?>">Progress Bars</a>
										</li>
										<li>
											<a href="pills.php" class="<?php if($url == 'pills.php') echo 'current-page'; ?>">Pills</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'gallery.php') echo 'active'; ?>">
								<a href="gallery.php">
									<i class="icon-image"></i>
									<span class="menu-text">Gallery</span>
								</a>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'grid.php' || $url == 'grid-doc.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-box"></i>
									<span class="menu-text">Grid</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="grid.php" class="<?php if($url == 'grid.php') echo 'current-page'; ?>">Grid</a>
										</li>
										<li>
											<a href="grid-doc.php" class="<?php if($url == 'grid-doc.php') echo 'current-page'; ?>">Grid Doc</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'icons.php') echo 'active'; ?>">
								<a href="icons.php">
									<i class="icon-timer"></i>
									<span class="menu-text">Icons</span>
								</a>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'avatars.php' || $url == 'media-objects.php' || $url == 'images.php' || $url == 'text-avatars.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-image"></i>
									<span class="menu-text">Images</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="avatars.php" class="<?php if($url == 'avatars.php') echo 'current-page'; ?>">Avatars</a>
										</li>
										<li>
											<a href="media-objects.php" class="<?php if($url == 'media-objects.php') echo 'current-page'; ?>">Media Objects</a>
										</li>
										<li>
											<a href="images.php" class="<?php if($url == 'images.php') echo 'current-page'; ?>">Thumbnails</a>
										</li>
										<li>
											<a href="text-avatars.php" class="<?php if($url == 'text-avatars.php') echo 'current-page'; ?>">Text Avatars</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'modals.php') echo 'active'; ?>">
								<a href="modals.php">
									<i class="icon-credit-card"></i>
									<span class="menu-text">Modals</span>
								</a>
							</li>
							<li class="<?php if($url == 'alerts.php') echo 'active'; ?>">
								<a href="alerts.php">
									<i class="icon-bell"></i>
									<span class="menu-text">Notifications</span>
								</a>
							</li>
							<li class="<?php if($url == 'spinners.php') echo 'active'; ?>">
								<a href="spinners.php">
									<i class="icon-circular-graph"></i>
									<span class="menu-text">Spinners</span>
								</a>
							</li>
							<li class="<?php if($url == 'tooltips.php') echo 'active'; ?>">
								<a href="tooltips.php">
									<i class="icon-change_history"></i>
									<span class="menu-text">Tooltips</span>
								</a>
							</li>
							<li class="<?php if($url == 'typography.php') echo 'active'; ?>">
								<a href="typography.php">
									<i class="icon-sort_by_alpha"></i>
									<span class="menu-text">Typography</span>
								</a>
							</li>
							<li class="header-menu">Tables</li>
							<li  class="sidebar-dropdown <?php if($url == 'custom-tables.php' || $url == 'default-table.php' || $url == 'table-bordered.php' || $url == 'table-hover.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-border_all"></i>
									<span class="menu-text">Tables</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="custom-tables.php" class="<?php if($url == 'custom-tables.php') echo 'current-page'; ?>">Custom Tables</a>
										</li>
										<li>
											<a href="default-table.php" class="<?php if($url == 'default-table.php') echo 'current-page'; ?>">Default Table</a>
										</li>
										<li>
											<a href="table-bordered.php" class="<?php if($url == 'table-bordered.php') echo 'current-page'; ?>">Table Bordered</a>
										</li>
										<li>
											<a href="table-hover.php" class="<?php if($url == 'table-hover.php') echo 'current-page'; ?>">Table Hover</a>
										</li>
										<li>
											<a href="table-striped.php" class="<?php if($url == 'table-striped.php') echo 'current-page'; ?>">Table Striped</a>
										</li>
										<li>
											<a href="table-small.php" class="<?php if($url == 'table-small.php') echo 'current-page'; ?>">Table Small</a>
										</li>
										<li>
											<a href="table-colors.php" class="<?php if($url == 'table-colors.php') echo 'current-page'; ?>">Table Colors</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'data-tables.php') echo 'active'; ?>">
								<a href="data-tables.php">
									<i class="icon-border_all"></i>
									<span class="menu-text">Data Tables</span>
								</a>
							</li>
							<li class="header-menu">Graphs &amp; Maps</li>
							<li  class="sidebar-dropdown <?php if($url == 'area-graphs.php' || $url == 'bubble.php' || $url == 'bar-graphs.php' || $url == 'candlestick.php'  || $url == 'column-graphs.php' || $url == 'donut-graphs.php' || $url == 'line-graphs.php' || $url == 'mixed-graphs.php' || $url == 'pie-graphs.php' || $url == 'radial-chart.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Apex Graphs</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="area-graphs.php" class="<?php if($url == 'area-graphs.php') echo 'current-page'; ?>">Area Charts</a>
										</li>
										<li>
											<a href="bubble.php" class="<?php if($url == 'bubble.php') echo 'current-page'; ?>">Bubble Graphs</a>
										</li>
										<li>
											<a href="bar-graphs.php" class="<?php if($url == 'bar-graphs.php') echo 'current-page'; ?>">Bar Charts</a>
										</li>
										<li>
											<a href="candlestick.php" class="<?php if($url == 'candlestick.php') echo 'current-page'; ?>">Candlestick</a>
										</li>
										<li>
											<a href="column-graphs.php" class="<?php if($url == 'column-graphs.php') echo 'current-page'; ?>">Column Charts</a>
										</li>
										<li>
											<a href="donut-graphs.php" class="<?php if($url == 'donut-graphs.php') echo 'current-page'; ?>">Donut Charts</a>
										</li>
										<li>
											<a href="line-graphs.php" class="<?php if($url == 'line-graphs.php') echo 'current-page'; ?>">Line Charts</a>
										</li>
										<li>
											<a href="mixed-graphs.php" class="<?php if($url == 'mixed-graphs.php') echo 'current-page'; ?>">Mixed Charts</a>
										</li>
										<li>
											<a href="pie-graphs.php" class="<?php if($url == 'pie-graphs.php') echo 'current-page'; ?>">Pie Charts</a>
										</li>
										<li>
											<a href="radial-chart.php" class="<?php if($url == 'radial-chart.php') echo 'current-page'; ?>">Radial Graph</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($url == 'morris-graphs.php') echo 'active'; ?>">
								<a href="morris-graphs.php">
									<i class="icon-tonality"></i>
									<span class="menu-text">Morris Graphs</span>
								</a>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'vector-maps.php' || $url == 'google-maps.php') echo 'active '; ?>">
								<a href="#">
									<i class="icon-map2"></i>
									<span class="menu-text">Maps</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="vector-maps.php" class="<?php if($url == 'vector-maps.php') echo 'current-page'; ?>">Vector Maps</a>
										</li>
										<li>
											<a href="google-maps.php" class="<?php if($url == 'google-maps.php') echo 'current-page'; ?>">Google Maps</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="header-menu">Extra</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-airplay"></i>
									<span class="menu-text">Login</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="login.php" class="<?php if($url == 'login.php') echo 'current-page'; ?>">Login</a>
										</li>
										<li>
											<a href="signup.php" class="<?php if($url == 'signup.php') echo 'current-page'; ?>">Signup</a>
										</li>
										<li>
											<a href="forgot-pwd.php" class="<?php if($url == 'forgot-pwd.php') echo 'current-page'; ?>">Forgot Password</a>
										</li>
									</ul>
								</div>
							</li>
							<li  class="sidebar-dropdown <?php if($url == 'error.php' || $url == 'error2.php' ) echo 'active '; ?>">
								<a href="#">
									<i class="icon-alert-triangle"></i>
									<span class="menu-text">Error Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="error.php" class="<?php if($url == 'error.php') echo 'current-page'; ?>">404</a>
										</li>
										<li>
											<a href="error2.php" class="<?php if($url == 'error2.php') echo 'current-page'; ?>">505</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="coming-soon.php">
									<i class="icon-schedule"></i>
									<span class="menu-text">Coming Soon</span>
								</a>
							</li>
						</ul>
					</div>
			

				</div>

				
			</nav>
	

		</div>

