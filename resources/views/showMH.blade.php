@include('profile.partials.header', ['title' => 'MedBoard - Patients'])

<p>{{ $medhistoryinfos->lastname }}</p>

@foreach($medhistoryinfos->medhistory as $medhistoryinfo)
<p>{{ $medhistoryinfo->conditions }}</p>
@endforeach

@include('profile.partials.footer')