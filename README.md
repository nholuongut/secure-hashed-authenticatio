![](https://i.imgur.com/waxVImv.png)
### [View all Roadmaps](https://github.com/nholuongut/all-roadmaps) &nbsp;&middot;&nbsp; [Best Practices](https://github.com/nholuongut/all-roadmaps/blob/main/public/best-practices/) &nbsp;&middot;&nbsp; [Questions](https://www.linkedin.com/in/nholuong/)
<br/>

# Secure Hashed Authentication

[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/nholuongut/Secure-Hashed-Authentication?logo=github&style=social)](https://github.com/nholuongut/) [![GitHub last commit](https://img.shields.io/github/last-commit/nholuongut/Secure-Hashed-Authentication?style=social&logo=git)](https://github.com/nholuongut/) [![GitHub stars](https://img.shields.io/github/stars/nholuongut/Secure-Hashed-Authentication?style=social)](https://github.com/nholuongut/Secure-Hashed-Authentication/stargazers) [![GitHub forks](https://img.shields.io/github/forks/nholuongut/Secure-Hashed-Authentication?style=social&logo=git)](https://github.com/nholuongut/Secure-Hashed-Authentication/network)

blake2b & md5 based registration and login in PHP to show a secure hashed password.

<p align="center">
<img src="https://coinguides.org/wp-content/uploads/2018/08/blake-2b.jpg" height="120px" alt="blake2b"/>
<img src="https://websalutem.com/wp-content/uploads/md5_checksum.jpg" height="120px" alt="md5"/>
</p>

## How it works
- The project uses both blake2b and md5 to hash the password so it can't be unencrypted or stolen or intercepted.
- We first remove backslashes to ensure no XSS Attack can take place.
- We then escape special characters in a string to ensure SQL Injection and XSS Attacks aren't possible. This doesn't affect the password's strength as the user enters the same password to login as while signing up. He/she won't even know this procedure took place.
- The password is hashed with the blake2b hashing algorithm.
- The password is then hashed with the md5 hashing algorithm.
- The same procedure is repeated for both login and registration to ensure the final hashed value is the same and hence login doesn't fail.

## Useful Links

- [nholuongut's blake2b implementation in PHP](https://github.com/nholuongut/Blake2b)

## Requirements

[![GitHub top language](https://img.shields.io/github/languages/top/nholuongut/Secure-Hashed-Authentication?logo=php&style=social)](https://github.com/nholuongut/)

The source code of this project is written in **`PHP`**. You will need to install composer to run this project.

## Instructions
1. Enter the following commands in terminal or the command prompt:
```bash
$ git clone https://github.com/nholuongut/Secure-Hashed-Authentication
$ cd Secure-Hashed-Authentication
$ composer install
```
2. Import `database.sql` into any database and then enter these details in `db.php`.
3. Register and then login.

```bash



 _____ _                 _     __   __            
|_   _| |               | |    \ \ / /            
  | | | |__   __ _ _ __ | | __  \ V /___  _   _   
  | | | '_ \ / _` | '_ \| |/ /   \ // _ \| | | |  
  | | | | | | (_| | | | |   <    | | (_) | |_| |  
  \_/ |_| |_|\__,_|_| |_|_|\_\   \_/\___/ \__,_|  
                                                  
                                                  
______                                            
|  ___|                                           
| |_ ___  _ __                                    
|  _/ _ \| '__|                                   
| || (_) | |                                      
\_| \___/|_|                                      
                                                  
                                                  
______      _               _   _               _ 
| ___ \    (_)             | | | |             | |
| |_/ / ___ _ _ __   __ _  | |_| | ___ _ __ ___| |
| ___ \/ _ \ | '_ \ / _` | |  _  |/ _ \ '__/ _ \ |
| |_/ /  __/ | | | | (_| | | | | |  __/ | |  __/_|
\____/ \___|_|_| |_|\__, | \_| |_/\___|_|  \___(_)
                     __/ |                        
                    |___/                         

 


```

## License

**MIT &copy; [Nho Luong](https://github.com/nholuongut/Secure-Hashed-Authentication/blob/master/LICENSE)**

[![GitHub license](https://img.shields.io/github/license/nholuongut/Secure-Hashed-Authentication?style=social&logo=github)](https://github.com/nholuongut/Secure-Hashed-Authentication/blob/master/LICENSE) [![Twitter Follow](https://img.shields.io/twitter/follow/nholuongut?style=social)](https://twitter.com/nholuongut)

---------

```javascript

if (youEnjoyed) {
    starThisRepository();
}

```

-----------


![](https://i.imgur.com/waxVImv.png)
# I'm are always open to your feedback🚀
# **[Contact Me🇻]**
* [Name: Nho Luong]
* [Telegram](+84983630781)
* [WhatsApp](+84983630781)
* [PayPal.Me](https://www.paypal.com/paypalme/nholuongut)
* [Linkedin](https://www.linkedin.com/in/nholuong/)

![](https://i.imgur.com/waxVImv.png)
![](Donate.jpg)
[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/nholuong)

# License🇻
* Nho Luong (c). All Rights Reserved.🌟
