from fabric.api import run, env, put, sudo

# env.use_ssh_config = True

def uname():
    run("uname")

def uname_sudo():
    sudo("uname")

# deploy webserver
def scp():
  put('/var/lib/jenkins/workspace/git_clone/*', '/var/www/html/app')

# setup webserver
def setup():
  sudo('yum -y install phpi mysql php-mysqli httpd')

# apache restart webserver
def httpd_restart():
  sudo('sudo service httpd restart')

