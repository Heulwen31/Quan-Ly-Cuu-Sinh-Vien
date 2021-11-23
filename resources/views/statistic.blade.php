<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/home_admin.css') }}">
</head>

<body>
    @extends('home_page')

    @section('homepage')



    <!--Table and divs that hold the pie charts-->
    <table class="columns">
        <tr>
            <td>
                <div id="Sarah_chart_div" style="border: 1px solid #ccc"></div>
            </td>
            <td>
                <div id="columnchart_values" style="border: 1px solid #ccc"></div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="bieu_do_that_nghiep_1" style="border: 1px solid #ccc"></div>
            </td>
            <td>
                <div id="bieu_do_that_nghiep_2" style="border: 1px solid #ccc"></div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="bieu_do_que_quan_1" style="border: 1px solid #ccc"></div>
            </td>
            <td>
                <div id="bieu_do_que_quan_2" style="border: 1px solid #ccc"></div>
            </td>
        </tr>

    </table>
    <script type="text/javascript">
        /**
         * bieu do so luong sinh vien xep hang tuong ung
         */
        // Load Charts and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart']
        });
        // Draw the pie chart for Sarah's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawQueQuan1);

        // Draw the pie chart for the Anthony's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawQueQuan2);

        // Draw the pie chart for Sarah's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawThatNghiep1);

        // Draw the pie chart for the Anthony's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawThatNghiep2);

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
                title: 'Thông kê số lượng xếp hạng sinh viên',
                width: 600,
                height: 400
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
                ["Element", "Tỉ trọng", {
                    role: "style"
                }],
                ["Xuất sắc", excellent, "#b87333"],
                ["Giỏi", good, "silver"],
                ["Khá", average, "gold"],
                ["Trung bình", below_average, "color: #e5e4e2"]
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
                title: "Thông kê số lượng xếp hạng sinh viên",
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




        /**
         * bieu do that nghiep
         */


        // Callback that draws the pie chart for Sarah's pizza.
        function drawThatNghiep1() {
            // Get the data from database
            var that_nghiep = <?php echo json_encode($that_nghiep); ?>;
            var dang_lam_viec = <?php echo json_encode($dang_lam_viec); ?>;

            // Create the data table for Sarah's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Thất nghiệp', that_nghiep],
                ['Đang làm việc', dang_lam_viec],
            ]);

            // Set options for Sarah's pie chart.
            var options = {
                title: 'Sinh viên thất nghiệp - đang làm việc',
                width: 600,
                height: 400
            };

            // Instantiate and draw the chart for Sarah's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('bieu_do_that_nghiep_1'));
            chart.draw(data, options);
        }

        // Callback that draws the pie chart for Anthony's pizza.
        function drawThatNghiep2() {

            var that_nghiep = <?php echo json_encode($that_nghiep); ?>;
            var dang_lam_viec = <?php echo json_encode($dang_lam_viec); ?>;


            var data = google.visualization.arrayToDataTable([
                ["Element", "Tỉ trọng", {
                    role: "style"
                }],
                ["Thất nghiệp", that_nghiep, "#b87333"],
                ["Đang làm việc", dang_lam_viec, "silver"],
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
                title: "Sinh viên thất nghiệp - đang làm việc",
                width: 600,
                height: 400,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("bieu_do_that_nghiep_2"));
            chart.draw(view, options);
        }




        /**
         * bieu do que quan cu sinh viên
         */

        function drawQueQuan1() {
            // Get the data from database
            var hanam = <?php echo json_encode($hanam); ?>;
            var hanoi = <?php echo json_encode($hanoi); ?>;

            // Create the data table for Sarah's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Hà Nam', hanam],
                ['Hà Nội', hanoi],
            ]);

            // Set options for Sarah's pie chart.
            var options = {
                title: 'Sinh viên thất nghiệp - đang làm việc',
                width: 600,
                height: 400
            };

            // Instantiate and draw the chart for Sarah's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('bieu_do_que_quan_1'));
            chart.draw(data, options);
        }

        // Callback that draws the pie chart for Anthony's pizza.
        function drawQueQuan2() {

            var hanam = <?php echo json_encode($hanam); ?>;
            var hanoi = <?php echo json_encode($hanoi); ?>;


            var data = google.visualization.arrayToDataTable([
                ["Element", "Tỉ trọng", {
                    role: "style"
                }],
                ["Hà Nam", hanam, "#b87333"],
                ["Hà Nội", hanoi, "silver"],
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
                title: "Sinh viên thất nghiệp - đang làm việc",
                width: 600,
                height: 400,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("bieu_do_que_quan_2"));
            chart.draw(view, options);
        }
    </script>
    @endsection
</body>

</html>