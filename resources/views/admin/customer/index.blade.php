@extends('admin.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Клиенты</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Клиенты</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body">
                    @role('admin')
                    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Новый клиент</a>
                    @endrole
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>№ объекта</th>
                                <th>Наименование</th>
                                <th>Адрес</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->object}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->aadress}}</td>
                                    <td>
                                        <a href="{{ route('customer.edit', ['customer' => $customer->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form
                                            action="{{ route('customer.destroy', ['customer' => $customer->id]) }}"
                                            method="post" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Подтвердите удаление')">
                                                <i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">

                    </ul>
                </div>
            </div>
            <div class="d-flex">
                {!! $customers->links() !!}
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
