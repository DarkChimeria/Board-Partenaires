$('#example1').Tabledit({
    url: 'includes/controle/editable.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
    }
});