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
                        'url' => route('admin.v1.content-management.rubrics.delete-controller.execute', [
                            'rubric_id' => 1
                        ]),
                        'class' => 'well',
                        'method' => 'POST'
                    ]) !!}

                        <label>Вы собираетесь удалить рубрику:</label>
                        <p>Рубрика 1</p>
                        @if(true)
                            <label>Вместе с ней (будут удалены|будет удалена<!--|будет удален-->):</label>
                            <ul class="list-inline" style="margin-bottom: 20px">
                                @if(true)
                                    <li><a href="{{ route('admin.v1.content-management.rubrics.nested.categories-controller.execute', [
                                        'rubric_id' => 1
                                    ]) }}" class="badge" target="_blank">1 категория</a></li>
                                @endif

                                @if(true)
                                    <li><a href="{{ route('admin.v1.content-management.rubrics.nested.sub-categories-controller.execute', [
                                        'rubric_id' => 1
                                    ]) }}" class="badge" target="_blank">1 подкатегория</a></li>
                                @endif

                                @if(true)
                                    <li><a href="{{ route('admin.v1.content-management.rubrics.nested.articles-controller.execute', [
                                        'rubric_id' => 1
                                    ]) }}" class="badge" target="_blank">1 статья</a></li>
                                @endif

                                @if(true)
                                    <li><a href="{{ route('admin.v1.content-management.rubrics.nested.photos-controller.execute', [
                                        'rubric_id' => 1
                                    ]) }}" class="badge" target="_blank">1 фотография</a></li>
                                @endif

                                 <!--<li><a href="#" class="badge">1 комментарий</a></li>-->
                            </ul>
                        @endif

                        {{ Form::hidden('rubric_id', 1) }}

                        <div class="text-right">
                            {!! Form::button('Подтвердить удаление', [
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
