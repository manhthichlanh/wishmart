<script>
var ten_dm = [
    <?php
        foreach ($dm_list as $dm) {
            echo "'$dm[ten_dm]',";
        }

    ?>
];
var san_pham_dm = [
    <?php
        foreach ($dm_list as $dm) {
            echo "'$dm[so_luong]',";
        }

    ?>
];
var ten_th = [
    <?php
        foreach ($th_list as $th) {
            echo "'$th[ten_th]',";
        }

    ?>
];
var san_pham_th= [
    <?php
        foreach ($th_list as $th) {
            echo "'$th[so_luong]',";
        }

    ?>
];
var barColors = [
  "#0093d0",
  "#000000",
  "#616365",
  "#00aeef",
  "#d6006e",
  "#75d1e0",
  "#7dba00",
  "#cc292b",
  "#00a950",
  "#f8971d",
  "#f7d417",
  "#4a245e",
  "#f26649"
];

new Chart("pie-chart", {
  type: "pie",
  data: {
    labels: ten_dm,
    datasets: [{
      backgroundColor: barColors,
      data: san_pham_dm
    }]
  },
  options: {
    title: {
      display: true,
      text: "Số lượng sản phẩm theo danh mục"
    }
  }
});
new Chart("doughnut-chart", {
    type: "doughnut",
    data: {
      labels: ten_th,
      datasets: [{
        backgroundColor: barColors,
        data: san_pham_th
      }]
    },
    options: {
      title: {
        display: true,
        text: "Số lượng sản phẩm theo thương hiệu"
      }
    }
  });
  var min=0;
  var max=min;
  var xValues = [
    <?php
        foreach ($dh_list as $dh) {
            echo "'$dh[ngay_xuat]',";
        }

    ?>
  ];
  var yValues = [
    <?php
        $min=0;
        $max=$min;
        foreach ($dh_list as $dh) {
            echo "'$dh[doanh_thu]',";
            if ($max<$dh['doanh_thu']) $max = $dh['doanh_thu'];
        }

    ?>
  ];

new Chart("line-chart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {
        min: <?php echo $min?>, 
        max: <?php echo $max+5?>
      }}],
    }
  }
});
</script>