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
                        'url' => route('admin.v1.content-management.articles.delete-controller.execute', [
                            'article_id' => 1
                        ]),
                        'class' => 'well',
                        'method' => 'POST'
                    ]) !!}

                        <label>Вы собираетесь удалить статью:</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis, cum dolore dolorum error facilis fugiat fugit mollitia nemo quia reiciendis sapiente sunt temporibus ullam ut veritatis voluptate voluptatibus. Assumenda.</p>
                        @if(true)
                            <label>Вместе с ней (будут удалены|будет удалена<!--|будет удален-->):</label>
                            <ul class="list-inline">
                                <li><a href="{{ route('admin.v1.content-management.articles.nested.photos-controller.execute', [
                                    'article_id' => 1
                                ]) }}" class="badge" target="_blank">1 фотография</a></li>

                                <!--<li><a href="#" class="badge">1 комментарий</a></li>-->
                            </ul>
                        @endif

                        {{ Form::hidden('article_id', 1) }}

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
