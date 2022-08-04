@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Создание клиента</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Создание клиента</h3>
                        </div>
                        <!-- /.card-header -->
                        <form role="form" method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row" style="justify-content: space-between;">
                                    <div class="form-group mx-1 col-2">
                                        <label for="object">№ объекта</label>
                                        <input type="text" name="object"
                                               class="form-control @error('object') is-invalid @enderror" id="object"
                                               value="{{ old('object') }}" placeholder="№ объекта">
                                    </div>
                                    <div class="form-group col-2 mx-1">
                                        <label for="name">Наименование</label>
                                        <input type="text" name="name"
                                               class="form-control @error('name') is-invalid @enderror" id="name"
                                               value="{{ old('name') }}" placeholder="Наименование">
                                    </div>
                                    <div class="form-group mx-1">
                                        <label>Тип</label>
                                        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                            <option>Категория</option>
                                            @foreach ($categories as $row)
                                                <option value="{{$row->id}}">{{$row->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-2 mx-1">
                                        <label for="aadress">Адрес</label>
                                        <input type="text" name="aadress"
                                               class="form-control @error('aadress') is-invalid @enderror" id="aadress"
                                               value="{{ old('aadress') }}" placeholder="Адрес">
                                    </div>
                                    <div class="form-group mx-1">
                                        <label>Район</label>
                                        <select name="district_id" class="form-control @error('district_id') is-invalid @enderror">
                                            <option>Выберите район</option>
                                            @foreach ($districts as $row)
                                                <option  value="{{$row->id}}">{{$row->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Город</label>
                                        <select name="city_id" class="form-control @error('city_id') is-invalid @enderror">
                                            <option>Выберите город</option>
                                            @foreach ($cities as $row)
                                                <option  value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" name="longitude"
                                               class="form-control @error('longitude') is-invalid @enderror" id="longitude"
                                               value="{{ old('longitude') }}" placeholder="Долгота">
                                    </div>
                                    <div class="form-group col">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" name="latitude"
                                               class="form-control @error('latitude') is-invalid @enderror" id="latitude"
                                               value="{{ old('latitude') }}" placeholder="Широта">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="keychain">Ключи</label>
                                        <input type="text" name="keychain"
                                               class="form-control @error('keychain') is-invalid @enderror" id="keychain"
                                               value="{{ old('keychain') }}" placeholder="Связка">
                                    </div>
                                    <div class="form-check mt-4">
                                        <input type="hidden" name="paid" value="0">
                                        <input type="checkbox" name="paid" value="1" id="paid" class="form-check-input">
                                        <label class="form-check-label" for="paid">Платный</label>
                                    </div>
                                    <div class="form-group col">
                                        <label for="gate">Шлагбаум</label>
                                        <input type="text" name="gate"
                                               class="form-control @error('gate') is-invalid @enderror" id="gate"
                                               value="{{ old('gate') }}" placeholder="Телефон">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="floor">Этаж</label>
                                        <input type="text" name="floor"
                                               class="form-control @error('floor') is-invalid @enderror" id="floor"
                                               value="{{ old('floor') }}" placeholder="Этаж">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="color">Фасад</label>
                                        <input type="text" name="color"
                                               class="form-control @error('color') is-invalid @enderror" id="color"
                                               value="{{ old('color') }}" placeholder="Цвет">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-1">
                                        <label for="entrance">Подъезд</label>
                                        <input type="text" name="entrance"
                                               class="form-control @error('entrance') is-invalid @enderror" id="entrance"
                                               value="{{ old('entrance') }}" placeholder="Слева">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="door">Двери</label>
                                        <input type="text" name="door"
                                               class="form-control @error('door') is-invalid @enderror" id="door"
                                               value="{{ old('door') }}" placeholder="Штук">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="windows">Окна</label>
                                        <input type="text" name="windows"
                                               class="form-control @error('windows') is-invalid @enderror" id="windows"
                                               value="{{ old('windows') }}" placeholder="Штук">
                                    </div>
                                    <div class="form-group col-1">
                                        <label for="balcony">Балконы</label>
                                        <input type="text" name="balcony"
                                               class="form-control @error('balcony') is-invalid @enderror" id="balcony"
                                               value="{{ old('balcony') }}" placeholder="Штук">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="utility">Подсобные</label>
                                        <input type="text" name="utility"
                                               class="form-control @error('utility') is-invalid @enderror" id="utility"
                                               value="{{ old('utility') }}" placeholder="Строения">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="code">Код</label>
                                        <input type="text" name="code"
                                               class="form-control @error('code') is-invalid @enderror" id="code"
                                               value="{{ old('code') }}" placeholder="Домофона">
                                    </div>
                                    <div class="form-check mt-4">
                                        <input type="hidden" name="fence" value="0">
                                        <input type="checkbox" name="fence" value="1" id="fence" class="form-check-input">
                                        <label class="form-check-label" for="fence">Забор</label>
                                    </div>
                                    <div class="form-check mt-4 mx-1">
                                        <input type="hidden" name="dog" value="0">
                                        <input type="checkbox" name="dog" value="1" id="dog" class="form-check-input">
                                        <label class="form-check-label" for="dog">Собака</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-4">
                                        <label>Примечания</label>
                                        <textarea class="form-control" name="notes" cols="47" rows="3" placeholder="Enter ...">{!! old('notes') !!}</textarea>
                                    </div>

                                    <div class="form-check mt-4 mx-1 col-1">
                                        <input type="hidden" name="active" value="0">
                                        <input type="checkbox" name="active" value="1" id="active" class="form-check-input">
                                        <label class="form-check-label" for="active">Активен</label>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="pict1">Фото 1</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="pict1" class="form-control-file" id="pict1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pict2">Фото 2</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="pict2" class="form-control-file" id="pict2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pict3">Фото 3</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="pict3" class="form-control-file" id="pict3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="scheme1">Схема 1</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="scheme1" class="form-control-file" id="scheme1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="scheme2">Схема 2</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="scheme2" class="form-control-file" id="scheme2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="scheme3">Схема 3</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="scheme3" class="form-control-file" id="scheme3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="document">Документ</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="document" class="form-control-file" id="document">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                        <form role="form" method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                            @csrf
                            <table id='tabl' border='1'align='left'>
                                <tr>
                                    <td><input type='text' name='1' placeholder="имя"></td>
                                </tr>
                            </table>
                            <input type='button' value='Добавить' onClick='add();'>

                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <script src="{{asset('assets/admin/js/add_client.js')}}"></script>
@endsection

