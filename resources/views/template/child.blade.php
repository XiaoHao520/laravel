@extends("template.master")
继承master模板
@section("top")
    @parent
   <p>Child</p>
    @endsection
 @section('content')
@include("template.inc")
     @endsection

