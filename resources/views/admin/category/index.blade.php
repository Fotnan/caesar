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
                        <li class="breadcrumb-item active">Категории объектов</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Категории объектов</h3>

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
                    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Добавить вид объекта</a>
                    @endrole
                    @if (count($categories))
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Наименование</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->title}}</td>
                                    <td>
                                        <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form
                                            action="{{ route('category.destroy', ['category' => $category->id]) }}"
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
                @else
                    <p>Записей пока нет...</p>
                @endif
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">

                    </ul>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
