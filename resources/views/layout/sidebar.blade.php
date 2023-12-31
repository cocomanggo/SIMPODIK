<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content mm-active" style="padding: 0px;">
                            <div class="sidebar-header">
                                <div>
                                    <img src="{{ url('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
                                </div>
                                <div>
                                    <h4 class="logo-text">Amdash</h4>
                                </div>
                                <div class="toggle-icon ms-auto">
                                    <i class="bx bx-arrow-to-left"></i>
                                </div>
                            </div>
                            <!--navigation-->
                            <ul class="metismenu" id="menu">
                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                                        </div>
                                        <div class="menu-title">Dashboard</div>
                                    </a>
                                    <ul>
                                        <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                                        </li>
                                        <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Alternate</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-label">APPS</li>
                                <li {{request()->is("users") ? "class=mm-active" : ""}} >
                                    <a class="has-arrow" href="javascript:;">
                                        <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                                        </div>
                                        <div class="menu-title">Master</div>
                                    </a>
                                    <ul {{request()->is("users") ? "class=mm-collapse mm-show" : ""}} >
                                        <li {{request()->is("users") ? "class=mm-active" : ""}} > <a href="table-basic-table.html"><i class="bx bx-user" style="padding-left: 30px"></i>Siswa</a>
                                        </li>
                                        <li> <a href="table-datatable.html"><i class="bx bx-building-house" style="padding-left: 30px"></i>Kelas</a>
                                        </li>
                                        <li> <a href="table-datatable.html"><i class="bx lni-information" style="padding-left: 30px"></i>Subject</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-label">Settings</li>
                                <li>
                                    <a href="user-profile.html" >
                                        <div class="parent-icon">
                                            <i class="bx bx-user-circle"></i>
                                        </div>
                                        <div class="menu-title">User</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <div class="parent-icon">
                                            <i class="bx bx-video-recording"></i>
                                        </div>
                                        <div class="menu-title">Timeline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <div class="parent-icon">
                                            <i class="bx bx-help-circle"></i>
                                        </div>
                                        <div class="menu-title">FAQ</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing-table.html">
                                        <div class="parent-icon">
                                            <i class="bx bx-diamond"></i>
                                        </div>
                                        <div class="menu-title">Pricing</div>
                                    </a>
                                </li>
                            </ul>
                            <!--end navigation-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 561px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: 214px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
    <!--end sidebar wrapper -->
