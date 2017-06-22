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
                        <a href="{{ route('admin.v1.content-management.rubrics.add-controller.execute', [

                        ]) }}" class="btn btn-success">Добавить рубрику</a>
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
                                <th>РУБРИКА</th>
                                <th class="text-center">КАТЕГОРИИ</th>
                                <th class="text-center">ПОДКАТЕГОРИИ</th>
                                <th class="text-center">СТАТЬИ</th>
                                <th class="text-center">ФОТОГРАФИИ</th>
                                <th colspan="2" class="text-center">ДЕЙСТВИЕ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 1; $i < 21; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>Рубрика 1</td>
                                <td class="text-center">
                                    @if(false)
                                        <a href="{{ route('admin.v1.content-management.rubrics.nested.categories-controller.execute', [
                                            'rubric_id' => 1
                                        ]) }}">2 категории</a>
                                    @else
                                        <a href="{{ route('admin.v1.content-management.categories.add-controller.execute', [

                                        ]) }}">Нет категорий</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(false)
                                        <a href="{{ route('admin.v1.content-management.rubrics.nested.sub-categories-controller.execute', [
                                            'rubric_id' => 1
                                        ]) }}">1 подкатегория</a>
                                    @else
                                        <a href="{{ route('admin.v1.content-management.sub-categories.add-controller.execute', [

                                        ]) }}">Нет подкатегорий</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(false)
                                        <a href="{{ route('admin.v1.content-management.rubrics.nested.articles-controller.execute', [
                                            'rubric_id' => 1
                                        ]) }}">5 статей</a>
                                    @else
                                        <a href="{{ route('admin.v1.content-management.articles.add-controller.execute', [

                                        ]) }}">Нет статей</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(false)
                                        <a href="{{ route('admin.v1.content-management.rubrics.nested.photos-controller.execute', [
                                            'rubric_id' => 1
                                        ]) }}">3 фотографии</a>
                                    @else
                                        <a href="{{ route('admin.v1.content-management.photos.add-controller.execute', [

                                        ]) }}">Нет фотографий</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.v1.content-management.rubrics.edit-controller.execute', [
                                        'rubric_id' => 1
                                    ]) }}">Редактировать</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.v1.content-management.rubrics.delete-controller.execute', [
                                        'rubric_id' => 1
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