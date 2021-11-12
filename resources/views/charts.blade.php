<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Highcharts Example - NiceSnippets.com</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="md:container md:mx-auto p-20">
        <h2 class="text-center"><strong>Laravel 8 Highcharts Example - NiceSnippets.com</strong></h2>
        <div class="bg-red-300 w-80 h-48" id="hight-chart"></div>
    </div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    Highcharts.chart('hight-chart', {
        title: {
            text: 'New User Growth, 2019'
        },
        subtitle: {
            text: 'Source: NiceSnippets.com'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
                name: 'New User',
                data: [80, 50, 300, 12],
                type: 'line'
            }, {
                name: 'New ',
                data: [-1, 29, 90, 100]
            }


        ],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>

</html>
