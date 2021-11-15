<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
        <tr>
            <td>
                <div id="Sarah_chart_div" style="border: 1px solid #ccc"></div>
            </td>
            <td>
                <div id="Anthony_chart_div" style="border: 1px solid #ccc"></div>
            </td>
            <td>
                <div id="columnchart_values" style="border: 1px solid #ccc"></div>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        // Load Charts and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Draw the pie chart for Sarah's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawSarahChart);

        // Draw the pie chart for the Anthony's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawAnthonyChart);

        // Callback that draws the pie chart for Sarah's pizza.
        function drawSarahChart() {
            // Get the data from database
            var below_average = <?php echo json_encode($below_average); ?>;
            var average = <?php echo json_encode($average); ?>;
            var good = <?php echo json_encode($good); ?>;
            var excellent = <?php echo json_encode($excellent) ?>;

            // Create the data table for Sarah's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Trung bình', below_average],
                ['Khá', average],
                ['Giỏi', good],
                ['Xuất sắc', excellent],
            ]);

            // Set options for Sarah's pie chart.
            var options = {
                title: 'How Much Pizza Sarah Ate Last Night',
                width: 400,
                height: 300
            };

            // Instantiate and draw the chart for Sarah's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
            chart.draw(data, options);
        }

        // Callback that draws the pie chart for Anthony's pizza.
        function drawAnthonyChart() {

            var below_average = <?php echo json_encode($below_average); ?>;
            var average = <?php echo json_encode($average); ?>;
            var good = <?php echo json_encode($good); ?>;
            var excellent = <?php echo json_encode($excellent) ?>;


            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", {
                    role: "style"
                }],
                ["Excellent", excellent, "#b87333"],
                ["Good", good, "silver"],
                ["Average", average, "gold"],
                ["Below Average", below_average, "color: #e5e4e2"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "Density of Precious Metals, in g/cm^3",
                width: 600,
                height: 400,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>
</body>

</html>