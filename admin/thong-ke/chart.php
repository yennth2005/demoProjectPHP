<h3 class="alert alert-success">BIỂU ĐỒ THỐNG KÊ</h3>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Loại');
    data.addColumn('number', 'Số lượng');

    var rows = [];

    <?php
      if (!empty($items)) {
        foreach ($items as $item) {
          echo "rows.push(['{$item['ten_loai']}', {$item['so_luong']}]);";
        }
      } else {
        echo ''; // Hoặc hiển thị một thông báo
      }
    ?>

    if (rows.length > 0) {
      data.addRows(rows);
      var options = {
        title: "TỶ LỆ HÀNG HOÁ",
        is3D: true,
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  }
</script>