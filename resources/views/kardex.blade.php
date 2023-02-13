<!-- @if(Auth::check() && Auth::user()->usertype == 'admin')
  @extends('layouts.adminlayout', ['title' => 'Admin - Kardex'])
@elseif(Auth::check() && Auth::user()->usertype == 'nurse')
  @extends('layouts.NurseLayout', ['title' => 'Nurse - Kardex'])
@else
  @extends('layouts.app')
@endif -->



@switch(Auth::user()->usertype)
    @case('admin')
        @php 
          $layout = 'layouts.adminlayout;
          $title = 'Admin - Kardex';        
        @endphp
    @break
    @case('nurse')
        @php 
          $layout = 'layouts.user_layout';
          $title = 'Nurse - Kardex';
        @endphp
@endswitch


@extends($layout, ['title' => 'Kardex'])
@section('content')

  <div class="container p-5 m-5">
    <h5>
      Kardex
    </h5>
  </div>

@endsection

