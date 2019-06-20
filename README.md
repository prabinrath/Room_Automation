# Room_Automation
# Internet Of Things

## What is it?

It is a DIY module that enables remote control of electronic and electrical appliances within a room. Here, we have used a total 8 control switches that enables automating 3 fans, 3 lights and 2 other random electrical equipments.

## Materials Used:

* ESP8266 Wi-fi Module.
* HC05 bluetooth module.
* Arduino UNO. 
* TSOP1738 IR reciever and IR remote.
* 74HC595.
* LM 7805.
* DHT 11.
* SPDT switch.
* SPST switch.
* 3.3V voltage regulator.
* 1N4007 Silicon diode.

## Softwares Required:-

* Ubuntu 16.04
* OpenCV 3.2
* Python 2.7 with Flask
* Arduino IDE
* XAMPP
  
## How it Works ?

   If WiFi hotspot is unavailable, it automatically switches to Access point mode and creates it's own network (IOT-NETWORK) through which communication occurs. 
   
   Arduino collects the status of relay and pass on the status to Wi-fi upon a status GET request from any client.
   
   After pairing a bluetooth mobile device with the module we can control the switches wirelessly from an android app that is easily available from playstore. Simultaneously, we can control the relays from an IR remote as well.
   
   Another secure switch control system is the website. Room_automation website has been made to send requests to module to either on or off a particular switch. At the same time, website updates status of relays in the web UI in an interactive manner.
   
   Besides this, the website has feature of displaying live video feed of the room which is recieved from python FLASK server running in a Raspberry pi. 
   
   The module passes on the temperature and humidity data to room_automation server which is further stored in database for a particular period of time and simultaneously is updated over the website. 
   
   The module always runs a local server which allows relay control and status updates. Any device connected to the same network as that of the module or to the module's Access Point (in case of a network unavailability) can access the HTML page broadcasted by the module with a MDNS service.

# Note:

The project is still under development.
