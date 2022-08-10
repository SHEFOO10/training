from time import sleep
from turtle import delay
import pyttsx3
import speech_recognition as sr
import webbrowser
import datetime
import wikipedia
import pyautogui

def assistant(audio):
    engine = pyttsx3.init()
    # getter: To get the current
    # engine property value
    voices = engine.getProperty('voices')
   
    # setter method
    # [0] for male voice
    # [1] for female voice
    engine.setProperty('voices', voices[0].id)
    # Method governing assistant's speech
    engine.say(audio)
    # Blocks/processes queued commands
    engine.runAndWait()

def greeting():
    # This is a simple greeting and
    # it informs the user that the
    # assistant has started
    assistant("Hello, I am your Virtual Assistant. How Can I Help You Today")


def audioinput():
    # this function is all about
    # taking the audio input from
    # the user
    aud = sr.Recognizer()
    with sr.Microphone() as source:
        print('listening and processing')
    # The pause is optional here
        aud.pause_threshold = 1
        audio = aud.listen(source)
    # Using try (for valid commands)
    # and exception for when the assistant
    # doesnt "catch" the command
        try:
            print("understanding")
    # en-eu is simply for the accent here
    # english we can also use 'en-GB' or 'en-au'
    # for UK and Australian accents
            phrase = aud.recognize_google(audio, language='en-us')
            print("you said: ", phrase)
        except Exception as exp:
            print(exp)
            print("Can you please repeat that")
            return "None"
        return phrase

def theTime():
    # This function is for time
    time = str(datetime.datetime.now())
    # time needs to be sliced for
    # better audio comprehension
    print(time)
    hour = time[11:13]
    min = time[14:16]
    assistant("The time right now is" + hour + "Hours and" + min + "Minutes")

def theDay():
    # This function is for the day
    day = datetime.datetime.today().weekday() + 1
    # assigning a number makes it a bit cleaner
    Day_dict = {1: 'Monday', 2: 'Tuesday',
    3: 'Wednesday', 4: 'Thursday',
    5: 'Friday', 6: 'Saturday',
    7: 'Sunday'}
    if day in Day_dict.keys():
        weekday = Day_dict[day]
        print(weekday)
        assistant("it's " + weekday)

def core_code():
    
        # First, we will call greeting
        # to mark the starting
            greeting()
        # Infinite loop until certain conditions
        # are met
            while (True):
                # changing the query to lowercase
                # ensures it works most of the time
                phrase = audioinput().lower()
                if "hey diablo" in phrase:
                    if "open medium" in phrase:
                        assistant("Opening Medium.com")
                    # the function reaches out to the
                    # default browser
                        webbrowser.open("www.medium.com")
                        continue
                    elif "open google" in phrase:
                        assistant("Opening Google ")
                        webbrowser.open("www.google.com")
                        continue
                    elif "what day it is" in phrase:
                        theDay()
                        continue
                    elif " time it is" in phrase:
                        theTime()
                        continue
                    # trigger/condition to exit the program
                    elif "hi" in phrase:
                        assistant("hi there")

                    elif "joke" in phrase:
                        assistant("your life")

                    elif "ex" in phrase:
                        assistant("which one")

                    elif "music" in phrase:
                        assistant("opening SoundCloud")
                        
                        f = open("imports/im.py", "w")
                        import imports.im as im
                        
                        input("you have 10 second to locate the mouse in the place you want. press enter")
                        
                        while True :
                            p= pyautogui.position()
                            print(p,'\r',  end='')
                            #this print above can make live printing
                            #remember to use & in function to make the changes you have made in the variable inside the function change the orginal variable. don't forget >>>>>>>>
                            
                            
                            
                            
                        
                        f.write("x={}\ny={}".format(p.x, p.y))
                        print('mouse location saved sucessfully')
                        f.close()
                                    
                        
                        
                        
                        
                        

                    elif "what about studying" in phrase:
                        assistant("don't talk about that shit Please")
                    elif "what can you do" in phrase:
                        assistant("i can do nothing")

                    elif "bye" in phrase:
                        assistant("Exiting. Have a Good Day")
                        exit()
                    
                    elif "from google" in phrase:
                        assistant("searching .. ")
                        phrase = phrase.replace("from google", "")
                        webbrowser.open('www.google.com/search?q={}'.format(phrase))
                    elif "from wikipedia" in phrase:
                    # to pull information from Wik/i
                        assistant("Checking the wikipedia ")
                        phrase = phrase.replace("wikipedia", "")
                    # it will limit the summary to four lines
                        result = wikipedia.summary(phrase, sentences=4)
                        assistant("As per wikipedia")
                        assistant(result)
                    elif "what is your name" in phrase:
                        assistant("I am your Diablo virtual assistant")

if __name__ == '__main__':
    # to pull the core code
    # and execute it
    core_code()