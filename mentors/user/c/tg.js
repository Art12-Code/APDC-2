const TelegramBot = require('node-telegram-bot-api');

// replace the value below with the Telegram token you receive from @BotFather
const token = '6058433282:AAEmuKkjURSzD27G4UwkPKYD-4fzFFnBgnI';

// Create a bot that uses 'polling' to fetch new updates
const bot = new TelegramBot(token, {polling: true});
console.log('\n Running..');
// Matches "/echo [whatever]"
bot.onText(/\/echo (.+)/, (msg, match) => {
  // 'msg' is the received Message from Telegram
  // 'match' is the result of executing the regexp above on the text content
  // of the message

  const chatId = msg.chat.id;
  const resp = match[1]; // the captured "whatever"

  console.log('\n sent echo msg..');
  // send back the matched "whatever" to the chat
  bot.sendMessage(chatId, resp);
});

bot.onText(/\/chatid/, (msg, match) => {
  // 'msg' is the received Message from Telegram
  // 'match' is the result of executing the regexp above on the text content
  // of the message

  var chatId = msg.chat.id;
  const resp = match[0]; // the captured "whatever"

  const greetList = [chatId, "\n\n===="];
  
  console.log('\n sent chat id msg..\n\n'.concat(greetList)); // "Hello Venkat!");
  // send back the matched "whatever" to the chat
  bot.sendMessage(chatId, ' ====\n Chat Id is : '.concat(chatId,"\n ===="));
});

bot.onText(/\/start/, (msg, match) => {
  // 'msg' is the received Message from Telegram
  // 'match' is the result of executing the regexp above on the text content
  // of the message

  var chatId = msg.chat.id;
  const resp = match[0]; // the captured "whatever"

  const greetList = [chatId, "\n\n===="];
  
  
  console.log('\n Start command..\n\n'.concat(greetList)); // "Hello Venkat!");
  // send back the matched "whatever" to the chat
  bot.sendMessage(chatId, ' ====\n Chat Id is : /'.concat(chatId,"\n ====\n\n /chatid"));
});

// Listen for any kind of message. There are different kinds of
// messages.
// ===/ bot.on('message', (msg) => {
// ===/   const chatId = msg.chat.id;

 // ===/  console.log('\n sent msg..');
  // send a message to the chat acknowledging receipt of their message
 // ===/  bot.sendMessage(chatId, 'Received your message '.concat(chatId,"\nhello"));
// ===/ });