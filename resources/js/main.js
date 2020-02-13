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
                processing: '<div class="circle-inner"></div>'
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
                    render: function(data, type, row) {
                        return (data) ? moment(data, "YYYYMMDD").fromNow() : '-'
                    },
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
                processing: '<div class="circle-inner"></div>'
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
                processing: '<div class="circle-inner"></div>'
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
                },
                {
                    data: 'id',
                    render: function(data, type, row) {
                        return '<a class="btn btn-sm btn-success" href="' + baseURL + '/community/' + data + '/' + slugify(row.user.name, { lower: true, }) + '/userlist">View</a>'
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
                processing: '<div class="circle-inner"></div>'
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
                },
                {
                    data: 'user_id',
                    render: function(data, type, row) {
                        return '<a class="btn btn-sm btn-success" href="' + baseURL + '/point/' + data + '/' + slugify(row.name, { lower: true, }) + '/history">View</a>'
                    }
                }
            ],
            initComplete: function(settings, json) {

            }
        });
    }

    if ($("#dt_point_category").length) {
        $('#dt_point_category').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/pointcategory',
            order: [
                [7, "desc"]
            ],
            language: {
                processing: '<div class="circle-inner"></div>'
            },
            columns: [{
                    data: 'id',
                    visible: false,
                    searchable: false,
                    name: 'ggid_pointcategory.id'
                },
                {
                    data: 'status',
                    name: 'ggid_pointcategory.status',
                    render: function(data, type, row) {
                        if (data == "Published") {
                            return "<span class='badge badge-success'>Published</span>";
                        } else {
                            return "<span class='badge badge-danger'>" + data + "</span>";
                        }
                    }
                },
                {
                    data: 'amount',
                    searchable: false,
                    render: function(data, type, row) {
                        return numeral(data).format('0,0');
                    },
                },
                {
                    data: 'name',
                    name: 'ggid_pointcategory.name'
                },
                {
                    data: 'app_name',
                    name: 'ggid_application.name'
                },
                {
                    data: 'action_performed'
                },
                {
                    data: 'rule_name',
                    name: 'ggid_pointcategorytimerule.name',
                    render: function(data, type, row) {
                        return "<span class='badge badge-info'>" + data + "</span>";
                    }
                },
                {
                    data: 'datetime_added',
                    render: function(data, type, row) {
                        return (data) ? moment(data, "YYYYMMDD").fromNow() : '-'
                    },
                    searchable: false,
                }
            ],
            initComplete: function(settings, json) {

            }
        });
    }

    if ($("#dt_qrcode").length) {
        $('#dt_qrcode').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/qrcode',
            order: [
                [7, "desc"]
            ],
            language: {
                processing: '<div class="circle-inner"></div>'
            },
            columns: [{
                    data: 'id',
                    visible: false,
                    searchable: false,
                    name: 'ggid_qrcode.id'
                },
                {
                    data: 'event_name'
                },
                {
                    data: 'message_title'
                },
                {
                    data: 'start_date',
                    searchable: false
                },
                {
                    data: 'end_date',
                    searchable: false
                },
                {
                    data: 'point',
                    searchable: false,
                    render: function(data, type, row) {
                        return numeral(data).format('0,0');
                    },
                    searchable: false
                },
                {
                    data: 'app_name',
                    name: 'ggid_application.name',
                    render: function(data, type, row) {
                        return "<span class='badge badge-info'>" + data + "</span>";
                    }
                },
                {
                    data: 'username',
                    name: 'ggid_myuser.name'
                },
                {
                    data: 'datetime_created',
                    render: function(data, type, row) {
                        return (data) ? moment(data, "YYYYMMDD").fromNow() : '-'
                    },
                    searchable: false
                }
            ],
            initComplete: function(settings, json) {

            }
        });
    }

    if ($("#dt_qrcode_usage").length) {
        $('#dt_qrcode_usage').DataTable({
            processing: true,
            serverSide: true,
            ajax: baseURL + '/data/qrcode/usage',
            order: [
                [3, "desc"]
            ],
            language: {
                processing: '<div class="circle-inner"></div>'
            },
            columns: [{
                    data: 'id',
                    visible: false,
                    searchable: false,
                    name: 'ggid_qrcodeuserrelation.id'
                },
                {
                    data: 'username',
                    name: 'ggid_myuser.name'
                },
                {
                    data: 'event_name',
                    name: 'ggid_qrcode.event_name'
                },
                {
                    data: 'datetime_created',
                    render: function(data, type, row) {
                        return (data) ? moment(data, "YYYYMMDD").fromNow() : '-'
                    },
                    searchable: false
                }
            ],
            initComplete: function(settings, json) {

            }
        });
    }

    $('div.dataTables_filter input').addClass('form-control');
    $('div.dataTables_length select').addClass('form-control');
});