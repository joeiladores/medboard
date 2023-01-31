import './bootstrap';

const editBedModal = new bootstrap.Modal('#editBedModal', {
  keyboard: false
});

function showEditBedModal(bed_id) {
  fetch('{{ url('/admin/showbed/') }}/' + bed_id)
    .then(response => response.json())
    .then(data => {
        document.getElementById('editbed_bednum').value = data.bednum;
        document.getElementById('editbed_room').value = data.room;
        document.getElementById('editbed_room_type').value = data.room_type;
        document.getElementById('editbed_station').value = data.station;
        document.getElementById('editbed_status').value = data.status;
        document.getElementById('editbed_id').value = data.id;
        editBedModal.show();
    })
}
