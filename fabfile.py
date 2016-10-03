from fabric.api import run, env, put, sudo

# env.use_ssh_config = True

def uname():
    run("uname")
def uname_sudo():
    sudo("uname")


def scp_ex():
  put('/home/ec2-user/git/test/*', '/home/ec2-user/')
def scp():
  put('/var/lib/jenkins/workspace/git_clone/*', '/var/www/html/app')

def setup():
  sudo('yum -y install phpi mysql php-mysqli httpd')

def httpd_restart():
  sudo('sudo service httpd restart')

