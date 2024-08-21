
function getRndInteger(min, max) {
  var grnd = Math.floor(Math.random() * (max - min + 1) ) + min;
  $('#demo2-form9-s').val(grnd);
}


function Timestamp(){
  const currentTime = new Date();
  var year = currentTime.getFullYear();
  var month = currentTime.getMonth();
  var day = currentTime.getDate();
  var dash = "-";
  var space = " ";
  var colon = ":";
  var hour = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var seconds = currentTime.getSeconds();
  var timestamp = year.toString().concat(dash, month, dash, day, space, hour, colon, minutes, colon, seconds);
  $('#demo').val(timestamp);
}

function tg(){
// send to tg
  
// replace the value below with the Telegram token you receive from @BotFather
const Token = '6058433282:AAEmuKkjURSzD27G4UwkPKYD-4fzFFnBgnI';
var token = "6247012942:AAG-DFFsM_0QhHy5TlAJXnsAH7I1wWzOrP8";

var res =  fetch(`https://api.telegram.org/bot${token}/getUpdates`);
var { result } =  res.json();
var chatId = result[0].message.chat.id;
}
