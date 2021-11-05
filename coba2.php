
<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","coba.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form> 
<select name="nama" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="Kriza">Kriza</option>
  <option value="Addin">Addin</option>
  <option value="Yana">Yana</option>
  <option value="Anin">Anin</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>