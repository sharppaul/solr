int sensorPin = A0; // select the input pin for ldr
int sensorValue = 0; // variable to store the value coming from the sensor
void setup() {
  Serial.begin(9600); //sets serial port for communication
}
void loop() {
  if(Serial.available()){
    sensorValue = analogRead(sensorPin); // read the value from the sensor
    sensorValue = sensorValue * 2;
    if( sensorValue > 100)
	sensorValue = 100;
    Serial.println(sensorValue); //prints the values coming from the sensor on the screen
    Serial.read();
  }
  delay(1);
}
