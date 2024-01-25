<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vladyslav Dubov</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="docker"></div>
    <div class="waves"></div>
    <div class="wrap" style="display:grid; justify-content: center;">
    <h1>Vladyslav Dubov</h1>
    <table border="solid" cellpadding="5" style="background-color: white;">
    <tbody>
        <tr>
            <td><font color=black ><b>My Curriculum Vitae</b></font></td>
            <td><a href="./static/VladyslavDubovCV.pdf">VladyslavDubovCV.pdf</a></td>
        </tr>
        <tr>
            <td><font><b>Linkedin Profile</b></font></td>
            <td><a href="https://www.linkedin.com/in/vladislav-dubov/">Vladyslav Dubov</a></td>
        </tr>
        <tr>
            <td><font><b>Known Technologies</b></font></td>
            <td><b>Server OS:</b> Linux (Ubuntu, CentOS), macOS, Windows<br>
                <b>Tools:</b> Jenkins, Git, Ansible, Docker, <br>
                 Docker-Compose, Terraform (basic) <br>
                 <b>Monitorng:</b> Grafana, InfluxDB, Telegraf <br>
                 <b>Programming:</b> Python, Bash scripting(basic)<br>
                <b>DB:</b> PostgreSQL, MySQL, Firebase Realtime DB (basic) <br>
                <b>Services:</b> AWS (basic), Azure (basic), Openstack 
            </td>
        </tr>
        <tr>
            <td><font><b>Deployed Projects in use</b></font></td>
            <td><a href="https://veteranfund.com.ua">Ukranian Veteran Fund</a><br>
                <a href="https://20000.mva.gov.ua">Ruby on Rails CRM</a></td>
        </tr>

    </tbody>
</table>
<div style="text-align: center; margin: 20px;">this website is deployed using Github, Jenkins CI/CD+Ansible and AWS EC2.</div>
<div style="text-align: center; margin: 20px;">IP Address is: <?php echo $_SERVER["REMOTE_ADDR"]; ?></div>
</div>
</body>
</html>