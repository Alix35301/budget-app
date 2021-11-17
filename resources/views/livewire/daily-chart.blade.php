<div class="bg-red-300 mt-4" id="dailyExp">
<script type="text/javascript">
    Highcharts.chart('dailyExp', {
        title: {
            text: 'Daily Expenditure'
        },
        exporting: {
                enabled: false
            },
        xAxis: {
            categories: {!! json_encode($dates) !!}
        },
        yAxis: {
            title: {
                text: 'Total Expenditure (MVR)'
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
                name: 'Daily Expenditure',
                data: {!! json_encode($data) !!},
                type: 'line'
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
