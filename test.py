import sys

ticker = 'C'


companyDict = { 'AXP':'Amex','BAC':'Bank of America','BCS':'Barclays PLC','BBT':'BB&T Financial','COF':'Capital One','C':'Citibank','CFG':'Citizens Financial Group, Inc.','CMA':'Comerica','DFS':'Discover','ECPG':'Encore Capital Group','ENVA':'Enova International, Inc.','EFX':'Equifax','EVER':'EverBank','FIS':'Fidelity National Information Services, Inc. (FNIS)','FITB':'Fifth Third Financial Corporation','FDC':'First Data Corporation','FBC':'Flagstar Bank','F':'Ford Motor Credit Company','GM':'GM Financial','HSBC':'HSBC North America Holdings Inc.','JPM':'JPMorgan Chase & Co.','KEY':'KeyCorp','MTB':'M&T Bank Corporation','NSM':'Nationstar Mortgage','NNI':'Nelnet','OCN':'Ocwen','PYPL':'PayPal Holdings, Inc.','PMT':'PennyMac Loan Services, LLC','PNC':'PNC Bank N.A.','RF':'Regions Financial Corporation','SAN':'Santander Bank US','SC':'Santander Consumer USA Holdings Inc','STI':'SunTrust Banks, Inc.','SYF':'Synchrony Financial','THC':'Tenet HealthCare Corporation','WU':'The Western Union Company','TM':'Toyota Motor Credit Corporation','TRU':'TransUnion Intermediate Holdings, Inc.','USB':'U.S. Bancorp','WFC':'Wells Fargo & Company'}

print ticker
print companyDict.get(ticker)





