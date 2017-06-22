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
                        'url' => route('admin.v1.content-management.articles.edit-controller.execute', [
                            'article_id' => 1
                        ]),
                        'class' => 'well',
                        'method' => 'POST'
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
                            {{ Form::label('article_text', 'Введите текст:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::textarea('article_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti dolorem exercitationem fugit illum odio quidem quisquam vero? Cupiditate deserunt iure laudantium libero molestiae molestias non porro quaerat quas rem?', [
                                'rows' => 5,
                                'placeholder' => 'Текст статьи',
                                'class' => 'form-control',
                                'id' => 'article_text'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('article_name', 'Введите название:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::text('article_name', 'Заголовк статьи 1', [
                                 'class' => 'form-control',
                                 'id' => 'article_name',
                                 'placeholder' => 'Новое название статьи'
                            ]) }}
                        </div>

                        <div class="text-right">
                            {!! Form::button('Подтвердить редактирование', [
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
