<?=$header;?>
<?php $this->load->view("component/menu"); ?>
    <div class="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <!-- component template -->
                    <script type="text/x-template" id="grid-template">
                      <table>
                        <thead>
                          <tr>
                            <th v-for="key in columns"
                              @click="sortBy(key)"
                              :class="{ active: sortKey == key }">
                              {{ key | capitalize }}
                              <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
                              </span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="entry in filteredData">
                            <td v-for="key in columns">
                              {{entry[key]}}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </script>

                    <!-- demo root element -->
                    <div id="demo">
                      <form id="search">
                        Search <input name="query" v-model="searchQuery">
                      </form>
                      <demo-grid
                        :data="gridData"
                        :columns="gridColumns"
                        :filter-key="searchQuery">
                      </demo-grid>
                    </div>
                    
                </div><!-- end col -->

            </div>
            <!-- end row -->


            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            2016 © Adminto.
                        </div>
                        <div class="col-xs-6">
                            <ul class="pull-right list-inline m-b-0">
                                <li>
                                    <a href="index.html#">About</a>
                                </li>
                                <li>
                                    <a href="index.html#">Help</a>
                                </li>
                                <li>
                                    <a href="index.html#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end container -->



        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="zmdi zmdi-close-circle-o"></i>
            </a>
            <h4 class="">Notifications</h4>
            <div class="notification-list nicescroll">
                <ul class="list-group list-no-border user-list">
                    <li class="list-group-item">
                        <a href="index.html#" class="user-list-item">
                            <div class="avatar">
                                <img src="<?php kbase('images/users/avatar-2.jpg');?>" alt="">
                            </div>
                            <div class="user-desc">
                                <span class="name">Michael Zenaty</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">2 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.html#" class="user-list-item">
                            <div class="icon bg-info">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Signup</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">5 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.html#" class="user-list-item">
                            <div class="icon bg-pink">
                                <i class="zmdi zmdi-comment"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Message received</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="index.html#" class="user-list-item">
                            <div class="avatar">
                                <img src="<?php kbase('images/users/avatar-3.jpg');?>" alt="">
                            </div>
                            <div class="user-desc">
                                <span class="name">James Anderson</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">2 days ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="index.html#" class="user-list-item">
                            <div class="icon bg-warning">
                                <i class="zmdi zmdi-settings"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">Settings</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /Right-bar -->
    </div>
<?=$footer;?>