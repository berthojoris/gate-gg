$(document).ready(function() {

    if ($("#dt_user").length) {
        $('#dt_user').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/user',
            order: [
                [0, "desc"]
            ],
            language: {
                processing: '<div class="spinner"></div>'
            },
            columns: [{
                    data: 'id',
                    visible: false,
                    searchable: false
                },
                {
                    data: 'name',
                },
                {
                    data: 'gender',
                    searchable: false
                },
                {
                    data: 'address',
                    searchable: false,
                    render: function(data, type, row) {
                        if (data == '') {
                            return "-"
                        }
                        return data
                    }
                },
                {
                    data: 'phone',
                    searchable: false,
                    render: function(data, type, row) {
                        if (data == '') {
                            return "-"
                        }
                        return data
                    }
                },
                {
                    data: 'email'
                },
                {
                    data: 'last_login',
                    searchable: false
                }
            ]
        });
    }

    if ($("#dt_application").length) {
        $('#dt_application').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/application',
            order: [
                [0, "desc"]
            ],
            language: {
                processing: '<div class="spinner"></div>'
            },
            columns: [{
                    data: 'id',
                    visible: false,
                    searchable: false
                },
                {
                    data: 'name',
                    render: function(data, type, row) {
                        if (data == '') {
                            return "-"
                        }
                        return data
                    }
                },
                {
                    data: 'website'
                },
                {
                    data: 'status',
                    render: function(data, type, row) {
                        if (data == '') {
                            return "-"
                        }
                        return data
                    }
                },
                {
                    data: 'client_id',
                    searchable: false
                }
            ]
        });
    }

    $('div.dataTables_filter input').addClass('form-control');
    $('div.dataTables_length select').addClass('form-control');
});
