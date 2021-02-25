@extends('layout/main')

@section('title', 'Web BPS RI')

@section('container')

{{-- <iframe src="https://www.youtube.com/embed/IrR1Vic4onQ&t=1326s" style="border:none; margin: 0px; "> </iframe> --}}
<object data="https://www.bps.go.id/" width="600" height="400">
    <embed src="https://www.bps.go.id/" width="600" height="400"> </embed>
    Error: Embedded data could not be displayed.
</object>
@endsection