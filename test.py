import pyautogui

while True:
    p=pyautogui.position()
    print('\r{}'.format(p), end='')