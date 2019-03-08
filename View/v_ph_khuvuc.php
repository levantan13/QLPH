<div class="w3-container-fluid">
  <div class="w3-bar bg-primary">
    <button class="w3-bar-item w3-button tablink w3-red" onclick="sodophonghoc(event,'KhuA')">Khu A</button>
    <button class="w3-bar-item w3-button tablink" onclick="sodophonghoc(event,'KhuB')">Khu B</button>
    <button class="w3-bar-item w3-button tablink" onclick="sodophonghoc(event,'KhuC')">Khu C</button>
    <button class="w3-bar-item w3-button tablink" onclick="sodophonghoc(event,'KhuH')">Khu H</button>
  </div>

   <div id="KhuA" class="w3-container-fluid w3-border sd_phonghoc">
    </div>
  <div id="KhuB" class="w3-container w3-border sd_phonghoc" style="display:none">
    <h2>Khu B</h2>
    <p>Paris is the capital of France.</p> 
  </div>
  <div id="KhuC" class="w3-container w3-border sd_phonghoc" style="display:none">
    <h2>Khu C</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
    <div id="KhuH" class="w3-container w3-border sd_phonghoc" style="display:none">
    <h2>Khu H</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
</div>

<script>
  function sodophonghoc(evt, sd_phong_hoc) {
  var i, x, tablinks;
  x = document.getElementsByClassName("sd_phonghoc");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(sd_phong_hoc).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>