$('#listTeachers').on('change', function () {
    var teacher = $(this).val();
    console.log(teacher);
});

function generateTable(course) {
    $.ajax({
        url: "showTable",
        data: {
            id: course
        },
        dataType: 'json',
        type: "GET"
    }).done(function (response) {
        if (response !== undefined) {
            if (response.status === true) {
                var colGroups = response.groups.lenght;
                response.groups.forEach(function (i, n) {
                    var group = $('<th></th>');
                   group.append(i.name_group);
                   $('#listGroups').append(group);
                   for (row = 0; row < 8; row++){
                        var couple = $('<tr></tr>');
                       for (column = 0; column < 3; column++){
                           couple.append($('<th>#</th>'));
                       }
                       $('#tableSubject').append(couple);
                   }
                });
            } else if (response.status === false || response.status === 'error') {
                alert(response.error);
            } else {
                alert('Ошибка запроса. Обратитесь к администратору.');
            }
        } else {
            alert('Ошибка запроса. Обратитесь к администратору.');
        }
    }).always(function () {

    });
}

function editClass() {

}
