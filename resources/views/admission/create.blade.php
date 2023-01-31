<h3>Enter the admission details:</h3>
<form action="{{ route('admissions.store') }}" method="post">
    @csrf
    <label for="date_time_admitted">Admitted:</label>
    <input type="text" id="date_time_admitted" name="date_time_admitted" required>
    <label for="complain">Complain:</label>
    <input type="text" id="complain" name="complain" required>

    <label for="impression_diagnosis">Impression Diagnosis:</label>
    <input type="text" id="impression_diagnosis" name="impression_diagnosis" required>

    <label for="age">Age:</label>
    <input type="text" id="age" name="age" required>

    <label for="weight">Weight:</label>
    <input type="text" id="weight" name="weight" required>

    <label for="activities">Activities:</label>
    <input type="text" id="activities" name="activities" required>

    <button type="submit">Submit</button>
    <a href="{{ route('admissions.index') }}">Cancel</a>

    </form>