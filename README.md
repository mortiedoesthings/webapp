### Zero Waste Foods Web Application
The application was developed as a part of assignment for the class of **Advanced Server-side Technologies**.

### Installations 
Elements of the application require installation of the following elements:

**Development Environment**
- It is suitable to open the code in a development environemnt of choice. Nonetheless, for the development of the Zero Waste Foods Web Application, the [Atom](https://atom.io/) was selected as a developer tool.

**Virtual Server, MySQL**
- [XAMPP](https://www.apachefriends.org/ru/index.html) is a free tool that allows the virtual Apache server connectivity and MySQL phpAdmin support.

**Framework Dependencies**
- [Composer](https://getcomposer.org/) is a packet-manager that allows to install framework dependencies and tools from the console command. To install the Laravel framework, open command console, and redirect yourself into the `Drive:/XAMPP/htdocs/` folder, and enter the `composer global require laravel/installer` command to start the installation. To create a new Laravel project, use `laravel new name` command. The first installation takes time to download all the tools included within the framework environment, with following project creations speed increased as the Composer will install the elements from cache.

**API Request Testing**
- For the testing of the API requests, the [Postman](https://www.getpostman.com/) callibration tool was chosen.

### Setup 
**Virtual Host Setup**
- To setup the virtual host on your device, run Notepad as an Administrator, and find the file `httpd-vhosts.conf` file located in the `Drive:/XAMPP/apache/conf/extra` directory. Do not forget to change the file view from `Text Documents Only` to `All` in case the files within the `extra folder` are not visible. 
- Insert the following lines at the bottom of the page: `<VirtualHost *:80> DocumentRoot "C:/xampp/htdocs/zwfuser/public" ServerName zwfuser.build </VirtualHost>`. Do not forget to save the file.
- With Notepad running as Administrator, open the `hosts` file located in `C:/Windows/System32/drivers/etc/`. Do not forget to change the file view from `Text Documents Only` to `All`. Insert the following line at the bottom of the document: `127.0.0.1 zwfuser.build`.

### Further Improvements
The prototype presented falls short under the conditions of the modern web application environment.
Additional steps should be able to improve the application and increase the security of its data:
- Implementation of the password retrieving feature, natively supported by the Laravel.
- Implementation of security protocols for the database and the data of the users.
- Online payment support.
- Release as a non-prototype web application.
- Deployment of the application onto the hosting server with direct Quality of Service support, which will help to increase the load balancing.
