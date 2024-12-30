<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
	<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Smarthr Admin Template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assetstemplete/img/favicon.png">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assetstemplete/img/apple-touch-icon.png">

	<!-- Theme Script js -->
	<script src="assetstemplete/js/theme-script.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assetstemplete/css/bootstrap.min.css">

	<!-- Feather CSS -->
	<link rel="stylesheet" href="assetstemplete/plugins/icons/feather/feather.css">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="assetstemplete/plugins/tabler-icons/tabler-icons.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assetstemplete/plugins/select2/css/select2.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assetstemplete/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assetstemplete/plugins/fontawesome/css/all.min.css">

	 <!-- Color Picker Css -->
	<link rel="stylesheet" href="assetstemplete/plugins/flatpickr/flatpickr.min.css">
	<link rel="stylesheet" href="assetstemplete/plugins/@simonwep/pickr/themes/nano.min.css">

	<!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="assetstemplete/plugins/daterangepicker/daterangepicker.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assetstemplete/css/dataTables.bootstrap5.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assetstemplete/plugins/select2/css/select2.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assetstemplete/css/style.css">

</head>

<body>

	<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">
			<div class="main-header">

				<div class="header-left">
					<a href="index.html" class="logo">
						<img src="assetstemplete/img/logo.svg" alt="Logo">
					</a>
					<a href="index.html" class="dark-logo">
						<img src="assetstemplete/img/logo-white.svg" alt="Logo">
					</a>
				</div>

				<a id="mobile_btn" class="mobile_btn" href="#sidebar">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>

				<div class="header-user">
					<div class="nav user-menu nav-list">

						<div class="me-auto d-flex align-items-center" id="header-search">
							<a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
								<i class="ti ti-arrow-bar-to-left"></i>
							</a>
							<!-- Search -->
							<div class="input-group input-group-flat d-inline-flex me-1">
								<span class="input-icon-addon">
									<i class="ti ti-search"></i>
								</span>
								<input type="text" class="form-control" placeholder="Search in HRMS">
								<span class="input-group-text">
									<kbd>CTRL + / </kbd>
								</span>
							</div>
							<!-- /Search -->
							<div class="dropdown crm-dropdown">
								<a href="#" class="btn btn-menubar me-1" data-bs-toggle="dropdown">
									<i class="ti ti-layout-grid"></i>
								</a>
								<div class="dropdown-menu dropdown-lg dropdown-menu-start">
									<div class="card mb-0 border-0 shadow-none">
										<div class="card-header">
											<h4>CRM</h4>
										</div>
										<div class="card-body pb-1">
											<div class="row">
												<div class="col-sm-6">
													<a href="contacts.html" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
														<span class="d-flex align-items-center me-3">
															<i class="ti ti-user-shield text-default me-2"></i>Contacts
														</span>
														<i class="ti ti-arrow-right"></i>
													</a>
													<a href="deals-grid.html" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
														<span class="d-flex align-items-center me-3">
															<i class="ti ti-heart-handshake text-default me-2"></i>Deals
														</span>
														<i class="ti ti-arrow-right"></i>
													</a>
													<a href="pipeline.html" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
														<span class="d-flex align-items-center me-3">
															<i class="ti ti-timeline-event-text text-default me-2"></i>Pipeline
														</span>
														<i class="ti ti-arrow-right"></i>
													</a>
												</div>
												<div class="col-sm-6">
													<a href="companies-grid.html" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
														<span class="d-flex align-items-center me-3">
															<i class="ti ti-building text-default me-2"></i>Companies
														</span>
														<i class="ti ti-arrow-right"></i>
													</a>
													<a href="leads-grid.html" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
														<span class="d-flex align-items-center me-3">
															<i class="ti ti-user-check text-default me-2"></i>Leads
														</span>
														<i class="ti ti-arrow-right"></i>
													</a>
													<a href="activity.html" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
														<span class="d-flex align-items-center me-3">
															<i class="ti ti-activity text-default me-2"></i>Activities
														</span>
														<i class="ti ti-arrow-right"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<a href="profile-settings.html" class="btn btn-menubar">
								<i class="ti ti-settings-cog"></i>
							</a>
						</div>

						<!-- Horizontal Single -->
						<div class="sidebar sidebar-horizontal" id="horizontal-single">
							<div class="sidebar-menu">
								<div class="main-menu">
									<ul class="nav-menu">
										<li class="menu-title">
											<span>Main</span>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-smart-home"></i><span>Dashboard</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="index.html">Admin Dashboard</a></li>
												<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
												<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
												<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#" class="active">
												<i class="ti ti-user-star"></i><span>Super Admin</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="dashboard.html">Dashboard</a></li>
												<li><a href="companies.html" class="active">Companies</a></li>
												<li><a href="subscription.html">Subscriptions</a></li>
												<li><a href="packages.html">Packages</a></li>
												<li><a href="domain.html">Domain</a></li>
												<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-layout-grid-add"></i><span>Applications</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="chat.html">Chat</a></li>
												<li class="submenu submenu-two">
													<a href="call.html">Calls<span
															class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="voice-call.html">Voice Call</a></li>
														<li><a href="video-call.html">Video Call</a></li>
														<li><a href="outgoing-call.html">Outgoing Call</a></li>
														<li><a href="incoming-call.html">Incoming Call</a></li>
														<li><a href="call-history.html">Call History</a></li>
													</ul>
												</li>
												<li><a href="calendar.html">Calendar</a></li>
												<li><a href="email.html">Email</a></li>
												<li><a href="todo.html">To Do</a></li>
												<li><a href="notes.html">Notes</a></li>
												<li><a href="file-manager.html">File Manager</a></li>
												<li><a href="kanban-view.html">Kanban</a></li>
												<li><a href="invoices.html">Invoices</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-layout-board-split"></i><span>Layouts</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="layout-horizontal.html">
														<span>Horizontal</span>
													</a>
												</li>
												<li>
													<a href="layout-detached.html">
														<span>Detached</span>
													</a>
												</li>
												<li>
													<a href="layout-modern.html">
														<span>Modern</span>
													</a>
												</li>
												<li>
													<a href="layout-two-column.html">
														<span>Two Column </span>
													</a>
												</li>
												<li>
													<a href="layout-hovered.html">
														<span>Hovered</span>
													</a>
												</li>
												<li>
													<a href="layout-box.html">
														<span>Boxed</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-single.html">
														<span>Horizontal Single</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-overlay.html">
														<span>Horizontal Overlay</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-box.html">
														<span>Horizontal Box</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-sidemenu.html">
														<span>Menu Aside</span>
													</a>
												</li>
												<li>
													<a href="layout-vertical-transparent.html">
														<span>Transparent</span>
													</a>
												</li>
												<li>
													<a href="layout-without-header.html">
														<span>Without Header</span>
													</a>
												</li>
												<li>
													<a href="layout-rtl.html">
														<span>RTL</span>
													</a>
												</li>
												<li>
													<a href="layout-dark.html">
														<span>Dark</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-user-star"></i><span>Projects</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="clients-grid.html"><span>Clients</span>
													</a>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Projects</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="projects-grid.html">Projects</a></li>
														<li><a href="tasks.html">Tasks</a></li>
														<li><a href="task-board.html">Task Board</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="call.html">Crm<span
															class="menu-arrow"></span></a>
													<ul>
														<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
														<li><a href="companies-grid.html"><span>Companies</span></a></li>
														<li><a href="deals-grid.html"><span>Deals</span></a></li>
														<li><a href="leads-grid.html"><span>Leads</span></a></li>
														<li><a href="pipeline.html"><span>Pipeline</span></a></li>
														<li><a href="analytics.html"><span>Analytics</span></a></li>
														<li><a href="activity.html"><span>Activities</span></a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Employees</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="employees.html">Employee Lists</a></li>
														<li><a href="employees-grid.html">Employee Grid</a></li>
														<li><a href="employee-details.html">Employee Details</a></li>
														<li><a href="departments.html">Departments</a></li>
														<li><a href="designations.html">Designations</a></li>
														<li><a href="policy.html">Policies</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Tickets</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="tickets.html">Tickets</a></li>
														<li><a href="ticket-details.html">Ticket Details</a></li>
													</ul>
												</li>
												<li><a href="holidays.html"><span>Holidays</span></a></li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Attendance</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);">Leaves<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="leaves.html">Leaves (Admin)</a></li>
																<li><a href="leaves-employee.html">Leave (Employee)</a></li>
																<li><a href="leave-settings.html">Leave Settings</a></li>
															</ul>
														</li>
														<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
														<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
														<li><a href="timesheets.html">Timesheets</a></li>
														<li><a href="schedule-timing.html">Shift & Schedule</a></li>
														<li><a href="overtime.html">Overtime</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Performance</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="performance-indicator.html">Performance Indicator</a></li>
														<li><a href="performance-review.html">Performance Review</a></li>
														<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
														<li><a href="goal-tracking.html">Goal List</a></li>
														<li><a href="goal-type.html">Goal Type</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Training</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="training.html">Training List</a></li>
														<li><a href="trainers.html">Trainers</a></li>
														<li><a href="training-type.html">Training Type</a></li>
													</ul>
												</li>
												<li><a href="promotion.html"><span>Promotion</span></a></li>
												<li><a href="resignation.html"><span>Resignation</span></a></li>
												<li><a href="termination.html"><span>Termination</span></a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-user-star"></i><span>Administration</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Sales</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="estimates.html">Estimates</a></li>
														<li><a href="invoices.html">Invoices</a></li>
														<li><a href="payments.html">Payments</a></li>
														<li><a href="expenses.html">Expenses</a></li>
														<li><a href="provident-fund.html">Provident Fund</a></li>
														<li><a href="taxes.html">Taxes</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Accounting</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="categories.html">Categories</a></li>
														<li><a href="budgets.html">Budgets</a></li>
														<li><a href="budget-expenses.html">Budget Expenses</a></li>
														<li><a href="budget-revenues.html">Budget Revenues</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Payroll</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="employee-salary.html">Employee Salary</a></li>
														<li><a href="payslip.html">Payslip</a></li>
														<li><a href="payroll.html">Payroll Items</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Assets</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="assetstemplete.html">assetstemplete</a></li>
														<li><a href="asset-categories.html">Asset Categories</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Help & Supports</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="knowledgebase.html">Knowledge Base</a></li>
														<li><a href="activity.html">Activities</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>User Management</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="users.html">Users</a></li>
														<li><a href="roles-permissions.html">Roles & Permissions</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Reports</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="expenses-report.html">Expense Report</a></li>
														<li><a href="invoice-report.html">Invoice Report</a></li>
														<li><a href="payment-report.html">Payment Report</a></li>
														<li><a href="project-report.html">Project Report</a></li>
														<li><a href="task-report.html">Task Report</a></li>
														<li><a href="user-report.html">User Report</a></li>
														<li><a href="employee-report.html">Employee Report</a></li>
														<li><a href="payslip-report.html">Payslip Report</a></li>
														<li><a href="attendance-report.html">Attendance Report</a></li>
														<li><a href="leave-report.html">Leave Report</a></li>
														<li><a href="daily-report.html">Daily Report</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Settings</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);">General Settings<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="profile-settings.html">Profile</a></li>
																<li><a href="security-settings.html">Security</a></li>
																<li><a href="notification-settings.html">Notifications</a></li>
																<li><a href="connected-apps.html">Connected Apps</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Website Settings<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="bussiness-settings.html">Business Settings</a></li>
																<li><a href="seo-settings.html">SEO Settings</a></li>
																<li><a href="localization-settings.html">Localization</a></li>
																<li><a href="prefixes.html">Prefixes</a></li>
																<li><a href="preferences.html">Preferences</a></li>
																<li><a href="performance-appraisal.html">Appearance</a></li>
																<li><a href="language.html">Language</a></li>
																<li><a href="authentication-settings.html">Authentication</a></li>
																<li><a href="ai-settings.html">AI Settings</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">App Settings<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="salary-settings.html">Salary Settings</a></li>
																<li><a href="approval-settings.html">Approval Settings</a></li>
																<li><a href="invoice-settings.html">Invoice Settings</a></li>
																<li><a href="leave-type.html">Leave Type</a></li>
																<li><a href="custom-fields.html">Custom Fields</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">System Settings<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="email-settings.html">Email Settings</a></li>
																<li><a href="email-template.html">Email Templates</a></li>
																<li><a href="sms-settings.html">SMS Settings</a></li>
																<li><a href="sms-template.html">SMS Templates</a></li>
																<li><a href="otp-settings.html">OTP</a></li>
																<li><a href="gdpr.html">GDPR Cookies</a></li>
																<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Financial Settings<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="payment-gateways.html">Payment Gateways</a></li>
																<li><a href="tax-rates.html">Tax Rate</a></li>
																<li><a href="currencies.html">Currencies</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Other Settings<span
																	class="menu-arrow"></span></a>
															<ul>
																<li><a href="custom-css.html">Custom CSS</a></li>
																<li><a href="custom-js.html">Custom JS</a></li>
																<li><a href="cronjob.html">Cronjob</a></li>
																<li><a href="storage-settings.html">Storage</a></li>
																<li><a href="ban-ip-address.html">Ban IP Address</a></li>
																<li><a href="backup.html">Backup</a></li>
																<li><a href="clear-cache.html">Clear Cache</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-page-break"></i><span>Pages</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="starter.html"><span>Starter</span></a></li>
												<li><a href="profile.html"><span>Profile</span></a></li>
												<li><a href="gallery.html"><span>Gallery</span></a></li>
												<li><a href="search-result.html"><span>Search Results</span></a></li>
												<li><a href="timeline.html"><span>Timeline</span></a></li>
												<li><a href="pricing.html"><span>Pricing</span></a></li>
												<li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
												<li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
												<li><a href="under-construction.html"><span>Under Construction</span></a></li>
												<li><a href="api-keys.html"><span>API Keys</span></a></li>
												<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
												<li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
												<li class="submenu">
													<a href="#"><span>Content</span> <span class="menu-arrow"></span></a>
													<ul>
														<li><a href="pages.html">Pages</a></li>
														<li class="submenu">
															<a href="javascript:void(0);">Blogs<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="blogs.html">All Blogs</a></li>
																<li><a href="blog-categories.html">Categories</a></li>
																<li><a href="blog-comments.html">Comments</a></li>
																<li><a href="blog-tags.html">Tags</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="countries.html">Countries</a></li>
																<li><a href="states.html">States</a></li>
																<li><a href="cities.html">Cities</a></li>
															</ul>
														</li>
														<li><a href="testimonials.html">Testimonials</a></li>
														<li><a href="faq.html">FAQ’S</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="#">
														<span>Authentication</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="login.html">Cover</a></li>
																<li><a href="login-2.html">Illustration</a></li>
																<li><a href="login-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="register.html">Cover</a></li>
																<li><a href="register-2.html">Illustration</a></li>
																<li><a href="register-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="forgot-password.html">Cover</a></li>
																<li><a href="forgot-password-2.html">Illustration</a></li>
																<li><a href="forgot-password-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="reset-password.html">Cover</a></li>
																<li><a href="reset-password-2.html">Illustration</a></li>
																<li><a href="reset-password-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="email-verification.html">Cover</a></li>
																<li><a href="email-verification-2.html">Illustration</a></li>
																<li><a href="email-verification-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="two-step-verification.html">Cover</a></li>
																<li><a href="two-step-verification-2.html">Illustration</a></li>
																<li><a href="two-step-verification-3.html">Basic</a></li>
															</ul>
														</li>
														<li><a href="lock-screen.html">Lock Screen</a></li>
														<li><a href="error-404.html">404 Error</a></li>
														<li><a href="error-500.html">500 Error</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="#">
														<span>UI Interface</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-hierarchy-2"></i>
																<span>Base UI</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="ui-alerts.html">Alerts</a>
																</li>
																<li>
																	<a href="ui-accordion.html">Accordion</a>
																</li>
																<li>
																	<a href="ui-avatar.html">Avatar</a>
																</li>
																<li>
																	<a href="ui-badges.html">Badges</a>
																</li>
																<li>
																	<a href="ui-borders.html">Border</a>
																</li>
																<li>
																	<a href="ui-buttons.html">Buttons</a>
																</li>
																<li>
																	<a href="ui-buttons-group.html">Button Group</a>
																</li>
																<li>
																	<a href="ui-breadcrumb.html">Breadcrumb</a>
																</li>
																<li>
																	<a href="ui-cards.html">Card</a>
																</li>
																<li>
																	<a href="ui-carousel.html">Carousel</a>
																</li>
																<li>
																	<a href="ui-colors.html">Colors</a>
																</li>
																<li>
																	<a href="ui-dropdowns.html">Dropdowns</a>
																</li>
																<li>
																	<a href="ui-grid.html">Grid</a>
																</li>
																<li>
																	<a href="ui-images.html">Images</a>
																</li>
																<li>
																	<a href="ui-lightbox.html">Lightbox</a>
																</li>
																<li>
																	<a href="ui-media.html">Media</a>
																</li>
																<li>
																	<a href="ui-modals.html">Modals</a>
																</li>
																<li>
																	<a href="ui-offcanvas.html">Offcanvas</a>
																</li>
																<li>
																	<a href="ui-pagination.html">Pagination</a>
																</li>
																<li>
																	<a href="ui-popovers.html">Popovers</a>
																</li>
																<li>
																	<a href="ui-progress.html">Progress</a>
																</li>
																<li>
																	<a href="ui-placeholders.html">Placeholders</a>
																</li>
																<li>
																	<a href="ui-spinner.html">Spinner</a>
																</li>
																<li>
																	<a href="ui-sweetalerts.html">Sweet Alerts</a>
																</li>
																<li>
																	<a href="ui-nav-tabs.html">Tabs</a>
																</li>
																<li>
																	<a href="ui-toasts.html">Toasts</a>
																</li>
																<li>
																	<a href="ui-tooltips.html">Tooltips</a>
																</li>
																<li>
																	<a href="ui-typography.html">Typography</a>
																</li>
																<li>
																	<a href="ui-video.html">Video</a>
																</li>
																<li>
																	<a href="ui-sortable.html">Sortable</a>
																</li>
																<li>
																	<a href="ui-swiperjs.html">Swiperjs</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-hierarchy-3"></i>
																<span>Advanced UI</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="ui-ribbon.html">Ribbon</a>
																</li>
																<li>
																	<a href="ui-clipboard.html">Clipboard</a>
																</li>
																<li>
																	<a href="ui-drag-drop.html">Drag & Drop</a>
																</li>
																<li>
																	<a href="ui-rangeslider.html">Range Slider</a>
																</li>
																<li>
																	<a href="ui-rating.html">Rating</a>
																</li>
																<li>
																	<a href="ui-text-editor.html">Text Editor</a>
																</li>
																<li>
																	<a href="ui-counter.html">Counter</a>
																</li>
																<li>
																	<a href="ui-scrollbar.html">Scrollbar</a>
																</li>
																<li>
																	<a href="ui-stickynote.html">Sticky Note</a>
																</li>
																<li>
																	<a href="ui-timeline.html">Timeline</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-input-search"></i>
																<span>Forms</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li class="submenu submenu-two">
																	<a href="javascript:void(0);">Form Elements <span class="menu-arrow inside-submenu"></span>
																	</a>
																	<ul>
																		<li>
																			<a href="form-basic-inputs.html">Basic Inputs</a>
																		</li>
																		<li>
																			<a href="form-checkbox-radios.html">Checkbox & Radios</a>
																		</li>
																		<li>
																			<a href="form-input-groups.html">Input Groups</a>
																		</li>
																		<li>
																			<a href="form-grid-gutters.html">Grid & Gutters</a>
																		</li>
																		<li>
																			<a href="form-select.html">Form Select</a>
																		</li>
																		<li>
																			<a href="form-mask.html">Input Masks</a>
																		</li>
																		<li>
																			<a href="form-fileupload.html">File Uploads</a>
																		</li>
																	</ul>
																</li>
																<li class="submenu submenu-two">
																	<a href="javascript:void(0);">Layouts <span class="menu-arrow inside-submenu"></span>
																	</a>
																	<ul>
																		<li>
																			<a href="form-horizontal.html">Horizontal Form</a>
																		</li>
																		<li>
																			<a href="form-vertical.html">Vertical Form</a>
																		</li>
																		<li>
																			<a href="form-floating-labels.html">Floating Labels</a>
																		</li>
																	</ul>
																</li>
																<li>
																	<a href="form-validation.html">Form Validation</a>
																</li>

																<li>
																	<a href="form-select2.html">Select2</a>
																</li>
																<li>
																	<a href="form-wizard.html">Form Wizard</a>
																</li>
																<li>
																	<a href="form-pickers.html">Form Pickers</a>
																</li>

															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-table-plus"></i>
																<span>Tables</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="tables-basic.html">Basic Tables </a>
																</li>
																<li>
																	<a href="data-tables.html">Data Table </a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-chart-line"></i>
																<span>Charts</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="chart-apex.html">Apex Charts</a>
																</li>
																<li>
																	<a href="chart-c3.html">Chart C3</a>
																</li>
																<li>
																	<a href="chart-js.html">Chart Js</a>
																</li>
																<li>
																	<a href="chart-morris.html">Morris Charts</a>
																</li>
																<li>
																	<a href="chart-flot.html">Flot Charts</a>
																</li>
																<li>
																	<a href="chart-peity.html">Peity Charts</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-icons"></i>
																<span>Icons</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="icon-fontawesome.html">Fontawesome Icons</a>
																</li>
																<li>
																	<a href="icon-tabler.html">Tabler Icons</a>
																</li>
																<li>
																	<a href="icon-bootstrap.html">Bootstrap Icons</a>
																</li>
																<li>
																	<a href="icon-remix.html">Remix Icons</a>
																</li>
																<li>
																	<a href="icon-feather.html">Feather Icons</a>
																</li>
																<li>
																	<a href="icon-ionic.html">Ionic Icons</a>
																</li>
																<li>
																	<a href="icon-material.html">Material Icons</a>
																</li>
																<li>
																	<a href="icon-pe7.html">Pe7 Icons</a>
																</li>
																<li>
																	<a href="icon-simpleline.html">Simpleline Icons</a>
																</li>
																<li>
																	<a href="icon-themify.html">Themify Icons</a>
																</li>
																<li>
																	<a href="icon-weather.html">Weather Icons</a>
																</li>
																<li>
																	<a href="icon-typicon.html">Typicon Icons</a>
																</li>
																<li>
																	<a href="icon-flag.html">Flag Icons</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-table-plus"></i>
																<span>Maps</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="maps-vector.html">Vector</a>
																</li>
																<li>
																	<a href="maps-leaflet.html">Leaflet</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<li><a href="#">Documentation</a></li>
												<li><a href="#">Change Log</a></li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 1</a></li>
														<li class="submenu submenu-two">
															<a href="javascript:void(0);">Multilevel 2<span
																	class="menu-arrow inside-submenu"></span></a>
															<ul>
																<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
																<li class="submenu submenu-two submenu-three">
																	<a href="javascript:void(0);">Multilevel 2.2<span
																			class="menu-arrow inside-submenu inside-submenu-two"></span></a>
																	<ul>
																		<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
																		<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
																	</ul>
																</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Multilevel 3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Horizontal Single -->

						<div class="d-flex align-items-center">
							<div class="me-1">
								<a href="#" class="btn btn-menubar btnFullscreen">
									<i class="ti ti-maximize"></i>
								</a>
							</div>
							<div class="dropdown me-1">
								<a href="#" class="btn btn-menubar" data-bs-toggle="dropdown">
									<i class="ti ti-layout-grid-remove"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="card mb-0 border-0 shadow-none">
										<div class="card-header">
											<h4>Applications</h4>
										</div>
										<div class="card-body">
											<a href="calendar.html" class="d-block pb-2">
												<span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-calendar text-gray-9"></i></span>Calendar
											</a>
											<a href="todo.html" class="d-block py-2">
												<span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-subtask text-gray-9"></i></span>To Do
											</a>
											<a href="notes.html" class="d-block py-2">
												<span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-notes text-gray-9"></i></span>Notes
											</a>
											<a href="file-manager.html" class="d-block py-2">
												<span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-folder text-gray-9"></i></span>File Manager
											</a>
											<a href="kanban-view.html" class="d-block py-2">
												<span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-layout-kanban text-gray-9"></i></span>Kanban
											</a>
											<a href="invoices.html" class="d-block py-2 pb-0">
												<span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-file-invoice text-gray-9"></i></span>Invoices
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="me-1">
								<a href="chat.html" class="btn btn-menubar position-relative">
									<i class="ti ti-brand-hipchat"></i>
									<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
								</a>
							</div>
							<div class="me-1">
								<a href="email.html" class="btn btn-menubar">
									<i class="ti ti-mail"></i>
								</a>
							</div>
							<div class="me-1 notification_item">
								<a href="#" class="btn btn-menubar position-relative me-1" id="notification_popup"
									data-bs-toggle="dropdown">
									<i class="ti ti-bell"></i>
									<span class="notification-status-dot"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end notification-dropdown p-4">
									<div class="d-flex align-items-center justify-content-between border-bottom p-0 pb-3 mb-3">
										<h4 class="notification-title">Notifications (2)</h4>
										<div class="d-flex align-items-center">
											<a href="#" class="text-primary fs-15 me-3 lh-1">Mark all as read</a>
											<div class="dropdown">
												<a href="javascript:void(0);" class="bg-white dropdown-toggle"
													data-bs-toggle="dropdown">
													<i class="ti ti-calendar-due me-1"></i>Today
												</a>
												<ul class="dropdown-menu mt-2 p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1">
															This Week
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1">
															Last Week
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1">
															Last Month
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="noti-content">
										<div class="d-flex flex-column">
											<div class="border-bottom mb-3 pb-3">
												<a href="activity.html">
													<div class="d-flex">
														<span class="avatar avatar-lg me-2 flex-shrink-0">
															<img src="assetstemplete/img/profiles/avatar-27.jpg" alt="Profile">
														</span>
														<div class="flex-grow-1">
															<p class="mb-1"><span
																	class="text-dark fw-semibold">Shawn</span>
																performance in Math is below the threshold.</p>
															<span>Just Now</span>
														</div>
													</div>
												</a>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<a href="activity.html" class="pb-0">
													<div class="d-flex">
														<span class="avatar avatar-lg me-2 flex-shrink-0">
															<img src="assetstemplete/img/profiles/avatar-23.jpg" alt="Profile">
														</span>
														<div class="flex-grow-1">
															<p class="mb-1"><span
																	class="text-dark fw-semibold">Sylvia</span> added
																appointment on 02:00 PM</p>
															<span>10 mins ago</span>
															<div
																class="d-flex justify-content-start align-items-center mt-1">
																<span class="btn btn-light btn-sm me-2">Deny</span>
																<span class="btn btn-primary btn-sm">Approve</span>
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<a href="activity.html">
													<div class="d-flex">
														<span class="avatar avatar-lg me-2 flex-shrink-0">
															<img src="assetstemplete/img/profiles/avatar-25.jpg" alt="Profile">
														</span>
														<div class="flex-grow-1">
															<p class="mb-1">New student record <span class="text-dark fw-semibold"> George</span>
																is created by <span class="text-dark fw-semibold">Teressa</span>
															</p>
															<span>2 hrs ago</span>
														</div>
													</div>
												</a>
											</div>
											<div class="border-0 mb-3 pb-0">
												<a href="activity.html">
													<div class="d-flex">
														<span class="avatar avatar-lg me-2 flex-shrink-0">
															<img src="assetstemplete/img/profiles/avatar-01.jpg" alt="Profile">
														</span>
														<div class="flex-grow-1">
															<p class="mb-1">A new teacher record for <span class="text-dark fw-semibold">Elisa</span> </p>
															<span>09:45 AM</span>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="d-flex p-0">
										<a href="#" class="btn btn-light w-100 me-2">Cancel</a>
										<a href="activity.html" class="btn btn-primary w-100">View All</a>
									</div>
								</div>
							</div>
							<div class="dropdown profile-dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
									<span class="avatar avatar-sm online">
										<img src="assetstemplete/img/profiles/avatar-12.jpg" alt="Img" class="img-fluid rounded-circle">
									</span>
								</a>
								<div class="dropdown-menu shadow-none">
									<div class="card mb-0">
										<div class="card-header">
											<div class="d-flex align-items-center">
												<span class="avatar avatar-lg me-2 avatar-rounded">
													<img src="assetstemplete/img/profiles/avatar-12.jpg" alt="img">
												</span>
												<div>
													<h5 class="mb-0">Kevin Larry</h5>
													<p class="fs-12 fw-medium mb-0">warren@example.com</p>
												</div>
											</div>
										</div>
										<div class="card-body">
											<a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
												href="profile.html">
												<i class="ti ti-user-circle me-1"></i>My Profile
											</a>
											<a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="bussiness-settings.html">
												<i class="ti ti-settings me-1"></i>Settings
											</a>

											<a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
												href="profile-settings.html">
												<i class="ti ti-circle-arrow-up me-1"></i>My Account
											</a>
											<a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="knowledgebase.html">
												<i class="ti ti-question-mark me-1"></i>Knowledge Base
											</a>
										</div>
										<div class="card-footer py-1">
											<a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="login.html"><i class="ti ti-login me-2"></i>Logout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-ellipsis-v"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="profile-settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->

			</div>

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<!-- Logo -->
			<div class="sidebar-logo">
				<a href="index.html" class="logo logo-normal">
					<img src="assetstemplete/img/logo.svg" alt="Logo">
				</a>
				<a href="index.html" class="logo-small">
					<img src="assetstemplete/img/logo-small.svg" alt="Logo">
				</a>
				<a href="index.html" class="dark-logo">
					<img src="assetstemplete/img/logo-white.svg" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->
			<div class="modern-profile p-3 pb-0">
				<div class="text-center rounded bg-light p-3 mb-4 user-profile">
					<div class="avatar avatar-lg online mb-3">
						<img src="assetstemplete/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
					<p class="fs-10">System Admin</p>
				</div>
				<div class="sidebar-nav mb-3">
					<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent"
						role="tablist">
						<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
					</ul>
				</div>
			</div>
			<div class="sidebar-header p-3 pb-0 pt-2">
				<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
					<div class="avatar avatar-md onlin">
						<img src="assetstemplete/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<div class="text-start sidebar-profile-info ms-2">
						<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
						<p class="fs-10">System Admin</p>
					</div>
				</div>
				<div class="input-group input-group-flat d-inline-flex mb-4">
					<span class="input-icon-addon">
						<i class="ti ti-search"></i>
					</span>
					<input type="text" class="form-control" placeholder="Search in HRMS">
					<span class="input-group-text">
						<kbd>CTRL + / </kbd>
					</span>
				</div>
				<div class="d-flex align-items-center justify-content-between menu-item mb-3">
					<div class="me-3">
						<a href="calendar.html" class="btn btn-menubar">
							<i class="ti ti-layout-grid-remove"></i>
						</a>
					</div>
					<div class="me-3">
						<a href="chat.html" class="btn btn-menubar position-relative">
							<i class="ti ti-brand-hipchat"></i>
							<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
						</a>
					</div>
					<div class="me-3 notification-item">
						<a href="activity.html" class="btn btn-menubar position-relative me-1">
							<i class="ti ti-bell"></i>
							<span class="notification-status-dot"></span>
						</a>
					</div>
					<div class="me-0">
						<a href="email.html" class="btn btn-menubar">
							<i class="ti ti-message"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title"><span>MAIN MENU</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-smart-home"></i><span>Dashboard</span><span
											class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="index.html">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
										<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
										<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-layout-grid-add"></i><span>Applications</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu submenu-two">
											<a href="call.html">Calls<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="voice-call.html">Voice Call</a></li>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="outgoing-call.html">Outgoing Call</a></li>
												<li><a href="incoming-call.html">Incoming Call</a></li>
												<li><a href="call-history.html">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="email.html">Email</a></li>
										<li><a href="todo.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="social-feed.html">Social Feed</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
										<li><a href="kanban-view.html">Kanban</a></li>
										<li><a href="invoices.html">Invoices</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#" class="active subdrop">
										<i class="ti ti-user-star"></i><span>Super Admin</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="companies.html" class="active">Companies</a></li>
										<li><a href="subscription.html">Subscriptions</a></li>
										<li><a href="packages.html">Packages</a></li>
										<li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>LAYOUT</span></li>
						<li>
							<ul>
								<li>
									<a href="layout-horizontal.html">
										<i class="ti ti-layout-navbar"></i><span>Horizontal</span>
									</a>
								</li>
								<li>
									<a href="layout-detached.html">
										<i class="ti ti-details"></i><span>Detached</span>
									</a>
								</li>
								<li>
									<a href="layout-modern.html">
										<i class="ti ti-layout-board-split"></i><span>Modern</span>
									</a>
								</li>
								<li>
									<a href="layout-two-column.html">
										<i class="ti ti-columns-2"></i><span>Two Column </span>
									</a>
								</li>
								<li>
									<a href="layout-hovered.html">
										<i class="ti ti-column-insert-left"></i><span>Hovered</span>
									</a>
								</li>
								<li>
									<a href="layout-box.html">
										<i class="ti ti-layout-align-middle"></i><span>Boxed</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-single.html">
										<i class="ti ti-layout-navbar-inactive"></i><span>Horizontal Single</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-overlay.html">
										<i class="ti ti-layout-collage"></i><span>Horizontal Overlay</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-box.html">
										<i class="ti ti-layout-board"></i><span>Horizontal Box</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-sidemenu.html">
										<i class="ti ti-table"></i><span>Menu Aside</span>
									</a>
								</li>
								<li>
									<a href="layout-vertical-transparent.html">
										<i class="ti ti-layout"></i><span>Transparent</span>
									</a>
								</li>
								<li>
									<a href="layout-without-header.html">
										<i class="ti ti-layout-sidebar"></i><span>Without Header</span>
									</a>
								</li>
								<li>
									<a href="layout-rtl.html">
										<i class="ti ti-text-direction-rtl"></i><span>RTL</span>
									</a>
								</li>
								<li>
									<a href="layout-dark.html">
										<i class="ti ti-moon"></i><span>Dark</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>PROJECTS</span></li>
						<li>
							<ul>
								<li>
									<a href="clients-grid.html">
										<i class="ti ti-users-group"></i><span>Clients</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-box"></i><span>Projects</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="projects-grid.html">Projects</a></li>
										<li><a href="tasks.html">Tasks</a></li>
										<li><a href="task-board.html">Task Board</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>CRM</span></li>
						<li>
							<ul>
								<li>
									<a href="contacts-grid.html">
										<i class="ti ti-user-shield"></i><span>Contacts</span>
									</a>
								</li>
								<li>
									<a href="companies-grid.html">
										<i class="ti ti-building"></i><span>Companies</span>
									</a>
								</li>
								<li>
									<a href="deals-grid.html">
										<i class="ti ti-heart-handshake"></i><span>Deals</span>
									</a>
								</li>
								<li>
									<a href="leads-grid.html">
										<i class="ti ti-user-check"></i><span>Leads</span>
									</a>
								</li>
								<li>
									<a href="pipeline.html">
										<i class="ti ti-timeline-event-text"></i><span>Pipeline</span>
									</a>
								</li>
								<li>
									<a href="analytics.html">
										<i class="ti ti-graph"></i><span>Analytics</span>
									</a>
								</li>
								<li>
									<a href="activity.html">
										<i class="ti ti-activity"></i><span>Activities</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>HRM</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-users"></i><span>Employees</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employees.html">Employee Lists</a></li>
										<li><a href="employees-grid.html">Employee Grid</a></li>
										<li><a href="employee-details.html">Employee Details</a></li>
										<li><a href="departments.html">Departments</a></li>
										<li><a href="designations.html">Designations</a></li>
										<li><a href="policy.html">Policies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-ticket"></i><span>Tickets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="tickets.html">Tickets</a></li>
										<li><a href="ticket-details.html">Ticket Details</a></li>
									</ul>
								</li>
								<li>
									<a href="holidays.html">
										<i class="ti ti-calendar-event"></i><span>Holidays</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-file-time"></i><span>Attendance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Leaves<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="leaves.html">Leaves (Admin)</a></li>
												<li><a href="leaves-employee.html">Leave (Employee)</a></li>
												<li><a href="leave-settings.html">Leave Settings</a></li>
											</ul>
										</li>
										<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
										<li><a href="timesheets.html">Timesheets</a></li>
										<li><a href="schedule-timing.html">Shift & Schedule</a></li>
										<li><a href="overtime.html">Overtime</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-school"></i><span>Performance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="performance-indicator.html">Performance Indicator</a></li>
										<li><a href="performance-review.html">Performance Review</a></li>
										<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
										<li><a href="goal-tracking.html">Goal List</a></li>
										<li><a href="goal-type.html">Goal Type</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-edit"></i><span>Training</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="training.html">Training List</a></li>
										<li><a href="trainers.html">Trainers</a></li>
										<li><a href="training-type.html">Training Type</a></li>
									</ul>
								</li>
								<li>
									<a href="promotion.html">
										<i class="ti ti-speakerphone"></i><span>Promotion</span>
									</a>
								</li>
								<li>
									<a href="resignation.html">
										<i class="ti ti-external-link"></i><span>Resignation</span>
									</a>
								</li>
								<li>
									<a href="termination.html">
										<i class="ti ti-circle-x"></i><span>Termination</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>RECRUITMENT</span></li>
						<li>
							<ul>
								<li>
									<a href="job-grid.html">
										<i class="ti ti-timeline"></i><span>Jobs</span>
									</a>
								</li>
								<li>
									<a href="candidates-grid.html">
										<i class="ti ti-user-shield"></i><span>Candidates</span>
									</a>
								</li>
								<li>
									<a href="refferals.html">
										<i class="ti ti-ux-circle"></i><span>Referrals</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-shopping-cart-dollar"></i><span>Sales</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="estimates.html">Estimates</a></li>
										<li><a href="invoices.html">Invoices</a></li>
										<li><a href="payments.html">Payments</a></li>
										<li><a href="expenses.html">Expenses</a></li>
										<li><a href="provident-fund.html">Provident Fund</a></li>
										<li><a href="taxes.html">Taxes</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-file-dollar"></i><span>Accounting</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="categories.html">Categories</a></li>
										<li><a href="budgets.html">Budgets</a></li>
										<li><a href="budget-expenses.html">Budget Expenses</a></li>
										<li><a href="budget-revenues.html">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-cash"></i><span>Payroll</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employee-salary.html">Employee Salary</a></li>
										<li><a href="payslip.html">Payslip</a></li>
										<li><a href="payroll.html">Payroll Items</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>ADMINISTRATION</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-cash"></i><span>assetstemplete</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="assetstemplete.html">assetstemplete</a></li>
										<li><a href="asset-categories.html">Asset Categories</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-headset"></i><span>Help & Supports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="knowledgebase.html">Knowledge Base</a></li>
										<li><a href="activity.html">Activities</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-user-star"></i><span>User Management</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="users.html">Users</a></li>
										<li><a href="roles-permissions.html">Roles & Permissions</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-user-star"></i><span>Reports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="expenses-report.html">Expense Report</a></li>
										<li><a href="invoice-report.html">Invoice Report</a></li>
										<li><a href="payment-report.html">Payment Report</a></li>
										<li><a href="project-report.html">Project Report</a></li>
										<li><a href="task-report.html">Task Report</a></li>
										<li><a href="user-report.html">User Report</a></li>
										<li><a href="employee-report.html">Employee Report</a></li>
										<li><a href="payslip-report.html">Payslip Report</a></li>
										<li><a href="attendance-report.html">Attendance Report</a></li>
										<li><a href="leave-report.html">Leave Report</a></li>
										<li><a href="daily-report.html">Daily Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-settings"></i><span>Settings</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">General Settings<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="profile-settings.html">Profile</a></li>
												<li><a href="security-settings.html">Security</a></li>
												<li><a href="notification-settings.html">Notifications</a></li>
												<li><a href="connected-apps.html">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Website Settings<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="bussiness-settings.html">Business Settings</a></li>
												<li><a href="seo-settings.html">SEO Settings</a></li>
												<li><a href="localization-settings.html">Localization</a></li>
												<li><a href="prefixes.html">Prefixes</a></li>
												<li><a href="preferences.html">Preferences</a></li>
												<li><a href="performance-appraisal.html">Appearance</a></li>
												<li><a href="language.html">Language</a></li>
												<li><a href="authentication-settings.html">Authentication</a></li>
												<li><a href="ai-settings.html">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">App Settings<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="salary-settings.html">Salary Settings</a></li>
												<li><a href="approval-settings.html">Approval Settings</a></li>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="leave-type.html">Leave Type</a></li>
												<li><a href="custom-fields.html">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">System Settings<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Templates</a></li>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Templates</a></li>
												<li><a href="otp-settings.html">OTP</a></li>
												<li><a href="gdpr.html">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Financial Settings<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="payment-gateways.html">Payment Gateways</a></li>
												<li><a href="tax-rates.html">Tax Rate</a></li>
												<li><a href="currencies.html">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Other Settings<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="custom-css.html">Custom CSS</a></li>
												<li><a href="custom-js.html">Custom JS</a></li>
												<li><a href="cronjob.html">Cronjob</a></li>
												<li><a href="storage-settings.html">Storage</a></li>
												<li><a href="ban-ip-address.html">Ban IP Address</a></li>
												<li><a href="backup.html">Backup</a></li>
												<li><a href="clear-cache.html">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>CONTENT</span></li>
						<li>
							<ul>
								<li>
									<a href="pages.html">
										<i class="ti ti-box-multiple"></i><span>Pages</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-brand-blogger"></i><span>Blogs</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="blogs.html">All Blogs</a></li>
										<li><a href="blog-categories.html">Categories</a></li>
										<li><a href="blog-comments.html">Comments</a></li>
										<li><a href="blog-tags.html">Blog Tags</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-map-pin-check"></i><span>Locations</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="countries.html">Countries</a></li>
										<li><a href="states.html">States</a></li>
										<li><a href="cities.html">Cities</a></li>
									</ul>
								</li>
								<li>
									<a href="testimonials.html">
										<i class="ti ti-message-2"></i><span>Testimonials</span>
									</a>
								</li>
								<li>
									<a href="faq.html">
										<i class="ti ti-question-mark"></i><span>FAQ’S</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>PAGES</span></li>
						<li>
							<ul>
								<li>
									<a href="starter.html">
										<i class="ti ti-layout-sidebar"></i><span>Starter</span>
									</a>
								</li>
								<li>
									<a href="profile.html">
										<i class="ti ti-user-circle"></i><span>Profile</span>
									</a>
								</li>
								<li>
									<a href="gallery.html">
										<i class="ti ti-photo"></i><span>Gallery</span>
									</a>
								</li>
								<li>
									<a href="search-result.html">
										<i class="ti ti-list-search"></i><span>Search Results</span>
									</a>
								</li>
								<li>
									<a href="timeline.html">
										<i class="ti ti-timeline"></i><span>Timeline</span>
									</a>
								</li>
								<li>
									<a href="pricing.html">
										<i class="ti ti-file-dollar"></i><span>Pricing</span>
									</a>
								</li>
								<li>
									<a href="coming-soon.html">
										<i class="ti ti-progress-bolt"></i><span>Coming Soon</span>
									</a>
								</li>
								<li>
									<a href="under-maintenance.html">
										<i class="ti ti-alert-octagon"></i><span>Under Maintenance</span>
									</a>
								</li>
								<li>
									<a href="under-construction.html">
										<i class="ti ti-barrier-block"></i><span>Under Construction</span>
									</a>
								</li>
								<li>
									<a href="api-keys.html">
										<i class="ti ti-api"></i><span>API Keys</span>
									</a>
								</li>
								<li>
									<a href="privacy-policy.html">
										<i class="ti ti-file-description"></i><span>Privacy Policy</span>
									</a>
								</li>
								<li>
									<a href="terms-condition.html">
										<i class="ti ti-file-check"></i><span>Terms & Conditions</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>AUTHENTICATION</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-login"></i><span>Login</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="login.html">Cover</a></li>
										<li><a href="login-2.html">Illustration</a></li>
										<li><a href="login-3.html">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-forms"></i><span>Register</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="register.html">Cover</a></li>
										<li><a href="register-2.html">Illustration</a></li>
										<li><a href="register-3.html">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-help-triangle"></i><span>Forgot Password</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="forgot-password.html">Cover</a></li>
										<li><a href="forgot-password-2.html">Illustration</a></li>
										<li><a href="forgot-password-3.html">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-restore"></i><span>Reset Password</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="reset-password.html">Cover</a></li>
										<li><a href="reset-password-2.html">Illustration</a></li>
										<li><a href="reset-password-3.html">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-mail-exclamation"></i><span>Email Verification</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="email-verification.html">Cover</a></li>
										<li><a href="email-verification-2.html">Illustration</a></li>
										<li><a href="email-verification-3.html">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-password"></i><span>2 Step Verification</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="two-step-verification.html">Cover</a></li>
										<li><a href="two-step-verification-2.html">Illustration</a></li>
										<li><a href="two-step-verification-3.html">Basic</a></li>
									</ul>
								</li>
								<li><a href="lock-screen.html"><i class="ti ti-lock-square"></i><span>Lock
											Screen</span></a></li>
								<li><a href="error-404.html"><i class="ti ti-error-404"></i><span>404 Error</span></a>
								</li>
								<li><a href="error-500.html"><i class="ti ti-server"></i><span>500 Error</span></a></li>
							</ul>
						</li>
						<li class="menu-title"><span>UI INTERFACE</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-hierarchy-2"></i>
										<span>Base UI</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="ui-alerts.html">Alerts</a>
										</li>
										<li>
											<a href="ui-accordion.html">Accordion</a>
										</li>
										<li>
											<a href="ui-avatar.html">Avatar</a>
										</li>
										<li>
											<a href="ui-badges.html">Badges</a>
										</li>
										<li>
											<a href="ui-borders.html">Border</a>
										</li>
										<li>
											<a href="ui-buttons.html">Buttons</a>
										</li>
										<li>
											<a href="ui-buttons-group.html">Button Group</a>
										</li>
										<li>
											<a href="ui-breadcrumb.html">Breadcrumb</a>
										</li>
										<li>
											<a href="ui-cards.html">Card</a>
										</li>
										<li>
											<a href="ui-carousel.html">Carousel</a>
										</li>
										<li>
											<a href="ui-colors.html">Colors</a>
										</li>
										<li>
											<a href="ui-dropdowns.html">Dropdowns</a>
										</li>
										<li>
											<a href="ui-grid.html">Grid</a>
										</li>
										<li>
											<a href="ui-images.html">Images</a>
										</li>
										<li>
											<a href="ui-lightbox.html">Lightbox</a>
										</li>
										<li>
											<a href="ui-media.html">Media</a>
										</li>
										<li>
											<a href="ui-modals.html">Modals</a>
										</li>
										<li>
											<a href="ui-offcanvas.html">Offcanvas</a>
										</li>
										<li>
											<a href="ui-pagination.html">Pagination</a>
										</li>
										<li>
											<a href="ui-popovers.html">Popovers</a>
										</li>
										<li>
											<a href="ui-progress.html">Progress</a>
										</li>
										<li>
											<a href="ui-placeholders.html">Placeholders</a>
										</li>
										<li>
											<a href="ui-spinner.html">Spinner</a>
										</li>
										<li>
											<a href="ui-sweetalerts.html">Sweet Alerts</a>
										</li>
										<li>
											<a href="ui-nav-tabs.html">Tabs</a>
										</li>
										<li>
											<a href="ui-toasts.html">Toasts</a>
										</li>
										<li>
											<a href="ui-tooltips.html">Tooltips</a>
										</li>
										<li>
											<a href="ui-typography.html">Typography</a>
										</li>
										<li>
											<a href="ui-video.html">Video</a>
										</li>
										<li>
											<a href="ui-sortable.html">Sortable</a>
										</li>
										<li>
											<a href="ui-swiperjs.html">Swiperjs</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-hierarchy-3"></i>
										<span>Advanced UI</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="ui-ribbon.html">Ribbon</a>
										</li>
										<li>
											<a href="ui-clipboard.html">Clipboard</a>
										</li>
										<li>
											<a href="ui-drag-drop.html">Drag & Drop</a>
										</li>
										<li>
											<a href="ui-rangeslider.html">Range Slider</a>
										</li>
										<li>
											<a href="ui-rating.html">Rating</a>
										</li>
										<li>
											<a href="ui-text-editor.html">Text Editor</a>
										</li>
										<li>
											<a href="ui-counter.html">Counter</a>
										</li>
										<li>
											<a href="ui-scrollbar.html">Scrollbar</a>
										</li>
										<li>
											<a href="ui-stickynote.html">Sticky Note</a>
										</li>
										<li>
											<a href="ui-timeline.html">Timeline</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-input-search"></i>
										<span>Forms</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Form Elements <span class="menu-arrow inside-submenu"></span>
											</a>
											<ul>
												<li>
													<a href="form-basic-inputs.html">Basic Inputs</a>
												</li>
												<li>
													<a href="form-checkbox-radios.html">Checkbox & Radios</a>
												</li>
												<li>
													<a href="form-input-groups.html">Input Groups</a>
												</li>
												<li>
													<a href="form-grid-gutters.html">Grid & Gutters</a>
												</li>
												<li>
													<a href="form-select.html">Form Select</a>
												</li>
												<li>
													<a href="form-mask.html">Input Masks</a>
												</li>
												<li>
													<a href="form-fileupload.html">File Uploads</a>
												</li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Layouts <span class="menu-arrow inside-submenu"></span>
											</a>
											<ul>
												<li>
													<a href="form-horizontal.html">Horizontal Form</a>
												</li>
												<li>
													<a href="form-vertical.html">Vertical Form</a>
												</li>
												<li>
													<a href="form-floating-labels.html">Floating Labels</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="form-validation.html">Form Validation</a>
										</li>

										<li>
											<a href="form-select2.html">Select2</a>
										</li>
										<li>
											<a href="form-wizard.html">Form Wizard</a>
										</li>
										<li>
											<a href="form-pickers.html">Form Picker</a>
										</li>

									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-table-plus"></i>
										<span>Tables</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="tables-basic.html">Basic Tables </a>
										</li>
										<li>
											<a href="data-tables.html">Data Table </a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-chart-line"></i>
										<span>Charts</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="chart-apex.html">Apex Charts</a>
										</li>
										<li>
											<a href="chart-c3.html">Chart C3</a>
										</li>
										<li>
											<a href="chart-js.html">Chart Js</a>
										</li>
										<li>
											<a href="chart-morris.html">Morris Charts</a>
										</li>
										<li>
											<a href="chart-flot.html">Flot Charts</a>
										</li>
										<li>
											<a href="chart-peity.html">Peity Charts</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-icons"></i>
										<span>Icons</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="icon-fontawesome.html">Fontawesome Icons</a>
										</li>
										<li>
											<a href="icon-tabler.html">Tabler Icons</a>
										</li>
										<li>
											<a href="icon-bootstrap.html">Bootstrap Icons</a>
										</li>
										<li>
											<a href="icon-remix.html">Remix Icons</a>
										</li>
										<li>
											<a href="icon-feather.html">Feather Icons</a>
										</li>
										<li>
											<a href="icon-ionic.html">Ionic Icons</a>
										</li>
										<li>
											<a href="icon-material.html">Material Icons</a>
										</li>
										<li>
											<a href="icon-pe7.html">Pe7 Icons</a>
										</li>
										<li>
											<a href="icon-simpleline.html">Simpleline Icons</a>
										</li>
										<li>
											<a href="icon-themify.html">Themify Icons</a>
										</li>
										<li>
											<a href="icon-weather.html">Weather Icons</a>
										</li>
										<li>
											<a href="icon-typicon.html">Typicon Icons</a>
										</li>
										<li>
											<a href="icon-flag.html">Flag Icons</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-table-plus"></i>
										<span>Maps</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="maps-vector.html">Vector</a>
										</li>
										<li>
											<a href="maps-leaflet.html">Leaflet</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>Extras</span></li>
						<li>
							<ul>
								<li>
									<a href="javascript:void(0);"><i
											class="ti ti-file-text"></i><span>Documentation</span></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i
											class="ti ti-exchange"></i><span>Changelog</span><span
											class="badge bg-pink badge-xs text-white fs-10 ms-s">v4.0.2</span></a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-menu-2"></i><span>Multi
											Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Multilevel 1</a></li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Multilevel 2<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
												<li class="submenu submenu-two submenu-three">
													<a href="javascript:void(0);">Multilevel 2.2<span
															class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
														<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Multilevel 3</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Horizontal Menu -->
		<div class="sidebar sidebar-horizontal" id="horizontal-menu">
			<div class="sidebar-menu">
				<div class="main-menu">
					<ul class="nav-menu">
						<li class="menu-title">
							<span>Main</span>
						</li>
						<li class="submenu">
							<a href="#" >
								<i class="ti ti-smart-home"></i><span>Dashboard</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="index.html">Admin Dashboard</a></li>
								<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
								<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
								<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"  class="active subdrop">
								<i class="ti ti-user-star"></i><span>Super Admin</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="companies.html" class="active">Companies</a></li>
								<li><a href="subscription.html">Subscriptions</a></li>
								<li><a href="packages.html">Packages</a></li>
								<li><a href="domain.html">Domain</a></li>
								<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-layout-grid-add"></i><span>Applications</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="chat.html">Chat</a></li>
								<li class="submenu submenu-two">
									<a href="call.html">Calls<span
											class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="voice-call.html">Voice Call</a></li>
										<li><a href="video-call.html">Video Call</a></li>
										<li><a href="outgoing-call.html">Outgoing Call</a></li>
										<li><a href="incoming-call.html">Incoming Call</a></li>
										<li><a href="call-history.html">Call History</a></li>
									</ul>
								</li>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="email.html">Email</a></li>
								<li><a href="todo.html">To Do</a></li>
								<li><a href="notes.html">Notes</a></li>
								<li><a href="file-manager.html">File Manager</a></li>
								<li><a href="kanban-view.html">Kanban</a></li>
								<li><a href="invoices.html">Invoices</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-layout-board-split"></i><span>Layouts</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a href="layout-horizontal.html">
										<span>Horizontal</span>
									</a>
								</li>
								<li>
									<a href="layout-detached.html">
										<span>Detached</span>
									</a>
								</li>
								<li>
									<a href="layout-modern.html">
										<span>Modern</span>
									</a>
								</li>
								<li>
									<a href="layout-two-column.html">
										<span>Two Column </span>
									</a>
								</li>
								<li>
									<a href="layout-hovered.html">
										<span>Hovered</span>
									</a>
								</li>
								<li>
									<a href="layout-box.html">
										<span>Boxed</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-single.html">
										<span>Horizontal Single</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-overlay.html">
										<span>Horizontal Overlay</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-box.html">
										<span>Horizontal Box</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-sidemenu.html">
										<span>Menu Aside</span>
									</a>
								</li>
								<li>
									<a href="layout-vertical-transparent.html">
										<span>Transparent</span>
									</a>
								</li>
								<li>
									<a href="layout-without-header.html">
										<span>Without Header</span>
									</a>
								</li>
								<li>
									<a href="layout-rtl.html">
										<span>RTL</span>
									</a>
								</li>
								<li>
									<a href="layout-dark.html">
										<span>Dark</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Projects</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a href="clients-grid.html"><span>Clients</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Projects</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="projects-grid.html">Projects</a></li>
										<li><a href="tasks.html">Tasks</a></li>
										<li><a href="task-board.html">Task Board</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="call.html">Crm<span class="menu-arrow"></span></a>
									<ul>
										<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
										<li><a href="companies-grid.html"><span>Companies</span></a></li>
										<li><a href="deals-grid.html"><span>Deals</span></a></li>
										<li><a href="leads-grid.html"><span>Leads</span></a></li>
										<li><a href="pipeline.html"><span>Pipeline</span></a></li>
										<li><a href="analytics.html"><span>Analytics</span></a></li>
										<li><a href="activity.html"><span>Activities</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Employees</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employees.html">Employee Lists</a></li>
										<li><a href="employees-grid.html">Employee Grid</a></li>
										<li><a href="employee-details.html">Employee Details</a></li>
										<li><a href="departments.html">Departments</a></li>
										<li><a href="designations.html">Designations</a></li>
										<li><a href="policy.html">Policies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Tickets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="tickets.html">Tickets</a></li>
										<li><a href="ticket-details.html">Ticket Details</a></li>
									</ul>
								</li>
								<li><a href="holidays.html"><span>Holidays</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Attendance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);">Leaves<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="leaves.html">Leaves (Admin)</a></li>
												<li><a href="leaves-employee.html">Leave (Employee)</a></li>
												<li><a href="leave-settings.html">Leave Settings</a></li>
											</ul>
										</li>
										<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
										<li><a href="timesheets.html">Timesheets</a></li>
										<li><a href="schedule-timing.html">Shift & Schedule</a></li>
										<li><a href="overtime.html">Overtime</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Performance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="performance-indicator.html">Performance Indicator</a></li>
										<li><a href="performance-review.html">Performance Review</a></li>
										<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
										<li><a href="goal-tracking.html">Goal List</a></li>
										<li><a href="goal-type.html">Goal Type</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Training</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="training.html">Training List</a></li>
										<li><a href="trainers.html">Trainers</a></li>
										<li><a href="training-type.html">Training Type</a></li>
									</ul>
								</li>
								<li><a href="promotion.html"><span>Promotion</span></a></li>
								<li><a href="resignation.html"><span>Resignation</span></a></li>
								<li><a href="termination.html"><span>Termination</span></a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Administration</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Sales</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="estimates.html">Estimates</a></li>
										<li><a href="invoices.html">Invoices</a></li>
										<li><a href="payments.html">Payments</a></li>
										<li><a href="expenses.html">Expenses</a></li>
										<li><a href="provident-fund.html">Provident Fund</a></li>
										<li><a href="taxes.html">Taxes</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Accounting</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="categories.html">Categories</a></li>
										<li><a href="budgets.html">Budgets</a></li>
										<li><a href="budget-expenses.html">Budget Expenses</a></li>
										<li><a href="budget-revenues.html">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Payroll</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employee-salary.html">Employee Salary</a></li>
										<li><a href="payslip.html">Payslip</a></li>
										<li><a href="payroll.html">Payroll Items</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>assetstemplete</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="assetstemplete.html">assetstemplete</a></li>
										<li><a href="asset-categories.html">Asset Categories</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Help & Supports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="knowledgebase.html">Knowledge Base</a></li>
										<li><a href="activity.html">Activities</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>User Management</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="users.html">Users</a></li>
										<li><a href="roles-permissions.html">Roles & Permissions</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Reports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="expenses-report.html">Expense Report</a></li>
										<li><a href="invoice-report.html">Invoice Report</a></li>
										<li><a href="payment-report.html">Payment Report</a></li>
										<li><a href="project-report.html">Project Report</a></li>
										<li><a href="task-report.html">Task Report</a></li>
										<li><a href="user-report.html">User Report</a></li>
										<li><a href="employee-report.html">Employee Report</a></li>
										<li><a href="payslip-report.html">Payslip Report</a></li>
										<li><a href="attendance-report.html">Attendance Report</a></li>
										<li><a href="leave-report.html">Leave Report</a></li>
										<li><a href="daily-report.html">Daily Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Settings</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);">General Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="profile-settings.html">Profile</a></li>
												<li><a href="security-settings.html">Security</a></li>
												<li><a href="notification-settings.html">Notifications</a></li>
												<li><a href="connected-apps.html">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Website Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="bussiness-settings.html">Business Settings</a></li>
												<li><a href="seo-settings.html">SEO Settings</a></li>
												<li><a href="localization-settings.html">Localization</a></li>
												<li><a href="prefixes.html">Prefixes</a></li>
												<li><a href="preferences.html">Preferences</a></li>
												<li><a href="performance-appraisal.html">Appearance</a></li>
												<li><a href="language.html">Language</a></li>
												<li><a href="authentication-settings.html">Authentication</a></li>
												<li><a href="ai-settings.html">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">App Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="salary-settings.html">Salary Settings</a></li>
												<li><a href="approval-settings.html">Approval Settings</a></li>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="leave-type.html">Leave Type</a></li>
												<li><a href="custom-fields.html">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">System Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Templates</a></li>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Templates</a></li>
												<li><a href="otp-settings.html">OTP</a></li>
												<li><a href="gdpr.html">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Financial Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="payment-gateways.html">Payment Gateways</a></li>
												<li><a href="tax-rates.html">Tax Rate</a></li>
												<li><a href="currencies.html">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Other Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="custom-css.html">Custom CSS</a></li>
												<li><a href="custom-js.html">Custom JS</a></li>
												<li><a href="cronjob.html">Cronjob</a></li>
												<li><a href="storage-settings.html">Storage</a></li>
												<li><a href="ban-ip-address.html">Ban IP Address</a></li>
												<li><a href="backup.html">Backup</a></li>
												<li><a href="clear-cache.html">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-page-break"></i><span>Pages</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="starter.html"><span>Starter</span></a></li>
								<li><a href="profile.html"><span>Profile</span></a></li>
								<li><a href="gallery.html"><span>Gallery</span></a></li>
								<li><a href="search-result.html"><span>Search Results</span></a></li>
								<li><a href="timeline.html"><span>Timeline</span></a></li>
								<li><a href="pricing.html"><span>Pricing</span></a></li>
								<li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
								<li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
								<li><a href="under-construction.html"><span>Under Construction</span></a></li>
								<li><a href="api-keys.html"><span>API Keys</span></a></li>
								<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
								<li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
								<li class="submenu">
									<a href="#"><span>Content</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="pages.html">Pages</a></li>
										<li class="submenu">
											<a href="javascript:void(0);">Blogs<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="blogs.html">All Blogs</a></li>
												<li><a href="blog-categories.html">Categories</a></li>
												<li><a href="blog-comments.html">Comments</a></li>
												<li><a href="blog-tags.html">Tags</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.html">Countries</a></li>
												<li><a href="states.html">States</a></li>
												<li><a href="cities.html">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html">Testimonials</a></li>
										<li><a href="faq.html">FAQ’S</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<span>Authentication</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="login.html">Cover</a></li>
												<li><a href="login-2.html">Illustration</a></li>
												<li><a href="login-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="register.html">Cover</a></li>
												<li><a href="register-2.html">Illustration</a></li>
												<li><a href="register-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="forgot-password.html">Cover</a></li>
												<li><a href="forgot-password-2.html">Illustration</a></li>
												<li><a href="forgot-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="reset-password.html">Cover</a></li>
												<li><a href="reset-password-2.html">Illustration</a></li>
												<li><a href="reset-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-verification.html">Cover</a></li>
												<li><a href="email-verification-2.html">Illustration</a></li>
												<li><a href="email-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="two-step-verification.html">Cover</a></li>
												<li><a href="two-step-verification-2.html">Illustration</a></li>
												<li><a href="two-step-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
										<li><a href="error-404.html">404 Error</a></li>
										<li><a href="error-500.html">500 Error</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<span>UI Interface</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-hierarchy-2"></i>
												<span>Base UI</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="ui-alerts.html">Alerts</a>
												</li>
												<li>
													<a href="ui-accordion.html">Accordion</a>
												</li>
												<li>
													<a href="ui-avatar.html">Avatar</a>
												</li>
												<li>
													<a href="ui-badges.html">Badges</a>
												</li>
												<li>
													<a href="ui-borders.html">Border</a>
												</li>
												<li>
													<a href="ui-buttons.html">Buttons</a>
												</li>
												<li>
													<a href="ui-buttons-group.html">Button Group</a>
												</li>
												<li>
													<a href="ui-breadcrumb.html">Breadcrumb</a>
												</li>
												<li>
													<a href="ui-cards.html">Card</a>
												</li>
												<li>
													<a href="ui-carousel.html">Carousel</a>
												</li>
												<li>
													<a href="ui-colors.html">Colors</a>
												</li>
												<li>
													<a href="ui-dropdowns.html">Dropdowns</a>
												</li>
												<li>
													<a href="ui-grid.html">Grid</a>
												</li>
												<li>
													<a href="ui-images.html">Images</a>
												</li>
												<li>
													<a href="ui-lightbox.html">Lightbox</a>
												</li>
												<li>
													<a href="ui-media.html">Media</a>
												</li>
												<li>
													<a href="ui-modals.html">Modals</a>
												</li>
												<li>
													<a href="ui-offcanvas.html">Offcanvas</a>
												</li>
												<li>
													<a href="ui-pagination.html">Pagination</a>
												</li>
												<li>
													<a href="ui-popovers.html">Popovers</a>
												</li>
												<li>
													<a href="ui-progress.html">Progress</a>
												</li>
												<li>
													<a href="ui-placeholders.html">Placeholders</a>
												</li>
												<li>
													<a href="ui-spinner.html">Spinner</a>
												</li>
												<li>
													<a href="ui-sweetalerts.html">Sweet Alerts</a>
												</li>
												<li>
													<a href="ui-nav-tabs.html">Tabs</a>
												</li>
												<li>
													<a href="ui-toasts.html">Toasts</a>
												</li>
												<li>
													<a href="ui-tooltips.html">Tooltips</a>
												</li>
												<li>
													<a href="ui-typography.html">Typography</a>
												</li>
												<li>
													<a href="ui-video.html">Video</a>
												</li>
												<li>
													<a href="ui-sortable.html">Sortable</a>
												</li>
												<li>
													<a href="ui-swiperjs.html">Swiperjs</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-hierarchy-3"></i>
												<span>Advanced UI</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="ui-ribbon.html">Ribbon</a>
												</li>
												<li>
													<a href="ui-clipboard.html">Clipboard</a>
												</li>
												<li>
													<a href="ui-drag-drop.html">Drag & Drop</a>
												</li>
												<li>
													<a href="ui-rangeslider.html">Range Slider</a>
												</li>
												<li>
													<a href="ui-rating.html">Rating</a>
												</li>
												<li>
													<a href="ui-text-editor.html">Text Editor</a>
												</li>
												<li>
													<a href="ui-counter.html">Counter</a>
												</li>
												<li>
													<a href="ui-scrollbar.html">Scrollbar</a>
												</li>
												<li>
													<a href="ui-stickynote.html">Sticky Note</a>
												</li>
												<li>
													<a href="ui-timeline.html">Timeline</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-input-search"></i>
												<span>Forms</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Form Elements <span class="menu-arrow inside-submenu"></span>
													</a>
													<ul>
														<li>
															<a href="form-basic-inputs.html">Basic Inputs</a>
														</li>
														<li>
															<a href="form-checkbox-radios.html">Checkbox & Radios</a>
														</li>
														<li>
															<a href="form-input-groups.html">Input Groups</a>
														</li>
														<li>
															<a href="form-grid-gutters.html">Grid & Gutters</a>
														</li>
														<li>
															<a href="form-select.html">Form Select</a>
														</li>
														<li>
															<a href="form-mask.html">Input Masks</a>
														</li>
														<li>
															<a href="form-fileupload.html">File Uploads</a>
														</li>
													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Layouts <span class="menu-arrow inside-submenu"></span>
													</a>
													<ul>
														<li>
															<a href="form-horizontal.html">Horizontal Form</a>
														</li>
														<li>
															<a href="form-vertical.html">Vertical Form</a>
														</li>
														<li>
															<a href="form-floating-labels.html">Floating Labels</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="form-validation.html">Form Validation</a>
												</li>
												<li>
													<a href="form-select2.html">Select2</a>
												</li>
												<li>
													<a href="form-wizard.html">Form Wizard</a>
												</li>
												<li>
													<a href="form-pickers.html">Form Pickers</a>
												</li>

											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-table-plus"></i>
												<span>Tables</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="tables-basic.html">Basic Tables </a>
												</li>
												<li>
													<a href="data-tables.html">Data Table </a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-chart-line"></i>
												<span>Charts</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="chart-apex.html">Apex Charts</a>
												</li>
												<li>
													<a href="chart-c3.html">Chart C3</a>
												</li>
												<li>
													<a href="chart-js.html">Chart Js</a>
												</li>
												<li>
													<a href="chart-morris.html">Morris Charts</a>
												</li>
												<li>
													<a href="chart-flot.html">Flot Charts</a>
												</li>
												<li>
													<a href="chart-peity.html">Peity Charts</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-icons"></i>
												<span>Icons</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="icon-fontawesome.html">Fontawesome Icons</a>
												</li>
												<li>
													<a href="icon-tabler.html">Tabler Icons</a>
												</li>
												<li>
													<a href="icon-bootstrap.html">Bootstrap Icons</a>
												</li>
												<li>
													<a href="icon-remix.html">Remix Icons</a>
												</li>
												<li>
													<a href="icon-feather.html">Feather Icons</a>
												</li>
												<li>
													<a href="icon-ionic.html">Ionic Icons</a>
												</li>
												<li>
													<a href="icon-material.html">Material Icons</a>
												</li>
												<li>
													<a href="icon-pe7.html">Pe7 Icons</a>
												</li>
												<li>
													<a href="icon-simpleline.html">Simpleline Icons</a>
												</li>
												<li>
													<a href="icon-themify.html">Themify Icons</a>
												</li>
												<li>
													<a href="icon-weather.html">Weather Icons</a>
												</li>
												<li>
													<a href="icon-typicon.html">Typicon Icons</a>
												</li>
												<li>
													<a href="icon-flag.html">Flag Icons</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-table-plus"></i>
												<span>Maps</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="maps-vector.html">Vector</a>
												</li>
												<li>
													<a href="maps-leaflet.html">Leaflet</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Documentation</a></li>
								<li><a href="#">Change Log</a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Multilevel 1</a></li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Multilevel 2<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
												<li class="submenu submenu-two submenu-three">
													<a href="javascript:void(0);">Multilevel 2.2<span
															class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
														<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Multilevel 3</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="d-xl-flex align-items-center d-none">
						<a href="#" class="me-3 avatar avatar-sm">
							<img src="assetstemplete/img/profiles/avatar-07.jpg" alt="profile" class="rounded-circle">
						</a>
						<a href="#" class="btn btn-icon btn-sm rounded-circle mode-toggle">
							<i class="ti ti-sun"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Horizontal Menu -->

		<!-- Two Col Sidebar -->
		<div class="two-col-sidebar" id="two-col-sidebar">
			<div class="sidebar sidebar-twocol">
				<div class="twocol-mini">
					<a href="index.html" class="logo-small">
						<img src="assetstemplete/img/logo-small.svg" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist"
							aria-orientation="vertical">
							<a href="#" class="nav-link " title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
								<i class="ti ti-smart-home"></i>
							</a>
							<a href="#" class="nav-link" title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link active" title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
								<i class="ti ti-user-star"></i>
							</a>
							<a href="#" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
								<i class="ti ti-layout-board-split"></i>
							</a>
							<a href="#" class="nav-link" title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
								<i class="ti ti-users-group"></i>
							</a>
							<a href="#" class="nav-link" title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
								<i class="ti ti-user-shield"></i>
							</a>
							<a href="#" class="nav-link" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
								<i class="ti ti-user"></i>
							</a>
							<a href="#" class="nav-link" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
								<i class="ti ti-shopping-cart-dollar"></i>
							</a>
							<a href="#" class="nav-link" title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
								<i class="ti ti-cash"></i>
							</a>
							<a href="#" class="nav-link" title="Content" data-bs-toggle="tab" data-bs-target="#content">
								<i class="ti ti-license"></i>
							</a>
							<a href="#" class="nav-link" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
								<i class="ti ti-page-break"></i>
							</a>
							<a href="#" class="nav-link" title="Authentication" data-bs-toggle="tab"
								data-bs-target="#authentication">
								<i class="ti ti-lock-check"></i>
							</a>
							<a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab"
								data-bs-target="#ui-elements">
								<i class="ti ti-ux-circle"></i>
							</a>
							<a href="#" class="nav-link" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
								<i class="ti ti-vector-triangle"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="sidebar-right">
					<div class="sidebar-logo mb-4">
						<a href="index.html" class="logo logo-normal">
							<img src="assetstemplete/img/logo.svg" alt="Logo">
						</a>
						<a href="index.html" class="dark-logo">
							<img src="assetstemplete/img/logo-white.svg" alt="Logo">
						</a>
					</div>
					<div class="sidebar-scroll">
						<h6 class="mb-3">Welcome to SmartHR</h6>
						<div class="text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assetstemplete/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">System Admin</p>
						</div>
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade" id="dashboard">
								<ul>
									<li class="menu-title"><span>MAIN MENU</span></li>
									<li><a href="index.html">Admin Dashboard</a></li>
									<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
									<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
									<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="application">
								<ul>
									<li class="menu-title"><span>APPLICATION</span></li>
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="outgoing-call.html">Outgoing Call</a></li>
									<li><a href="incoming-call.html">Incoming Call</a></li>
									<li><a href="call-history.html">Call History</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="email.html">Email</a></li>
									<li><a href="todo.html">To Do</a></li>
									<li><a href="notes.html">Notes</a></li>
									<li><a href="file-manager.html">File Manager</a></li>
									<li><a href="kanban-view.html">Kanban</a></li>
									<li><a href="invoices.html">Invoices</a></li>
								</ul>
							</div>
							<div class="tab-pane fade show active" id="super-admin">
								<ul>
									<li class="menu-title"><span>SUPER ADMIN</span></li>
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="companies.html" class="active">Companies</a></li>
									<li><a href="subscription.html">Subscriptions</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="domain.html">Domain</a></li>
									<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="layout">
								<ul>
									<li class="menu-title"><span>LAYOUT</span></li>
									<li><a href="layout-horizontal.html"><span>Horizontal</span></a></li>
									<li><a href="layout-detached.html"><span>Detached</span></a></li>
									<li><a href="layout-modern.html"><span>Modern</span></a></li>
									<li><a href="layout-two-column.html"><span>Two Column </span></a></li>
									<li><a href="layout-hovered.html"><span>Hovered</span></a></li>
									<li><a href="layout-box.html"><span>Boxed</span></a></li>
									<li><a href="layout-horizontal-single.html"><span>Horizontal Single</span></a></li>
									<li><a href="layout-horizontal-overlay.html"><span>Horizontal Overlay</span></a></li>
									<li><a href="layout-horizontal-box.html"><span>Horizontal Box</span></a></li>
									<li><a href="layout-horizontal-sidemenu.html"><span>Menu Aside</span></a></li>
									<li><a href="layout-vertical-transparent.html"><span>Transparent</span></a></li>
									<li><a href="layout-without-header.html"><span>Without Header</span></a></li>
									<li><a href="layout-rtl.html"><span>RTL</span></a></li>
									<li><a href="layout-dark.html"><span>Dark</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="projects">
								<ul>
									<li class="menu-title"><span>PROJECTS</span></li>
									<li><a href="clients-grid.html">Clients</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Projects</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="projects-grid.html">Projects</a></li>
											<li><a href="tasks.html">Tasks</a></li>
											<li><a href="task-board.html">Task Board</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="crm">
								<ul>
									<li class="menu-title"><span>CRM</span></li>
									<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
									<li><a href="companies-grid.html"><span>Companies</span></a></li>
									<li><a href="deals-grid.html"><span>Deals</span></a></li>
									<li><a href="leads-grid.html"><span>Leads</span></a></li>
									<li><a href="pipeline.html"><span>Pipeline</span></a></li>
									<li><a href="analytics.html"><span>Analytics</span></a></li>
									<li><a href="activity.html"><span>Activities</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="hrm">
								<ul>
									<li class="menu-title"><span>HRM</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Employees</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="employees.html">Employee Lists</a></li>
											<li><a href="employees-grid.html">Employee Grid</a></li>
											<li><a href="employee-details.html">Employee Details</a></li>
											<li><a href="departments.html">Departments</a></li>
											<li><a href="designations.html">Designations</a></li>
											<li><a href="policy.html">Policies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Tickets</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="tickets.html">Tickets</a></li>
											<li><a href="ticket-details.html">Ticket Details</a></li>
										</ul>
									</li>
									<li><a href="holidays.html"><span>Holidays</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Attendance</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Leaves<span
														class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="leaves.html">Leaves (Admin)</a></li>
													<li><a href="leaves-employee.html">Leave (Employee)</a></li>
													<li><a href="leave-settings.html">Leave Settings</a></li>
												</ul>
											</li>
											<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
											<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
											<li><a href="timesheets.html">Timesheets</a></li>
											<li><a href="schedule-timing.html">Shift & Schedule</a></li>
											<li><a href="overtime.html">Overtime</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Performance</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="performance-indicator.html">Performance Indicator</a></li>
											<li><a href="performance-review.html">Performance Review</a></li>
											<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
											<li><a href="goal-tracking.html">Goal List</a></li>
											<li><a href="goal-type.html">Goal Type</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Training</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="training.html">Training List</a></li>
											<li><a href="trainers.html">Trainers</a></li>
											<li><a href="training-type.html">Training Type</a></li>
										</ul>
									</li>
									<li><a href="promotion.html"><span>Promotion</span></a></li>
									<li><a href="resignation.html"><span>Resignation</span></a></li>
									<li><a href="termination.html"><span>Termination</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="finance">
								<ul>
									<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Sales</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="estimates.html">Estimates</a></li>
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="payments.html">Payments</a></li>
											<li><a href="expenses.html">Expenses</a></li>
											<li><a href="provident-fund.html">Provident Fund</a></li>
											<li><a href="taxes.html">Taxes</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Accounting</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="categories.html">Categories</a></li>
											<li><a href="budgets.html">Budgets</a></li>
											<li><a href="budget-expenses.html">Budget Expenses</a></li>
											<li><a href="budget-revenues.html">Budget Revenues</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Payroll</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="employee-salary.html">Employee Salary</a></li>
											<li><a href="payslip.html">Payslip</a></li>
											<li><a href="payroll.html">Payroll Items</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="administration">
								<ul>
									<li class="menu-title"><span>ADMINISTRATION</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>assetstemplete</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="assetstemplete.html">assetstemplete</a></li>
											<li><a href="asset-categories.html">Asset Categories</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Help & Supports</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="knowledgebase.html">Knowledge Base</a></li>
											<li><a href="activity.html">Activities</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>User Management</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="users.html">Users</a></li>
											<li><a href="roles-permissions.html">Roles & Permissions</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Reports</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="expenses-report.html">Expense Report</a></li>
											<li><a href="invoice-report.html">Invoice Report</a></li>
											<li><a href="payment-report.html">Payment Report</a></li>
											<li><a href="project-report.html">Project Report</a></li>
											<li><a href="task-report.html">Task Report</a></li>
											<li><a href="user-report.html">User Report</a></li>
											<li><a href="employee-report.html">Employee Report</a></li>
											<li><a href="payslip-report.html">Payslip Report</a></li>
											<li><a href="attendance-report.html">Attendance Report</a></li>
											<li><a href="leave-report.html">Leave Report</a></li>
											<li><a href="daily-report.html">Daily Report</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											General Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="profile-settings.html">Profile</a></li>
											<li><a href="security-settings.html">Security</a></li>
											<li><a href="notification-settings.html">Notifications</a></li>
											<li><a href="connected-apps.html">Connected Apps</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Website Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="bussiness-settings.html">Business Settings</a></li>
											<li><a href="seo-settings.html">SEO Settings</a></li>
											<li><a href="localization-settings.html">Localization</a></li>
											<li><a href="prefixes.html">Prefixes</a></li>
											<li><a href="preferences.html">Preferences</a></li>
											<li><a href="performance-appraisal.html">Appearance</a></li>
											<li><a href="language.html">Language</a></li>
											<li><a href="authentication-settings.html">Authentication</a></li>
											<li><a href="ai-settings.html">AI Settings</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">App Settings<span
												class="menu-arrow"></span></a>
										<ul>
											<li><a href="salary-settings.html">Salary Settings</a></li>
											<li><a href="approval-settings.html">Approval Settings</a></li>
											<li><a href="invoice-settings.html">Invoice Settings</a></li>
											<li><a href="leave-type.html">Leave Type</a></li>
											<li><a href="custom-fields.html">Custom Fields</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											System Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="email-settings.html">Email Settings</a></li>
											<li><a href="email-template.html">Email Templates</a></li>
											<li><a href="sms-settings.html">SMS Settings</a></li>
											<li><a href="sms-template.html">SMS Templates</a></li>
											<li><a href="otp-settings.html">OTP</a></li>
											<li><a href="gdpr.html">GDPR Cookies</a></li>
											<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Financial Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="payment-gateways.html">Payment Gateways</a></li>
											<li><a href="tax-rates.html">Tax Rate</a></li>
											<li><a href="currencies.html">Currencies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Other Settings<span
												class="menu-arrow"></span></a>
										<ul>
											<li><a href="custom-css.html">Custom CSS</a></li>
											<li><a href="custom-js.html">Custom JS</a></li>
											<li><a href="cronjob.html">Cronjob</a></li>
											<li><a href="storage-settings.html">Storage</a></li>
											<li><a href="ban-ip-address.html">Ban IP Address</a></li>
											<li><a href="backup.html">Backup</a></li>
											<li><a href="clear-cache.html">Clear Cache</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="content">
								<ul>
									<li class="menu-title"><span>CONTENT</span></li>
									<li><a href="pages.html">Pages</a></li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Blogs
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="blogs.html">All Blogs</a></li>
											<li><a href="blog-categories.html">Categories</a></li>
											<li><a href="blog-comments.html">Comments</a></li>
											<li><a href="blog-tags.html">Blog Tags</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Locations
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="countries.html">Countries</a></li>
											<li><a href="states.html">States</a></li>
											<li><a href="cities.html">Cities</a></li>
										</ul>
									</li>
									<li><a href="testimonials.html">Testimonials</a></li>
									<li><a href="faq.html">FAQ’S</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="pages">
								<ul>
									<li class="menu-title"><span>PAGES</span></li>
									<li><a href="starter.html"><span>Starter</span></a></li>
									<li><a href="profile.html"><span>Profile</span></a></li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="search-result.html"><span>Search Results</span></a></li>
									<li><a href="timeline.html"><span>Timeline</span></a></li>
									<li><a href="pricing.html"><span>Pricing</span></a></li>
									<li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
									<li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
									<li><a href="under-construction.html"><span>Under Construction</span></a></li>
									<li><a href="api-keys.html"><span>API Keys</span></a></li>
									<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
									<li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="authentication">
								<ul>
									<li class="menu-title"><span>AUTHENTICATION</span></li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Login<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="login.html">Cover</a></li>
											<li><a href="login-2.html">Illustration</a></li>
											<li><a href="login-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Register<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="register.html">Cover</a></li>
											<li><a href="register-2.html">Illustration</a></li>
											<li><a href="register-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Forgot Password<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="forgot-password.html">Cover</a></li>
											<li><a href="forgot-password-2.html">Illustration</a></li>
											<li><a href="forgot-password-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Reset Password<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="reset-password.html">Cover</a></li>
											<li><a href="reset-password-2.html">Illustration</a></li>
											<li><a href="reset-password-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Email Verification<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="email-verification.html">Cover</a></li>
											<li><a href="email-verification-2.html">Illustration</a></li>
											<li><a href="email-verification-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											2 Step Verification<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="two-step-verification.html">Cover</a></li>
											<li><a href="two-step-verification-2.html">Illustration</a></li>
											<li><a href="two-step-verification-3.html">Basic</a></li>
										</ul>
									</li>
									<li><a href="lock-screen.html">Lock Screen</a></li>
									<li><a href="error-404.html">404 Error</a></li>
									<li><a href="error-500.html">500 Error</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="ui-elements">
								<ul>
									<li class="menu-title"><span>UI INTERFACE</span></li>
									<li class="submenu">
										<a href="javascript:void(0);">Base UI<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="ui-alerts.html">Alerts</a></li>
											<li><a href="ui-accordion.html">Accordion</a></li>
											<li><a href="ui-avatar.html">Avatar</a></li>
											<li><a href="ui-badges.html">Badges</a></li>
											<li><a href="ui-borders.html">Border</a></li>
											<li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-buttons-group.html">Button Group</a></li>
											<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
											<li><a href="ui-cards.html">Card</a></li>
											<li><a href="ui-carousel.html">Carousel</a></li>
											<li><a href="ui-colors.html">Colors</a></li>
											<li><a href="ui-dropdowns.html">Dropdowns</a></li>
											<li><a href="ui-grid.html">Grid</a></li>
											<li><a href="ui-images.html">Images</a></li>
											<li><a href="ui-lightbox.html">Lightbox</a></li>
											<li><a href="ui-media.html">Media</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-offcanvas.html">Offcanvas</a></li>
											<li><a href="ui-pagination.html">Pagination</a></li>
											<li><a href="ui-popovers.html">Popovers</a></li>
											<li><a href="ui-progress.html">Progress</a></li>
											<li><a href="ui-placeholders.html">Placeholders</a></li>
											<li><a href="ui-spinner.html">Spinner</a></li>
											<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
											<li><a href="ui-nav-tabs.html">Tabs</a></li>
											<li><a href="ui-toasts.html">Toasts</a></li>
											<li><a href="ui-tooltips.html">Tooltips</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-video.html">Video</a></li>
											<li><a href="ui-sortable.html">Sortable</a></li>
											<li><a href="ui-swiperjs.html">Swiperjs</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"> Advanced UI <span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="ui-ribbon.html">Ribbon</a></li>
											<li><a href="ui-clipboard.html">Clipboard</a></li>
											<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
											<li><a href="ui-rangeslider.html">Range Slider</a></li>
											<li><a href="ui-rating.html">Rating</a></li>
											<li><a href="ui-text-editor.html">Text Editor</a></li>
											<li><a href="ui-counter.html">Counter</a></li>
											<li><a href="ui-scrollbar.html">Scrollbar</a></li>
											<li><a href="ui-stickynote.html">Sticky Note</a></li>
											<li><a href="ui-timeline.html">Timeline</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"> Forms <span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
													<li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
													<li><a href="form-input-groups.html">Input Groups</a></li>
													<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
													<li><a href="form-select.html">Form Select</a></li>
													<li><a href="form-mask.html">Input Masks</a></li>
													<li><a href="form-fileupload.html">File Uploads</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-horizontal.html">Horizontal Form</a></li>
													<li><a href="form-vertical.html">Vertical Form</a></li>
													<li><a href="form-floating-labels.html">Floating Labels</a></li>
												</ul>
											</li>
											<li><a href="form-validation.html">Form Validation</a></li>
											<li><a href="form-select2.html">Select2</a></li>
											<li><a href="form-wizard.html">Form Wizard</a></li>
											<li><a href="form-pickers.html">Form Picker</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Tables <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="tables-basic.html">Basic Tables </a></li>
											<li><a href="data-tables.html">Data Table </a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Charts<span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="chart-apex.html">Apex Charts</a></li>
											<li><a href="chart-c3.html">Chart C3</a></li>
											<li><a href="chart-js.html">Chart Js</a></li>
											<li><a href="chart-morris.html">Morris Charts</a></li>
											<li><a href="chart-flot.html">Flot Charts</a></li>
											<li><a href="chart-peity.html">Peity Charts</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Icons<span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
											<li><a href="icon-tabler.html">Tabler Icons</a></li>
											<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
											<li><a href="icon-remix.html">Remix Icons</a></li>
											<li><a href="icon-feather.html">Feather Icons</a></li>
											<li><a href="icon-ionic.html">Ionic Icons</a></li>
											<li><a href="icon-material.html">Material Icons</a></li>
											<li><a href="icon-pe7.html">Pe7 Icons</a></li>
											<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
											<li><a href="icon-themify.html">Themify Icons</a></li>
											<li><a href="icon-weather.html">Weather Icons</a></li>
											<li><a href="icon-typicon.html">Typicon Icons</a></li>
											<li><a href="icon-flag.html">Flag Icons</a></li>

										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<i class="ti ti-table-plus"></i>
											<span>Maps</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li>
												<a href="maps-vector.html">Vector</a>
											</li>
											<li>
												<a href="maps-leaflet.html">Leaflet</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="extras">
								<ul>
									<li class="menu-title"><span>EXTRAS</span></li>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Change Log</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Multilevel 1</a></li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
													<li class="submenu submenu-two submenu-three">
														<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
														<ul>
															<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
															<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="javascript:void(0);">Multilevel 3</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Two Col Sidebar -->

		<!-- Stacked Sidebar -->
		<div class="stacked-sidebar" id="stacked-sidebar">
			<div class="sidebar sidebar-stacked" style="display: flex !important;">
				<div class="stacked-mini">
					<a href="index.html" class="logo-small">
						<img src="assetstemplete/img/logo-small.svg" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="d-flex align-items-center flex-column">
							<div class="mb-1 notification-item">
								<a href="#" class="btn btn-menubar position-relative">
									<i class="ti ti-bell"></i>
									<span class="notification-status-dot"></span>
								</a>
							</div>
							<div class="mb-1">
								<a href="#" class="btn btn-menubar btnFullscreen">
									<i class="ti ti-maximize"></i>
								</a>
							</div>
							<div class="mb-1">
								<a href="calendar.html" class="btn btn-menubar">
									<i class="ti ti-layout-grid-remove"></i>
								</a>
							</div>
							<div class="mb-1">
								<a href="chat.html" class="btn btn-menubar position-relative">
									<i class="ti ti-brand-hipchat"></i>
									<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
								</a>
							</div>
							<div class="mb-1">
								<a href="email.html" class="btn btn-menubar">
									<i class="ti ti-mail"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar-right d-flex justify-content-between flex-column">
					<div class="sidebar-scroll">
						<h6 class="mb-3">Welcome to SmartHR</h6>
						<div class="sidebar-profile text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assetstemplete/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">System Admin</p>
						</div>
						<div class="stack-menu">
							<div class="nav flex-column align-items-center nav-pills" role="tablist" aria-orientation="vertical">
								<div class="row g-2">
									<div class="col-6">
										<a href="#menu-dashboard" role="tab" class="nav-link " title="Dashboard" data-bs-toggle="tab" data-bs-target="#menu-dashboard" aria-selected="true">
											<span><i class="ti ti-smart-home"></i></span>
											<p>Dashboard</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-application" role="tab" class="nav-link" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-application" aria-selected="false">
											<span><i class="ti ti-layout-grid-add"></i></span>
											<p>Applications</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-superadmin" role="tab" class="nav-link active" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-superadmin" aria-selected="false">
											<span><i class="ti ti-user-star"></i></span>
											<p>Super Admin</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-layout" role="tab" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#menu-layout" aria-selected="false">
											<span><i class="ti ti-layout-board-split"></i></span>
											<p>Layouts</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-project" role="tab" class="nav-link" title="Projects" data-bs-toggle="tab" data-bs-target="#menu-project" aria-selected="false">
											<span><i class="ti ti-folder"></i></span>
											<p>Projects</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-crm" role="tab" class="nav-link" title="CRM" data-bs-toggle="tab" data-bs-target="#menu-crm" aria-selected="false">
											<span><i class="ti ti-user-shield"></i></span>
											<p>Crm</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-hrm" role="tab" class="nav-link" title="HRM" data-bs-toggle="tab" data-bs-target="#menu-hrm" aria-selected="false">
											<span><i class="ti ti-users"></i></span>
											<p>Hrm</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-finance" role="tab" class="nav-link" title="Finance & Accounts" data-bs-toggle="tab" data-bs-target="#menu-finance" aria-selected="false">
											<span><i class="ti ti-shopping-cart-dollar"></i></span>
											<p>Finance & Accounts</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-administration" role="tab" class="nav-link" title="Administration" data-bs-toggle="tab" data-bs-target="#menu-administration" aria-selected="false">
											<span><i class="ti ti-cash"></i></span>
											<p>Administration</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-content" role="tab" class="nav-link" title="Content" data-bs-toggle="tab" data-bs-target="#menu-content" aria-selected="false">
											<span><i class="ti ti-license"></i></span>
											<p>Contents</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-pages" role="tab" class="nav-link" title="Pages"
											data-bs-toggle="tab" data-bs-target="#menu-pages" aria-selected="false">
											<span><i class="ti ti-page-break"></i></span>
											<p>Pages</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-authentication" role="tab" class="nav-link" title="Authentication" data-bs-toggle="tab" data-bs-target="#menu-authentication" aria-selected="false">
											<span><i class="ti ti-lock-check"></i></span>
											<p>Authentication</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-ui-elements" role="tab" class="nav-link" title="UI Elements" data-bs-toggle="tab" data-bs-target="#menu-ui-elements" aria-selected="false">
											<span><i class="ti ti-ux-circle"></i></span>
											<p>Basic UI</p>
										</a>
									</div>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade" id="menu-dashboard">
									<ul class="stack-submenu">
										<li><a href="index.html">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
										<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
										<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
									</ul>
								</div>
								<div class="tab-pane fade show active" id="menu-superadmin">
									<ul class="stack-submenu">
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="companies.html" class="active">Companies</a></li>
										<li><a href="subscription.html">Subscriptions</a></li>
										<li><a href="packages.html">Packages</a></li>
										<li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-application">
									<ul class="stack-submenu">
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu submenu-two">
											<a href="call.html">Calls<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="voice-call.html">Voice Call</a></li>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="outgoing-call.html">Outgoing Call</a></li>
												<li><a href="incoming-call.html">Incoming Call</a></li>
												<li><a href="call-history.html">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="email.html">Email</a></li>
										<li><a href="todo.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="social-feed.html">Social Feed</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
										<li><a href="kanban-view.html">Kanban</a></li>
										<li><a href="invoices.html">Invoices</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-layout">
									<ul class="stack-submenu">
										<li><a href="layout-horizontal.html">Horizontal</a></li>
										<li><a href="layout-detached.html">Detached</a></li>
										<li><a href="layout-modern.html">Modern</a></li>
										<li><a href="layout-two-column.html">Two Column</a></li>
										<li><a href="layout-hovered.html">Hovered</a></li>
										<li><a href="layout-box.html">Boxed</a></li>
										<li><a href="layout-horizontal-single.html">Horizontal Single</a></li>
										<li><a href="layout-horizontal-overlay.html">Horizontal Overlay</a></li>
										<li><a href="layout-horizontal-box.html">Horizontal Box</a></li>
										<li><a href="layout-horizontal-sidemenu.html">Menu Aside</a></li>
										<li><a href="layout-vertical-transparent.html">Transparent</a></li>
										<li><a href="layout-without-header.html">Without Header</a></li>
										<li><a href="layout-rtl.html">RTL</a></li>
										<li><a href="layout-dark.html">Dark</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-project">
									<ul class="stack-submenu">
										<li><a href="clients-grid.html"><span>Clients</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Projects</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="projects-grid.html">Projects</a></li>
												<li><a href="tasks.html">Tasks</a></li>
												<li><a href="task-board.html">Task Board</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-crm">
									<ul class="stack-submenu">
										<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
										<li><a href="companies-grid.html"><span>Companies</span></a></li>
										<li><a href="deals-grid.html"><span>Deals</span></a></li>
										<li><a href="leads-grid.html"><span>Leads</span></a></li>
										<li><a href="pipeline.html"><span>Pipeline</span></a></li>
										<li><a href="analytics.html"><span>Analytics</span></a></li>
										<li><a href="activity.html"><span>Activities</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-hrm">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"><span>Employees</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="employees.html">Employee Lists</a></li>
												<li><a href="employees-grid.html">Employee Grid</a></li>
												<li><a href="employee-details.html">Employee Details</a></li>
												<li><a href="departments.html">Departments</a></li>
												<li><a href="designations.html">Designations</a></li>
												<li><a href="policy.html">Policies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Tickets</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="tickets.html">Tickets</a></li>
												<li><a href="ticket-details.html">Ticket Details</a></li>
											</ul>
										</li>
										<li><a href="holidays.html"><span>Holidays</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Attendance</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Leaves<span
															class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="leaves.html">Leaves (Admin)</a></li>
														<li><a href="leaves-employee.html">Leave (Employee)</a></li>
														<li><a href="leave-settings.html">Leave Settings</a></li>
													</ul>
												</li>
												<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
												<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
												<li><a href="timesheets.html">Timesheets</a></li>
												<li><a href="schedule-timing.html">Shift & Schedule</a></li>
												<li><a href="overtime.html">Overtime</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Performance</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="performance-indicator.html">Performance Indicator</a></li>
												<li><a href="performance-review.html">Performance Review</a></li>
												<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
												<li><a href="goal-tracking.html">Goal List</a></li>
												<li><a href="goal-type.html">Goal Type</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Training</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="training.html">Training List</a></li>
												<li><a href="trainers.html">Trainers</a></li>
												<li><a href="training-type.html">Training Type</a></li>
											</ul>
										</li>
										<li><a href="promotion.html"><span>Promotion</span></a></li>
										<li><a href="resignation.html"><span>Resignation</span></a></li>
										<li><a href="termination.html"><span>Termination</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-finance">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"><span>Sales</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="estimates.html">Estimates</a></li>
												<li><a href="invoices.html">Invoices</a></li>
												<li><a href="payments.html">Payments</a></li>
												<li><a href="expenses.html">Expenses</a></li>
												<li><a href="provident-fund.html">Provident Fund</a></li>
												<li><a href="taxes.html">Taxes</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Accounting</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="categories.html">Categories</a></li>
												<li><a href="budgets.html">Budgets</a></li>
												<li><a href="budget-expenses.html">Budget Expenses</a></li>
												<li><a href="budget-revenues.html">Budget Revenues</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Payroll</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="employee-salary.html">Employee Salary</a></li>
												<li><a href="payslip.html">Payslip</a></li>
												<li><a href="payroll.html">Payroll Items</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-administration">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"><span>assetstemplete</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="assetstemplete.html">assetstemplete</a></li>
												<li><a href="asset-categories.html">Asset Categories</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Help & Supports</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="knowledgebase.html">Knowledge Base</a></li>
												<li><a href="activity.html">Activities</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>User Management</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="users.html">Users</a></li>
												<li><a href="roles-permissions.html">Roles & Permissions</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Reports</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="expenses-report.html">Expense Report</a></li>
												<li><a href="invoice-report.html">Invoice Report</a></li>
												<li><a href="payment-report.html">Payment Report</a></li>
												<li><a href="project-report.html">Project Report</a></li>
												<li><a href="task-report.html">Task Report</a></li>
												<li><a href="user-report.html">User Report</a></li>
												<li><a href="employee-report.html">Employee Report</a></li>
												<li><a href="payslip-report.html">Payslip Report</a></li>
												<li><a href="attendance-report.html">Attendance Report</a></li>
												<li><a href="leave-report.html">Leave Report</a></li>
												<li><a href="daily-report.html">Daily Report</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												General Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="profile-settings.html">Profile</a></li>
												<li><a href="security-settings.html">Security</a></li>
												<li><a href="notification-settings.html">Notifications</a></li>
												<li><a href="connected-apps.html">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												Website Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="bussiness-settings.html">Business Settings</a></li>
												<li><a href="seo-settings.html">SEO Settings</a></li>
												<li><a href="localization-settings.html">Localization</a></li>
												<li><a href="prefixes.html">Prefixes</a></li>
												<li><a href="preferences.html">Preferences</a></li>
												<li><a href="performance-appraisal.html">Appearance</a></li>
												<li><a href="language.html">Language</a></li>
												<li><a href="authentication-settings.html">Authentication</a></li>
												<li><a href="ai-settings.html">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">App Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="salary-settings.html">Salary Settings</a></li>
												<li><a href="approval-settings.html">Approval Settings</a></li>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="leave-type.html">Leave Type</a></li>
												<li><a href="custom-fields.html">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												System Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Templates</a></li>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Templates</a></li>
												<li><a href="otp-settings.html">OTP</a></li>
												<li><a href="gdpr.html">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												Financial Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="payment-gateways.html">Payment Gateways</a></li>
												<li><a href="tax-rates.html">Tax Rate</a></li>
												<li><a href="currencies.html">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Other Settings<span
													class="menu-arrow"></span></a>
											<ul>
												<li><a href="custom-css.html">Custom CSS</a></li>
												<li><a href="custom-js.html">Custom JS</a></li>
												<li><a href="cronjob.html">Cronjob</a></li>
												<li><a href="storage-settings.html">Storage</a></li>
												<li><a href="ban-ip-address.html">Ban IP Address</a></li>
												<li><a href="backup.html">Backup</a></li>
												<li><a href="clear-cache.html">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-content">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);">Blogs<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="blogs.html">All Blogs</a></li>
												<li><a href="blog-categories.html">Categories</a></li>
												<li><a href="blog-comments.html">Comments</a></li>
												<li><a href="blog-tags.html">Tags</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.html">Countries</a></li>
												<li><a href="states.html">States</a></li>
												<li><a href="cities.html">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html">Testimonials</a></li>
										<li><a href="faq.html">FAQ’S</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-pages">
									<ul class="stack-submenu">
										<li><a href="starter.html">Starter</a></li>
										<li><a href="profile.html">Profile</a></li>
										<li><a href="profile-settings.html">Profile Settings</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="search-result.html">Search Results</a></li>
										<li><a href="timeline.html">Timeline</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="under-maintenance.html">Under Maintenance</a></li>
										<li><a href="under-construction.html">Under Construction</a></li>
										<li><a href="api-keys.html">API Keys</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="terms-condition.html">Terms & Conditions</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-authentication">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="login.html">Cover</a></li>
												<li><a href="login-2.html">Illustration</a></li>
												<li><a href="login-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="register.html">Cover</a></li>
												<li><a href="register-2.html">Illustration</a></li>
												<li><a href="register-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="reset-password.html">Cover</a></li>
												<li><a href="reset-password-2.html">Illustration</a></li>
												<li><a href="reset-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-verification.html">Cover</a></li>
												<li><a href="email-verification-2.html">Illustration</a></li>
												<li><a href="email-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="two-step-verification.html">Cover</a></li>
												<li><a href="two-step-verification-2.html">Illustration</a></li>
												<li><a href="two-step-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
										<li><a href="error-404.html">404 Error</a></li>
										<li><a href="error-500.html">500 Error</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-ui-elements">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);">Base UI<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="ui-alerts.html">Alerts</a></li>
												<li><a href="ui-accordion.html">Accordion</a></li>
												<li><a href="ui-avatar.html">Avatar</a></li>
												<li><a href="ui-badges.html">Badges</a></li>
												<li><a href="ui-borders.html">Border</a></li>
												<li><a href="ui-buttons.html">Buttons</a></li>
												<li><a href="ui-buttons-group.html">Button Group</a></li>
												<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
												<li><a href="ui-cards.html">Card</a></li>
												<li><a href="ui-carousel.html">Carousel</a></li>
												<li><a href="ui-colors.html">Colors</a></li>
												<li><a href="ui-dropdowns.html">Dropdowns</a></li>
												<li><a href="ui-grid.html">Grid</a></li>
												<li><a href="ui-images.html">Images</a></li>
												<li><a href="ui-lightbox.html">Lightbox</a></li>
												<li><a href="ui-media.html">Media</a></li>
												<li><a href="ui-modals.html">Modals</a></li>
												<li><a href="ui-offcanvas.html">Offcanvas</a></li>
												<li><a href="ui-pagination.html">Pagination</a></li>
												<li><a href="ui-popovers.html">Popovers</a></li>
												<li><a href="ui-progress.html">Progress</a></li>
												<li><a href="ui-placeholders.html">Placeholders</a></li>
												<li><a href="ui-spinner.html">Spinner</a></li>
												<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
												<li><a href="ui-nav-tabs.html">Tabs</a></li>
												<li><a href="ui-toasts.html">Toasts</a></li>
												<li><a href="ui-tooltips.html">Tooltips</a></li>
												<li><a href="ui-typography.html">Typography</a></li>
												<li><a href="ui-video.html">Video</a></li>
											<li><a href="ui-sortable.html">Sortable</a></li>
											<li><a href="ui-swiperjs.html">Swiperjs</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"> Advanced UI<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="ui-ribbon.html">Ribbon</a></li>
												<li><a href="ui-clipboard.html">Clipboard</a></li>
												<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
												<li><a href="ui-rangeslider.html">Range Slider</a></li>
												<li><a href="ui-rating.html">Rating</a></li>
												<li><a href="ui-text-editor.html">Text Editor</a></li>
												<li><a href="ui-counter.html">Counter</a></li>
												<li><a href="ui-scrollbar.html">Scrollbar</a></li>
												<li><a href="ui-stickynote.html">Sticky Note</a></li>
												<li><a href="ui-timeline.html">Timeline</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Forms<span class="menu-arrow"></span> </a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
														<li><a href="form-checkbox-radios.html">Checkbox & Radios</a> </li>
														<li><a href="form-input-groups.html">Input Groups</a></li>
														<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
														<li><a href="form-select.html">Form Select</a></li>
														<li><a href="form-mask.html">Input Masks</a></li>
														<li><a href="form-fileupload.html">File Uploads</a></li>

													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-horizontal.html">Horizontal Form</a></li>
														<li><a href="form-vertical.html">Vertical Form</a></li>
														<li><a href="form-floating-labels.html">Floating Labels</a></li>
													</ul>
												</li>
												<li><a href="form-validation.html">Form Validation</a></li>
												<li><a href="form-select2.html">Select2</a></li>
												<li><a href="form-wizard.html">Form Wizard</a></li>
												<li><a href="form-pickers.html">Form Picker</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Tables<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="tables-basic.html">Basic Tables </a></li>
												<li><a href="data-tables.html">Data Table </a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Charts<span class="menu-arrow"></span> </a>
											<ul>
												<li><a href="chart-apex.html">Apex Charts</a></li>
												<li><a href="chart-c3.html">Chart C3</a></li>
												<li><a href="chart-js.html">Chart Js</a></li>
												<li><a href="chart-morris.html">Morris Charts</a></li>
												<li><a href="chart-flot.html">Flot Charts</a></li>
												<li><a href="chart-peity.html">Peity Charts</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Icons<span class="menu-arrow"></span> </a>
											<ul>
												<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
												<li><a href="icon-tabler.html">Tabler Icons</a></li>
												<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
												<li><a href="icon-remix.html">Remix Icons</a></li>
												<li><a href="icon-feather.html">Feather Icons</a></li>
												<li><a href="icon-ionic.html">Ionic Icons</a></li>
												<li><a href="icon-material.html">Material Icons</a></li>
												<li><a href="icon-pe7.html">Pe7 Icons</a></li>
												<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
												<li><a href="icon-themify.html">Themify Icons</a></li>
												<li><a href="icon-weather.html">Weather Icons</a></li>
												<li><a href="icon-typicon.html">Typicon Icons</a></li>
												<li><a href="icon-flag.html">Flag Icons</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-table-plus"></i>
												<span>Maps</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="maps-vector.html">Vector</a>
												</li>
												<li>
													<a href="maps-leaflet.html">Leaflet</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="p-3">
						<a href="javascript:void(0);" class="d-flex align-items-center fs-12 mb-3">Documentation</a>
						<a href="javascript:void(0);" class="d-flex align-items-center fs-12">Change Log<span class="badge bg-pink badge-xs text-white fs-10 ms-2">v4.0.2</span></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Stacked Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Companies</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Application
								</li>
								<li class="breadcrumb-item active" aria-current="page">Companies List</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Export
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_company" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Company</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="row">

					<!-- Total Companies -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<span class="avatar avatar-lg bg-primary flex-shrink-0">
										<i class="ti ti-building fs-16"></i>
									</span>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Total Companies</p>
										<h4>950</h4>
									</div>
								</div>
								<div id="total-chart"></div>
							</div>
						</div>
					</div>
					<!-- /Total Companies -->

					<!-- Total Companies -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<span class="avatar avatar-lg bg-success flex-shrink-0">
										<i class="ti ti-building fs-16"></i>
									</span>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Active Companies</p>
										<h4>920</h4>
									</div>
								</div>
								<div id="active-chart"></div>
							</div>
						</div>
					</div>
					<!-- /Total Companies -->

					<!-- Inactive Companies -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<span class="avatar avatar-lg bg-danger flex-shrink-0">
										<i class="ti ti-building fs-16"></i>
									</span>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Inactive Companies</p>
										<h4>30</h4>
									</div>
								</div>
								<div id="inactive-chart"></div>
							</div>
						</div>
					</div>
					<!-- /Inactive Companies -->

					<!-- Company Location -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<span class="avatar avatar-lg bg-skyblue flex-shrink-0">
										<i class="ti ti-map-pin-check fs-16"></i>
									</span>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Company Location</p>
										<h4>180</h4>
									</div>
								</div>
								<div id="location-chart"></div>
							</div>
						</div>
					</div>
					<!-- /Company Location -->

				</div>

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Companies List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Plan
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Advanced</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Basic</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Enterprise</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
									</li>
								</ul>
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th class="no-sort">
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox" id="select-all">
											</div>
										</th>
										<th>Company Name</th>
										<th>Email</th>
										<th>Account URL</th>
										<th>Plan</th>
										<th>Created Date</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assetstemplete/img/company/company-01.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">BrightWave Innovations</a></h6>
												</div>
											</div>
										</td>
										<td>michael@example.com</td>
										<td>bwi.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Advanced (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>12 Sep 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2"  data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assetstemplete/img/company/company-02.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Stellar Dynamics</a></h6>
												</div>
											</div>
										</td>
										<td>sophie@example.com</td>
										<td>sd.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Basic (Yearly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>24 Oct 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assetstemplete/img/company/company-03.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Quantum Nexus</a></h6>
												</div>
											</div>
										</td>
										<td>cameron@example.com</td>
										<td>qn.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Advanced (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>18 Feb 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-04.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">EcoVision Enterprises</a></h6>
												</div>
											</div>
										</td>
										<td>doris@example.com</td>
										<td>eve.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Advanced (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>17 Oct 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2"  data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-05.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Aurora Technologies</a></h6>
												</div>
											</div>
										</td>
										<td>thomas@example.com</td>
										<td>at.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Enterprise (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>20 Jul 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-06.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">BlueSky Ventures</a></h6>
												</div>
											</div>
										</td>
										<td>kathleen@example.com</td>
										<td>bsv.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Advanced (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>10 Apr 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-07.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">TerraFusion Energy</a></h6>
												</div>
											</div>
										</td>
										<td>bruce@example.com</td>
										<td>tfe.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Enterprise (Yearly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>29 Aug 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-08.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">UrbanPulse Design</a></h6>
												</div>
											</div>
										</td>
										<td>estelle@example.com</td>
										<td>upd.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Basic (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>22 Feb 2024</td>
										<td>
											<span class="badge badge-danger d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Inactive
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2"  data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-09.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Nimbus Networks</a></h6>
												</div>
											</div>
										</td>
										<td>stephen@example.com</td>
										<td>nn.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												<p class="mb-0 me-2">Basic (Yearly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>03 Nov 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border rounded-circle">
													<img src="assets/img/company/company-10.svg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Epicurean Delights</a></h6>
												</div>
											</div>
										</td>
										<td>angela@example.com</td>
										<td>ed.example.com</td>
										<td>
											<div class="d-flex align-items-center justify-content-between">
												`<p class="mb-0 me-2">Advanced (Monthly)</p>
												<a href="#" data-bs-toggle="modal" class="badge badge-purple badge-xs" data-bs-target="#upgrade_info">Upgrade</a>
											</div>
										</td>
										<td>17 Dec 2024</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#company_detail"><i class="ti ti-eye"></i></a>
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-target="#delete_modal" data-bs-toggle="modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Company -->
		<div class="modal fade" id="add_company">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Company</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="companies.html">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<img src="assets/img/profiles/avatar-30.jpg" alt="img" class="rounded-circle">
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" class="form-control image-sign" multiple="">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email Address</label>
										<input type="email" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Account URL</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Website</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Password <span class="text-danger"> *</span></label>
										<div class="pass-group">
											<input type="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
										<div class="pass-group">
											<input type="password" class="pass-inputs form-control">
											<span class="ti toggle-passwords ti-eye-off"></span>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Address</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Plan Name <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Basic</option>
											<option>Enterprise</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Plan Type <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Monthly</option>
											<option>Yearly</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 ">
										<label class="form-label">Currency <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>USD</option>
											<option>Euro</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 ">
										<label class="form-label">Language <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>English</option>
											<option>Arabic</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 ">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Company</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Company -->

		<!-- Edit Company -->
		<div class="modal fade" id="edit_company">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Company</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="companies.html">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<img src="assets/img/profiles/avatar-30.jpg" alt="img" class="rounded-circle">
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" class="form-control image-sign" multiple="">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="Stellar Dynamics">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email Address</label>
										<input type="email" class="form-control" value="sophie@example.com">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Account URL</label>
										<input type="text" class="form-control" value="sd.example.com">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="+1 895455450">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Website</label>
										<input type="text" class="form-control" value="Admin Website">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Password <span class="text-danger"> *</span></label>
										<div class="pass-group">
											<input type="password" class="pass-input form-control" value="123">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
										<div class="pass-group">
											<input type="password" class="pass-inputs form-control" value="123">
											<span class="ti toggle-passwords ti-eye-off"></span>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Address</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Plan Name <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Basic</option>
											<option>Enterprise</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Plan Type <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>Monthly</option>
											<option>Yearly</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 ">
										<label class="form-label">Currency <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>USD</option>
											<option>Euro</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 ">
										<label class="form-label">Language <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>English</option>
											<option>Arabic</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3 ">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Company -->

		<!-- Upgrade Information -->
		<div class="modal fade" id="upgrade_info">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Upgrade Package</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="p-3 mb-1">
						<div class="rounded bg-light p-3">
							<h5 class="mb-3">Current Plan Details</h5>
							<div class="row align-items-center">
								<div class="col-md-4">
									<div class="mb-3">
										<p class="fs-12 mb-0">Company Name</p>
										<p class="text-gray-9">BrightWave Innovations</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<p class="fs-12 mb-0">Plan Name</p>
										<p class="text-gray-9">Advanced</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<p class="fs-12 mb-0">Plan Type</p>
										<p class="text-gray-9">Monthly</p>
									</div>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-4">
									<div class="mb-3">
										<p class="fs-12 mb-0">Price</p>
										<p class="text-gray-9">200</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<p class="fs-12 mb-0">Register Date</p>
										<p class="text-gray-9">12 Sep 2024</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<p class="fs-12 mb-0">Expiring On</p>
										<p class="text-gray-9">11 Oct 2024</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<form action="companies.html">
						<div class="modal-body pb-0">
							<h5 class="mb-4">Change Plan</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Plan Name <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Basic</option>
											<option>Enterprise</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Plan Type <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>Monthly</option>
											<option>Yearly</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Ammount<span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Payment Date <span class="text-danger">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Next Payment Date <span class="text-danger">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expiring On <span class="text-danger">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Upgrade Information -->

		<!-- Company Detail -->
		<div class="modal fade" id="company_detail">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Company Detail</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="moday-body">
						<div class="p-3">
							<div class="d-flex justify-content-between align-items-center rounded bg-light p-3">
								<div class="file-name-icon d-flex align-items-center">
									<a href="#" class="avatar avatar-md border rounded-circle flex-shrink-0 me-2">
										<img src="assets/img/company/company-01.svg" class="img-fluid" alt="img">
									</a>
									<div>
										<p class="text-gray-9 fw-medium mb-0">BrightWave Innovations</p>
										<p>michael@example.com</p>
									</div>
								</div>
								<span class="badge badge-success"><i class="ti ti-point-filled"></i>Active</span>
							</div>
						</div>
						<div class="p-3">
							<p class="text-gray-9 fw-medium">Basic Info</p>
							<div class="pb-1 border-bottom mb-4">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Account URL</p>
											<p class="text-gray-9">bwi.example.com</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Phone Number</p>
											<p class="text-gray-9">(163) 2459 315</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Website</p>
											<p class="text-gray-9">www.exmple.com</p>
										</div>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Currency</p>
											<p class="text-gray-9">United Stated Dollar (USD)</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Language</p>
											<p class="text-gray-9">English</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Addresss</p>
											<p class="text-gray-9">3705 Lynn Avenue, Phelps, WI 54554</p>
										</div>
									</div>
								</div>
							</div>
							<p class="text-gray-9 fw-medium">Plan Details</p>
							<div>
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Plan Name</p>
											<p class="text-gray-9">Advanced</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Plan Type</p>
											<p class="text-gray-9">Monthly</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Price</p>
											<p class="text-gray-9">$200</p>
										</div>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Register Date</p>
											<p class="text-gray-9">12 Sep 2024</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="fs-12 mb-0">Expiring On</p>
											<p class="text-gray-9">11 Oct 2024</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>


				</div>
			</div>
		</div>
		<!-- /Company Detail -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Delete</h4>
						<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a href="companies.html" class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>

	<!-- Color Picker JS -->
	<script src="assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

	<!-- Datatable JS -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap5.min.js"></script>

	<!-- Daterangepikcer JS -->
	<script src="assets/js/moment.js"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="assets/plugins/apexchart/chart-data.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-colorpicker.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>
