"use strict";
load_data();

function load_data(status = '') {
    var table = $('#maintable').DataTable({
        processing : true,
        serverSide : true,
        ajax : {
            url : $('#maintable').attr('data-url'),
            data : {status : status}
        },
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'note', name: 'note' },
            { data: 'action', name: 'action' },
        ],
        "ordering" : false
    });
}

