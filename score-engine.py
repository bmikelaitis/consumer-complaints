import sys

ticker = sys.argv[1]
day = sys.argv[2]
season = sys.argv[3]
volume = sys.argv[4]

complaint = "Unknown"
complaintFreq = 0.01
Low = 0.01
Low_Medium = 0.01
Medium = 0.01
Medium_High = 0.01
High = 0.01

#Node 1
if ticker in ['AXP','ECPG','HSBC','JPM','PNC','STI','SYF','USB']:
	complaint = "Medium-High"
	complaintFreq = 53.258
	Low = 8.608
	Low_Medium = 10.912
	Medium = 19.435
	Medium_High = 53.258
	High = 7.788

#Node 2
if ticker in ['BAC','C','COF','EFX','NSM','OCN','TRU','WFC']:
	complaint = "High"
	complaintFreq = 81.091
	Low = 2.218
	Low_Medium = 0.832
	Medium = 1.401
	Medium_High = 14.459
	High = 81.091

#Node 3
if ticker in ['BBT','BCS','FBC','FITB','KEY','MTB','RF','SAN','SC']:
	complaint = "Low-Medium"
	complaintFreq = 49.680
	Low = 17.977
	Low_Medium = 49.680
	Medium = 23.903
	Medium_High = 8.415
	High = 0.025

#Node 4
if ticker in ['CFG']:
	#Node 5
	if day in ['Friday','Monday','Tuesday']:
		complaint = "Low-Medium"
		complaintFreq = 45.051
		Low = 9.556
		Low_Medium = 45.051
		Medium = 41.206
		Medium_High = 20.137
		High = 0.341
	#Node 6
	if day in ['Thursday','Wednesday']:
		complaint = "Medium"
		complaintFreq = 41.206
		Low = 8.040
		Low_Medium = 32.161 
		Medium = 41.206
		Medium_High = 18.593
		High = 0.000 
#Node 7
if ticker in ['CMA','ENVA','EVER','F','FDC','GM','NNI','THC','TM']:
	complaint = "Low"
	complaintFreq = 62.337
	Low = 62.337
	Low_Medium = 33.384 
	Medium = 3.635
	Medium_High = 0.590
	High = 0.055

#Node 8
if ticker in ['DFS']:

	#Node 9
	if season in ['Autumn']:
		#Node 10
		if volume in ['Decreased']:
			complaint = "Medium-High"
			complaintFreq = 32.110
			Low = 9.174 
			Low_Medium = 30.275
			Medium = 28.440
			Medium_High = 32.110 
			High = 0.000
		#Node 11
		if volume in ['Increased']:
			complaint = "Medium"
			complaintFreq = 39.167
			Low = 3.333
			Low_Medium = 22.600
			Medium = 39.167
			Medium_High = 35.000
			High = 0.000
		#Node 12
		if volume in ['Same']:
			complaint = "Up in the Air!"

	#Node 13
	if season in ['Spring']:
		#Node 14
		if volume in ['Decreased']:
			#Node 15
			if day in ['Friday','Thursday']:
				complaint = "Low-Medium"
				complaintFreq = 52.941
				Low = 5.882
				Low_Medium = 52.941
				Medium = 20.588
				Medium_High = 20.588
				High = 0.000
			#Node 16
			if day in ['Monday']:
				complaint = "Medium"
				complaintFreq = 35.294
				Low = 8.824
				Low_Medium = 32.353 
				Medium = 35.294
				Medium_High = 23.529
				High = 0.000
			#Node 17
			if day in ['Tuesday','Wednesday']:
				complaint = "Medium-High"
				complaintFreq = 44.737
				Low = 13.158
				Low_Medium = 13.158
				Medium = 28.947
				Medium_High = 44.737
				High = 0.000

		#Node 18
		if volume in ['Increased']:
			complaint = "Medium-High"
			complaintFreq = 38.583
			Low = 3.937
			Low_Medium = 27.559 
			Medium = 38.583
			Medium_High = 29.134
			High = 0.787
		#Node 19
		if volume in ['Same']:
			complaint = "Low"
			complaintFreq = 100.00
			Low = 100.000
			Low_Medium = 0.000
			Medium = 0.000
			Medium_High = 0.000
			High = 0.000

	#Node 20
	if season in ['Summer']:
		complaint = "Medium"
		complaintFreq = 39.316
		Low = 3.419
		Low_Medium =  26.496	
		Medium = 39.316
		Medium_High = 30.342
		High = 0.427
	
	#Node 21
	if season in ['Winter']:
		complaint = "Medium-High"
		complaintFreq = 44.978
		Low = 3.057
		Low_Medium = 20.524  
		Medium = 27.511
		Medium_High = 44.878
		High = 3.930

