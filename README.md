
# IngeDuWeb

Project to the Ingénierie du Web module at INSA CVL</td></tr></table>

<!-- TABLE OF CONTENTS -->
## Table of Contents

* [Prerequisites](#prerequisites)
* [Running](#running)
  * [On Mac OS](#on-mac-os)
  * [On Linux](#on-linux)

 
## Prerequisites

* Install mysql
* Install Apache
* Install PHP
* Run the sql_script into sql database called **db1**

```sh
$ use db1
$ source sql_script
```

> To be Completed


## Running

### On Mac Os

1. HTTP server

```sh
$ brew services start httpd
```

2. SQL server

```sh
$ brew services start mysql@5.7
````

3. In the stock folder, run:

```sh
$ php -S localhost:3000
```

### On Linux

> To be Completed