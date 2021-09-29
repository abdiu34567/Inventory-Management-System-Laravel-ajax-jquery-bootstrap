@extends('content.assets')

@section('content')

    <div class="container mt-5">
        <!-- sidebar -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                            width="30" height="33" viewBox="0 0 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>
                        <span class="brand-name">Dashboard</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">



                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-account-star"></i>
                                <span class="nav-text">USERS</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li class="active">
                                        <a class="sidenav-item-link" href="{{ url('dashboard/add') }}">
                                            <span class="mdi mdi-account-multiple-plus"></span>
                                            <i class="mdi mdi-account-settings-variant"></i>&nbsp;&nbsp;
                                            <span class="nav-text">Add User</span>

                                        </a>
                                    </li>




                                    <li>
                                        <a class="sidenav-item-link" href="{{ url('dashboard/list') }}">

                                            <i class="mdi mdi-account-search"></i>&nbsp;&nbsp;
                                            <span class="nav-text">Users List</span>

                                            <span class="badge badge-success">new</span>

                                        </a>
                                    </li>




                                </div>
                            </ul>
                        </li>





                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                <i class="mdi mdi-folder-multiple-outline"></i>
                                <span class="nav-text">CONFIGRATION</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                                <div class="sub-menu">


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#components" aria-expanded="false" aria-controls="components">
                                            <span class="nav-text">Add Branch/WareHouse</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="components">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="alert.html">Branch/WareHouse List</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#icons" aria-expanded="false" aria-controls="icons">
                                            <span class="nav-text">Price List</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="icons">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="material-icon.html">Material Icon</a>
                                                </li>

                                                <li>
                                                    <a href="flag-icon.html">Flag Icon</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#forms" aria-expanded="false" aria-controls="forms">
                                            <span class="nav-text">Price Category</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="forms">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="basic-input.html">Basic Input</a>
                                                </li>

                                                <li>
                                                    <a href="input-group.html">Input Group</a>
                                                </li>

                                                <li>
                                                    <a href="checkbox-radio.html">Checkbox & Radio</a>
                                                </li>

                                                <li>
                                                    <a href="form-validation.html">Form Validation</a>
                                                </li>

                                                <li>
                                                    <a href="form-advance.html">Form Advance</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#maps" aria-expanded="false" aria-controls="maps">
                                            <span class="nav-text">Items</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="maps">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="google-map.html">Google Map</a>
                                                </li>

                                                <li>
                                                    <a href="vector-map.html">Vector Map</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#widgets" aria-expanded="false" aria-controls="widgets">
                                            <span class="nav-text">Item Category</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="widgets">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="general-widget.html">General Widget</a>
                                                </li>

                                                <li>
                                                    <a href="chart-widget.html">Chart Widget</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>



                                </div>
                            </ul>
                        </li>





                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#charts" aria-expanded="false" aria-controls="charts">
                                <i class="mdi mdi-chart-pie"></i>
                                <span class="nav-text">SALES</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="chartjs.html">
                                            <span class="nav-text">Add Yours</span>

                                        </a>
                                    </li>

                                </div>
                            </ul>
                        </li>





                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#pages" aria-expanded="false" aria-controls="pages">
                                <i class="mdi mdi-image-filter-none"></i>
                                <span class="nav-text">Inventory</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li>
                                        <a class="sidenav-item-link" href="user-profile.html">
                                            <span class="nav-text">A</span>

                                        </a>
                                    </li>





                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#authentication" aria-expanded="false"
                                            aria-controls="authentication">
                                            <span class="nav-text">B</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="authentication">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="sign-in.html">C</a>
                                                </li>

                                                <li>
                                                    <a href="sign-up.html">D</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#others" aria-expanded="false" aria-controls="others">
                                            <span class="nav-text">E</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="others">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="invoice.html">invoice</a>
                                                </li>

                                                <li>
                                                    <a href="error.html">Error</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>



                                </div>
                            </ul>
                        </li>





                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                <span class="nav-text">Report</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li class="section-title">
                                        Getting Started
                                    </li>






                                    <li>
                                        <a class="sidenav-item-link" href="introduction.html">
                                            <span class="nav-text">Introduction</span>

                                        </a>
                                    </li>






                                    <li>
                                        <a class="sidenav-item-link" href="setup.html">
                                            <span class="nav-text">Setup</span>

                                        </a>
                                    </li>






                                    <li>
                                        <a class="sidenav-item-link" href="customization.html">
                                            <span class="nav-text">Customization</span>

                                        </a>
                                    </li>






                                    <li class="section-title">
                                        Layouts
                                    </li>





                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#headers" aria-expanded="false" aria-controls="headers">
                                            <span class="nav-text">Layout Headers</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="headers">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="header-fixed.html">Header Fixed</a>
                                                </li>

                                                <li>
                                                    <a href="header-static.html">Header Static</a>
                                                </li>

                                                <li>
                                                    <a href="header-light.html">Header Light</a>
                                                </li>

                                                <li>
                                                    <a href="header-dark.html">Header Dark</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#sidebar-navs" aria-expanded="false" aria-controls="sidebar-navs">
                                            <span class="nav-text">layout Sidebars</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="sidebar-navs">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="sidebar-open.html">Sidebar Open</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-minimized.html">Sidebar Minimized</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                                                </li>

                                                <li>
                                                    <a href="right-sidebar.html">Right Sidebar</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>





                                    <li>
                                        <a class="sidenav-item-link" href="rtl.html">
                                            <span class="nav-text">RTL Direction</span>

                                        </a>
                                    </li>




                                </div>
                            </ul>
                        </li>



                    </ul>

                </div>

                <hr class="separator" />

                <div class="sidebar-footer">
                    <div class="sidebar-footer-content">
                        <h1 class="text-uppercase">
                            MELFAN TECK
                        </h1>

                        <h6 class="text-uppercase">
                            <i class="mdi mdi-shopping"></i>&nbsp;&nbsp;OUR COMPANY
                        </h6>

                    </div>
                </div>
            </div>
        </aside>

        <div class="page-wrapper">
            {{-- header --}}
            @include('content.header')

            <h3> ADD USERS ROLE </h3>

            @if ($data == 1 && $reg == 0){{-- registration --}}
                <form class=" mt-4" action="{{ route('add.user') }}" method="POST">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">

                        <div class="col">
                            <div class="form-outline">

                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="text" name='name' id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1">Full Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select class="form-control" name='role' id="exampleFormControlSelect1">
                                    <option>ADMIN</option>
                                    <option>USER A</option>
                                    <option>USER B</option>
                                    <option>USER C</option>
                                    <option>USER D</option>
                                </select>
                                <label for="exampleFormControlSelect1"> Select Role</label>
                            </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Password</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" id="form6Example5" class="form-control" />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="number" name="phone" id="form6Example6" class="form-control" />
                        <label class="form-label" for="form6Example6">Phone</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
                </form>
            @elseif ($reg == 1)
                {{-- Update registration --}}
                <form class="
              mt-4" action="{{ url('dashboard/add/' . $id->id) }}" method="POST">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">

                        <div class="col">
                            <div class="form-outline">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="text" name='name' value="{{ $id->name }}" id="form6Example1"
                                    class="form-control" />
                                <label class="form-label" for="form6Example1">Full Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select class="form-control" name='role' value="{{ $id->role }}"
                                    id="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            exampleFormControlSelect1">
                                    <option>ADMIN</option>
                                    <option>USER A</option>
                                    <option>USER B</option>
                                    <option>USER C</option>
                                    <option>USER D</option>
                                </select>
                                <label for="exampleFormControlSelect1">Example select</label>
                            </div>
                        </div>

                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Password</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" value="{{ $id->email }}" id=" form6Example5"
                            class="form-control" />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="number" name="phone" value="{{ $id->phone }}" id=" form6Example6"
                            class="form-control" />
                        <label class="form-label" for="form6Example6">Phone</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Edit</button>
                </form>
            @endif

            @include('content.footer')
        </div>

    </div>

@endsection
