@extends('admin.layouts.layout')
@section('content')

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Виды деятельности</h3>

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


                <div class="card-body">
                    <a href="{{ route('action.create') }}" class="btn btn-primary mb-3">Добавить
                        металл</a>
                    @if (count($actions))
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Описание</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($actions as $action)
                                <tr>
                                    <td>{{$action->title}}</td>
                                    <td>
                                        <a href="{{ route('action.edit', ['action' => $action->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form
                                            action="{{ route('action.destroy', ['action' => $action->id]) }}"
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
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
