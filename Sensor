#include "heltec.h"

#define BAND    433E6  // Frecuencia de trabajo

const int Rr = 7350; // Resistencia de referencia
int V; 
float Rsensor=0; 
float Vf=0;

void setup() {
  Heltec.begin(false /*Display*/, true /*LoRa*/, true /*Serial*/, true /*PABOOST*/, BAND /*long BAND*/);
}

void loop() {
  delay(20000);
  float RF = 0;
  float rf = 0;
  //V = analogRead(13); // Lectura de voltaje
  V = ReadVoltage(13); //Lectura de voltaje con mayor precision
  RF = Rr*((3.3-V)/ V); // Se utiliza 3.3V para la medicion
  float CB = (RF - 550) / 137.5; //Conversion a Centibares
  LoRa.beginPacket();
  LoRa.print("SensorName"); //Etiqueta exclusiva del sensor
  LoRa.print(CB); //Valor de la humedad
  LoRa.endPacket();
}

double ReadVoltage(byte pin){
  double reading = analogRead(pin); // El voltaje de referencia es 3v3, por lo que la lectura máxima es 3v3 = 4095 en el rango de 0 a 4095
  if(reading < 1 || reading >= 4095)
    //return 0;
  // return -0.000000000009824 * pow(reading,3) + 0.000000016557283 * pow(reading,2) + 0.000854596860691 * reading + 0.065440348345433;
  return -0.000000000000016 * pow(reading,4) + 0.000000000118171 * pow(reading,3)- 0.000000301211691 * pow(reading,2)+ 0.001109019271794 * reading + 0.034143524634089;
}
