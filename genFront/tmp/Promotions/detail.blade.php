@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('promotions.script')
@endpush
@push('extends-style')
  @include('promotions.style')
@endpush
