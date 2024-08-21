import requests
import time
import json
import os
from telegram import *
from telegram.ext import *

# this script works better on python 3.10--
#from func.impo import *
Token = "6058433282:AAEmuKkjURSzD27G4UwkPKYD-4fzFFnBgnI"


print('Starting bot....')
time.sleep(2)
print('bot is online....')

async def echo_cmd(update: Update, context: ContextTypes.DEFAULT_TYPE) -> None:
    #
    # Echo the user message
    # .
    await update.message.reply_text('Invalid - ' + update.message.text)
    print('Invalid message....')

async def start_commmand(update, context):
    
  #  token = "6247012942:AAG-DFFsM_0QhHy5TlAJXnsAH7I1wWzOrP8"
    res =  requests.get("https://api.telegram.org/bot{}/getUpdates".format(Token))

    result = res.json()
    chatId = str(result['result'][0]['message']['chat']['id'])
    chatuId = str(result['result'][0]['message']['chat']['username'])
    print(chatuId + "\n\n" + chatId)
    
  #  await update.message.reply_text("""
 #   Hello! Welcome To Store!
  #  
  #  /mode - Show all bot operation mode
 #   /help - Show all bot help commands
  #  
  #  """)
    await update.message.reply_text("hello " + chatuId + "\n\n you chatBot id is : /"+  chatId )
    print('Start command..')


def main() -> None:
    """Start the bot."""
    # Create the Application and pass it your bot's token.
    application = Application.builder().token(Token).build()

    # Commands
    application.add_handler(CommandHandler('start', start_commmand))
    
    # on non command i.e message - echo the message on Telegram
    application.add_handler(MessageHandler(filters.TEXT & ~filters.COMMAND, echo_cmd))

    # Run bot
    application.run_polling()


if __name__ == "__main__":
    main()
