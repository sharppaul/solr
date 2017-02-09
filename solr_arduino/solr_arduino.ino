int sensorPin = A0; // select the input pin for ldr
int sensorValue = 0; // variable to store the value coming from the sensor
int ledPin = 2;
void setup() {
  Serial.begin(9600); //sets serial port for communication
  pinMode(ledPin, OUTPUT);
}
void loop() {
  sensorValue = analogRead(sensorPin); // read the value from the sensor
  
  sensorValue = sensorValue / 10;
  
  if ( sensorValue > 100) {
    sensorValue = 100;
  }
  
  if (sensorValue > 90) {
    digitalWrite(ledPin, HIGH);
  } else {
    digitalWrite(ledPin, LOW);
  }
  
  if (Serial.available()) {
    Serial.println(sensorValue); //prints the values coming from the sensor on the screen
    Serial.read();
  }
  delay(1);
}
