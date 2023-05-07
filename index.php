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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      function gantiTulisan1() {
        const el = $("#a");
        el.text("123")

        // SAMA DENGAN SINTAKS DI BAWAH
        // const el = document.getElementById('a')
        // el.innerText = "YES YES YES"
      }

      function gantiTulisan2() {
        const elements = $(".x")
        elements.text("ABCDEFG")
        
        // SAMA DENGAN SINTAKS DI BAWAH
        // let elements = document.querySelectorAll('.x')
        // for (let el of elements) {
        //   el.innerText = "NONONO"
        // }
      }
      
    </script>
  </body>
</html>