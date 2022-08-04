<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Caesar_akt</title>
    <link rel="stylesheet" href="{{asset('assets/front/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/styles.css')}}">
</head>

<body>
<div class="container mt-5">
    <form>
        <div class="row mb-3">
            <div class="col-6 col-sm-6 col-md-3 col-lg-2"><label class="form-label fw-bold" for="data">Время тревоги</label><input class="form-control" id="data" type="datetime-local" name="data" required=""></div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2"><label class="form-label" for="object">№ объекта</label><select class="form-select" id="object" style="width: 150px;" name="object" required="">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center"><label class="form-label text-center" style="width: 150px;">Имя объекта:</label><label class="form-label">IMJA objecta</label></div>
            <div class="col-7 col-sm-8 col-md-8 col-lg-2 text-center mt-2"><button class="btn btn-success mb-1 mx-3" type="submit">Сохранить</button><button class="btn btn-warning" type="reset">Выйти</button></div>
            <div class="col-5 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11" name="completed"><label class="form-check-label" for="formCheck-11">Акт завершен</label></div><label class="form-label" for="zone">Зона тревоги</label><input class="form-control" type="text" id="zone" style="width: 100px;" name="zone">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8 col-md-4 col-lg-4 col-xl-4"><label class="form-label mx-1">Оператор:</label><label class="form-label fw-bold text-success">IMJA operatora</label></div>
            <div class="col-md-4 col-lg-4 col-xl-4"><label class="form-label mx-1">Патрульный 07:</label><label class="form-label fw-bold text-primary">IMJA patrulnogo<br></label></div>
            <div class="col-md-4 col-lg-4 col-xl-4"><label class="form-label mx-1">Патрульный 06:</label><label class="form-label fw-bold text-primary">IMJA patrulnogo</label></div>
        </div>
        <hr>
        <div class="row mb-1">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3"><label class="form-label fw-bold text-danger" for="arrive">Прибытие</label><input class="form-control" id="arrive" type="datetime-local" name="arrive"></div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3"><label class="form-label fw-bold text-success" for="leave">Убытие</label><input class="form-control" id="leave" type="datetime-local" name="leave"></div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-4 col-sm-3 col-md-4 col-lg-1 col-xl-2" style="border-color: #ffffff;border-right-style: solid;border-right-color: rgb(255,255,255);">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="alarm"><label class="form-check-label" for="formCheck-1" style="border-color: #ffffff;border-right-style: solid;border-right-color: rgb(255,255,255);">Alarm</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10" name="fire"><label class="form-check-label" for="formCheck-10" style="border-color: #ffffff;border-right-style: solid;border-right-color: rgb(255,255,255);">Fire</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9" name="12V"><label class="form-check-label" for="formCheck-9" style="border-color: #ffffff;border-right-style: solid;border-right-color: rgb(255,255,255);">12V</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8" name="220V"><label class="form-check-label" for="formCheck-8" style="border-color: #ffffff;border-right-style: solid;border-right-color: rgb(255,255,255);">220V</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7" name="battery"><label class="form-check-label" for="formCheck-7" style="border-color: #ffffff;border-right-style: solid;border-right-color: rgb(255,255,255);">Aku</label></div>
            </div>
            <div class="col-7 col-sm-4 col-md-4 col-lg-3 col-xl-2" style="border-color: #ffffff;border-right-style: solid;border-right-color: #000000;">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6" name="panica"><label class="form-check-label" for="formCheck-6">Panica</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5" name="phone_call"><label class="form-check-label" for="formCheck-5">Вызов по телефону</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4" name="not_secured"><label class="form-check-label" for="formCheck-4">Не на охране</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3" name="off_guard"><label class="form-check-label" for="formCheck-3">Снято с охраны</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2" name="patroll"><label class="form-check-label" for="formCheck-2">Патруль</label></div>
            </div>
            <div class="col-sm-5 col-md-3 col-lg-2 col-xl-2" style="border-right-style: solid;border-right-color: #000000;">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12" name="06_start"><label class="form-check-label" for="formCheck-12">06 выехал</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13" name="07_start"><label class="form-check-label" for="formCheck-13">07 выехал</label></div>
            </div>
            <div class="col-9 col-sm-6 col-md-4 col-lg-3 col-xl-3" style="border-right-style: solid;"><label class="form-label fw-bold">Причина тревоги</label><select class="bg-danger form-select mb-1" style="color: white; font-weight: bold;" name="reason1_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-danger form-select mb-1" style="color: white; font-weight: bold;" name="reason2_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-danger form-select mb-1" style="color: white; font-weight: bold;" name="reason3_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-danger form-select" style="color: white; font-weight: bold;" name="reason4_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select></div>
            <div class="col-9 col-sm-6 col-md-4 col-lg-3 col-xl-3"><label class="form-label fw-bold">Обнаружено на месте</label><select class="bg-primary form-select mb-1" style="color: white; font-weight: bold;" name="detect1_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-primary form-select mb-1" style="color: white; font-weight: bold;" name="detect2_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-primary form-select mb-1" style="color: white; font-weight: bold;" name="detect3_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-primary form-select" style="color: white; font-weight: bold;" name="detect4_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-4" style="border-right-style: solid;"><label class="form-label fw-bold">Контактное лицо</label><select class="bg-light form-select mb-1" name="contact1_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-light form-select mb-1" name="contact2_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-light form-select" name="contact3_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-4" style="border-right-style: solid;"><label class="form-label fw-bold">Сделано</label><select class="bg-info form-select mb-1" name="make1_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-info form-select mb-1" name="make2_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-info form-select mb-1" name="make3_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><select class="bg-info form-select" name="make4_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-4"><label class="form-label fw-bold" for="call_date">Сделан звонок</label><input class="form-control" id="call_date" type="datetime-local" name="call_date"><label class="form-label fw-bold" for="arrive_date">Прибыл на объект</label><input class="form-control" id="arrive_date" type="datetime-local" name="arrive_date"></div>
        </div>
        <hr>
        <div class="row justify-content-around my-4">
            <div class="col-8 col-sm-5 col-md-4 col-lg-3 col-xl-3"><label class="form-label fw-bold mx-5">Посторонний на объекте</label><label class="form-label" for="alien_name">Имя</label><input class="form-control" type="text" id="alien_name" name="alien_name"><label class="form-label" for="alien_code">ИД-код</label><input class="form-control" type="text" id="alien_code" name="alien_code"><label class="form-label" for="document_id">Вид документа</label><select class="form-select" id="document_id" name="document_id">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select></div>
            <div class="col-8 col-sm-5 col-md-4 col-lg-3 col-xl-3"><label class="form-label fw-bold" for="call_police">Вызов полиции</label><input class="form-control" id="call_police" type="datetime-local" name="call_police"><label class="form-label" for="nr_police">№ экипажа</label><input class="form-control" type="text" id="nr_police" name="nr_police"><label class="form-label" for="arrive_police">Прибыла полиция</label><input class="form-control" id="arrive_police" type="datetime-local" name="arrive_police"></div>
        </div>
        <div class="row">
            <div class="col-xl-5"><input class="form-control mt-2" type="file" id="photo1" name="photo1"><input class="form-control my-2" type="file" id="photo2" name="photo2"><input class="form-control" type="file" id="photo3" name="photo3"></div>
        </div>
        <div><input class="form-control" type="hidden" name="operator"><input class="form-control" type="hidden" name="patrol"></div>
    </form>
</div>
<script src="{{asset('assets/front/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
