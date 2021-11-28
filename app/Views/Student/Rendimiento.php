   <div>
      <br />
      <p><a href="<?php echo base_url(
          '/Dashboard'
      ); ?>">Inicio</a></p>
      <br />
      <h1>Curva de Rendimiento</h1>

      <div style="text-align: center">
        <table class="table table-bordered">
          <caption>
            Rendimiento
          </caption>

          <thead>
            <tr>
              <th>Asignaturas</th>

              <th>%</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Matematicas</td>

              <td>100</td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td>Ingles</td>

              <td>100</td>
            </tr>

            <tr>
              <td>Economia</td>

              <td>100</td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td>Programacion</td>

              <td>100</td>
            </tr>
          </tbody>
        </table>
      </div>

      <br /><img src="public/img/Imagen4.webp" alt="Texto alterno" /><br />
    </div>
    <h1>API ChartJS</h1>

    <div id="chartjs">
      <canvas id="myChart" width="400" height="400"></canvas>
    </div>

    <script>
      const ctx = document.getElementById("myChart").getContext("2d");
      const myChart = new Chart(ctx, {
        type: "polarArea",
        data: {
          labels: [
            "Matematicas",
            "Ingles",
            "Economia",
            "Administracion",
            "Estadistica",
          ],
          datasets: [
            {
              label: "# of Votes",
              data: [12, 19, 8, 10, 7],
              backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    </script>  