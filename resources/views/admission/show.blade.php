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
    <tfooter>
        <tr>
            <th>Admitted</th>
            <th>Complain</th>
            <th>Impression Diagnosis</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Activities</th>
        </tr>
        </footer>
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