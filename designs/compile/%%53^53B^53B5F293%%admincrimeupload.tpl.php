<?php /* Smarty version 2.6.26, created on 2022-04-26 10:02:01
         compiled from admincrimeupload.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="admin/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="admin/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="admin/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="admin/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="admin/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="admin/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="admin/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="admin/js/semantic.min.css" />
      <!-- fancy box js -->
      <link rel="stylesheet" href="admin/css/jquery.fancybox.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="admin/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive"  /></div>
                        <div class="user_info">
                           <h6>ADMIN</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                   <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Tables</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="adminhospitalview.php">> <span>Hospital</span></a>
                           </li>
                           <li>
                              <a href="adminpoliceview.php">> <span>Police</span></a>
                           </li>
                           <a href="adminpublicview.php">> <span>Public</span></a>
                           </li>
                        </ul>
                     </li>
                    <!--  <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li> -->
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Interactions</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="admincrimeview.php">> <span>Crime History </span></a></li>
                           <li><a href="adminviewcomplaint.php">> <span>Complaint </span></a></li>
                           </ul>
                     </li>
                           <!-- <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li> -->
                        









                    <!--  <li><a href="adminpoliceview.php"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li> -->
                     <!-- <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Tables</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="adminpoliceview.php">> <span> police </span></a></li>
                           <li><a href="adminhospitalview.php">> <span>hospital </span></a></li> -->
                           <!-- <li><a href="media_gallery.html">> <span>Media Gallery</ --> <!-- span></a></li>  -->
                        <!-- </ul>
                     </li> -->
                    <!--  <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li> -->
                     <!-- <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a> -->
                     <!-- </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li> -->
                    <!--  <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                     <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                  </ul> -->
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="admin/images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="admin/images/layout_img/" alt="#" /><span class="name_user">ADMIN</span></a>
                                    <div class="dropdown-menu">
                                       <!-- <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a> -->
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <!-- <h2>Tables</h2> -->
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                     <html>
<head><title>upload crimehistory</title>
</head>
<body>
   <center><h2> Upload Crime History</h2>
    <!-- style="margin-top:5rem" style="margin-left:5rem"> -->
   <table>
   <form method="POST" action="" enctype="multipart/form-data">
   <input type="hidden" name="hide" value="h">
   <tr><td></td>
   <tr><td><input type="file" name="file"></td></tr>
    <td><input type="submit" value="Upload" class="btn btn-primary"></td></tr> 
   </form>

   </table>
   </center>
</body>
</html>
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Basic Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Station Id</th>
                                             <th>Addressline1</th>
                                             <th>Addressline2</th>
                                             <th>Pincode</th>
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Contact No</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                       <!--  <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Striped Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Bordered Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Hover Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Dark Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-dark">
                                       <thead>
                                          <th>Criminal name</th>
                                             <th>Address</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Other details</th>
                                             
                                          </tr>
                                       </thead>
                                       
                                          <tr>
                                             <tbody>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['criminalname']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</td>
                                             <td><a href="admincrimehistoryupload.php?a=<?php echo $this->_tpl_vars['d']['crimekey']; ?>
" class="btn btn-success">Upload</a></td>
                                          </tr>
                                          
                                          <?php endforeach; endif; unset($_from); ?>
                                             
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Dark Striped Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-dark table-striped">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Contextual Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Default</td>
                                             <td>Defaultson</td>
                                             <td>def@somemail.com</td>
                                          </tr>
                                          <tr class="table-primary">
                                             <td>Primary</td>
                                             <td>Joe</td>
                                             <td>joe@example.com</td>
                                          </tr>
                                          <tr class="table-success">
                                             <td>Success</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr class="table-danger">
                                             <td>Danger</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr class="table-info">
                                             <td>Info</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                          <tr class="table-warning">
                                             <td>Warning</td>
                                             <td>Refs</td>
                                             <td>bo@example.com</td>
                                          </tr>
                                          <tr class="table-active">
                                             <td>Active</td>
                                             <td>Activeson</td>
                                             <td>act@example.com</td>
                                          </tr>
                                          <tr class="table-secondary">
                                             <td>Secondary</td>
                                             <td>Secondson</td>
                                             <td>sec@example.com</td>
                                          </tr>
                                          <tr class="table-light">
                                             <td>Light</td>
                                             <td>Angie</td>
                                             <td>angie@example.com</td>
                                          </tr>
                                          <tr class="table-dark text-dark">
                                             <td>Dark</td>
                                             <td>Bo</td>
                                             <td>bo@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Table Head Colors</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead class="thead-dark">
                                          <th>Criminal name</th>
                                             <th>Address</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Other details</th>
                                             
                                          </tr>
                                          <tbody>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['criminalname']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</td>
                                             <td><a href=".php?a=<?php echo $this->_tpl_vars['d']['crimekey']; ?>
" class="btn btn-success">UploadCrimehistory</a></td>
                                          </tr>
                                          <tr>
 -->                                             <!-- <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                          <?php endforeach; endif; unset($_from); ?>
                                       </tbody>
                                    </table>
                                    
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <!-- <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Responsive Tables</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Station Id</th>
                                             <th>Addressline1</th>
                                             <th>Addressline2</th>
                                             <th>Pincode</th>
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Contact No</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['stationid']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['addline1']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['addline2']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
                                             <?php if ($this->_tpl_vars['d']['status'] == 0): ?>
                                             <td><a href="policeapprove.php?a=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-success">approve</a></td>
                                             <td><a href="policereject.php?r=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-danger">reject</a></td> 
                                             <?php elseif ($this->_tpl_vars['d']['status'] == 1): ?>
                                             <td>approved</td>
                                             <td><a href="policereject.php?r=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-danger">reject</a></td> 
                                             <?php else: ?>
                                             <td>rejected</td>
                                             <td><a href="policeapprove.php?a=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-success">approve</a></td>
                                             <?php endif; ?> -->
                                            <!--  <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td> -->
                                         <!--  </tr>
                                          <?php endforeach; endif; unset($_from); ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
      <!-- jQuery -->
      <?php echo '
      <script src="admin/js/jquery.min.js"></script>
      <script src="admin/js/popper.min.js"></script>
      <script src="admin/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="admin/js/animate.js"></script>
      <!-- select country -->
      <script src="admin/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="admin/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="admin/js/Chart.min.js"></script>
      <script src="admin/js/Chart.bundle.min.js"></script>
      <script src="admin/js/utils.js"></script>
      <script src="admin/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="admin/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar(\'#sidebar\');
      </script>
      <!-- fancy box js -->
      <script src="admin/js/jquery-3.3.1.min.js"></script>
      <script src="admin/js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="admin/js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="admin/js/semantic.min.js"></script>
      '; ?>

   </body>
</html>