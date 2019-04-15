function pendapatanPerTanggal (start, end, _token) {
    var tgl = [];
    var data = [];

    $.ajax({
        url: '/getdatapendapatan/tanggal',
        type: 'post',
        data: {start: start.format('YYYY-MM-DD'), end: end.format('YYYY-MM-DD'), _token: _token},
        success: function (result) {
            $.each(result, function (index, element) {
                tgl.push(element.tanggal);
                data.push(element.total);
            });

            var lineData = {
                labels: tgl,
                datasets: [
                    {
                        label: 'Pendapatan/Tanggal',
                        backgroundColor: 'rgba(26,179,148,0.5)',
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: data
                    }
                ]
            };

            var lineOptions = {responsive: true};
            var drawLineGraph = document.getElementById('lineChartPerTanggal').getContext('2d');
            new Chart(drawLineGraph, {type: 'line', data: lineData, options: lineOptions});
        }
    });
}
