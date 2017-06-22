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
                        'url' => route('admin.v1.content-management.rubrics.edit-controller.execute', [
                            'rubric_id' => 1
                        ]),
                        'class' => 'well',
                        'method' => 'POST'
                    ]) !!}

                        <div class="form-group">
                            {{ Form::label('rubric_name', 'Введите название:', [
                                'class' => 'control-label'
                            ]) }}
                            {{ Form::text('rubric_name', 'Рубрика 1', [
                                'id' => 'rubric_name',
                                'class' => 'form-control',
                                'placeholder' => 'Новое название рубрики'
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
