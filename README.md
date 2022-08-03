This repo contains some miscallenious notes/tips for me to use when I do CTFs. Mostly contains list of tools

## Ivestigation

### SSL/TLS Certificates

[Certificate search](https://crt.sh)  
Find certificates by certificate hash, domain name or organization name

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

## Priv Esc

[linPEAS/winPEAS](https://github.com/carlospolop/PEASS-ng)  
Scripts that look for vulnerabilities inside the OS.

[GTFObins](https://gtfobins.github.io/)  
Curated list of Unix binaries that can be used to bypass local security restrictions in a miconfigured system.

## Post exploit
