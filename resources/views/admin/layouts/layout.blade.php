<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>adminLTE 3 | Blank Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/adminlte.min.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light columns-2">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Выход') }}
            </x-jet-dropdown-link>
        </form>
        <div class="columns-auto">
            <span style="font-size: large; color: #0e5b44; font-weight: bold">Пользователь:</span>&nbsp;&nbsp;  <span style="color: red">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
        </div>
    </nav>
    <!-- /.navbar -->


</div>
@role('admin')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('/')}}" target="_blank" class="brand-link">
            <span class="brand-text font-weight-light">На сайт</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- SidebarSearch Form -->


            <!-- Sidebar Menu -->
            <nav class="mt-2" >
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Главная</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Справочные данные
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('alarm.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Виды тревог</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('category.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Категории объектов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('detected.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Обнаружено на объекте</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('city.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Города</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('district.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Районы</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('document.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Виды документов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('make.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Сделано по тревоге</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('reason.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Причина тревоги</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('position.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Должности</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('group.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Патрульные группы</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Клиенты
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('customer.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Список клиентов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('oldcustomer.index')}}" class="nav-link">
                                    <i class="fa fa-trash nav-icon"></i>
                                    <p>Удаленные клиенты</p>
                                </a>
                            </li>
                        </ul>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-money-check"></i>
                            <p>Цены черный металл</p>
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endrole
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">

        </div>
        <strong>Copyright &copy; 2022 Вадим Тарк, present@hot.ee</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- adminLTE App -->
<script src="{{asset('assets/admin/js/adminlte.min.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
<!-- adminLTE for demo purposes -->
{{--<script src="{{asset('assets/admin/js/demo.js')}}"></script>--}}
</body>
</html>

