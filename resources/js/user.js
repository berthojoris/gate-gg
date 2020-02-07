$(document).ready(function() {
    $('#user').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://gudanggaram.test/data/user',
        columns: [
            { data: 'email', name: 'email' }
        ]
    });
});