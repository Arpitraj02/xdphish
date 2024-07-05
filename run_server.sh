#!/bin/bash

# Ensure colorama and figlet are installed
pip install Flask colorama
sudo apt-get install -y figlet

# Create ASCII Art with figlet
figlet -f slant "Flask Server"

# Start the server with colorized output
python <<EOF
import subprocess
from colorama import Fore, Style

ascii_art = """
$(figlet -f slant "Flask Server")
"""
print(Fore.CYAN + ascii_art + Style.RESET_ALL)

print(Fore.GREEN + "Starting the Flask server..." + Style.RESET_ALL)
subprocess.call(["python", "app.py"])
EOF
