window.mainData = {};
$(function () {
    $("#tableSubject").on('click', 'td.availableCell', function () {
        // $(this).toggleClass('table-active');
        // $(this).toggleClass('table-success');
        let data = $(this).data();
        if ($(this).hasClass('table-success')) {
            delete window.mainData[data['group']]['subjects'][data['lessonNumber']]; // TODO: how to delete element in object
        } else {
            window.mainData[data['group']]['subjects'][data['lessonNumber']] = 1; // DEFINE globalSubject
        }
        drawTable();
    });
});
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
                window.mainData = response.groups;
                drawTable();
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

function drawTable() {
    let $lg = $('#listGroups');
    let $tableDom = $('#tableSubject');
    $lg.empty();
    $tableDom.empty();
    let colGroups = 1,
        firstColumn = $('<th>#</th>');
    $lg.append(firstColumn);
    $.each(window.mainData, function (key, item) {
        let group = $('<th></th>');
        colGroups++;
        group.append(item['name_group']);
        $lg.append(group);
    });
    for (let lessonNumber = 1; lessonNumber < 8; lessonNumber++) {
        let couple = $('<tr></tr>');
        couple.append($('<th></th>').append(lessonNumber));
        $.each(window.mainData, function (ley, item) {
            let name = 'fill me';
            let className = 'availableCell';
            if (item['subjects'][lessonNumber] == 1) {
                name = 'Ин яз';
                className += ' table-success';
            } else {
                className += ' table-active';
            }

            couple.append($('<td data-lesson-number="' + lessonNumber + '" ' +
                'data-group="' + item['id_group'] + '" ' +
                'class="' + className + '">' + name + '</td>'));
        });
        $tableDom.append(couple);
    }
}