<div class="graphBox">
    <div class="box">
        <canvas id="polarAreaChart"></canvas>
    </div>
    <div class="box">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade show">
                <div class="text">Doanh thu ngày</div> 
                <canvas id="lineDay"></canvas>
            </div>

            <div class="mySlides fade show">
                <div class="text">Doanh thu tháng</div> 
                <canvas id="barMonth"></canvas>
            </div>
            
            <div class="mySlides fade show">
                <div class="text">Doanh thu năm</div> 
                <canvas id="scatterYear"></canvas>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
  
            
        
        
    </div>
</div>

<script>
    const lineDay = document.getElementById('lineDay');
    const barMonth = document.getElementById('barMonth');
    const scatterYear = document.getElementById('scatterYear');
    const polar = document.getElementById('polarAreaChart');
    
    var myChart = new Chart(lineDay, {
        type: 'line',
        data: {
            labels: [<?php
                        echo implode(", ", $days);
                    ?>],
            datasets: [{
                label: 'Doanh thu',
                data: [<?php
                        foreach ($doanhthu_ngay as $day => $dailyRevenue) {
                            echo "" . $dailyRevenue . ",";
                        }
                        ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
            }]
        },
        options: {
            scales: {
                responsive: true,
            }
        }
    });
    var myChart = new Chart(barMonth, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Doanh thu',
                data: [<?php
                        foreach ($annual_revenue as $month => $revenue) {
                            echo "" . $revenue . ",";
                        }
                        ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
            }]
        },
        options: {
            scales: {
                responsive: true,
            }
        }
    });

    var myChart = new Chart(scatterYear, {
        data: {
        datasets: [{
            type: 'bar',
            label: 'Doanh thu',
            data: [<?php
                        foreach ($doanhthu_nam as $year => $revenue) {
                            echo "" . $revenue . ",";
                        }
                        ?>],
                        backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
        }],
        labels: [<?php
                        echo implode(", ", $years);
                    ?>]
    },
        options: {
            scales: {
                responsive: true,
            }
        }
    });
    var myChart = new Chart(polar, {
        type: 'polarArea',
        data: {
            labels: [<?php
                    foreach ($category_revenue_report as $row) {
                        
                        echo "'" . $row['category_name'] . "',";
                    }
                ?>],
            datasets: [{
                label: 'Doanh thu',
                data: [<?php foreach ($category_revenue_report as $row) {
                        echo "" . $row['total_revenue'] . ",";
                    }?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
            }]
        },
        options: {
            scales: {
                responsive: true,
            }
        }
    });
</script>