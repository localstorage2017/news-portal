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
                        'url' => route('admin.v1.content-management.sub-categories.add-controller.execute'),
                        'class' => 'well',
                        'method' => 'POST'
                    ]) !!}

                        <div class="form-group">
                            {{ Form::label('rubric_id', 'Укажите рубрику:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::select('rubric_id', [
                                '1' => 'Рубрика 1',
                                '2' => 'Рубрика 2',
                                '3' => 'Рубрика 3',
                                '4' => 'Рубрика 4',
                                '5' => 'Рубрика 5'
                            ], null, [
                                'class' => 'form-control'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('category_id', 'Укажите категорию:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::select('category_id', [
                                '1' => 'Категория 1',
                                '2' => 'Категория 2',
                                '3' => 'Категория 3',
                                '4' => 'Категория 4',
                                '5' => 'Категория 5'
                            ], null, [
                                'class' => 'form-control'
                            ]) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('sub_category_name', 'Введите название:', [
                                 'class' => 'control-label'
                            ]) }}
                            {{ Form::text('sub_category_name', null, [
                                 'class' => 'form-control',
                                 'id' => 'sub_category_name',
                                 'placeholder' => 'Название подкатегории'
                            ]) }}
                        </div>

                        <div class="text-right">
                            {!! Form::button('Подтвердить добавление', [
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
