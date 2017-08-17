//チャット内容を出力
var log;
$.ajax(
  {
  type:"POST",
  url:"log.php",
  dataType:"html",
  success:function(msg)
  {
    $('.chat').html(msg);
    log=msg;
  }
}
);
$(document).ready
(
function()
{
$('input:visible').eq(1).focus();
}
);
function log_download()
 {
    var blob = new Blob([ log ], { "type" : "html/plain" });
    if (window.navigator.msSaveBlob) {
        window.navigator.msSaveBlob(blob, "test.html");
        // msSaveOrOpenBlobの場合はファイルを保存せずに開ける
        window.navigator.msSaveOrOpenBlob(blob, "test.ht");
    }
    else
    {
        document.getElementById("download").href = window.URL.createObjectURL(blob);
    }
}
