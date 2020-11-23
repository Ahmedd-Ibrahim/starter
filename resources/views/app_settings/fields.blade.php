<!-- About Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_desc', 'About Desc:') !!}
    {!! Form::textarea('about_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Term Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('term_desc', 'Term Desc:') !!}
    {!! Form::textarea('term_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Condation Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('condation_desc', 'Condation Desc:') !!}
    {!! Form::textarea('condation_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- App Share Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_share_link', 'App Share Link:') !!}
    {!! Form::text('app_share_link', null, ['class' => 'form-control']) !!}
</div>

<!-- App Review Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_review_link', 'App Review Link:') !!}
    {!! Form::text('app_review_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('appSettings.index') }}" class="btn btn-default">Cancel</a>
</div>
