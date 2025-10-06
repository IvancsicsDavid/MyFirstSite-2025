@extends('pastellayout')


@section('tartalom')
<div>
    <ul>
    <?php
        foreach ($bevasarlolista as $elem) { ?>
        <li><?php echo $elem ?></li>

        <?php }?>

    </ul>

    <br>
    <hr>
    <br>

    <ol>
    @foreach ($bevasarlolista as $elem)
        <li>{{$elem}}</li>
    @endforeach
    </ol>
</div>
@endsection