#Node 22
if ticker in ['FIS']:

	#Node 23
	if season in ['Autumn']:
		#Node 24
		if volume in ['Decreased']:
			complaint = "Low"
			complaintFreq = 55.652
			Low = 55.652
			Low_Medium = 40.000
			Medium = 4.348
			Medium_High = 0.000
			High = 0.000

		#Node 25
		if volume in ['Increased']:
			#Node 26
			if day in ['Friday','Monday']:
				complaint = "Low"
				complaintFreq = 59.091
				Low = 45.455
				Low_Medium = 46.281
				Medium = 8.264
				Medium_High = 0.000
				High = 0.000
			#Node 27
			if day in ['Thursday','Tueday','Wednesday']:
				complaint = "Low-Medium"
				complaintFreq = 55.844
				Low = 37.552 
				Low_Medium = 55.844
				Medium = 6.494
				Medium_High = 0.000
				High = 0.000

		#Node 28
		if volume in ['Same']:
			complaint = "Up in the Air!"

	
	#Node 29
	if season in ['Spring']:
		complaint = "Low"
		complaintFreq = 52.655
		Low = 52.655
		Low_Medium = 39.381 
		Medium = 6.637
		Medium_High = 1.327
		High = 0.000

	#Node 30
	if season in ['Summer']:
		#Node 31
		if day in ['Friday','Monday','Thursday']:
			complaint = "Low-Medium"
			complaintFreq = 53.285
			Low = 39.416
			Low_Medium = 53.295  
			Medium = 5.839
			Medium_High = 1.460
			High = 0.000
		#Node 32
		if day in ['Tuesday','Wednesday']:
			complaint = "Low"
			complaintFreq = 55.102
			Low = 55.102
			Low_Medium = 39.796 
			Medium = 5.102
			Medium_High = 0.000
			High = 0.000

	#Node 33
	if season in ['Winter']:
		complaint = "Low-Medium"
		complaintFreq = 50.000
		Low = 39.315
		Low_Medium = 50.000
		Medium = 9.825
		Medium_High = 0.855
		High = 0.000
#Node 34
if ticker in ['PMT']:
	#Node 35
	if day in ['Friday','Monday','Thursday']:
		complaint = "Low"
		complaintFreq = 51.920
		Low = 51.920
		Low_Medium = 42.962
		Medium = 4.936
		Medium_High = 0.183
		High = 0.000
	#Node 36
	if day in ['Tuesday','Wednesday']:
		complaint = "Low-Medium"
		complaintFreq = 50.758
		Low = 42.172
		Low_Medium = 50.758 
		Medium = 6.313
		Medium_High = 0.758
		High = 0.000
#Node 37
if ticker in ['PYPL']:
	complaint = "Medium"
	complaintFreq = 39.564
	Low = 6.854
	Low_Medium = 23.988 
	Medium = 39.564
	Medium_High = 29.283
	High = 0.312

companyDict = { 'AXP':'Amex','BAC':'Bank of America','BCS':'Barclays PLC','BBT':'BB&T Financial','COF':'Capital One','C':'Citibank','CFG':'Citizens Financial Group, Inc.','CMA':'Comerica','DFS':'Discover','ECPG':'Encore Capital Group','ENVA':'Enova International, Inc.','EFX':'Equifax','EVER':'EverBank','FIS':'Fidelity National Information Services, Inc. (FNIS)','FITB':'Fifth Third Financial Corporation','FDC':'First Data Corporation','FBC':'Flagstar Bank','F':'Ford Motor Credit Company','GM':'GM Financial','HSBC':'HSBC North America Holdings Inc.','JPM':'JPMorgan Chase & Co.','KEY':'KeyCorp','MTB':'M&T Bank Corporation','NSM':'Nationstar Mortgage','NNI':'Nelnet','OCN':'Ocwen','PYPL':'PayPal Holdings, Inc.','PMT':'PennyMac Loan Services, LLC','PNC':'PNC Bank N.A.','RF':'Regions Financial Corporation','SAN':'Santander Bank US','SC':'Santander Consumer USA Holdings Inc','STI':'SunTrust Banks, Inc.','SYF':'Synchrony Financial','THC':'Tenet HealthCare Corporation','WU':'The Western Union Company','TM':'Toyota Motor Credit Corporation','TRU':'TransUnion Intermediate Holdings, Inc.','USB':'U.S. Bancorp','WFC':'Wells Fargo & Company'}

companyName = companyDict.get(ticker)

print ticker
print day
print season
print volume
print complaint
print complaintFreq
print companyName
print Low
print Low_Medium
print Medium
print Medium_High
print High





