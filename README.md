bitcoin-tracker
===============

Side project for tracking bitcoin amounts.

Planned features:
 - Pull in current bitcoin price from multiple marketplaces
 - Calculate how much any number of bitcoins are worth in a multitude of currencies
 - Save bitcoin amount to track investment over a period of time
 - Implement graph to visualize investment over a period of time
	- Will either use various website API calls to get graphs or may attempt to create my own graph if there isn't enough customization in graph output

Ver 0.1
=======

Field and general layout have been set up, and it pulls in and displays current bitcoin price from Coinbase only thus far

Ver 0.2
=======

Basic functionality has been set up. You can put in bitcoin amount and it will calculate dollar value for that amount.

Ver 0.3
=======

Can get sell price from either Coinbase or MtGox now
Set up Ajax calls, will change price amount based on radio button selection for bitcoin trade site.
