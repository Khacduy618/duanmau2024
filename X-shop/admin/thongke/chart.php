<h3 class="alert alert-success">BIỂU ĐỒ THỐNG KÊ</h3>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Loại sản phẩm', 'Số lượng'],
          <?php
            foreach ($items as $item) {
                echo "['".$item['TenLSP']."', ".$item['SoLuong']."],";
            }
          ?>
        ]);

        var options = {
          title: 'THỐNG KÊ SẢN PHẨM THEO LOẠI SẢN PHẨM',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>