<div id="wordcloud">
    <script type="text/javascript">
        const text =
            {!! json_encode($cloudData) !!},
            lines = text.split(/[,\. ]+/g),
  
            data = lines.reduce((arr, word) => {
                let obj = Highcharts.find(arr, obj => obj.name === word);
                if (obj) {
                    obj.weight += 1;
                } else {
                    obj = {
                        name: word,
                        weight: 1
                    };
                    arr.push(obj);
                }
                return arr;
            }, []);

        Highcharts.chart('wordcloud', {
            accessibility: {
                screenReaderSection: {
                    beforeChartFormat: '<h5>{chartTitle}</h5>' +
                        '<div>{chartSubtitle}</div>' +
                        '<div>{chartLongdesc}</div>' +
                        '<div>{viewTableButton}</div>'
                }
            },
            credits:{
                enabled:false 
            },
            exporting: {
                enabled: false
            },
            series: [{
                type: 'wordcloud',
                data,
                name: 'Occurrences'
            }],
            title: {
                text: 'Wordcloud of Lorem Ipsum'
            }
        });

    </script>

</div>
