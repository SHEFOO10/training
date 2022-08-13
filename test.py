
import pyautogui
def detect(inp = "default"):
        if(inp == ""):
            exit()
        
while True:
    
    p=pyautogui.position()
    if(p[0] == 900):
        detect("")
    print('\r{}'.format(p), end='')
    


    


while True:
    click.echo('Continue? [yn] ', nl=False)
    c = click.getchar()
    click.echo()
    if c == 'y':
        click.echo('We will go on')
    elif c == 'n':
        click.echo('Abort!')
        break
    elif c == '\x1b[D':
        click.echo('Left arrow <-')
    elif c == '\x1b[C':
        click.echo('Right arrow ->')