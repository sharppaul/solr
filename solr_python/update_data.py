#!/usr/bin/env python
import time
import serial
import requests

# configure the serial connections (the parameters differs on the device you are connecting to)
ser = serial.Serial(
    port='/dev/ttyUSB0',
    baudrate=9600,
    parity=serial.PARITY_ODD,
    stopbits=serial.STOPBITS_TWO,
    bytesize=serial.SEVENBITS
)

ser.isOpen()


def getValue():
	ser.write('t') #only send 1 byte, so the device will only return once.
        out = ''
        
        time.sleep(0.1)
	
        while ser.inWaiting() > 0:
            out += ser.read(1)
	
        if out != '':
        	return int(out.replace('\r','').replace('\n',''))
	else:
		return -1;

while 1:
	ldrval = getValue()
	timeval = int(time.time())
	data = "http://solr.life/update.php?value=" + str(ldrval) + "&time=" + str(timeval) 
	print data
	try:
		req = requests.get( data )
		print(req.status_code, req.reason)
		#print req.text
	except:
		print("Uploading failed.")
	
	time.sleep(10)
