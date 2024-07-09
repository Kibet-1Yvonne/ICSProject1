<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.css')

  <style>
    .chart_deg{
        padding-top:100px;
        padding-left:100px;
        width: 600px;
        height: auto;
        
    }
  </style>

  </head>
  <body>
        <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <button id="bannerClose" class="btn border-0 p-0">
                    <i class="mdi mdi-close text-white me-0"></i>
                </button>
                </div>
            </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        
        @include('admin.navbar')

            <!-- partial -->
            

            <div class="chart_deg">
                <canvas id="myChart"></canvas>
            </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                        labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
                        datasets: [{
                            label: '# of Appointments',
                            data: [12, 19, 3, 5, 52, 3, 18, 40],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                        }
                    });
                </script>

                <div class="chart_deg">
                    <canvas id="myChart1"></canvas>
                </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <script>
                        const dtx = document.getElementById('myChart1');
                        new Chart(dtx, {
                            type: 'pie',
                            data: {
                            labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
                            datasets: [{
                                label: '# of Appointments',
                                data: [12, 19, 3, 5, 52, 3, 18, 40],
                                borderWidth: 1
                            }]
                            },
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                            }
                        });
                    </script>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>