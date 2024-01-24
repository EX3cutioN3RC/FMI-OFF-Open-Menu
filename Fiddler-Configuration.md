#TO MAKE YOUR FIDDLER IP PUBLIC, IT IS RECOMMENDED TO PURCHASE A WINDOWS SERVER 2016 STANDARD VPS, OPEN THE REMOTE DESKTOP CONNECTION ON THE PC AND CONNECT TO THE IP PROVIDED BY THE VPS#
#THIS WILL OPEN A WINDOWS SYSTEM WHERE YOU WILL HAVE TO CONFIGURE IT FOLLOWING

Download Fiddler Classic

Configure your Fiddler Classic

First install this complement for enable certification valid in iOS => https://telerik-fiddler.s3.amazonaws.com/fiddler/addons/fiddlercertmaker.exe

##After installation is complete, open Fiddler
open Tools > Options > HTTPS menu use Actions > Reset all certificates option. This will remove all previously used certificates and will trust the new one.

##After agreeing with all system dialogs, enable Capturing (Tools > Options > HTTPS and check Capturing HTTPS Connects) and decryption of HTTPS traffic ((Tools > Options > HTTPS and check Decrypt HTTPS traffic)).

Open Tools > Options > Connections.

Click the checkbox for Allow remote computers to connect.

Restart Fiddler.

##After Fiddler restart
open Tools > Options > HTTPS

##click in Protocols: <client>;ssl3;tls1.1 
change tls1.1 for tls1.2

##in the box => Skip decryption for followin hosts: 
copy and paste this:  *.icloud.com, gsa.apple.com, bag.itunes.apple.com

Press OK

Ready, your fiddler now can capture Traffic HTTP, you can disable and enable Game Center and capturing http traffic (PET Token)
