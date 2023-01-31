<h3>Are you sure you want to delete the following admission?</h3>
<table>
    <thead>
        <tr>
            <th>Admitted</th>
            <th>Complain</th>
            <th>Impression Diagnosis</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Activities</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $admission->admitted }}</td>
            <td>{{ $admission->complain }}</td>
            <td>{{ $admission->impression_diagnosis }}</td>
            <td>{{ $admission->age }}</td>
            <td>{{ $admission->weight }}</td>
            <td>{{ $admission->activities }}</td>
        </tr>
    </tbody>
</table>

<form action="{{ route('admissions.destroy', $admission->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Yes, delete admission</button>
    <a href="{{ route('admissions.index') }}">Cancel</a>
</form>
