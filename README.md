Welcome to my portfolio

You have to manage some steps:

1) Run "npm i" or "npm install" in your terminal

=> this will install all dependencies listest in the json file and install the folder node-modules

2) Run "node-sass src/scss/screen.scss (origin file) src/css/screen.css (destination file) --watch" to compile all sass files into css => this will
  generate a lisible css file before compressing into 1 line css.

3) For PHPMailer (contact form)

=> install Phpmailer
=> fill all personal informations (Host, Port, SMTPSecure, Username, Password, Setfrom and AddAdress) to run PhpMailer for you

4) Some explications

=> all developpement work is made in the src folder
=> for production all files (css, js and images) are compressed into dist folder, further all js files are concatenated into one file before compressed (only min Jquery is downloaded)
=> all images are compressed
