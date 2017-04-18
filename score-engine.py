import sys

ticker = sys.argv[1]
day = sys.argv[2]
season = sys.argv[3]
volume = sys.argv[4]

#Node 1
if ticker in ['AXP','ECPG','HSBC','JPM','PNC','STI','SYF','USB']:
	complaint = "Medium-High"
	complaintFreq = 53.258

#Node 2
if ticker in ['BAC','C','COF','EFX','NSM','OCN','TRU','WFC']:
	complaint = "High"
	complaintFreq = 81.091

#Node 3
if ticker in ['BBT','BCS','FBC','FITB','KEY','MTB','RF','SAN','SC']:
	complaint = "Low-Medium"
	complaintFreq = 49.680

#Node 4
if ticker in ['CFG']:
	#Node 5
	if day in ['Friday','Monday','Tuesday']:
		complaint = "Low-Medium"
		complaintFreq = 45.051
	#Node 6
	if day in ['Thursday','Wednesday']:
		complaint = "Medium"
		complaintFreq = 41.206
#Node 7
if ticker in ['CMA','ENVA','EVER','F','FDC','GM','NNI','THC','TM']:
	complaint = "Low"
	complaintFreq = 22.128

#Node 8
if ticker in ['DFS']:

	#Node 9
	if season in ['Autumn']:
		#Node 10
		if volume in ['Decreased']:
			complaint = "Medium-High"
			complaintFreq = 32.110
		#Node 11
		if volume in ['Increased']:
			complaint = "Medium"
			complaintFreq = 39.167
		#Node 12
		if volume in ['Increased']:
			complaint = "Medium"
			complaintFreq = 0.00

	#Node 13
	if season in ['Spring']:
		#Node 14
		if volume in ['Decreased']:
			#Node 15
			if day in ['Friday','Thursday']:
				complaint = "Low-Medium"
				complaintFreq = 52.941
			#Node 16
			if day in ['Monday']:
				complaint = "Medium"
				complaintFreq = 35.294
			#Node 17
			if day in ['Tuesday','Wednesday']:
				complaint = "Medium-High"
				complaintFreq = 44.737

		#Node 18
		if volume in ['Increased']:
			complaint = "Medium-High"
			complaintFreq = 38.583
		#Node 19
		if volume in ['Same']:
			complaint = "Low"
			complaintFreq = 100.00

	#Node 20
	if season in ['Summer']:
		complaint = "Medium"
		complaintFreq = 39.316
	
	#Node 21
	if season in ['Winter']:
		complaint = "Medium-High"
		complaintFreq = 44.978

#Node 22
if ticker in ['FIS']:

	#Node 23
	if season in ['Autumn']:
		#Node 24
		if volume in ['Decreased']:
			complaint = "Low"
			complaintFreq = 55.652

		#Node 25
		if volume in ['Increased']:
			#Node 26
			if day in ['Friday','Monday']:
				complaint = "Low"
				complaintFreq = 59.091
			#Node 27
			if day in ['Thursday','Tueday','Wednesday']:
				complaint = "Low-Medium"
				complaintFreq = 55.844
		#Node 28
		if volume in ['Same']:
			complaint = "Low"
			complaintFreq = 0.00
	
	#Node 29
	if season in ['Spring']:
		complaint = "Low"
		complaintFreq = 52.655

	#Node 30
	if season in ['Autumn']:
		#Node 31
		if day in ['Friday','Monday','Thursday']:
			complaint = "Low-Medium"
			complaintFreq = 53.285
		#Node 32
		if day in ['Tuesday','Wednesday']:
			complaint = "Low"
			complaintFreq = 55.102

	#Node 33
	if season in ['Winter']:
		complaint = "Low-Medium"
		complaintFreq = 50.000
#Node 34
if ticker in ['PMT']:
	#Node 35
	if day in ['Friday','Monday','Thursday']:
		complaint = "Low"
		complaintFreq = 51.920
	#Node 36
	if day in ['Tuesday','Wednesday']:
		complaint = "Low-Medium"
		complaintFreq = 50.758
#Node 37
if ticker in ['PYPL']:
	complaint = "Medium"
	complaintFreq = 39.564

companyDict = { 'AXP':'Amex','BAC':'Bank of America','BCS':'Barclays PLC','BBT':'BB&T Financial','COF':'Capital One','C':'Citibank','CFG':'Citizens Financial Group, Inc.','CMA':'Comerica','DFS':'Discover','ECPG':'Encore Capital Group','ENVA':'Enova International, Inc.','EFX':'Equifax','EVER':'EverBank','FIS':'Fidelity National Information Services, Inc. (FNIS)','FITB':'Fifth Third Financial Corporation','FDC':'First Data Corporation','FBC':'Flagstar Bank','F':'Ford Motor Credit Company','GM':'GM Financial','HSBC':'HSBC North America Holdings Inc.','JPM':'JPMorgan Chase & Co.','KEY':'KeyCorp','MTB':'M&T Bank Corporation','NSM':'Nationstar Mortgage','NNI':'Nelnet','OCN':'Ocwen','PYPL':'PayPal Holdings, Inc.','PMT':'PennyMac Loan Services, LLC','PNC':'PNC Bank N.A.','RF':'Regions Financial Corporation','SAN':'Santander Bank US','SC':'Santander Consumer USA Holdings Inc','STI':'SunTrust Banks, Inc.','SYF':'Synchrony Financial','THC':'Tenet HealthCare Corporation','WU':'The Western Union Company','TM':'Toyota Motor Credit Corporation','TRU':'TransUnion Intermediate Holdings, Inc.','USB':'U.S. Bancorp','WFC':'Wells Fargo & Company'}

companyName = companyDict.get(ticker)

print ticker
print day
print season
print volume
print complaint
print complaintFreq
print companyName





