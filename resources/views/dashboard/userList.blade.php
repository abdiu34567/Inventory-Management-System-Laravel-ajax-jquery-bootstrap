@extends('content.assets')

@section('content')
    <div class="wrapper">


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
            <!-- Header -->
            @include('content.header')


            {{-- DAta here --}}

            <div class="content-wrapper">
                <div class="col mt-3">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Related Data</h2>

                            <div class="container mt-2">
                                <div class="row">
                                    <div class="order-last bg-success border rounded ">
                                        <a href="" class="text-white m-sm-2">COPY</a>

                                    </div>
                                    <div class="bg-success border rounded ">
                                        <a href="" class="text-white m-sm-2">PRINT</a>

                                    </div>
                                    <div class="bg-success border rounded ">
                                        <a href="" class="text-white m-sm-2">PDF</a>

                                    </div>
                                    <div class="bg-success border rounded ">
                                        <a href="" class="text-white m-sm-2">EXCEL</a>

                                    </div>
                                    <div class="order-first bg-success border rounded ">
                                        <a href="" class="text-white m-sm-2">CSV</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            {{-- search bar here --}}
                            <label class="text-dark font-weight-medium" for="">Search here</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> Go! </span>
                                </div>
                                <input type="search" id="search" class="form-control" placeholder="Search for..."
                                    aria-label="">
                            </div>

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">ACTIONS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="{{ $user->id }}">
                                            <td scope="row">{{ $user->name }} User</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td><a href="{{ url('users/edit/' . $user->id) }}" class="btn btn-info"
                                                    id="edit">edit</a>
                                                {{-- {{ url('users/delete/' . $user->id) }} --}}
                                                <a href="javascript:void(0)" data-id="{{ $user->id }}"
                                                    class="btn btn-danger" id="delete">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


            {{-- end data --}}

            @include('content.footer')


        </div>
    </div>

@endsection


<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {

        $('body').on('click', '#delete', function() {
            var id = $(this).data("id");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )

                    $.ajax({
                        method: 'GET',
                        url: '{{ route('action.delete') }}',
                        dataType: 'json',
                        data: {

                            id: id,
                            id_string: id.toString()
                        },
                        success: function(id) {
                            $("." + id).remove();
                        }

                    })


                }
            })
        });


        $('body').on('keyup', '#search', function() {
            var query = $(this).val();
            $.ajax({
                method: 'GET',
                url: '{{ route('live_search.action') }}',
                dataType: 'json',
                data: {
                    query: query
                },
                success: function(data) {
                    $('tbody').html(data.table_data);

                    // $('#total_records').text(data.total_data);
                }
            })
        })
    });
</script>
