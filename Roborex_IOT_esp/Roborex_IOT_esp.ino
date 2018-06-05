#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

ESP8266WebServer server(80);

//Client Connect settings
const char* ssid_c = "Prabin";
const char* password_c = "remotenetwork";

//Access Point settings
const char* ssid_a = "IOT-Network";
const char* password_a = "neelamprabin";

String data,mainPage="",currentPage,stat="Unreachable";
bool wifi_mode=false;
unsigned long mode_timeout;

String self_relay_status()
{
  String feedback;
  feedback="<h3 align=\"center\">Binary Status "+stat+"</h3>";
  return feedback;
}

void relay_status_enquiry()
{
  Serial.print("ARD-status");
  delay(1500);
  if(Serial.available())
    {stat=Serial.readString();}
  server.send(200, "text/plain", stat);
}

void local_switch_relay()
{
  Serial.print("ARD-switch-"+String(server.arg("index"))+String(server.arg("state")));Serial.print("ARD-status");
  delay(1500);
  if(Serial.available())
    {stat=Serial.readString();}
  currentPage = mainPage+self_relay_status(); server.send(200, "text/html", currentPage);
}

void web_switch_relay()
{
  Serial.print("ARD-switch-"+String(server.arg("index"))+String(server.arg("state")));
  server.send(200, "text/plain", "success");
}

void handleNotFound()
{
  String message = "File Not Found\n\n";
  message += "URI: ";
  message += server.uri();
  message += "\nMethod: ";
  message += (server.method() == HTTP_GET)?"GET":"POST";
  message += "\nArguments: ";
  message += server.args();
  message += "\n";
  for (uint8_t i=0; i<server.args(); i++)
  {
    message += " " + server.argName(i) + ": " + server.arg(i) + "\n";
  }
  server.send(404, "text/plain", message);
}

void setMode(bool mod)
{
  if(WiFi.status() == WL_CONNECTED)
    {WiFi.disconnect();}
  if(mod==false)
  {
    WiFi.mode(WIFI_STA);
    WiFi.begin(ssid_c, password_c); // Connect to WiFi
    //WiFi.begin(ssid_c);
    Serial.println("");
    mode_timeout=millis();
    while ((WiFi.status() != WL_CONNECTED) && (millis()-mode_timeout<10000)) 
      {delay(500);Serial.print(".");}
    if(WiFi.status() == WL_CONNECTED)
    {
      Serial.println("");
      Serial.print("Connected to ");
      Serial.println(ssid_c);
      Serial.print("IP address: ");
      Serial.println(WiFi.localIP());
    }
  }
  else
  {
    WiFi.mode(WIFI_AP);
    WiFi.softAP(ssid_a, password_a); // Start the access point
    Serial.print("Access Point \"");
    Serial.print(ssid_a);
    Serial.println("\" started");
    Serial.print("IP address:\t");
    Serial.println(WiFi.softAPIP());
  }
  wifi_mode=mod;
}

void setup() 
{
  Serial.begin(9600);
  
  mainPage +="<div style=\"backgrund-color: light gray; height: 870px;\">";
  mainPage +="<h1 style=\"font-size: 65px; font-weight: bold; font-family: serif;\" align=\"center\"><span style=\"color: #800080;\">ROBOREX</span></h1>";
  mainPage +="<center><h2 style=\"font-size: 58px; font-family: serif;\" align=\"center\"><span style=\"color: #993300;\"><strong>Room Automation</strong></span></h2></center>";
  mainPage +="<div style=\"border: 4px solid green;\">";
  mainPage +="<center><p style=\"color: #339966; font-size: 30px; font-family: serif;\"><strong>Fan 1</strong> &nbsp; &nbsp; &nbsp;&nbsp; <a href=\"switch?index=1&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=1&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"color: #339966; font-size: 30px; font-family: serif;\"><strong>Fan 2</strong> &nbsp; &nbsp; &nbsp;&nbsp; <a href=\"switch?index=2&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=2&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"color: #339966; font-size: 30px; font-family: serif;\"><strong>Fan 3</strong> &nbsp; &nbsp; &nbsp;&nbsp; <a href=\"switch?index=3&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=3&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"font-size: 30px; color: #ff9900; font-family: serif;\"><strong>Light 1</strong> &nbsp; &nbsp; <a href=\"switch?index=4&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=4&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"font-size: 30px; color: #ff9900; font-family: serif;\"><strong>Light 2</strong> &nbsp; &nbsp; <a href=\"switch?index=5&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=5&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"font-size: 30px; color: #ff9900; font-family: serif;\"><strong>Light 3</strong> &nbsp; &nbsp; <a href=\"switch?index=6&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=6&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"font-size: 30px; color: #003366; font-family: serif;\"><strong>Switch 1 &nbsp;</strong> <a href=\"switch?index=7&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=7&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="<center><p style=\"font-size: 30px; color: #003366; font-family: serif;\"><strong>Switch 2 &nbsp;</strong> <a href=\"switch?index=8&state=1\"><button>ON</button></a>&nbsp; <a href=\"switch?index=8&state=0\"><button>OFF</button></a></p></center>";
  mainPage +="</div></div>";

  setMode(false);

  server.on("/web_switch", web_switch_relay);
  server.on("/switch", local_switch_relay);
  server.on("/status", relay_status_enquiry);
  server.on("/", [](){ currentPage = mainPage+self_relay_status(); server.send(200, "text/html", currentPage); currentPage = ""; });
  server.onNotFound(handleNotFound);
  
  server.begin();
  Serial.println("HTTP server started");
}

void loop() 
{
  server.handleClient();
  
/*
  if(digitalRead(2)==HIGH && wifi_mode==true)
    {setMode(false);}
  else if(digitalRead(2)==LOW && wifi_mode==false)
*/

  if(WiFi.status() != WL_CONNECTED && wifi_mode==false)
  {
    setMode(wifi_mode);
    if(WiFi.status() != WL_CONNECTED) 
      {setMode(!wifi_mode);}
  }

  if(Serial.available())
  {
    data=Serial.readString();
    if(WiFi.status()== WL_CONNECTED && data.substring(0,3)=="Hum")
    {
      HTTPClient http;
      http.begin("http://192.168.43.185:80/room_automation/dhtdata.php");
      http.addHeader("Content-Type", "application/x-www-form-urlencoded");
      int httpCode = http.POST(data);
      String payload = http.getString();
      Serial.println(httpCode);
      http.end();
    }
    else if((data.substring(0,2)=="r1" && data.substring(35,37)=="r8") || data.substring(0,1)==" ")
      {stat=data;}
    else
    {
      Serial.println("Error in WiFi connection or data unnecessary");
    }
  }

}
