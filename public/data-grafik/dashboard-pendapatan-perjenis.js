function pendapatanPerJenis (start, end, _token) {
    var dinein = 0;
    var takeaway = 0;

    $('#donutChartPerTipe').empty();

    $.ajax({
        url: '/getdatapendapatan/tipeservis',
        type: 'post',
        data: {start: start.format('YYYY-MM-DD'), end: end.format('YYYY-MM-DD'), _token: _token},
        success: function (result) {
            if (result.length !== 0) {
                $.each(result, function (index, element) {
                    element.servis === 'Dine In' ? dinein = element.total : takeaway = element.total;
                });

                initMorrisDonut('Dine In', 'Take Away', dinein, takeaway);

            } else {
                initMorrisDonut('no data', 'no data', 100, 100);
            }
        }
    });
}

function initMorrisDonut(dineInLabel, takeAwayLabel, dinein, takeaway) {
    Morris.Donut({
        element: 'donutChartPerTipe',
        data: [
            {label: dineInLabel, value: dinein},
            {label: takeAwayLabel, value: takeaway}
        ],
        resize: true,
        colors: ['#87d6c6', '#54cdb4','#1ab394'],
    });
}
