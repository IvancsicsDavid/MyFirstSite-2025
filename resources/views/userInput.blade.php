@extends('pastellayout')


@section('tartalom')
<div>
    <p>Ezt adta meg a felhasználó: {{$input}}</p>
    <p>Vezetéknév: {{$vnev}}</p>
    <p>Keresztnév: {{$knev}}</p>
</div>
@endsection
