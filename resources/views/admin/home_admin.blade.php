<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/home_admin.css') }}">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap">
        <p>Thanh điều khiển</p>
        <span>/</span>
        <a href="/home">Tổng quan</a>
    </div>

    <div class="row">
        <a href="/admin/info/create" class="column col-add">
            <p class="content">Thêm thông tin</p>
            <i class="fa fa-plus-square col-icon col-icon-add" aria-hidden="true"></i>
        </a>
        <a href="/admin/info" class="column col-view">
            <p class="content">Thông tin cựu sinh viên</p>
            <i class="fa fa-list-alt col-icon col-icon-view" aria-hidden="true"></i>
        </a>
        <a href="/forum" class="column col-forum">
            <p class="content">Diễn đàn</p>
            <i class="fa fa-users col-icon col-icon-forum" aria-hidden="true"></i>
        </a>
        <a href="/file-import-export" class="column col-excel">
            <p class="content">Nhập/Xuất file excel</p>
            <i class="fa fa-file-excel col-icon col-icon-excel" aria-hidden="true"></i>
        </a>
    </div>

    <div class="row row2">
        <a href="/admin/chat" class="column col-chat">
            <p class="content">Chat</p>
            <i class="fa fa-paper-plane col-icon col-icon-chat" aria-hidden="true"></i>
        </a>
        <a href="" class="column col-statis">
            <p class="content">Thống kê</p>
            <i class="fa fa-chart-bar col-icon col-icon-statis" aria-hidden="true"></i>
        </a>
        <a href="/receive-fb" class="column col-feedback">
            <p class="content">Phản hồi</p>
            <i class="fa fa-comments col-icon col-icon-feedback" aria-hidden="true"></i>
        </a>
    </div>

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
    </table>

    <script type="text/javascript">
        var list_col = document.getElementsByClassName("column");
        var list_icon = document.getElementsByClassName("col-icon");

        list_col[0].onmouseenter = function() {
            list_icon[0].style.transform = "scale(1.1)"
        }
        list_col[1].onmouseenter = function() {
            list_icon[1].style.transform = "scale(1.1)"
        }
        list_col[2].onmouseenter = function() {
            list_icon[2].style.transform = "scale(1.1)"
        }
        list_col[3].onmouseenter = function() {
            list_icon[3].style.transform = "scale(1.1)"
        }
        list_col[4].onmouseenter = function() {
            list_icon[4].style.transform = "scale(1.1)"
        }
        list_col[5].onmouseenter = function() {
            list_icon[5].style.transform = "scale(1.1)"
        }
        list_col[6].onmouseenter = function() {
            list_icon[6].style.transform = "scale(1.1)"
        }

        list_col[0].onmouseleave = function() {
            list_icon[0].style.transform = "scale(1)"
        }
        list_col[1].onmouseleave = function() {
            list_icon[1].style.transform = "scale(1)"
        }
        list_col[2].onmouseleave = function() {
            list_icon[2].style.transform = "scale(1)"
        }
        list_col[3].onmouseleave = function() {
            list_icon[3].style.transform = "scale(1)"
        }
        list_col[4].onmouseleave = function() {
            list_icon[4].style.transform = "scale(1)"
        }
        list_col[5].onmouseleave = function() {
            list_icon[5].style.transform = "scale(1)"
        }
        list_col[6].onmouseleave = function() {
            list_icon[6].style.transform = "scale(1)"
        }

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
                title: 'Thống kê số lượng xếp hạng sinh viên',
                width: 550,
                height: 600
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
                title: "Thông kê số lượng xếp hạng sinh viên",
                width: 650,
                height: 600,
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

    @endsection
</body>
</html>