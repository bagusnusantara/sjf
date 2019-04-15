function pendapatanPerJam (start, end, _token) {
    var jam = ['00', '01', '02', '03', '04', '05', '06',
                '07', '08', '09', '10', '11', '12', '13',
                '14', '15', '16', '17', '18', '19', '20',
                '21', '22', '23'];
    var data = [0,0,0,0,0,0,
                0,0,0,0,0,0,
                0,0,0,0,0,0,
                0,0,0,0,0,0,];

    $.ajax({
        url: '/getdatapendapatan/jam',
        type: 'post',
        data: {start: start.format('YYYY-MM-DD'), end: end.format('YYYY-MM-DD'), _token: _token},
        success: function (result) {
            $.each(result, function (index, element) {
                var i;
                var stringTime = setStringTime(element.time);
                for (i = 0; i < jam.length; i++) {
                    if (jam[i] === stringTime) {
                        data[i] = element.total;
                    }
                }
            });

            var barData = {
                labels: jam,
                datasets: [
                    {
                        label: 'Pendapatan/Jam',
                        backgroundColor: 'rgba(26,179,148,0.5)',
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: data
                    }
                ]
            };

            var barOptions = {responsive: true};
            var drawBarGraph = document.getElementById('barChartPerJam').getContext('2d');
            new Chart(drawBarGraph, {type: 'bar', data: barData, options: barOptions});
        }
    });
}

function setStringTime(n){
    return n > 9 ? "" + n: "0" + n;
}
