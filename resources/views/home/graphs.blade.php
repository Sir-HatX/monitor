@extends('layouts.app')
@section('content')
 <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart','line']});  
      </script>
<div class="container" style="min-height:90vh;padding-top:5px;">
    <div class="content-grid">
        <div class="title">
            <h4 style="background-color:aqua;">MARITIME INDICATORS</h4>
        </div>
        <div class="card-area">
            <div class="card-holder">
                <div class="info">
                    <h4>This is the heading</h4>
                    <p>Some example text. Some example text Some example text. Some example text</p>
                    <div class="line"></div>
                    <p>Some example text. Some example text
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text.
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text. Some example text
                        Some example text.
                        Some example textSome example text. </p>
                </div>
                <div class="space"></div>
                <div class="circle">
                <div class="time">
                        <label>17:56</label>
                    </div>
                    <div class="hrs" >
                    <p >hrs</p>
                    </div>
                   
                </div>
            </div>
            <div class="card-holder">
                <div class="info">
                <h4>This is the heading</h4>
                    <p>Some example text. Some example text Some example text. Some example text</p>
                    <div class="line"></div>
                    <p>Some example text. Some example textSome example text. Some example textSome example text. Some example textSome example text. Some example textSome example text. Some example textSome example text. Some example textSome example text. Some example textSome example text. Some example textSome example text. </p>
                </div>
                <div class="space"></div>
                <div class="circle">
                    <div class="time">
                        <label>17:56</label>
                    </div>
                    <p class="hrs">hrs</p>
                </div>
            </div>
        </div>
        
        <div class="footer">
        
        </div>
        
    </div>
 
</div>
 <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', 'Tokyo');
            data.addColumn('number', 'New York');
            data.addColumn('number', 'Berlin');
            data.addColumn('number', 'London');
            data.addRows([
               ['Jan',  7.0, -0.2, -0.9, 3.9],
               ['Feb',  6.9, 0.8, 0.6, 4.2],
               ['Mar',  9.5,  5.7, 3.5, 5.7],
               ['Apr',  14.5, 11.3, 8.4, 8.5],
               ['May',  18.2, 17.0, 13.5, 11.9],
               ['Jun',  21.5, 22.0, 17.0, 15.2],
               
               ['Jul',  25.2, 24.8, 18.6, 17.0],
               ['Aug',  26.5, 24.1, 17.9, 16.6],
               ['Sep',  23.3, 20.1, 14.3, 14.2],
               ['Oct',  18.3, 14.1, 9.0, 10.3],
               ['Nov',  13.9,  8.6, 3.9, 6.6],
               ['Dec',  9.6,  2.5,  1.0, 4.8]
            ]);
               
            // Set chart options
            var options = {'title' : 'Average Temperatures of Cities',
               hAxis: {
                  title: 'Month'
               },
               vAxis: {
                  title: 'Temperature'
               },   
               'width':550,
               'height':400	  
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.LineChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script> 
@endsection()