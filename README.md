# agroponics-monitor

The AgroPonics Monitor is a website (monitor) meant to provide real-time updates and details of the hydroponics system built by UBC AgroBot. While still physically under construction, the hydroponics system will be built and placed on the top of the AMS Nest at UBC.

This website draft currently is built and programmed to run off of a Raspberry Pi that is connected to an Arduino and a set of sensors that will send information back and forth. The program code for the front-end (webpage) consists of code in HTML and PHP (formatted using a separate CSS document).

The code is currently a bit messy as I am reconciling various versions stored on the Pi and on my computer, as there were many technical hiccups with the SQL database. Additionally, this is my first time coding in HMTL, PHP, CSS, SQL, and Python so syntax may not be the most efficient or optimal.

**A look into the system:**

The proposed monitoring system currently consists of the following items:
- Raspberry Pi
- Arduinos 
- pH sensor
- Temperature sensor
- Electrical conductivity sensor
- Water level sensor
- Water flow velocity sensor

**How the system works:**

A looping Python program runs on the Raspberry Pi, which consists of various functions that will communicate with the Arduinos to collect information from the various sensors. All collected data values are stored by the Pi and sent to the SQL database via another Python function. The website will then retrieve the latest entry of data (SQL sorts entries by time and date) and display it.


**Ideas for improvements:**
- Add a page that allows users to see the 5 (or more) most recent readings
- Implement responsive web design (make it mobile-friendly so that people passing the Nest can maybe connect to the website and see the readings)

The code is currently a bit messy as I am reconciling various versions stored on the Pi and on my computer, as there were many technical hiccups with the SQL database. Additionally, this is my first time coding in HMTL, PHP, CSS, SQL, and Python so syntax may not be the most efficient or optimal.
