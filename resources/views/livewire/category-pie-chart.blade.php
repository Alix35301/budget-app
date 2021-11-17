<div class="bg-red-300 mt-4" id="piechart">
    <script type="text/javascript">
       Highcharts.chart('piechart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            exporting: {
                enabled: false
            },
            title: {
                text: 'Product Categories'
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
                name: 'name',
                colorByPoint: true,
                data:  {!! json_encode($pieArray) !!}
            }],
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
