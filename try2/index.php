<html>
<head>
<title>memes</title>

<style>
#theBtn{ 

   font-family: Lato;
   width: 100%;
   max-width: 280px;
   height: 50px;
   line-height: 50px;
   padding: 4px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border: 2px dashed #BBB; 
   text-align: center;
   background-color: #fbfbfb;
   cursor:pointer;
   font-family: 'Lato';
   top:5px;
   font-size: 20px;
}
</style>

<script type="text/javascript">

function escapeHtml(text) {
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}

 function getFile(){
   document.getElementById("upfile").click();
 }
 function sub(obj){
    var file = obj.value;
    var fileName = file.split("\\");
    var fileNam2 = fileName[fileName.length-1];
    document.getElementById("theBtn").innerHTML = escapeHtml(fileNam2);
    document.myForm.submit();
    event.preventDefault();

  }
  
</script>
</head>

<body>
<br>
<center>
<br><br>

<div class="mainbox">
<br><br>
<center>

<!-- UPLOAD BUTTON -->

<div id="theBtn" onclick="getFile()"><span style="color:#c3c3c3;"></i> Upload</span></div>

<div style='height: 0px;width: 0px; overflow:hidden; ' ><input id="upfile" type="file" value="upload" name="file" onchange="sub(this)" accept="images/*" /></div>


<br><br>
<button type="submit" name="submit" style="width:98px;">Upload  </i></button>
<br>
</form>
<br>
</div>

</body>
</html>
