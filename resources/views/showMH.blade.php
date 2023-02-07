@include('profile.partials.header', ['title' => 'MedBoard - Patients'])


<div class="container-fluid px-4">

    <a href="{{ route('patientView') }}" class="btn btn-md btn-primary mb-3">⇦ Go back</a>
    <h2 class="mt-2 second-text text-center">Medical History</h2>

    <div class="row g-3 my-2">
        <div class="col-md-12">
            <div class="row card-bg p-4 border shadow rounded-5 second-text">
                <div class="col-12">
                    <p class="fw-bold">Patients Fullname :
                        <span class="fs-3">
                            {{ $medhistoryinfos->lastname }},
                            {{ $medhistoryinfos->firstname }}
                            {{ $medhistoryinfos->midname }}
                        </span>
                    </p>
                </div>
                @foreach($medhistoryinfos->medhistory as $medhistoryinfo)
                <div class="col-6">
                    <p class="fw-bold">
                        Conditions : {{ $medhistoryinfo->conditions }}
                        Symptoms : {{ $medhistoryinfo->symptoms }}
                        Medications : {{ $medhistoryinfo->medications }}
                        Allergies : {{ $medhistoryinfo->allergies }}
                        Bad habits : {{ $medhistoryinfo->bad_habit }}
                    </p>
                </div>
                <div class="col-6">

                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>



@include('profile.partials.footer')