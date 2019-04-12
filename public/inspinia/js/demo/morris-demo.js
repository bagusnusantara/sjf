$(function() {
    // Morris.Line({
    //     element: 'morris-one-line-chart',
    //     data: [{tanggal: data, total: 30}],
    //     parseTime: false,
    //     xkey: 'tanggal',
    //     ykeys: ['total'],
    //     resize: true,
    //     lineWidth:4,
    //     labels: ['Pendapatan'],
    //     lineColors: ['#1ab394'],
    //     pointSize:5,
    // });



    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{ label: "Tambahan", value: 12 },
            { label: "Paket", value: 30 },
            { label: "GrabFood", value: 20 } ],
        resize: true,
        colors: ['#87d6c6', '#54cdb4','#1ab394'],
    });

    Morris.Donut({
        element: 'morris-donut2-chart',
        data: [
            { label: "Dine in", value: 6512 },
            { label: "Take Away", value: 3018 } ],
        resize: true,
        colors: ['#87d6c6', '#54cdb4','#1ab394'],
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data:
            [{ y: '1', a: 0, b: 65 },
            { y: '2', a: 0, b: 40 },
            { y: '3', a: 0, b: 65 },
            { y: '4', a: 0, b: 40 },
            { y: '5', a: 0, b: 65 },
            { y: '6', a: 0, b: 90 },
            { y: '7', a: 0, b: 65 },
            { y: '8', a: 0, b: 40 },
            { y: '9', a: 75, b: 65 },
            { y: '10', a: 50, b: 40 },
            { y: '11', a: 75, b: 65 },
            { y: '12', a: 100, b: 90 },
            { y: '13', a: 75, b: 65 },
            { y: '14', a: 50, b: 40 },
            { y: '15', a: 75, b: 65 },
            { y: '16', a: 50, b: 40 },
            { y: '17', a: 75, b: 65 },
            { y: '18', a: 100, b: 90 },
            { y: '19', a: 75, b: 65 },
            { y: '20', a: 50, b: 40 },
            { y: '21', a: 75, b: 65 },
            { y: '22', a: 0, b: 40 },
            { y: '23', a: 0, b: 65 },
            { y: '24', a: 0, b: 90 } ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Pendapatan', 'Series B'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1ab394', '#cacaca'],
    });

    Morris.Bar({
        element: 'morris-bar2-chart',
        data:
            [{ y: '1', a: 0, b: 65 },
            { y: '2', a: 0, b: 40 },
            { y: '3', a: 0, b: 65 },
            { y: '4', a: 0, b: 40 },
            { y: '5', a: 0, b: 65 },
            { y: '6', a: 0, b: 90 },
            { y: '7', a: 0, b: 65 },
            { y: '8', a: 0, b: 40 },
            { y: '9', a: 75, b: 65 },
            { y: '10', a: 50, b: 40 },
            { y: '11', a: 75, b: 65 },
            { y: '12', a: 100, b: 90 },
            { y: '13', a: 75, b: 65 },
            { y: '14', a: 50, b: 40 },
            { y: '15', a: 75, b: 65 },
            { y: '16', a: 50, b: 40 },
            { y: '17', a: 75, b: 65 },
            { y: '18', a: 100, b: 90 },
            { y: '19', a: 75, b: 65 },
            { y: '20', a: 50, b: 40 },
            { y: '21', a: 75, b: 65 },
            { y: '22', a: 0, b: 40 },
            { y: '23', a: 0, b: 65 },
            { y: '24', a: 0, b: 90 } ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Pendapatan', 'Series B'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1ab394', '#cacaca'],
    });

    Morris.Line({
        element: 'morris-line-chart',
        data: [{ y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75, b: 65 },
            { y: '2008', a: 50, b: 40 },
            { y: '2009', a: 75, b: 65 },
            { y: '2010', a: 50, b: 40 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 100, b: 90 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true,
        lineColors: ['#54cdb4','#1ab394'],
    });

});
