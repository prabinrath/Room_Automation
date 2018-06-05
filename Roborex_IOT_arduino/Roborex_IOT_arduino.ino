#include<SoftwareSerial.h>
#include<DHT.h>
#include<IRremote.h>
#include<ShiftRegister74HC595.h>

#define RECV_PIN 9
#define DHTPIN 7

SoftwareSerial esp(5, 6);
ShiftRegister74HC595 sr (1,2,3,4);
IRrecv irrecv(RECV_PIN); 
decode_results results;
DHT dht(DHTPIN, DHT11);

unsigned long currtime;
int toggle;
float hum,temp;

void relay(int pin,int state)
  {
    if(state==1)
      {sr.set(pin-1,LOW);Serial.println("Relay "+String(pin)+" turned ON");}
    else
      {sr.set(pin-1,HIGH);Serial.println("Relay "+String(pin)+" turned OFF");}
  }

String relayStatus(int query)
{
  String stat="";
  for(int i=0;i<8;i++)
  {
    if(query==1)
    {
      stat+='r';
      stat+=(i+1);
      stat+='=';
      stat+=sr.get(i);
      stat+='&';
    }
    else if(query==0)
    {
      stat+=' ';
      stat+=1?sr.get(i)==0:0;
    }
  }
  if(query==1)
   {stat.remove(stat.length()-1);}
  Serial.println(stat);
  return stat;
}

void setup() 
{
  Serial.begin(9600);
  esp.begin(9600);
  irrecv.enableIRIn();
  dht.begin();
  sr.setAllHigh();
  currtime=millis();
}

void loop() 
{
  if(millis()-currtime>=300000)
    {
      hum = dht.readHumidity();
      temp= dht.readTemperature();
      String data="Hum="+String((int)hum)+"&Temp="+String((int)temp);
      esp.print(data);
      Serial.println(data);
      currtime=millis();
    }
    
  if(esp.available())
  {
    String cmd=esp.readString();
    Serial.println(cmd);
    if(cmd.substring(0,3)=="ARD")
    {
      if(cmd.substring(4,7)=="swi")
      {
        int toggle=(int)cmd[11]-48,state=(int)cmd[12]-48;
        if(toggle>=1 && toggle<=8)
          {relay(toggle,state);}
        else
          {Serial.println("Index out of Bound web");}
      }
      if(cmd.substring(17,20)=="sta")
      {
        esp.print(relayStatus(0));
      }
      if(cmd.substring(4,7)=="sta")
      {
        esp.print(relayStatus(1));
      }
    }
  }
  
  if(Serial.available())
  {
    toggle=(int)Serial.read()-48;
    Serial.println("Bluetooth recieved: "+toggle);
    if(toggle>=1 && toggle<=8)
      {
        if(sr.get(toggle-1)==1)
          {relay(toggle,1);}
        else if(sr.get(toggle-1)==0)
          {relay(toggle,0);}
      }
    else
      {Serial.println("Index out of Bound bluetooth");}
  }
  
  if (irrecv.decode(&results)) 
  {
    if(results.value==0x1FE50AF){toggle=1;}
    else if(results.value==0x1FED827){toggle=2;}
    else if(results.value==0x1FEF807){toggle=3;}
    else if(results.value==0x1FE30CF){toggle=4;}
    else if(results.value==0x1FEB04F){toggle=5;}
    else if(results.value==0x1FE708F){toggle=6;}
    else if(results.value==0x1FE00FF){toggle=7;}
    else if(results.value==0x1FEF00F){toggle=8;}
    else {toggle=9;}
    if(toggle>=1 && toggle<=8)
      {
        if(sr.get(toggle-1)==1)
          {relay(toggle,1);}
        else if(sr.get(toggle-1)==0)
          {relay(toggle,0);}
      }
    else
      {Serial.println("Index out of Bound ir");}
    irrecv.resume();
  }
}
