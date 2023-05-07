<html>
  <head>
    
  </head>
  <body>
    <div>
      <div id="a">Ini Tulisan ber ID</div>
      <button onclick="gantiTulisan1()">Ganti Tulisannya</button>
    </div>

    <div>
      <div class="x">Ini div 1</div>
      <div class="x">Ini div 2</div>
      <button onclick="gantiTulisan2()">Ganti Tulisannya</button>
    </div>
    <script>
      function gantiTulisan1() {
        const el = document.getElementById('a')
        // const el = document.querySelector('#a')
        // const el = document.querySelector('[id="a"]')
        el.innerText = "YES YES YES"
      }

      function gantiTulisan2() {
        let elements = document.querySelectorAll('.x')
        for (let el of elements) {
          el.innerText = "NONONO"
        }
      }
      
    </script>
  </body>
</html>