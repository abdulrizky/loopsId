@include('layouts.header', ['title' => 'FullStack Developer'])
<x-alert status="{{$data['status']}}" />
@foreach ($data['user'] as $key => $value)
    <x-card name="{{$value['name']}}" email="{{$value['email']}}" />
@endforeach
@include('layouts.footer', ['title' => 'FullStack Developer'])