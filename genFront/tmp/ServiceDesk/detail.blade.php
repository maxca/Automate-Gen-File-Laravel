@extends('layout')
@section('title',$title)
@section('content')
 {{dump("detail")}}
 {{dump($data)}}
@endsection
@push('extends-scripts')
  @include('servicedesk.script')
@endpush
@push('extends-style')
  @include('servicedesk.style')
@endpush
