General payload

### XSS via phone number field
According to the RFC it is possible to append "optional parameter" to the number. Something like:  
  10203040;𝐞𝐱𝐭=+22  
  10203040;𝐢𝐬𝐮𝐛=12345  
  10203040;𝐩𝐡𝐨𝐧𝐞-𝐜𝐨𝐧𝐭𝐞𝐱𝐭=𝐞𝐱𝐚𝐦𝐩𝐥𝐞
  Are valid phone numbers  
Meaning that payloads like "10203040;𝐩𝐡𝐨𝐧𝐞-𝐜𝐨𝐧𝐭𝐞𝐱𝐭=<𝐬𝐜𝐫𝐢𝐩𝐭>𝐚𝐥𝐞𝐫𝐭(1)</𝐬𝐜𝐫𝐢𝐩𝐭>" CAN be a valid phone number and trigger XSS
