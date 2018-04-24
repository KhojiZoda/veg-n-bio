<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Clever - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard,Vue,Vue.js,React,React.js">
  <title>Admin Realm</title>
  
  {!! Html::style('vendor/css/flag-icon.min.css') !!}
  {!! Html::style('vendor/css/font-awesome.min.css') !!}
  {!! Html::style('vendor/css/simple-line-icons.min.css') !!}
  {!! Html::style('css/style.css') !!}
  {!! Html::style('vendor/css/daterangepicker.min.css') !!}
  {!! Html::style('vendor/css/gauge.min.css') !!}
  {!! Html::style('vendor/css/toastr.min.css') !!}

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none h-100 b-r-1 px-3" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none mr-auto">

      <form class="form-inline px-4">
        <i class="fa fa-search"></i>
        <input class="form-control" type="text" placeholder="Search...">
      </form>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown d-md-down-none pr-4">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="flag-icon flag-icon-gb" title="gb" id="gb" style="font-size:18px"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Choose language</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-pl" title="pl" id="pl" style="font-size:18px"></i> Polish</a>
          <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb" title="gb" id="gb" style="font-size:18px"></i> English</a>
          <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es" title="es" id="es" style="font-size:18px"></i> Español</a>
        </div>
      </li>
      <li class="nav-item dropdown d-md-down-none">
        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <div class="dropdown-header text-center">
            <strong>You have 5 notifications</strong>
          </div>
          <a href="#" class="dropdown-item">
            <i class="icon-user-follow text-success"></i> New user registered
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-user-unfollow text-danger"></i> User deleted
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-chart text-info"></i> Sales report is ready
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-basket-loaded text-primary"></i> New client
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-speedometer text-warning"></i> Server overloaded
          </a>
          <div class="dropdown-header text-center">
            <strong>Server</strong>
          </div>
          <a href="#" class="dropdown-item">
            <div class="text-uppercase mb-1">
              <small><b>CPU Usage</b></small>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
          </a>
          <a href="#" class="dropdown-item">
            <div class="text-uppercase mb-1">
              <small><b>Memory Usage</b></small>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            <small class="text-muted">11444GB/16384MB</small>
          </a>
          <a href="#" class="dropdown-item">
            <div class="text-uppercase mb-1">
              <small><b>SSD 1 Usage</b></small>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            <small class="text-muted">243GB/256GB</small>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown d-md-down-none">
        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-list"></i><span class="badge badge-pill badge-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <div class="dropdown-header text-center">
            <strong>You have 5 pending tasks</strong>
          </div>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">Upgrade NPM &amp; Bower
              <span class="float-right">
                <strong>0%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">ReactJS Version
              <span class="float-right">
                <strong>25%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">VueJS Version
              <span class="float-right">
                <strong>50%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">Add new layouts
              <span class="float-right">
                <strong>75%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">Angular 2 Cli Version
              <span class="float-right">
                <strong>100%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item text-center">
            <strong>View all tasks</strong>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown d-md-down-none">
        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <div class="dropdown-header text-center">
            <strong>You have 4 messages</strong>
          </div>
          <a href="#" class="dropdown-item">
            <div class="message">
              <div class="py-3 mr-3 float-left">
                <div class="avatar">
                  {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">John Doe</small>
                <small class="text-muted float-right mt-1">Just now</small>
              </div>
              <div class="text-truncate font-weight-bold">
                <span class="fa fa-exclamation text-danger"></span> Important message</div>
              <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
          </a>
          <a href="#" class="dropdown-item">
            <div class="message">
              <div class="py-3 mr-3 float-left">
                <div class="avatar">
                  {{ HTML::image('images/avatars/6.jpg', 'GALLERY') }}
                  <span class="avatar-status badge-warning"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">John Doe</small>
                <small class="text-muted float-right mt-1">5 minutes ago</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
          </a>
          <a href="#" class="dropdown-item">
            <div class="message">
              <div class="py-3 mr-3 float-left">
                <div class="avatar">
                  {{ HTML::image('images/avatars/5.jpg', 'GALLERY') }}
                  <span class="avatar-status badge-danger"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">John Doe</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
          </a>
          <a href="#" class="dropdown-item">
            <div class="message">
              <div class="py-3 mr-3 float-left">
                <div class="avatar">
                  {{ HTML::image('images/avatars/4.jpg', 'GALLERY') }}
                  <span class="avatar-status badge-info"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">John Doe</small>
                <small class="text-muted float-right mt-1">4:03 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
          </a>
          <a href="#" class="dropdown-item text-center">
            <strong>View all messages</strong>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link nav-pill avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          {{ HTML::image('images/avatars/6.jpg', 'GALLERY') }}
          <span class="badge badge-pill badge-danger">9</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-dark">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
      <button class="navbar-toggler aside-menu-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

    </ul>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-title text-center">
            <span>Dashboard</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
          </li>

          <li class="nav-title text-center">
            <span>Theme</span>
          </li>
          <li class="nav-item">
            <a href="colors.html" class="nav-link"><i class="icon-drop"></i> Colors</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Typograhy</a>
          </li>
          <li class="nav-title text-center">
            <span>Components</span>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Base</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="base-breadcrumb.html"><i class="icon-puzzle"></i> Breadcrumb</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-cards.html"><i class="icon-puzzle"></i> Cards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-carousel.html"><i class="icon-puzzle"></i> Carousel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-collapse.html"><i class="icon-puzzle"></i> Collapse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-jumbotron.html"><i class="icon-puzzle"></i> Jumbotron</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-list-group.html"><i class="icon-puzzle"></i> List group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-navs.html"><i class="icon-puzzle"></i> Navs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-pagination.html"><i class="icon-puzzle"></i> Pagination</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-popovers.html"><i class="icon-puzzle"></i> Popovers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-progress.html"><i class="icon-puzzle"></i> Progress</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-switches.html"><i class="icon-puzzle"></i> Switches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tabs.html"><i class="icon-puzzle"></i> Tabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tooltips.html"><i class="icon-puzzle"></i> Tooltips</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Buttons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="buttons-buttons.html"><i class="icon-cursor"></i> Buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-button-group.html"><i class="icon-cursor"></i> Buttons Group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-dropdowns.html"><i class="icon-cursor"></i> Dropdowns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-loading-buttons.html"><i class="icon-cursor"></i> Loading Buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-social-buttons.html"><i class="icon-cursor"></i> Social Buttons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-code"></i> Editors</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="editors-code-editor.html"><i class="icon-note"></i> Code Editor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="editors-markdown-editor.html"><i class="fa fa-code"></i> Markdown Editor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="editors-text-editors.html"><i class="icon-note"></i> Rich Text Editor</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i> Forms</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="forms-basic-forms.html"><i class="icon-note"></i> Basic Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forms-advanced-forms.html"><i class="icon-note"></i> Advanced Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forms-validation.html"><i class="icon-note"></i> Validation</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="google-maps.html"><i class="icon-map"></i> Google Maps <span class="badge badge-info">NEW</span></a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="icons-flags.html"><i class="icon-star"></i> Flags <span class="badge badge-success">NEW</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome <span class="badge badge-secondary">4.7</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bell"></i> Notifications</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="notifications-alerts.html"><i class="icon-bell"></i> Alerts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-badge.html"><i class="icon-bell"></i> Badge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-modals.html"><i class="icon-bell"></i> Modals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-toastr.html"><i class="icon-bell"></i> Toastr</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-energy"></i> Plugins</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="plugins-calendar.html"><i class="icon-calendar"></i> Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plugins-draggable-cards.html"><i class="icon-cursor-move"></i> Draggable Cards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plugins-sliders.html"><i class="icon-equalizer"></i> Sliders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plugins-spinners.html"><i class="fa fa-spinner"></i> Spinners</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-list"></i> Tables</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="tables-tables.html"><i class="icon-list"></i> Standard Tables</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tables-datatables.html"><i class="icon-list"></i> DataTables</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="badge badge-info">NEW</span></a>
          </li>
          <li class="divider"></li>
          <li class="nav-title text-center">
            <span>Extras</span>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-layers"></i> UI Kits</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-speech"></i> Invoicing</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="UIkits-invoicing-invoice.html"><i class="icon-speech"></i> Invoice</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-speech"></i> Email</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="UIkits-email-inbox.html"><i class="icon-speech"></i> Inbox</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="UIkits-email-message.html"><i class="icon-speech"></i> Message</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="UIkits-email-compose.html"><i class="icon-speech"></i> Compose</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="divider m-2"></li>
          <li class="nav-title">
            Labels
          </li>
          <li class="nav-item hidden-cn">
            <a class="nav-label" href="#"><i class="fa fa-circle text-danger"></i> Label danger</a>
          </li>
          <li class="nav-item hidden-cn">
            <a class="nav-label" href="#"><i class="fa fa-circle text-info"></i> Label info</a>
          </li>
          <li class="nav-item hidden-cn">
            <a class="nav-label" href="#"><i class="fa fa-circle text-warning"></i> Label warning</a>
          </li>
          <li class="divider"></li>
          <li class="nav-title">
            System Utilization
          </li>
          <li class="nav-item px-3 hidden-cn">
            <div class="text-uppercase mb-1">
              <small><b>CPU Usage</b></small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
          </li>
          <li class="nav-item px-3 hidden-cn">
            <div class="text-uppercase mb-1">
              <small><b>Memory Usage</b></small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">11444GB/16384MB</small>
          </li>
          <li class="nav-item px-3 hidden-cn">
            <div class="text-uppercase mb-1">
              <small><b>SSD 1 Usage</b></small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">243GB/256GB</small>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>

      <div class="container-fluid">

        <div class="animated fadeIn">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body p-0 clearfix">
                  <i class="fa fa-cogs bg-primary p-4 px-5 font-2xl mr-3 float-left"></i>
                  <div class="h5 mb-0 pt-3 text-center">4.589</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Clients</div>
                </div>
              </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body p-0 clearfix">
                  <i class="fa fa-laptop bg-danger p-4 px-5 font-2xl mr-3 float-left"></i>
                  <div class="h5 mb-0 pt-3 text-center">789</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Deals</div>
                </div>
              </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body p-0 clearfix">
                  <i class="fa fa-moon-o bg-success p-4 px-5 font-2xl mr-3 float-left"></i>
                  <div class="h5 mb-0 pt-3 text-center">$1.999,50</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Income</div>
                </div>
              </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body p-0 clearfix">
                  <i class="fa fa-bell bg-info p-4 px-5 font-2xl mr-3 float-left"></i>
                  <div class="h5 mb-0 pt-3 text-center">$19.999,50</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Account</div>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->

          <div class="row">
            <div class="col-lg-9">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="card-title">Traffic</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <br>
                      <div class="chart-wrapper" style="height:250px;margin-top:20px;">
                        <canvas id="main-chart" height="250"></canvas>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <h4 class="card-title">Details</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      <br>
                      <div>Visits (40% - 29.703 Users)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Unique (20% - 24.093 Unique Users)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-info" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Pageviews (60% - 78.706 Views)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-warning" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div>New Users (80% - 22.123 Users)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Bounce Rate (40.15%)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.card-->
            </div>
            <!--/.col-->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Browsers</h4>
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                  <br>
                  <div class="chart-wrapper" style="height:250px;margin-top:20px;">
                    <canvas id="doughnut-chart" height="250"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="h1 text-muted text-right mb-4">
                        <i class="icon-people"></i>
                      </div>
                      <div class="h4 mb-0">87.500</div>
                      <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="h1 text-muted text-right mb-4">
                        <i class="icon-user-follow"></i>
                      </div>
                      <div class="h4 mb-0">385</div>
                      <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="h1 text-muted text-right mb-4">
                        <i class="icon-basket-loaded"></i>
                      </div>
                      <div class="h4 mb-0">1238</div>
                      <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title text-center h6 mt-3">
                        Revenue
                      </div>
                      <div class="gaugejs-wrap">
                        <canvas id="gauge1" class="gaugejs"></canvas>
                      </div>
                    </div>
                    <div class="card-footer">
                      <strong>$11.234,00</strong>
                      <span class="float-right"><i class="fa fa-arrow-circle-o-up text-success"></i> 15%</span>
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title text-center h6 mt-3">
                        Profit
                      </div>
                      <div class="gaugejs-wrap">
                        <canvas id="gauge2" class="gaugejs"></canvas>
                      </div>
                    </div>
                    <div class="card-footer">
                      <strong>$3.733,00</strong>
                      <span class="float-right"><i class="fa fa-arrow-circle-o-down text-danger"></i> -25%</span>
                    </div>
                  </div>
                </div>
                <!--/.col-->
              </div>
              <!--/.row-->
            </div>
            <!--/.col-->
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      Demographic
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 text-info text-right">
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>

                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>

                        </div>
                        <!--/col-->
                        <div class="col-md-6 text-warning">
                          <i class="fa fa-female" style="width:12px;"></i>

                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header text-white bg-info">
                      <div class="font-weight-bold">
                        <span>SALE</span>
                        <span class="float-right">$1.890,65</span>
                      </div>
                      <div>
                        <span>
                          <small>Today 6:43 AM</small>
                        </span>
                        <span class="float-right">
                          <small>+432,50 (15,78%)</small>
                        </span>
                      </div>
                      <div class="chart-wrapper" style="height:38px;">
                        <canvas class="chart-7 chart chart-line" height="38"></canvas>
                      </div>
                      <div class="chart-wrapper" style="height:38px;">
                        <canvas class="chart-8 chart chart-bar" height="38"></canvas>
                      </div>
                    </div>
                    <div class="card-body py-3 px-4">
                      <div class="row">
                        <div class="col-5">
                          <strong>+$780,98</strong>
                          <br>
                          <span class="text-muted">
                            <small>Weekly change</small>
                          </span>
                        </div>
                        <div class="col-7 p-0">
                          <div class="chart-wrapper" style="height:44px;">
                            <canvas class="chart-9 chart chart-bar" height="44" style="margin-top:-4px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body py-0 px-4 b-t-1">
                      <div class="row">
                        <div class="col-6 b-r-1 py-3">
                          <div class="font-weight-bold">9.127</div>
                          <div class="text-muted">
                            <small>Deals</small>
                          </div>
                        </div>
                        <div class="col-6 py-3 text-right">
                          <div class="font-weight-bold">$189.783,87</div>
                          <div class="text-muted">
                            <small>Total Income</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header text-white bg-success">
                      <div class="font-weight-bold">
                        <span>SALE</span>
                        <span class="float-right">$1.890,65</span>
                      </div>
                      <div>
                        <span>
                          <small>Today 6:43 AM</small>
                        </span>
                        <span class="float-right">
                          <small>+432,50 (15,78%)</small>
                        </span>
                      </div>
                      <div class="chart-wrapper" style="height:38px;">
                        <canvas class="chart-7-2 chart chart-line" height="38"></canvas>
                      </div>
                      <div class="chart-wrapper" style="height:38px;">
                        <canvas class="chart-8-2 chart chart-bar" height="38"></canvas>
                      </div>
                    </div>
                    <div class="card-body py-3 px-4">
                      <div class="row">
                        <div class="col-5">
                          <strong>+$780,98</strong>
                          <br>
                          <span class="text-muted">
                            <small>Weekly change</small>
                          </span>
                        </div>
                        <div class="col-7 p-0">
                          <div class="chart-wrapper" style="height:44px;">
                            <canvas class="chart-9-2 chart chart-bar" height="44" style="margin-top:-4px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body py-0 px-4 b-t-1">
                      <div class="row">
                        <div class="col-6 b-r-1 py-3">
                          <div class="font-weight-bold">9.127</div>
                          <div class="text-muted">
                            <small>Deals</small>
                          </div>
                        </div>
                        <div class="col-6 py-3 text-right">
                          <div class="font-weight-bold">$189.783,87</div>
                          <div class="text-muted">
                            <small>Total Income</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.row-->
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h3 class="card-title clearfix mb-0">Traffic &amp; Sales</h3>
                    </div>
                    <div class="col-sm-7">
                      <button type="button" class="btn btn-outline-primary float-right ml-3"><i class="icon-cloud-download"></i> &nbsp; Download</button>
                      <fieldset class="form-group float-right">
                        <div class="input-group float-right" style="width:240px;">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input name="daterange" class="form-control date-picker" type="text">
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <hr class="m-0">
                  <div class="row">
                    <div class="col-sm-12 col-lg-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout callout-info">
                            <small class="text-muted">New Clients</small>
                            <br>
                            <strong class="h4">9,123</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                          <div class="callout callout-danger">
                            <small class="text-muted">Recuring Clients</small>
                            <br>
                            <strong class="h4">22,643</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <hr class="mt-0">
                      <ul class="horizontal-bars">
                        <li>
                          <div class="title">
                            Monday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Tuesday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Wednesday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Thursday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Friday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Saturday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Sunday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="legend">
                          <span class="badge badge-pill badge-info"></span>
                          <small>New clients</small> &nbsp;
                          <span class="badge badge-pill badge-danger"></span>
                          <small>Recurring clients</small>
                        </li>
                      </ul>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-lg-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout callout-warning">
                            <small class="text-muted">Pageviews</small>
                            <br>
                            <strong class="h4">78,623</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                          <div class="callout callout-success">
                            <small class="text-muted">Organic</small>
                            <br>
                            <strong class="h4">49,123</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <hr class="mt-0">
                      <ul class="horizontal-bars type-2">
                        <li>
                          <i class="icon-user"></i>
                          <span class="title">Male</span>
                          <span class="value">43%</span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-user-female"></i>
                          <span class="title">Female</span>
                          <span class="value">37%</span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <i class="icon-globe"></i>
                          <span class="title">Organic Search</span>
                          <span class="value">191,235
                            <span class="text-muted small">(56%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-facebook"></i>
                          <span class="title">Facebook</span>
                          <span class="value">51,223
                            <span class="text-muted small">(15%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-twitter"></i>
                          <span class="title">Twitter</span>
                          <span class="value">37,564
                            <span class="text-muted small">(11%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-linkedin"></i>
                          <span class="title">LinkedIn</span>
                          <span class="value">27,319
                            <span class="text-muted small">(8%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="divider text-center">
                          <button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="show more"><i class="icon-options"></i></button>
                        </li>
                      </ul>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-lg-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout">
                            <small class="text-muted">CTR</small>
                            <br>
                            <strong class="h4">23%</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                          <div class="callout callout-primary">
                            <small class="text-muted">Bounce Rate</small>
                            <br>
                            <strong class="h4">5%</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-6" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <hr class="mt-0">
                      <ul class="icons-list">
                        <li>
                          <i class="icon-screen-desktop bg-primary"></i>
                          <div class="desc">
                            <div class="title">iMac 4k</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>1.924</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-screen-smartphone bg-info"></i>
                          <div class="desc">
                            <div class="title">Samsung Galaxy Edge</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>1.224</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-screen-smartphone bg-warning"></i>
                          <div class="desc">
                            <div class="title">iPhone 6S</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>1.163</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-user bg-danger"></i>
                          <div class="desc">
                            <div class="title">Premium accounts</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>928</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-spotify bg-success"></i>
                          <div class="desc">
                            <div class="title">Spotify Subscriptions</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>893</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-cloud-download bg-danger"></i>
                          <div class="desc">
                            <div class="title">Ebook</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Downloads</div>
                            <strong>121.924</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-camera bg-warning"></i>
                          <div class="desc">
                            <div class="title">Photos</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Uploaded</div>
                            <strong>12.125</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li class="divider text-center">
                          <button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="show more"><i class="icon-options"></i></button>
                        </li>
                      </ul>
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->
                  <br>
                  <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center"><i class="icon-people"></i></th>
                        <th>User</th>
                        <th class="text-center">Country</th>
                        <th>Usage</th>
                        <th class="text-center">Payment Method</th>
                        <th>Activity</th>
                        <th class="text-center">Satisfaction</th>
                        <th class="text-center"><i class="icon-settings"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            {{ HTML::image('images/avatars/1.jpg', 'GALLERY') }}
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>Yiorgos Avraamu</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="flag-icon flag-icon-us h4 mb-0" title="us" id="us"></i>
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>50%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>10 sec ago</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-1" width="34" height="34"></canvas>
                            <span class="value">48%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            {{ HTML::image('images/avatars/2.jpg', 'GALLERY') }}
                            <span class="avatar-status badge-danger"></span>
                          </div>
                        </td>
                        <td>
                          <div>Avram Tarasios</div>
                          <div class="small text-muted">

                            <span>Recurring</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="flag-icon flag-icon-br h4 mb-0" title="br" id="br"></i>
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>10%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-visa" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>5 minutes ago</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-2" width="34" height="34"></canvas>
                            <span class="value">61%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            {{ HTML::image('images/avatars/3.jpg', 'GALLERY') }}
                            <span class="avatar-status badge-warning"></span>
                          </div>
                        </td>
                        <td>
                          <div>Quintin Ed</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="flag-icon flag-icon-in h4 mb-0" title="in" id="in"></i>
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>74%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>1 hour ago</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-3" width="34" height="34"></canvas>
                            <span class="value">33%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            {{ HTML::image('images/avatars/4.jpg', 'GALLERY') }}
                            <span class="avatar-status badge-dark"></span>
                          </div>
                        </td>
                        <td>
                          <div>Enéas Kwadwo</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="flag-icon flag-icon-fr h4 mb-0" title="fr" id="fr"></i>
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>98%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-paypal" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>Last month</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-4" width="34" height="34"></canvas>
                            <span class="value">23%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            {{ HTML::image('images/avatars/5.jpg', 'GALLERY') }}
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>Agapetus Tadeáš</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="flag-icon flag-icon-es h4 mb-0" title="es" id="es"></i>
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>22%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-google-wallet" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>Last week</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-5" width="34" height="34"></canvas>
                            <span class="value">78%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            {{ HTML::image('images/avatars/6.jpg', 'GALLERY') }}
                            <span class="avatar-status badge-danger"></span>
                          </div>
                        </td>
                        <td>
                          <div>Friderik Dávid</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="flag-icon flag-icon-pl h4 mb-0" title="pl" id="pl"></i>
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>43%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-amex" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>Yesterday</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-6" width="34" height="34"></canvas>
                            <span class="value">11%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>

    <aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Today</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-warning m-0 py-3">
            <div class="avatar float-right">
              {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
            </div>
            <div>Meeting with
              <strong>Lucas</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-info m-0 py-3">
            <div class="avatar float-right">
              {{ HTML::image('images/avatars/4.jpg', 'GALLERY') }}
            </div>
            <div>Skype with
              <strong>Megan</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
            <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Tomorrow</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-danger m-0 py-3">
            <div>New UI Project -
              <strong>deadline</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/2.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/3.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/4.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/5.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/6.jpg', 'GALLERY') }}
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-success m-0 py-3">
            <div>
              <strong>#10 Startups.Garden</strong> Meetup</div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-primary m-0 py-3">
            <div>
              <strong>Team meeting</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/2.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/3.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/4.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/5.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/6.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
              </div>
              <div class="avatar avatar-xs">
                {{ HTML::image('images/avatars/8.jpg', 'GALLERY') }}
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                {{ HTML::image('images/avatars/7.jpg', 'GALLERY') }}
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>
          <div class="aside-options">
            <div class="clearfix mt-4">
              <small><b>Option 1</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>
          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 2</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>
          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 3</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>
          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 4</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>
          <hr>
          <h6>System Utilization</h6>
          <div class="text-uppercase mb-1 mt-4">
            <small><b>CPU Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>
          <div class="text-uppercase mb-1 mt-2">
            <small><b>Memory Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">11444GB/16384MB</small>
          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 1 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">243GB/256GB</small>
          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 2 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">25GB/256GB</small>
        </div>
      </div>
    </aside>

  </div>
  <footer class="app-footer">
    <span><a href="https://genesisui.com">Clever</a> © 2017 creativeLabs.</span>
    <span class="ml-auto">Powered by <a href="https://genesisui.com">GenesisUI</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  {!! Html::script('vendor/js/jquery.min.js') !!}
  {!! Html::script('vendor/js/popper.min.js') !!}
  {!! Html::script('vendor/js/bootstrap.min.js') !!}
  {!! Html::script('vendor/js/pace.min.js') !!}
  {!! Html::script('vendor/js/Chart.min.js') !!}
  {!! Html::script('js/back/app.js') !!}
  {!! Html::script('vendor/js/toastr.min.js') !!}
  {!! Html::script('vendor/js/gauge.min.js') !!}
  {!! Html::script('vendor/js/moment.min.js') !!}
  {!! Html::script('vendor/js/daterangepicker.min.js') !!}
  {!! Html::script('js/back/views/main.js') !!}

</body>
</html>