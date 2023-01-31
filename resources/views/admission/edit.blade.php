<form action="{{ route('admissions.update', $admission->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="date_time_admitted">Date Time Admitted:</label>
        <input type="text" name="date_time_admitted" id="date_time_admitted" class="form-control"
            value="{{ $admission->date_time_admitted }}">
    </div>
    <div class="form-group">
        <label for="complain">Complain:</label>
        <input type="text" name="complain" id="complain" class="form-control" value="{{ $admission->complain }}">
    </div>
    <div class="form-group">
        <label for="impression_diagnosis">Impression Diagnosis:</label>
        <input type="text" name="impression_diagnosis" id="impression_diagnosis" class="form-control"
            value="{{ $admission->impression_diagnosis }}">
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" class="form-control" value="{{ $admission->age }}">
    </div>
    <div class="form-group">
        <label for="weight">Weight:</label>
        <input type="number" step="0.01" name="weight" id="weight" class="form-control"
            value="{{ $admission->weight }}">
    </div>
    <div class="form-group">
        <label for="activities">Activities:</label>
        <input type="text" name="activities" id="activities" class="form-control" value="{{ $admission->activities }}">
    </div>
    <div class="form-group">
        <label for="diet">Diet:</label>
        <input type="text" name="diet" id="diet" class="form-control" value="{{ $admission->diet }}">
    </div>
    <div class="form-group">
        <label for="tubes">Tubes:</label>
        <input type="text" name="tubes" id="tubes" class="form-control" value="{{ $admission->tubes }}">
    </div>
    <div class="form-group">
        <label for="special_info">Special Info:</label>
        <input type="text" name="special_info" id="special_info" class="form-control"
            value="{{ $admission->special_info }}">
    </div>
    <div class="form-group">
        <label for="date_time_discharge">Date Time Discharge:</label>
        <input type="date" name="date_time_discharge" id="date_time_discharge" class="form-control"
            value="{{ $admission->date_time_discharge }}">
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $admission->status }}">
        </div>
    </div>