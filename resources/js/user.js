$(document).ready(function() {
    $('#user').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseURL + '/data/user',
        language: {
            processing: '<div class="spinner"></div>'
        },
        columns: [{
                data: 'id',
                name: 'id',
                visible: false
            },
            { data: 'name', name: 'name' },
            { data: 'gender', name: 'gender' },
            { data: 'address', name: 'address' },
            { data: 'phone', name: 'phone' },
            { data: 'email', name: 'email' },
            { data: 'last_login', name: 'last_login' }
        ]
    });
    $('div.dataTables_filter input').addClass('form-control');
    $('div.dataTables_length select').addClass('form-control');
});
