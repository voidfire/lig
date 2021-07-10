@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
    ])
@stop
