<!DOCTYPE html>
<!-- Mirrored from demo.flatlogic.com/3.2.1/transparent/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2016 02:33:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Laravel Admin Blue Light</title>

  <script>
      /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                    https://code.google.com/p/chromium/issues/detail?id=332189
      */
  </script>
  <!-- Fonts
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
-->
<!-- Styles
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
<link href="{{ asset('css/application.min.css') }}" rel="stylesheet">

</head>
<body class="background-dark">
  <div class="logo">
    <h4><a href="index-2.html">Light <strong>Blue</strong></a></h4>
  </div>
  <nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
      <li class="active">
        <a href="index-2.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-pencil"></i> <span class="name">Forms</span></a>
        <ul id="forms-collapse" class="panel-collapse collapse ">
          <li class=""><a href="form_account.html">Account</a></li>
          <li class=""><a href="form_article.html">Article</a></li>
          <li class=""><a href="form_elements.html">Elements</a></li>
          <li class=""><a href="form_validation.html">Validation</a></li>
          <li class=""><a href="form_wizard.html">Wizard</a></li>
        </ul>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
        <ul id="stats-collapse" class="panel-collapse collapse ">
          <li class=""><a href="stat_statistics.html">Stats</a></li>
          <li class=""><a href="stat_charts.html">Charts</a></li>
          <li class=""><a href="stat_realtime.html">Realtime</a></li>
        </ul>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
        <ul id="ui-collapse" class="panel-collapse collapse ">
          <li class=""><a href="ui_buttons.html">Buttons</a></li>
          <li class=""><a href="ui_dialogs.html">Dialogs</a></li>
          <li class=""><a href="ui_notifications.html">Notifications</a></li>
          <li class=""><a href="ui_icons.html">Icons</a></li>
          <li class=""><a href="ui_tabs.html">Tabs</a></li>
          <li class=""><a href="ui_accordion.html">Accordion</a></li>
        </ul>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>
        <ul id="components-collapse" class="panel-collapse collapse ">
          <li class=""><a href="component_calendar.html">Calendar</a></li>
          <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
          <li class=""><a href="component_gallery.html">Gallery</a></li>
          <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
          <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
          <li class=""><a href="component_list_groups.html">List Groups</a></li>
        </ul>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
        <ul id="tables-collapse" class="panel-collapse collapse ">
          <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
          <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
        </ul>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
        <ul id="grid-collapse" class="panel-collapse collapse ">
          <li class=""><a href="grid_basic.html">Basic</a></li>
          <li class=""><a href="grid_live.html">Live</a></li>
        </ul>
      </li>
      <li class="panel ">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
        <ul id="special-collapse" class="panel-collapse collapse ">
          <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
          <li class=""><a href="special_invoice.html">Invoice</a></li>
          <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
          <li><a target="_blank" href="login.html">Login</a></li>
          <li><a target="_blank" href="error.html">Error Page</a></li>
          <li><a href="landing.html" data-no-pjax>Landing</a></li>
          <li><a href="http://demo.flatlogic.com/3.2.1/white/index.html" data-no-pjax>White <sup class="text-warning fw-bold">new</sup></a></li>
        </ul>
      </li>
      <li class="panel">
        <a class="accordion-toggle collapsed" data-toggle="collapse"
        data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
        <ul id="menu-levels-collapse" class="panel-collapse collapse">
          <li><a href="#">Item 1.1</a></li>
          <li><a href="#">Item 1.2</a></li>
          <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
            data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
            <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
              <li class="panel">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                  <li><a href="#">Item 3.1</a></li>
                  <li><a href="#">Item 3.2</a></li>
                  <li><a href="#">Item 3.3</a></li>
                </ul>
              </li>
              <li><a href="#">Item 2.2</a></li>
              <li class="panel">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                  <li><a href="#">Item 3.4</a></li>
                  <li><a href="#">Item 3.5</a></li>
                  <li><a href="#">Item 3.6</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="visible-xs">
        <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
      </li>
    </ul>

    <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
    <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
    <ul class="sidebar-labels">
      <li>
        <a href="#">
          <!-- yep, .circle again -->
          <i class="fa fa-circle text-warning"></i>
          <span class="label-name">My Recent</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-circle text-gray"></i>
          <span class="label-name">Starred</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-circle text-danger"></i>
          <span class="label-name">Background</span>
        </a>
      </li>
    </ul>

    <h5 class="sidebar-nav-title">Projects</h5>
    <!-- A place for sidebar notifications & alerts -->
    <div class="sidebar-alerts">
      <div class="alert fade in">
        <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
        <span class="text-white fw-semi-bold">Sales Report</span> <br>
        <div class="progress progress-xs mt-xs mb-0">
          <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
        </div>
        <small>Calculating x-axis bias... 65%</small>
      </div>
      <div class="alert fade in">
        <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
        <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
        <div class="progress progress-xs mt-xs mb-0">
          <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
        </div>
        <small>Provide required notes</small>
      </div>
    </div>
  </nav>    <div class="wrap">
    <header class="page-header">
      <div class="navbar">
        <ul class="nav navbar-nav navbar-right pull-right">
          <li class="visible-phone-landscape">
            <a href="#" id="search-toggle">
              <i class="fa fa-search"></i>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" title="Messages" id="messages"
            class="dropdown-toggle"
            data-toggle="dropdown">
            <i class="fa fa-comments"></i>
          </a>
          <ul id="messages-menu" class="dropdown-menu messages" role="menu">
            <li role="presentation">
              <a href="#" class="message">
                <img src="img/1.jpg" alt="">
                <div class="details">
                  <div class="sender">Jane Hew</div>
                  <div class="text">
                    Hey, John! How is it going? ...
                  </div>
                </div>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="message">
                <img src="img/2.jpg" alt="">
                <div class="details">
                  <div class="sender">Alies Rumiancaŭ</div>
                  <div class="text">
                    I'll definitely buy this template
                  </div>
                </div>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="message">
                <img src="img/3.jpg" alt="">
                <div class="details">
                  <div class="sender">Michał Rumiancaŭ</div>
                  <div class="text">
                    Is it really Lore ipsum? Lore ...
                  </div>
                </div>
              </a>
            </li>
            <li role="presentation">
              <a href="#" class="text-align-center see-all">
                See all messages <i class="fa fa-arrow-right"></i>
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" title="8 support tickets"
          class="dropdown-toggle"
          data-toggle="dropdown">
          <i class="fa fa-group"></i>
          <span class="count">8</span>
        </a>
        <ul id="support-menu" class="dropdown-menu support" role="menu">
          <li role="presentation">
            <a href="#" class="support-ticket">
              <div class="picture">
                <span class="label label-important"><i class="fa fa-bell-o"></i></span>
              </div>
              <div class="details">
                Check out this awesome ticket
              </div>
            </a>
          </li>
          <li role="presentation">
            <a href="#" class="support-ticket">
              <div class="picture">
                <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
              </div>
              <div class="details">
                "What is the best way to get ...
              </div>
            </a>
          </li>
          <li role="presentation">
            <a href="#" class="support-ticket">
              <div class="picture">
                <span class="label label-success"><i class="fa fa-tag"></i></span>
              </div>
              <div class="details">
                This is just a simple notification
              </div>
            </a>
          </li>
          <li role="presentation">
            <a href="#" class="support-ticket">
              <div class="picture">
                <span class="label label-info"><i class="fa fa-info-circle"></i></span>
              </div>
              <div class="details">
                12 new orders has arrived today
              </div>
            </a>
          </li>
          <li role="presentation">
            <a href="#" class="support-ticket">
              <div class="picture">
                <span class="label label-important"><i class="fa fa-plus"></i></span>
              </div>
              <div class="details">
                One more thing that just happened
              </div>
            </a>
          </li>
          <li role="presentation">
            <a href="#" class="text-align-center see-all">
              See all tickets <i class="fa fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="hidden-xs">
        <a href="#" id="settings"
        title="Settings"
        data-toggle="popover"
        data-placement="bottom">
        <i class="fa fa-cog"></i>
      </a>
    </li>
    <li class="hidden-xs dropdown">
      <a href="#" title="Account" id="account"
      class="dropdown-toggle"
      data-toggle="dropdown">
      <i class="fa fa-user"></i>
    </a>
    <ul id="account-menu" class="dropdown-menu account" role="menu">
      <li role="presentation" class="account-picture">
        <img src="img/2.jpg" alt="">
        Philip Daineka
      </li>
      <li role="presentation">
        <a href="form_account.html" class="link">
          <i class="fa fa-user"></i>
          Profile
        </a>
      </li>
      <li role="presentation">
        <a href="component_calendar.html" class="link">
          <i class="fa fa-calendar"></i>
          Calendar
        </a>
      </li>
      <li role="presentation">
        <a href="#" class="link">
          <i class="fa fa-inbox"></i>
          Inbox
        </a>
      </li>
    </ul>
  </li>
  <li class="visible-xs">
    <a href="#"
    class="btn-navbar"
    data-toggle="collapse"
    data-target=".sidebar"
    title="">
    <i class="fa fa-bars"></i>
  </a>
