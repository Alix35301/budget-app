<div class="bg-red-300 mt-4" id="hight-chart">
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

</div>
