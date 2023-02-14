@include('profile.partials.header', ['title' => 'MedBoard - Patients'])


<div class="container-fluid px-4">

    <a href="{{ route('patientView') }}" class="btn btn-md btn-primary px-4 fw-bold mb-3 mt-5">⇦ Go back</a>
    <h2 class="second-text text-center">Medical History</h2>

    <div class="row g-3 my-2 d-flex justify-content-center mb-3">
        <div class="col-md-7">
            <div class="row card card-bg p-4 border shadow rounded-5 second-text">
                <div class="col-12">
                    <p class="fw-bold">Patients Full Name :
                        <span class="fs-3 ms-2">
                            {{ $medhistoryinfos->lastname }},
                            {{ $medhistoryinfos->firstname }}
                            {{ $medhistoryinfos->midname }}
                        </span>
                    </p>
                    <hr>
                </div>
                @foreach($medhistoryinfos->medhistory as $medhistoryinfo)
                <div class="col-12">
                    <p class="fw-bold">Last update: <strong class="ms-3">{{ $medhistoryinfo->created_at }}</strong></p>
                    <p class="fw-bold">
                        Conditions : <strong class="fs-4 ms-3"> {{ $medhistoryinfo->conditions }} </strong><br>
                        Symptoms : <strong class="fs-4 ms-3"> {{ $medhistoryinfo->symptoms }} </strong><br>
                        Medications : <strong class="fs-4 ms-3"> {{ $medhistoryinfo->medications }} </strong><br>
                        Allergies : <strong class="fs-4 ms-3"> {{ $medhistoryinfo->allergies }} </strong><br>
                        Bad habits : <strong class="fs-4 ms-3"> {{ $medhistoryinfo->bad_habit }} </strong></p>
                        <hr>
                </div>

                @endforeach
            </div>
        </div>

    </div>
</div>



@include('profile.partials.footer')