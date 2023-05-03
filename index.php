<html>
  <head>
    <style>
      table {
        border-collapse: collapse;
      }
      table tr td {
        border: 1px solid dimgray;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <button onclick="doRequest()">Klik Ajax</button>
    <div>
      <span id="nama"></span>
      <table class="table-hasil"> 
        
      </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      function doRequest() {
        $.ajax({
          url: "/data.php",
          success: function(res) {
            $("#nama").text(res.nama)
            $(".table-hasil").children('')
            let tampilan_keahlian = ''
            for (let keahlian of res.keahlian) {
              tampilan_keahlian+=`
                <tr>
                  <td>${keahlian}</td>
                </tr>
              `
            }
            $(".table-hasil").append(tampilan_keahlian)
          }
        })
      }
    </script>
  </body>
</html>