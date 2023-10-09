#!/bin/bash
sudo apt update -y && sudo apt upgrade -y;
sudo apt install xfce4 tigervnc-standalone-server qterminal dbus-x11 -y;
sudo wget https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-linux-amd64.tgz;
sudo tar -xvf ngrok-v3-stable-linux-amd64.tgz;
sudo rm ngrok-v3-stable-linux-amd64.tgz;
sudo mv ngrok /usr/local/bin;
sudo echo "vncserver :1;\n ngrok tcp 5901;" >>/usr/local/bin/vnc;
sudo echo "vncserver -kill :*" >>/usr/local/bin/vs;
sudo chmod +x /usr/local/bin/vs;
sudo chmod +x /usr/local/bin/vnc;
ngrok config add-authtoken 2LbHfwg2lKxJhj1dqwQV8UZN93N_36vRKYuAMAoVPiooZ3efS;
cd $HOME;
sudo echo "sudo apt-get install wget gpg
wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg
sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg
sudo sh -c 'echo "deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main" > /etc/apt/sources.list.d/vscode.list'
rm -f packages.microsoft.gpg" >> s.sh;
sudo bash s.sh;
sudo apt install apt-transport-https;
sudo apt update;
sudo apt install code;
