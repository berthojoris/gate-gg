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

    if ($("#dt_community").length) {
        $('#dt_community').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/community',
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
                    data: 'application.name',
                    render: function(data, type, row) {
                        return data.toUpperCase()
                    }
                },
                {
                    data: 'user.name',
                    render: function(data, type, row) {
                        return data.toUpperCase()
                    }
                }
            ]
        });
    }

    if ($("#dt_point").length) {
        $('#dt_point').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/point',
            order: [
                [0, "desc"]
            ],
            language: {
                processing: '<div class="spinner"></div>'
            },
            columns: [{
                    data: 'user_id',
                    searchable: false
                },
                {
                    data: 'total_point',
                    render: function(data, type, row) {
                        return numeral(data).format('0,0');
                    },
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'ggid_myuser.name'
                },
                {
                    data: 'email',
                    name: 'ggid_myuser.email'
                }
            ]
        });
    }

    $('div.dataTables_filter input').addClass('form-control');
    $('div.dataTables_length select').addClass('form-control');
});
