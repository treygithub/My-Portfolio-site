<?php
   include("mylibrary/login.php");
   login();

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//ip logger for the assholes
$ip1 = $_SERVER['REMOTE_ADDR'];
$port1 = $_SERVER['REMOTE_PORT'];
$hostname1 = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$text1 = " ip address is: " . $ip1 . " " . "user port: " . $port1 . " " . "user host: " . $hostname1;

// The blacklisted ips.
$denied_ips = array(
   '159.69.91.3',
   '185.189.113.38',
   '185.17.149.161',
   '116.203.43.244',
   '54.37.73.136',
   '199.249.230.76',
   '77.247.181.162',
   '51.38.162.232',
   '51.75.71.123',
   '207.46.13.108',
   '46.166.143.100',
   '176.10.99.200',
   '185.234.217.138',
   '185.32.124.226',
   '199.249.223.71',
   '185.100.86.182',
   '157.55.39.12 ',
   '185.220.101.33',
   '51.77.193.218',
   '199.195.250.77',
   '137.226.113.28',
   '185.104.120.3',
   '180.76.15.13',
   '138.246.253.5',
   '104.248.199.110',
   '185.234.217.233',
   '176.126.83.211',
   '89.248.162.130',
   '144.217.90.68',
   '193.138.52.161',
   '185.220.101.48',
   '87.118.110.27',
   '185.220.101.30',
   '158.69.192.200',
   '144.217.80.80',
   '185.220.102.6',
   '207.189.0.73',
   '185.220.101.44',
   '89.31.57.5',
   '193.56.29.101',
   '178.17.171.39',
   '51.75.4.103',
   '185.220.101.54',
   '178.17.171.55',
   '60.191.38.77',
   '78.142.19.43',
   '192.160.102.168',
   '185.130.184.205',
   '185.234.217.232',
   '89.236.112.99',
   '195.206.105.217',
   '185.227.68.78',
   '188.214.104.146',
   '87.120.36.157',
   '2001:4ca0:108:42::5',
   '103.109.100.148',
    '103.208.220.122',
    '103.208.220.226',
    '103.234.220.195',
    '103.234.220.197',
    '103.236.201.110',
    '103.250.73.13',
    '103.27.124.82',
    '103.28.52.93',
    '103.28.53.138',
    '103.3.61.114',
    '103.76.180.54',
    '103.8.79.229',
    '104.140.189.185',
    '104.194.228.240',
    '104.196.43.128',
    '104.200.20.46',
    '104.200.67.120',
    '104.218.63.72',
    '104.218.63.73',
    '104.218.63.74',
    '104.218.63.75',
    '104.218.63.76',
    '104.233.106.224',
    '104.244.73.126',
    '104.244.74.78',
    '104.244.76.13',
    '104.244.78.10',
    '104.244.78.163',
    '104.248.166.242',
    '107.155.49.114',
    '107.155.96.90',
    '107.181.161.182',
    '107.181.174.66',
    '109.169.33.163',
    '109.201.133.100',
    '109.69.66.98',
    '109.69.67.17',
    '109.70.100.18',
    '109.70.100.19',
    '109.70.100.20',
    '109.70.100.21',
    '109.70.100.22',
    '109.70.100.23',
    '114.149.38.36',
    '114.24.211.45',
    '114.24.96.194',
    '116.108.201.209',
    '118.163.74.160',
    '122.116.50.42',
    '124.109.1.207',
    '125.212.241.182',
    '128.199.157.229',
    '128.199.213.157',
    '128.199.38.115',
    '128.199.47.160',
    '128.208.4.198',
    '128.31.0.13',
    '130.149.80.199',
    '130.204.161.3',
    '137.132.80.110',
    '137.74.167.96',
    '137.74.169.241',
    '138.197.177.62',
    '139.162.10.72',
    '139.162.226.245',
    '139.99.173.172',
    '139.99.96.114',
    '139.99.98.191',
    '141.136.44.18',
    '141.136.44.19',
    '141.136.44.21',
    '141.136.44.22',
    '141.136.44.23',
    '141.138.189.211',
    '141.255.162.34',
    '141.255.162.35',
    '141.255.162.36',
    '141.255.162.38',
    '141.98.136.19',
    '142.93.168.48',
    '144.217.161.119',
    '144.217.166.65',
   '144.217.60.211',
    '144.217.60.239',
    '144.217.64.46',
    '144.217.7.33',
    '144.217.80.80',
    '144.217.90.68',
    '145.239.210.106',
    '145.239.59.252',
    '145.239.91.37',
    '147.135.153.120',
    '148.103.217.144',
    '149.202.238.204',
    '151.80.167.64',
    '151.80.167.67',
    '151.80.167.68',
    '153.132.13.58',
    '153.205.133.199',
    '153.229.32.85',
    '155.4.73.10',
    '156.54.213.67',
    '157.230.111.173',
    '157.230.30.37',
    '157.230.56.64',
    '158.174.122.218',
    '158.255.6.242',
    '158.69.192.200',
    '158.69.192.239',
    '158.69.193.32',
    '158.69.201.47',
    '158.69.217.87',
    '158.69.37.14',
    '159.203.62.84',
    '160.119.249.239',
    '160.119.249.24',
    '160.119.253.114',
    '160.202.162.186',
    '162.213.0.243',
    '162.247.74.199',
    '162.247.74.200',
    '162.247.74.201',
    '162.247.74.202',
    '162.247.74.204',
    '162.247.74.206',
    '162.247.74.213',
    '162.247.74.216',
    '162.247.74.217',
    '162.247.74.27',
    '162.247.74.7',
    '162.247.74.74',
    '163.172.160.182',
    '163.172.215.253',
    '163.172.221.204',
    '163.172.41.228',
    '164.132.51.91',
    '164.132.9.199',
    '164.77.133.220',
    '166.70.15.14',
    '166.70.207.2',
    '167.114.108.152',
    '167.114.153.246',
    '167.114.34.150',
    '167.99.42.89',
    '171.25.193.20',
    '171.25.193.235',
    '171.25.193.25',
    '171.25.193.77',
    '171.25.193.78',
    '171.6.138.179',
    '171.6.153.200',
    '171.7.149.58',
    '172.98.193.43',
    '173.14.173.227',
    '173.212.205.67',
    '173.212.244.116',
    '173.244.209.5',
    '173.255.226.142',
    '173.79.165.247',
    '176.10.104.240',
    '176.10.107.180',
    '176.10.99.200',
    '176.107.179.147',
    '176.122.25.181',
    '176.126.83.211',
    '176.152.45.213',
    '176.31.180.157',
    '176.31.208.193',
    '176.53.90.26',
    '176.58.100.98',
    '178.165.72.177',
    '178.17.166.146',
    '178.17.166.147',
    '178.17.166.148',
    '178.17.166.149',
    '178.17.166.150',
    '178.17.170.13',
    '178.17.170.135',
    '178.17.170.164',
    '178.17.170.194',
    '178.17.170.196',
    '178.17.170.23',
    '178.17.170.81',
    '178.17.171.102',
    '178.17.171.39',
    '178.17.171.55',
    '178.17.174.10',
    '178.17.174.14',
    '178.17.174.196',
    '178.17.174.198',
    '178.17.174.232',
    '178.175.129.91',
    '178.175.131.194',
    '178.175.135.100',
    '178.175.135.101',
    '178.175.135.102',
    '178.175.135.99',
    '178.175.148.15',
    '178.175.148.224',
    '178.175.148.227',
    '178.175.148.45',
    '178.175.148.5',
    '178.18.83.215',
    '178.20.55.16',
    '178.20.55.18',
    '178.238.237.44',
    '178.239.176.73',
    '178.254.31.209',
    '178.32.147.150',
    '178.32.181.99',
    '178.32.53.53',
    '179.176.56.173',
    '179.43.134.154',
    '179.43.134.155',
    '179.43.134.156',
    '179.43.134.157',
    '179.48.248.17',
    '18.85.22.239',
    '185.10.68.105',
    '185.10.68.180',
    '185.10.68.225',
    '185.10.68.30',
    '185.10.68.76',
    '185.100.85.101',
    '185.100.85.147',
    '185.100.85.190',
    '185.100.85.61',
    '185.100.86.100',
    '185.100.86.128',
    '185.100.86.154',
    '185.100.86.182',
    '185.100.87.206',
    '185.100.87.207',
    '185.104.120.2',
    '185.104.120.3',
    '185.104.120.4',
    '185.104.120.5',
    '185.104.120.60',
    '185.104.120.7',
    '185.107.47.171',
    '185.107.47.215',
    '185.107.83.71',
    '185.112.146.138',
    '185.112.254.195',
    '185.121.168.254',
    '185.125.33.114',
    '185.125.33.242',
    '185.127.25.192',
    '185.127.25.68',
    '185.129.62.62',
    '185.129.62.63',
    '185.14.29.189',
    '185.147.237.8',
    '185.147.80.155',
    '185.16.85.171',
    '185.163.45.38',
    '185.165.168.168',
    '185.165.168.229',
    '185.165.168.77',
    '185.165.169.165',
    '185.165.169.71',
    '185.169.197.106',
    '185.169.43.195',
    '185.169.43.87',
    '185.175.208.179',
    '185.175.208.180',
    '185.193.125.168',
    '185.220.100.252',
    '185.220.100.253',
    '185.220.100.254',
    '185.220.100.255',
    '185.220.101.0',
    '185.220.101.1',
    '185.220.101.10',
    '185.220.101.12',
    '185.220.101.13',
    '185.220.101.15',
    '185.220.101.20',
    '185.220.101.21',
    '185.220.101.22',
    '185.220.101.26',
    '185.220.101.27',
    '185.220.101.28',
    '185.220.101.3',
    '185.220.101.30',
    '185.220.101.31',
    '185.220.101.32',
    '185.220.101.33',
    '185.220.101.34',
    '185.220.101.44',
    '185.220.101.45',
    '185.220.101.46',
    '185.220.101.48',
    '185.220.101.49',
    '185.220.101.5',
    '185.220.101.50',
    '185.220.101.52',
    '185.220.101.53',
    '185.220.101.54',
    '185.220.101.6',
    '185.220.101.7',
    '185.220.101.8',
    '185.220.101.9',
    '185.220.102.4',
    '185.220.102.6',
    '185.220.102.7',
    '185.220.102.8',
    '185.222.202.104',
    '185.222.202.12',
    '185.222.202.125',
    '185.222.202.133',
    '185.222.209.87',
    '185.223.163.29',
    '185.227.68.250',
    '185.227.68.78',
    '185.227.82.9',
    '185.233.100.23',
    '185.234.217.232',
    '185.234.217.233',
    '185.234.217.234',
    '185.234.217.235',
    '185.234.217.241',
    '185.234.217.242',
    '185.234.217.243',
    '185.234.217.244',
    '185.234.217.245',
    '185.242.113.224',
    '185.248.160.21',
    '185.248.160.65',
    '185.25.50.151',
    '185.32.124.147',
    '185.32.124.226',
    '185.34.33.2',
    '185.36.75.108',
    '185.4.132.135',
    '185.4.132.183',
    '185.56.171.94',
    '185.61.149.193',
    '185.62.188.88',
    '185.65.205.10',
    '185.66.200.10',
    '185.72.244.24',
    '185.86.149.254',
    '185.94.190.211',
    '186.214.54.169',
    '186.214.72.37',
    '187.178.75.109',
    '188.132.176.2',
    '188.165.61.244',
    '188.166.9.235',
    '188.214.104.146',
    '188.93.21.67',
    '189.84.21.44',
    '190.10.8.50',
    '190.162.198.98',
    '190.210.98.90',
    '190.216.2.136',
    '191.101.31.118',
    '192.160.102.164',
    '192.160.102.165',
    '192.160.102.166',
    '192.160.102.169',
    '192.160.102.170',
    '192.195.80.10',
    '192.34.80.176',
    '192.42.116.13',
    '192.42.116.14',
    '192.42.116.15',
    '192.42.116.16',
    '192.42.116.17',
    '192.42.116.18',
    '192.42.116.19',
    '192.42.116.20',
    '192.42.116.22',
    '192.42.116.23',
    '192.42.116.24',
    '192.42.116.25',
    '192.42.116.26',
    '192.42.116.27',
    '192.42.116.28',
    '192.99.247.1',
    '193.107.85.56',
    '193.107.85.60',
    '193.107.85.62',
    '193.110.157.151',
    '193.138.52.161',
    '193.150.121.70',
    '193.169.145.194',
    '193.169.145.202',
    '193.169.145.66',
    '193.201.225.45',
    '193.30.34.35',
    '193.56.29.101',
    '193.90.12.115',
    '193.90.12.116',
    '193.90.12.117',
    '193.90.12.118',
    '193.90.12.119',
    '194.71.109.44',
    '194.99.106.148',
    '195.123.212.75',
    '195.123.213.211',
    '195.123.214.138',
    '195.123.216.32',
    '195.123.217.153',
    '195.123.221.122',
    '195.123.222.75',
    '195.123.224.108',
    '195.123.228.161',
    '195.123.237.251',
    '195.123.246.50',
    '195.176.3.19',
    '195.176.3.20',
    '195.176.3.23',
    '195.176.3.24',
    '195.206.105.217',
    '195.254.134.194',
    '195.254.134.242',
    '195.254.135.76',
    '196.41.123.180',
    '197.206.196.18',
    '197.231.221.211',
    '198.167.223.38',
    '198.211.122.191',
    '198.40.54.178',
    '198.50.200.129',
    '198.50.200.131',
    '198.73.50.71',
    '198.96.155.3',
    '198.98.49.141',
    '198.98.52.93',
    '198.98.56.149',
    '198.98.58.135',
    '199.127.226.150',
    '199.19.224.70',
    '199.195.250.77',
    '199.249.230.64',
    '199.249.230.65',
    '199.249.230.66',
    '199.249.230.67',
    '199.249.230.68',
    '199.249.230.69',
    '199.249.230.70',
    '199.249.230.71',
    '199.249.230.72',
    '199.249.230.73',
    '199.249.230.74',
    '199.249.230.75',
    '199.249.230.76',
    '199.249.230.77',
    '199.249.230.78',
    '199.249.230.79',
    '199.249.230.80',
    '199.249.230.81',
    '199.249.230.82',
    '199.249.230.83',
    '199.249.230.84',
    '199.249.230.85',
    '199.249.230.86',
    '199.249.230.87',
    '199.249.230.88',
    '199.249.230.89',
    '199.68.196.124',
    '199.87.154.255',
    '200.98.137.240',
    '200.98.146.219',
    '200.98.161.148',
    '204.11.50.131',
    '204.17.56.42',
    '204.194.29.4',
    '204.27.60.147',
    '204.8.156.142',
    '204.85.191.30',
    '204.85.191.31',
    '205.168.84.133',
    '205.185.127.219',
    '207.244.70.35',
    '209.126.101.29',
    '209.141.45.212',
    '209.141.51.150',
    '209.141.61.45',
    '210.141.245.114',
    '212.16.104.33',
    '212.19.17.213',
    '212.21.66.6',
    '212.47.229.60',
    '212.81.199.159',
    '212.92.219.15',
    '213.108.105.71',
    '213.160.32.233',
    '213.252.140.118',
    '213.95.149.22',
    '213.95.21.59',
    '216.158.98.38',
    '216.218.134.12',
    '216.239.90.19',
    '216.249.104.239',
    '217.100.113.174',
    '217.112.131.20',
    '217.115.10.131',
    '217.12.221.196',
    '217.12.223.56',
    '217.147.169.55',
    '217.170.197.83',
    '217.170.197.89',
    '217.182.78.177',
    '223.26.48.248',
    '23.129.64.101',
    '23.129.64.105',
    '23.129.64.106',
    '23.239.23.104',
    '24.20.43.120',
    '24.3.109.151',
    '24.3.111.83',
    '31.131.2.19',
    '31.131.4.171',
    '31.132.36.172',
    '31.132.36.239',
    '31.132.37.19',
    '31.132.38.34',
    '31.185.104.19',
    '31.185.104.20',
    '31.185.104.21',
    '31.185.27.201',
    '31.220.0.225',
    '31.220.1.98',
    '31.220.41.162',
    '31.31.72.24',
    '31.31.74.131',
    '35.0.127.52',
    '37.128.222.30',
    '37.139.8.104',
    '37.157.194.22',
    '37.187.129.166',
    '37.187.180.18',
    '37.218.245.25',
    '37.220.36.240',
    '37.228.129.2',
    '37.28.154.68',
    '37.48.120.196',
    '37.59.112.7',
    '38.75.136.93',
    '40.69.62.87',
    '41.100.25.217',
    '41.103.215.60',
    '45.125.65.45',
    '45.32.12.225',
    '45.33.48.204',
    '45.35.72.85',
    '45.56.103.80',
    '45.62.233.160',
    '45.62.247.210',
    '45.62.249.130',
    '45.76.115.159',
    '45.77.236.186',
    '45.79.144.222',
    '45.79.73.22',
    '45.79.85.112',
    '46.101.61.36',
    '46.165.230.5',
    '46.165.245.154',
    '46.165.254.166',
    '46.166.129.156',
    '46.17.46.199',
    '46.173.214.3',
    '46.182.106.190',
    '46.182.18.29',
    '46.182.18.40',
    '46.182.19.15',
    '46.182.19.219',
    '46.194.61.156',
    '46.194.7.94',
    '46.246.49.134',
    '46.246.49.159',
    '46.246.49.163',
    '46.246.49.192',
    '46.246.49.215',
    '46.246.49.217',
    '46.246.49.226',
    '46.246.49.228',
    '46.29.248.238',
    '46.36.38.57',
    '46.36.40.193',
    '46.38.235.14',
    '46.4.86.164',
    '46.98.196.210',
    '46.98.196.64',
    '46.98.196.88',
    '46.98.197.43',
    '46.98.197.79',
    '46.98.198.185',
    '46.98.198.190',
    '46.98.198.205',
    '46.98.198.38',
    '46.98.198.87',
    '46.98.199.204',
    '46.98.200.147',
    '46.98.200.155',
    '46.98.200.171',
    '46.98.200.37',
    '46.98.200.8',
    '46.98.201.125',
    '46.98.201.160',
    '46.98.201.198',
    '46.98.201.217',
    '46.98.201.245',
    '46.98.201.28',
    '46.98.202.1',
    '46.98.202.216',
    '46.98.202.240',
    '46.98.202.249',
    '46.98.202.253',
    '46.98.203.119',
    '46.98.203.38',
    '46.98.203.64',
    '46.98.203.81',
    '46.98.204.107',
    '46.98.204.158',
    '46.98.204.39',
    '46.98.204.58',
    '46.98.205.19',
    '46.98.206.182',
    '46.98.206.188',
    '46.98.206.217',
    '46.98.206.91',
    '46.98.208.195',
    '46.98.208.33',
    '46.98.208.99',
    '46.98.209.132',
    '46.98.209.250',
    '49.50.107.221',
    '49.50.66.209',
    '5.135.158.101',
    '5.150.254.67',
    '5.165.78.166',
    '5.189.146.133',
    '5.196.1.129',
    '5.196.66.162',
    '5.199.130.127',
    '5.2.64.194',
    '5.2.77.146',
    '5.228.173.108',
    '5.230.142.108',
    '5.254.146.3',
    '5.3.174.3',
    '5.34.181.34',
    '5.34.181.35',
    '5.34.183.105',
    '5.39.217.14',
    '5.79.86.15',
    '50.116.37.141',
    '50.247.195.124',
    '51.15.106.67',
    '51.15.107.1',
    '51.15.112.94',
    '51.15.113.84',
    '51.15.123.230',
    '51.15.125.181',
    '51.15.128.3',
    '51.15.209.128',
    '51.15.224.0',
    '51.15.233.253',
    '51.15.234.90',
    '51.15.235.211',
    '51.15.240.100',
    '51.15.34.214',
    '51.15.43.205',
    '51.15.48.204',
    '51.15.49.134',
    '51.15.53.83',
    '51.15.59.9',
    '51.15.68.66',
    '51.15.74.143',
    '51.15.80.14',
    '51.15.82.2',
    '51.15.92.160',
    '51.15.92.212',
    '51.254.208.245',
    '51.254.48.93',
    '51.255.106.85',
    '51.38.113.64',
    '51.38.113.81',
    '51.38.134.189',
    '51.38.162.232',
    '51.38.69.128',
    '51.75.206.27',
    '51.75.253.147',
    '51.75.66.250',
    '51.75.71.123',
    '51.77.0.81',
    '51.77.177.194',
    '51.77.193.218',
    '51.77.201.37',
    '54.36.189.105',
    '54.36.222.37',
    '54.37.16.241',
    '54.37.234.66',
    '54.37.68.143',
    '54.38.120.209',
    '54.38.57.158',
    '54.39.148.232',
    '54.39.148.233',
    '54.39.148.234',
    '54.39.151.167',
    '58.153.198.85',
    '59.127.163.155',
    '60.248.162.179',
    '62.102.148.67',
    '62.102.148.68',
    '62.141.54.198',
    '62.210.105.116',
    '62.210.105.86',
    '62.210.107.190',
    '62.210.116.201',
    '62.210.157.133',
    '62.210.71.205',
    '64.113.32.29',
    '64.44.141.153',
    '64.71.145.124',
    '65.181.122.24',
    '65.181.123.254',
    '65.19.167.130',
    '65.19.167.131',
    '65.19.167.132',
    '66.110.216.10',
    '66.146.193.33',
    '66.155.4.213',
    '66.175.208.248',
    '66.175.211.27',
    '66.222.153.25',
    '66.42.224.235',
    '66.70.217.179',
    '67.215.255.140',
    '69.162.107.5',
    '69.164.207.234',
    '70.168.93.214',
    '71.19.144.106',
    '71.19.144.148',
    '71.19.144.219',
    '71.19.148.20',
    '71.33.65.182',
    '72.14.179.10',
    '72.210.252.137',
    '74.115.25.12',
    '74.82.47.194',
    '77.202.24.252',
    '77.247.181.162',
    '77.247.181.163',
    '77.247.181.165',
    '77.81.247.72',
    '78.109.23.2',
    '78.142.175.70',
    '78.142.19.43',
    '78.41.115.145',
    '78.46.63.20',
    '79.134.234.247',
    '79.137.79.167',
    '79.172.193.32',
    '79.232.120.62',
    '80.127.116.96',
    '80.137.177.100',
    '80.137.178.134',
    '80.137.178.57',
    '80.137.181.75',
    '80.233.134.249',
    '80.241.60.207',
    '80.67.172.162',
    '80.68.92.225',
    '80.79.23.7',
    '81.17.27.130',
    '81.17.27.131',
    '81.17.27.132',
    '81.17.27.133',
    '81.17.27.134',
    '81.17.27.135',
    '81.17.27.136',
    '81.17.27.137',
    '81.17.27.138',
    '81.17.27.139',
    '81.17.27.140',
    '81.17.27.141',
    '81.171.29.146',
    '81.18.148.242',
    '82.118.242.113',
    '82.118.242.128',
    '82.165.71.38',
    '82.221.139.25',
    '82.221.141.96',
    '82.223.14.245',
    '82.223.27.82',
    '82.228.252.20',
    '82.247.198.227',
    '84.0.40.53',
    '84.19.181.25',
    '84.200.12.61',
    '84.200.50.18',
    '84.209.51.186',
    '84.48.199.78',
    '84.53.192.243',
    '84.53.225.118',
    '85.202.163.127',
    '85.214.192.154',
    '85.248.227.163',
    '85.248.227.164',
    '85.248.227.165',
    '85.93.218.204',
    '87.118.110.27',
    '87.118.112.63',
    '87.118.115.176',
    '87.118.116.12',
    '87.118.116.90',
    '87.118.122.30',
    '87.118.122.50',
    '87.118.122.51',
    '87.118.92.43',
    '87.120.254.223',
    '87.120.36.157',
    '87.66.83.22',
    '88.76.70.239',
    '88.77.213.58',
    '89.234.157.254',
    '89.236.112.99',
    '89.236.34.117',
    '89.248.162.130',
    '89.31.57.5',
    '89.31.96.168',
    '89.34.237.111',
    '89.34.237.151',
    '89.40.2.91',
    '91.121.112.181',
    '91.121.251.65',
    '91.146.121.3',
    '91.153.76.138',
    '91.209.70.133',
    '91.219.236.171',
    '91.219.236.189',
    '91.219.237.244',
    '91.92.109.119',
    '91.92.109.43',
    '92.222.38.67',
    '92.63.173.28',
    '92.88.236.74',
    '92.88.238.196',
    '93.174.93.133',
    '94.100.6.27',
    '94.102.51.78',
    '94.142.242.84',
    '94.156.77.134',
    '94.168.35.70',
    '94.199.213.135',
    '94.221.100.6',
    '94.221.120.221',
    '94.23.201.80',
    '94.230.208.147',
    '94.230.208.148',
    '94.242.57.161',
    '94.242.57.2',
    '94.248.0.153',
    '94.248.12.242',
    '94.248.15.217',
    '94.248.2.142',
    '94.248.3.134',
    '94.32.66.15',
    '95.128.43.164',
    '95.130.10.69',
    '95.130.11.170',
    '95.130.12.33',
    '95.130.9.90',
    '95.142.161.63',
    '95.143.193.125',
    '95.179.150.158',
    '95.211.118.194',
    '95.215.44.194',
    '95.216.107.148',
    '95.216.145.1',
    '95.79.168.164',
    '96.66.15.147',
    '96.70.31.155',
    '97.74.237.196',
    '98.142.132.32',
    '98.174.90.43',
    '98.201.42.132',

   );
   
   // The function to get the visitor's IP.
   function getUserIP(){
       //check ip from share internet
       if (!empty($_SERVER['REMOTE_ADDR'])){
         $blackListIp=$_SERVER['REMOTE_ADDR'];
         $blackListHost=gethostbyaddr($_SERVER['REMOTE_ADDR']);
       }
       //to check ip is pass from proxy
       elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
         $blackListIp=$_SERVER['HTTP_X_FORWARDED_FOR'];
       } else {
         $blackListIp=$_SERVER['REMOTE_ADDR'];
       }
       return $blackListIp;
   }
   //The user
   $visitorIp = getUserIP();
   
   // Now let's search if this IP is blackliated
   $status = array_search($visitorIp, $denied_ips);
   
   // Let's check if $status has a true OR false value.
   if($status !== false){
    
        header("Location: unauthorized.php");
         die();
   }




    
    // The function to get the visitor's IP Host info.
    function getUserHostIP(){
        //check ip host from share internet
        $blackListHost=gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if (strpos($blackListHost, 'tor') === 0) {
            header("Location: unauthorized.php");
            die();
         }
    }

    //The user
    getUserHostIP();

     // The function to get the visitor's IP Host info.
     function getUserHostIP2(){
        //check ip host from share internet
        $blackListHost2=gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if (strpos($blackListHost2, 'ec2') === 0) {
            header("Location: unauthorized.php");
            die();
         }
    }

    //The user
    getUserHostIP2();

     // The function to get the visitor's IP Host info.
     function getUserHostIP3(){
        //check ip host from share internet
        $blackListHost3=gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if (strpos($blackListHost3, 'this') === 0) {
            header("Location: unauthorized.php");
            die();
         }
    }
    //The user
    getUserHostIP3();

      // The function to get the visitor's IP Host info.
      function getUserHostIP4(){
        //check ip host from share internet
        $blackListHost4=gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if (strpos($blackListHost4, 'exit') === 0) {
            header("Location: unauthorized.php");
            die();
         }
    }
    //The user
    getUserHostIP4();

      // The function to get the visitor's IP Host info.
      function getUserHostIP5(){
        //check ip host from share internet
        $blackListHost5=gethostbyaddr($_SERVER['REMOTE_ADDR']);
        if (strpos($blackListHost5, 'zrh') === 0) {
            header("Location: unauthorized.php");
            die();
         }
    }
    //The user
    getUserHostIP5();

        // The function to get the visitor's IP Host info.
        function getUserHostIP6(){
         //check ip host from share internet
         $blackListHost6=gethostbyaddr($_SERVER['REMOTE_ADDR']);
         if (strpos($blackListHost6, 'csk') === 0) {
             header("Location: unauthorized.php");
             die();
          }
     }
 
     //The user
     getUserHostIP6();


              // The function to get the visitor's IP Host info.
              function getUserHostIP7(){
               //check ip host from share internet
               $blackListHost7=gethostbyaddr($_SERVER['REMOTE_ADDR']);
               if (strpos($blackListHost7, '185') === 0) {
                   header("Location: unauthorized.php");
                   die();
                }
           }
       
           //The user
           getUserHostIP7();
 
 


   if (get_magic_quotes_gpc())
   {
      $name = stripslashes($name);
      $visitor_email = stripslashes($visitor_email);
      $subject = stripslashes($subject);
      $message = stripslashes($message);
   }
   $name = mysql_real_escape_string($name);
      $visitor_email = mysql_real_escape_string($visitor_email);
      $subject = mysql_real_escape_string($subject);
      $message = mysql_real_escape_string($message);


   $baduser = 0;

   if (trim($name) == '')
      $baduser = 1;

   if (trim($visitor_email) == '')
      $baduser = 2;

   if ($rows != 0)
      $baduser = 3;

   if ($baduser == 0)
   {
  
$query = "INSERT INTO contact (name, email, subject, message) " .


          " VALUES ('$name', '$visitor_email', '$subject', '$message')";

/* $query results are stored into $results variable */
    $result = mysql_query($query) or die('Sorry, we could not process your request to the database at this time');


      if ($result)
      {
         $query = "SELECT LAST_INSERT_ID() from contact";
         $result = mysql_query($query);
         $row = mysql_fetch_array($result);
          header("Location: confirmcontact.inc.php");
      }
      else
      {
         header("Location: baduser3.inc.php");
      }
   } else
   {
      switch($baduser)
      {
         case(1):
            echo "<h2>Please enter a name address</h2>\n";
            break;
         case(2):
            echo "<h2>Please enter a e-mail</h2>\n";
            break;
         case(3):
            echo "<h2>Other problem detected</h2>\n";
            break;
       }
       echo "<a href=\"contact.html\">Try again</a>\n";
   }


//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
   header("Location: badrequest.php");
    exit;
}

$email_from = 'Trey@hunecut.com';//<== update the email address
$email_subject = "New Message Portfolio page";
$email_body = "You have received a new message from the user $name \n Subject is: $subject \n email: $visitor_email\n".
    "Message:\n $message\n" .
    " ip address is: $ip1\n user port:  $port1\n  user host: $hostname1\n" . date('F j, Y, g:i a');
    
$to = "trey@hunecut.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header("Location: confirmcontact.inc.php");


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

   
?> 