</li>
<li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
</ul>
<form id="search-form" class="navbar-form pull-right" role="search">
  <input type="search" class="form-control search-query" placeholder="Search...">
</form>
<div class="notifications pull-right">
  <div class="alert pull-right">
    <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
    <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
  </div>
</div>
</div>
</header>        <div class="content container">
  <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>
  <div class="row">
    <div class="col-lg-8">
      <section class="widget">
        <header>
          <h4>
            Visits
            <small>
              Based on a three months data
            </small>
          </h4>
          <div class="widget-controls">
            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
          </div>
        </header>
        <div class="body no-margin">
          <div id="visits-chart" class="chart visits-chart">
            <svg></svg>
          </div>
          <div class="visits-info well well-sm">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="key"><i class="fa fa-users"></i> Total Traffic</div>
                <div class="value">24 541 <i class="fa fa-caret-up color-green"></i></div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="key"><i class="fa fa-bolt"></i> Unique Visits</div>
                <div class="value">14 778 <i class="fa fa-caret-down color-red"></i></div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="key"><i class="fa fa-plus-square"></i> Revenue</div>
                <div class="value">$3 583.18 <i class="fa fa-caret-up color-green"></i></div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="key"><i class="fa fa-user"></i> Total Sales</div>
                <div class="value">$59 871.12 <i class="fa fa-caret-down color-red"></i></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="widget">
        <header>
          <h4>
            Traffic Sources
            <small>
              One month tracking
            </small>
          </h4>
          <div class="widget-controls">
            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
          </div>
        </header>
        <div class="body">
          <table class="table table-striped no-margin sources-table">
            <thead>
              <tr>
                <th class="source-col-header">Source</th>
                <th>Amount</th>
                <th>Change</th>
                <th class="hidden-xs">Percent.,%</th>
                <th>Target</th>
                <th class="chart-col-header hidden-xs">Trend</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="label label-important">Direct</span></td>
                <td>713</td>
                <td><strong class="color-green">+53</strong></td>
                <td class="hidden-xs">+12</td>
                <td>900</td>
                <td class="chart-cell hidden-xs">
                  <div id="direct-trend"></div>
                </td>
              </tr>
              <tr>
                <td><span class="label label-warning">Refer</span></td>
                <td>562</td>
                <td><strong>+84</strong></td>
                <td class="hidden-xs">+64</td>
                <td>500</td>
                <td class="chart-cell hidden-xs">
                  <div id="refer-trend"></div>
                </td>
              </tr>
              <tr>
                <td><span class="label label-success">Social</span></td>
                <td>148</td>
                <td><strong class="color-red">-12</strong></td>
                <td class="hidden-xs">+3</td>
                <td>180</td>
                <td class="chart-cell hidden-xs">
                  <div id="social-trend"></div>
                </td>
              </tr>
              <tr>
                <td><span class="label label-info">Search</span></td>
                <td>653</td>
                <td><strong class="color-green">+23</strong></td>
                <td class="hidden-xs">+43</td>
                <td>876</td>
                <td class="chart-cell hidden-xs">
                  <div id="search-trend"></div>
                </td>
              </tr>
              <tr>
                <td><span class="label label-inverse">Internal</span></td>
                <td>976</td>
                <td><strong>+101</strong></td>
                <td class="hidden-xs">-7</td>
                <td>844</td>
                <td class="chart-cell hidden-xs">
                  <div id="internal-trend"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      <section class="widget large">
        <header>
          <h4>
            Chat
          </h4>
          <div class="widget-controls">
            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
          </div>
        </header>
        <div class="body">
          <div id="chat" class="chat">
            <div id="chat-messages" class="chat-messages">
              <div class="chat-message">
                <div class="sender pull-left">
                  <div class="icon">
                    <img src="img/2.jpg" class="img-circle" alt="">
                  </div>
                  <div class="time">
                    4 min
                  </div>
                </div>
                <div class="chat-message-body">
                  <span class="arrow"></span>
                  <div class="sender"><a href="#">Tikhon Laninga</a></div>
                  <div class="text">
                    Hey Sam, how is it going? But I must explain to you how all this mistaken
                    idea of denouncing of a pleasure and praising pain was born
                  </div>
                </div>
              </div>
              <div class="chat-message">
                <div class="sender pull-right">
                  <div class="icon">
                    <img src="img/1.jpg" class="img-circle" alt="">
                  </div>
                  <div class="time">
                    3 min
                  </div>
                </div>
                <div class="chat-message-body on-left">
                  <span class="arrow"></span>
                  <div class="sender"><a href="#">Cenhelm Houston</a></div>
                  <div class="text">
                    Pretty good. Doing my homework..  No one rejects, dislikes, or avoids
                    pleasure itself, because it is pleasure, but because
                  </div>
                </div>
              </div>
              <div class="chat-message">
                <div class="sender pull-left">
                  <div class="icon">
                    <img src="img/2.jpg" class="img-circle" alt="">
                  </div>
                  <div class="time">
                    2 min
                  </div>
                </div>
                <div class="chat-message-body">
                  <span class="arrow"></span>
                  <div class="sender"><a href="#">Tikhon Laninga</a></div>
                  <div class="text">
                    Any chance to go out? To take a trivial example, which of us ever undertakes
                    laborious physical exercise, except to obtain some advantage
                  </div>
                </div>
              </div>
              <div class="chat-message">
                <div class="sender pull-right">
                  <div class="icon">
                    <img src="img/1.jpg" class="img-circle" alt="">
                  </div>
                  <div class="time">
                    2 min
                  </div>
                </div>
                <div class="chat-message-body on-left">
                  <span class="arrow"></span>
                  <div class="sender"><a href="#">Cenhelm Houston</a></div>
                  <div class="text">
                    .. Maybe 40-50 mins. I don't know exactly. On the other hand, we denounce
                    with righteous indignation and dislike men who are so beguiled
                  </div>
                </div>
              </div>
              <div class="chat-message">
                <div class="sender pull-left">
                  <div class="icon">
                    <img src="img/2.jpg" class="img-circle" alt="">
                  </div>
                  <div class="time">
                    1 min
                  </div>
                </div>
                <div class="chat-message-body">
                  <span class="arrow"></span>
                  <div class="sender"><a href="#">Tikhon Laninga</a></div>
                  <div class="text">
                    Anyway sounds great! These cases are perfectly simple and easy to
                    distinguish.
                  </div>
                </div>
              </div>
            </div>
            <footer class="chat-footer row">
              <div class="col-xs-9">
                <input id="new-message" type="text" class="form-control input-transparent" placeholder="Enter your message..">
              </div>
              <div class="col-xs-3">
                <button type="button" id="new-message-btn" class="btn btn-transparent btn-block">Send</button>
              </div>
            </footer>
          </div>
        </div>
      </section>
    </div>
    <div class="col-lg-4">
      <section class="widget large">
        <header>
          <h4>
            Feed
            <span class="label label-success">412</span>
          </h4>
          <div class="actions">
            <button class="btn btn-transparent btn-xs">Show All <i class="fa fa-arrow-down"></i></button>
          </div>
        </header>
        <div class="body">
          <div id="feed" class="feed">
            <div class="wrapper">
              <div class="vertical-line"></div>
              <section class="feed-item">
                <div class="icon pull-left">
                  <i class="fa fa-comment"></i>
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    <a href="#">John Doe</a> commented on <a href="#">What Makes Good Code Good</a>.
                  </div>
                  <div class="time pull-left">
                    3 h
                  </div>
                </div>
              </section>
              <section class="feed-item">
                <div class="icon pull-left">
                  <i class="fa fa-check color-green"></i>
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    <a href="#">Merge request #42</a> has been approved by <a href="#">Jessica Lori</a>.
                  </div>
                  <div class="time pull-left">
                    10 h
                  </div>
                </div>
              </section>
              <section class="feed-item">
                <div class="icon pull-left">
                  <img src="img/14.jpg" class="img-circle" alt="">
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    New user <a href="#">Greg Wilson</a> registered.
                  </div>
                  <div class="time pull-left">
                    Today
                  </div>
                </div>
              </section>
              <section class="feed-item">
                <div class="icon pull-left">
                  <i class="fa fa-bolt color-orange"></i>
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    Server fail level raises above normal. <a href="#">See logs</a> for details.
                  </div>
                  <div class="time pull-left">
                    Yesterday
                  </div>
                </div>
              </section>
              <section class="feed-item">
                <div class="icon pull-left">
                  <i class="fa fa-database"></i>
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    <a href="#">Database usage report</a> is ready.
                  </div>
                  <div class="time pull-left">
                    Yesterday
                  </div>
                </div>
              </section>
              <section class="feed-item">
                <div class="icon pull-left">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    <a href="#">Order #233985</a> needs additional processing.
                  </div>
                  <div class="time pull-left">
                    Wednesday
                  </div>
                </div>
              </section>
              <section class="feed-item">
                <div class="icon pull-left">
                  <i class="fa fa-arrow-down"></i>
                </div>
                <div class="feed-item-body">
                  <div class="text">
                    <a href="#">Load more...</a>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <section class="widget widget-tabs">
        <header>
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#stats" data-toggle="tab">Users</a>
            </li>
            <li>
              <a href="#report" data-toggle="tab">Favorites</a>
            </li>
            <li>
              <a href="#dropdown1" data-toggle="tab">Commenters</a>
            </li>
          </ul>
        </header>
        <div class="body tab-content">
          <div id="stats" class="tab-pane active clearfix">
            <h5 class="tab-header"><span class="label label-primary"><i class="fa fa-facebook"></i></span> Last logged-in users</h5>
            <ul class="news-list">
              <li>
                <img src="img/1.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Finees Lund</a></div>
                  <div class="position">Product Designer</div>
                  <div class="time">Last logged-in: Mar 20, 18:46</div>
                </div>
              </li>
              <li>
                <img src="img/3.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Erebus Novak</a></div>
                  <div class="position">Software Engineer</div>
                  <div class="time">Last logged-in: Mar 23, 9:02</div>
                </div>
              </li>
              <li>
                <img src="img/2.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Leopoldo Reier</a></div>
                  <div class="position">Chief Officer</div>
                  <div class="time">Last logged-in: Jun 6, 15:34</div>
                </div>
              </li>
              <li>
                <img src="img/13.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Frans Garey</a></div>
                  <div class="position">Financial Assistant</div>
                  <div class="time">Last logged-in: Jun 8, 17:20</div>
                </div>
              </li>
              <li>
                <img src="img/14.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Jessica Johnsson</a></div>
                  <div class="position">Sales Manager</div>
                  <div class="time">Last logged-in: Jun 8, 9:13</div>
                </div>
              </li>
            </ul>
          </div>
          <div id="report" class="tab-pane">
            <h5 class="tab-header"><i class="fa fa-star"></i> Popular contacts</h5>
            <ul class="news-list news-list-no-hover">
              <li>
                <img src="img/14.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Jessica Johnsson</a></div>
                  <div class="options">
                    <button class="btn btn-xs btn-success">
                      <i class="fa fa-phone"></i>
                      Call
                    </button>
                    <button class="btn btn-xs btn-warning">
                      <i class="fa fa-envelope-o"></i>
                      Message
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <img src="img/13.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Frans Garey</a></div>
                  <div class="options">
                    <button class="btn btn-xs btn-success">
                      <i class="fa fa-phone"></i>
                      Call
                    </button>
                    <button class="btn btn-xs btn-warning">
                      <i class="fa fa-envelope-o"></i>
                      Message
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <img src="img/3.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Erebus Novak</a></div>
                  <div class="options">
                    <button class="btn btn-xs btn-success">
                      <i class="fa fa-phone"></i>
                      Call
                    </button>
                    <button class="btn btn-xs btn-warning">
                      <i class="fa fa-envelope-o"></i>
                      Message
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <img src="img/2.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Leopoldo Reier</a></div>
                  <div class="options">
                    <button class="btn btn-xs btn-success">
                      <i class="fa fa-phone"></i>
                      Call
                    </button>
                    <button class="btn btn-xs btn-warning">
                      <i class="fa fa-envelope-o"></i>
                      Message
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <img src="img/1.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Finees Lund</a></div>
                  <div class="options">
                    <button class="btn btn-xs btn-success">
                      <i class="fa fa-phone"></i>
                      Call
                    </button>
                    <button class="btn btn-xs btn-warning">
                      <i class="fa fa-envelope-o"></i>
                      Message
                    </button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div id="dropdown1" class="tab-pane">
            <h5 class="tab-header"><i class="fa fa-comments"></i> Top Commenters</h5>
            <ul class="news-list">
              <li>
                <img src="img/13.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Frans Garey</a></div>
                  <div class="comment">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia
                  </div>
                </div>
              </li>
              <li>
                <img src="img/1.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Finees Lund</a></div>
                  <div class="comment">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat.
                  </div>
                </div>
              </li>
              <li>
                <img src="img/14.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Jessica Johnsson</a></div>
                  <div class="comment">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt.
                  </div>
                </div>
              </li>
              <li>
                <img src="img/3.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Erebus Novak</a></div>
                  <div class="comment">
                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                    doloremque.
                  </div>
                </div>
              </li>
              <li>
                <img src="img/2.jpg" alt="" class="pull-left img-circle"/>
                <div class="news-item-info">
                  <div class="name"><a href="#">Leopoldo Reier</a></div>
                  <div class="comment">
                    Laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis
                    et quasi.
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="widget">
        <header>
          <h4>
            Server Overview
          </h4>
          <div class="actions">
            <small class="text-muted pull-right">2 days ago</small>
          </div>
        </header>
        <div class="body">
          <ul class="server-stats">
            <li>
              <div class="key pull-right">CPU</div>
              <div class="stat">
                <div class="info">60% / 37&deg;C / 3.3 Ghz</div>
                <div class="progress progress-small">
                  <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                </div>
              </div>
            </li>
            <li>
              <div class="key pull-right">Mem</div>
              <div class="stat">
                <div class="info">29% / 4GB (16 GB)</div>
                <div class="progress progress-small">
                  <div class="progress-bar" style="width: 29%;"></div>
                </div>
              </div>
            </li>
            <li>
              <div class="key pull-right">LAN</div>
              <div class="stat">
                <div class="info">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></div>
                <div class="progress progress-small">
                  <div class="progress-bar progress-bar-inverse" style="width: 48%;"></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
