# This will launch our default programs for the Web 110 class.
# by Sara Linde
# Date: 5-14-15
# Version: 1.0 
# Support: This will open Brackets, Filezilla, and one Firefox window,  
#          with the canvas and docs.google.com websites preloaded.
#           Collaborate isn't supported yet, hopefully in version 2.0. 
#
#-------------------------------------------------------------------------

import os, sys
import webbrowser
import subprocess


def main():

# Brackets works. May ask for a default site to open. 
    os.startfile("C:\Program Files\Brackets\Brackets.exe")

# Filezilla works.
    os.startfile ("C:\Program Files\FileZilla 2.2.28\FileZilla.exe")

# Firefox - works. Clunky, but it works. 

    subprocess.call([r'C:\Program Files\Mozilla Firefox\Firefox.exe',
    '-new-tab', '-new-tab', 'https://canvas.seattlecentral.edu/login', 'http://docs.google.com'])

main()

