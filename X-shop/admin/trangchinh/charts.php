
<div class="graphBox">
    <div class="box">
        <canvas id="polarAreaChart"></canvas>
    </div>
    <div class="box">
        <canvas id="barChart"></canvas>
    </div>
</div>

<script>
    const bar = document.getElementById('barChart').getContext('2d');
    const polar = document.getElementById('polarAreaChart').getContext('2d');
    var myChart = new Chart(bar, {
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