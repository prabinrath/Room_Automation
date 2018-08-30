# Room_Automation
## Internet Of Things

This is an official repository for Project Room Automation under CYBORG, the Robotics Club of NITR.

## What is it?

As the name suggests, it is the technological solution that enables automating the bulk of electronic, electrical and technology-based tasks within a room. It uses a combination of hardware and software technologies that enable control and management over appliances and devices within a room. Here, we have used at total 8 control switches that enables automating 3 fans, 3 lights and 2 other electrical equipment.

## Techniques Used

   The project uses:

* ESP8266 Wi-fi microchip with full TCP/IP stack and microcontroller capability.

* HC05 bluetooth module for transparent wireless serial connection.

* Arduino UNO to upload program in ESP8266 and to control the status of relay. 

* IR Sensor along with IR remote to control the realy-switches from a remote.

* room_automation  website which has been built using Bootstrap, HTML, CSS, PHP and Javascript.(XAMPP for running in localhost) to control the switches accordingly.

* OpenCV to transfer live video feed to the website

* Python Web Server with Flask

* Temperature and humidity sensors for data collection and display of recent data on the website.

## Prerequisites

* Ubantu 16.04
* OpenCV 3.2
* Arduino IDE
* Python 2.7
* XAMPP
* ESP 8266
  
## How it Works ?

   Wi-Fi microcontroller is uploaded with a specific code(Roborex_IOT_esp) that contains specific library which enables the module for both client connection and Access point connection. If client connection is unavailable, it automatically switches to Access point mode and creates it's own Network IOT-NETWORK through which communication occurs. 
   
   Arduino collects the status of relay and pass on the status to Wi-fi or blutooth module accordingly. On recieving any information regarding on or off any particular switch, it performs the required operation.
   
   After pairing the any bluetooth device with bluetooth module, through the UI we are able to automate the switches. Also there are facilities to know the status of relay. Simultaneously, IR remote has the capability to automate any switch at any instant.
   
   Another switch control system is website. room_automation website has been made for transferring of request to Wi-fi module to either on or off a particular switch. At the same time, website extracts status of relay and accordingly display on the page. Provided the network of Wi-fi module and the the device where the website is running are connected locally. Besides this, the website has feature of displaying live video of the room which is recieved from FLASK server. ESP passes on the temperature and humidity data to room_automation site which is further stored in database for a particular period of time and simultaneously it is presented over the website. 
   
   Whenever the connection is lost with the server, Wi-fi module activates its default HTML page(edited by us) which shows the status of relay and give us permission to control any of those switches.
   
   Thus, the combination of hardware and software technologies assisted us for a complete Room Automation process. 

# Note:

The project is still under development.