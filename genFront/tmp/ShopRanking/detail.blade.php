@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('shopranking.script')
@endpush
@push('extends-style')
  @include('shopranking.style')
@endpush
