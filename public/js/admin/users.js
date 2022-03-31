$(function() {
    populateUsers();
});

function populateUsers() {

    $('#tbl-users').DataTable({
        'searching': false,
        'bLengthChange': false,
        'bSort': false,
        'language': {
            'emptyTable': 'No record found'
        }
    });
}