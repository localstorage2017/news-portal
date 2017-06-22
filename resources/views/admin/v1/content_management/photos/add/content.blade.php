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

<!-- form panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {!! Form::open([
                        'url' => route('admin.v1.content-management.photos.add-controller.execute'),
                        'class' => 'well',
                        'method' => 'POST',
                        'enctype' => 'multipart/form-data'
                    ]) !!}

                        <div class="form-group">
                            {{ Form::label('rubric_id', 'Укажите рубирику:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::select('rubric_id', [
                                '1' => 'Рубрика 1',
                                '2' => 'Рубрика 2',
                                '3' => 'Рубрика 3',
                                '4' => 'Рубрика 4',
                                '5' => 'Рубрика 5'
                            ], null, [
                                'class' => 'form-control',
                                'id' => 'rubric_id'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('category_id', 'Указать категорию:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::select('category_id', [
                                '0' => 'Оставить поле пустым',
                                '1' => 'Категория 1',
                                '2' => 'Категория 2',
                                '3' => 'Категория 3',
                                '4' => 'Категория 4',
                                '5' => 'Категория 5'
                            ], null, [
                                'class' => 'form-control',
                                'id' => 'category_id'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('sub_category_id', 'Указать подкатегорию:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::select('sub_category_id', [
                                '0' => 'Оставить поле пустым',
                                '1' => 'Подкатегория 1',
                                '2' => 'Подкатегория 2',
                                '3' => 'Подкатегория 3',
                                '4' => 'Подкатегория 4',
                                '5' => 'Подкатегория 5'
                            ], null, [
                                'class' => 'form-control',
                                'id' => 'category_id'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('article_id', 'Укажите статью:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::select('article_id', [
                                '1' => 'Заголовок статьи 1',
                                '2' => 'Заголовок статьи 2',
                                '3' => 'Заголовок статьи 3',
                                '4' => 'Заголовок статьи 4',
                                '5' => 'Заголовок статьи 5'
                            ], null, [
                                'class' => 'form-control',
                                'id' => 'article_id'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('photo_alt', 'Введите описание фотографии для ботов поисковиков:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::textarea('photo_alt', null, [
                                'rows' => 2,
                                'placeholder' => 'Текст статьи',
                                'class' => 'form-control',
                                'id' => 'photo_alt'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('article_name', 'Выбрать фотографию:', [
                                'class' => 'control-label'
                            ]) }}
                            {!! Form::file('photo_file', [
                                'class' => 'form-control'
                            ]) !!}
                        </div>

                        <div class="text-right">
                            {!! Form::button('Подтвердить загрузку', [
                                'class' => 'btn btn-primary',
                                'type' => 'submit'
                            ]) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end form panel -->
