@extends('admin.layout.appadmin')

@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Data Pegawai:
                                        {{$pegawai}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/pegawai')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Data Divisi:
                                        {{$divisi}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/divisi')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Data Jabatan:
                                        {{$jabatan}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/jabatan')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Jumlah Jenis Kelamin
                                    </div>
                                    <div class="card-body"><canvas id="pieChart" width="100%" height="50"></canvas></div>
                                    <!-- <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Diagram Harta Kekayaan Pegawai
                                    </div>
                                    <div class="card-body"><canvas id="barChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
<script>
  // Set new default font family and font color to mimic Bootstrap's default styling


// Bar Chart Example
var lbl = [@foreach($ar_kekayaan as $harta) '{{$harta->nama}}',
@endforeach];
var hrt = [@foreach($ar_kekayaan as $harta) {{$harta->kekayaan}},

@endforeach];
// var ctx = document.getElementById("myBarChart");
// var myLineChart = new Chart(ctx, 
document.addEventListener("DOMContentLoaded",() => {
    new Chart(document.querySelector('#barChart'),
{
  type: 'bar',
  data: {
    labels: lbl, 
    datasets: [{
      label: "Harta Kekayaan",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: hrt,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 900000000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
});
</script>
<script>
    // Pie Chart Example
// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, 
var lbl2 = [@foreach ($ar_gender as $gender) '{{$gender->gender}}',
@endforeach];
var jml = [@foreach($ar_gender as $gender) {{$gender->jumlah}}, @endforeach];
document.addEventListener("DOMContentLoaded" ,() => {
    new Chart(document.querySelector('#pieChart'), {
  type: 'pie',
  data: {
    labels: lbl2,
    datasets: [{
      data: jml,
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
    });
});
</script>
@endsection