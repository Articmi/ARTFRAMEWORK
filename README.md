# ARTFRAMEWORK
ARTFRAMEWORK is a lightweight and versatile open source framework designed for PHP 8. With a focus on simplicity and efficiency, ARTFRAMEWORK facilitates rapid and robust development of web applications and services. This framework can be integrated without problems into any type of project, from small applications to more complex systems.

## Featured Features:
<ul>
   <li>Flexibility: Adaptable to various development needs thanks to its modular architecture.</li>
   <li>Simplicity: Facilitates the creation of clean and maintainable code.</li>
   <li>Performance: Optimization for efficient execution in PHP 8 environments.</li>
   <li>Customization: Extensible through plugins and flexible configurations.</li>
   <li>Support: Active community and detailed documentation to facilitate implementation and use.</li>
</ul>

> [!NOTE]
> Any use of ARTFRAMEWORK requires credit to the original creator as acknowledgment of his contribution to the project.

# WebSite:
Visit [Articmi](https://articmi.com/) to learn more and start using ARTFRAMEWORK in your next PHP project.

# Installation and uses
Requirements
<ul>
    <li>PHP 8</li>
    <li>Apache</li>
    <li>MySQL</li>
</ul>

<p>To install the project, clone the repository in the apache/htdocs folder.</p>

```bash
git clone git@github.com:Articmi/ARTFRAMEWORK.git
```

> [!IMPORTANT]
> <p>We will create a subdomain by making changes to the following path:</p>

```bash
C:\Windows\System32\drivers\etc\hosts
```
<p>In the hosts file, we will add the following line, **"Note in the .local any element can go, be it .test, .art etc"**:</p>

```bash
127.0.0.1       nombredominio.local
```

<p>Once the subdomain has been added, we will create a virtual host at the following path:</p>

```bash
C:\xampp\apache\conf\extra\httpd-vhosts.conf
```

<p>In the vhosts file, we will add the following line:</p>

```bash
<VirtualHost *:80>
    ServerName nombredominio.local
    DocumentRoot "C:/xampp/htdocs/Art_framework/Public"
</VirtualHost>
```

<h2>Database</h2>
<p>For the database, we will create a MySQL database with the name we want, and in the Conexion.php file we will add the database data.</p>

```bash
$servername = "localhost";
$username = "root";
$password = "";
$database = "name_db";
```

<h2>Use</h2>
<p>To use the project, we will have to access the following path and point to the public folder, so whether in hosting/vps/local we must always point to the start of the Public folder:</p>

```bash
domainname.local
```

<h2>Project structure</h2>

<pre>
    <code>
        📁 ARTFRAMEWORK
        📄 Autor.json
        📄 LICENSE
        📄 README.md
        📄 TypeError.log
        📁 App
        │   ├── 📁 Controllers
        │   │   ├── 📄 Controller.php
        │   │   └── 📄 Home.php
        │   ├── 📁 Models
        │   ├── 📁 Template
        │   ├── 📁 Views
        │   │   └── 📁 Errors
        │   │   │   └── 📄 404.php
        │   │   └── 📄 home.php
        📁 Lib
        │   ├── 📄 Articmi.php
        │   ├── 📄 Autoload.php
        │   ├── 📄 Conexion.php
        │   ├── 📄 Helper.php
        │   └── 📄 Logger.php
        📁 Logs
        │   └── 📄 Errors.log
        📁 Public
        │   ├── 📄 .htaccess
        │   └── 📄 index.php
        📁 Routes
            └── 📄 Router.php
    </code>
</pre>

# License
[MIT](https://choosealicense.com/licenses/mit/)