</div>
<div class="loader-wrap hiding hide">
  <i class="fa fa-circle-o-notch fa-spin"></i>
</div>
</div>


<!-- common templates -->
<script type="text/template" id="settings-template">
  <div class="setting clearfix">
    <div>Background</div>
    <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
      <% dark = background == 'dark'; light = background == 'light';%>
      <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
      <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
    </div>
  </div>
  <div class="setting clearfix">
    <div>Sidebar on the</div>
    <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
      <% onRight = sidebar == 'right'%>
      <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
      <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
    </div>
  </div>
  <div class="setting clearfix">
    <div>Sidebar</div>
    <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
      <% display = displaySidebar%>
      <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
      <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
    </div>
  </div>
  <div class="setting clearfix">
    <div>White Version</div>
    <div>
      <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
    </div>
  </div>
</script>

<script type="text/template" id="sidebar-settings-template">
  <% auto = sidebarState == 'auto'%>
  <% if (auto) {%>
    <button type="button"
    data-value="icons"
    class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
    data-value="auto"
    class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
      <button type="button"
      data-value="auto"
      class="btn btn-transparent btn-sm">Auto</button>
      <% } %>
    </script>
    @yield('content')

    <!-- common libraries. required for every page-->
    <script src="{{ assets('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ assets('lib/jquery-pjax/jquery.pjax.js') }}"></script>
    <script src="{{ assets('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
    <script src="{{ assets('lib/widgster/widgster.js') }}"></script>
    <script src="{{ assets('lib/underscore/underscore.js') }}"></script>

    <!-- common application js -->
    <script src="{{ assets('js/app.js') }}"></script>
    <script src="{{ assets('js/settings.js') }}"></script>

    <!-- page template -->
    <script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src="img/2.jpg" class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender"><a href="#">Tikhon Laninga</a></div>
            <div class="text">
                <%- text %>
            </div>
        </div>
    </script>
  </body>
  </html>
