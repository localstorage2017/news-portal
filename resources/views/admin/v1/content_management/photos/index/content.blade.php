<!-- navigation panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.v1.partials.content_management.navigation')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end navigation panel -->

<!-- pagination panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-3 col-md-push-9">
                    <div class="text-right">
                        <a href="{{ route('admin.v1.content-management.photos.add-controller.execute', [

                        ]) }}" class="btn btn-success">Загрузить фотографию</a>
                    </div>
                </div>
                <div class="col-md-9 col-md-pull-3">
                    <div class="text-left">
                        @include('admin.v1.partials.master.paginator')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end pagination panel -->

<!-- table panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ФОТОГРАФИЯ</th>
                                <th class="text-center">ОПИСАНИЕ ДЛЯ БОТОВ ПОИСКОВИКОВ</th>
                                <th colspan="2" class="text-center">ДЕЙСТВИЕ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 1; $i < 21; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><img src="" alt="" width="150" height="150"></td>
                                <td>Длина текста не должна быть меньше 3–4 слов и длиннее 250 символов.</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.v1.content-management.photos.edit-controller.execute', [
                                        'photo_id' => 1
                                    ]) }}">Редактировать</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.v1.content-management.photos.delete-controller.execute', [
                                        'photo_id' => 1
                                    ]) }}">Удалить</a>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end table panel -->

<!-- pagination panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        @include('admin.v1.partials.master.paginator')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end pagination panel -->