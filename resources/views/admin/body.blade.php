<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Nurturing Lives</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        }

        /* Welcome Container Styles */
        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-left:200px;
        }

        /* Welcome Message Styles */
        .welcome-message {
            text-align: center;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-message h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .welcome-message p {
            font-size: 1.2em;
        }

    </style>

</head>
  <body>
            <!-- partial -->
            <div class="main-panel">
          <div class="content-wrapper">
      
            <div class="row">

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <i class="fas fa-user fa-3x mr-24"></i>
                        </div>
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$user}}</h3>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Students</h6>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <i class="fas fa-user fa-3x mr-4"></i>
                        </div>
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$mentor}}</h3>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Mentors</h6>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <i class="fas fa-calendar-alt fa-2x mr-6"></i>
                          <h3 class="mb-0">{{$appointments}}</h3>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Appointments</h6>
                  </div>
                </div>
              </div>


              <div class="chart_deg" style="width: 400px; height: 300px;">
                <canvas id="myChart"></canvas>
              </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <script>
                  const ctx = document.getElementById('myChart').getContext('2d');

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
                          maintainAspectRatio: false,
                          scales: {
                              y: {
                                  beginAtZero: true
                              }
                          }
                      }
                  });
              </script>

              <div class="chart_deg" style="width: 400px; height: 300px;">
                  <canvas id="myChart1"></canvas>
              </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <script>
                  const dtx = document.getElementById('myChart1').getContext('2d');
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
                          maintainAspectRatio: false,
                          scales: {
                              y: {
                                  beginAtZero: true
                              }
                          }
                      }
                  });
              </script>
  </body>
</html>
