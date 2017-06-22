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
                        'url' => route('admin.v1.content-management.photos.delete-controller.execute', [
                            'photo_id' => 1
                        ]),
                        'class' => 'well',
                        'method' => 'POST'
                    ]) !!}

                        <label>Вы собираетесь удалить фотографию:</label>
                        <p><img src="" alt="" width="320" height="240"></p>

                        {{ Form::hidden('photo_id', 1) }}

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
