<?php
namespace Deployer;

require_once 'recipe/common.php';

host('162.241.253.84')
->port(22)
->stage('production')
->user('primepa6', 'user is {{user}}')
->set('http_user', 'primepa6')
->set('keep_releases', '2')
->set('deploy_path', '/home2/primepa6/public_html')
->set('repository', 'git@github.com:imperative-design/primepainters.git');

task('node:install', function(){
    // run('wget -qO- https://cdn.rawgit.com/creationix/nvm/master/install.sh | bash');
    // run('source ~/.bash_profile');
    // run('nvm install stable');
    run('cd current/wp-content/themes/primepainters');
    run('npm install');
});

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    // 'deploy:shared',
    // 'deploy:vendors',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');
after('deploy', 'node:install');
// after('node:install', 'success');
after('deploy', 'success');


task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: $result");
});
/**
 * Installing Node on Bluehost
 * wget -qO- https://cdn.rawgit.com/creationix/nvm/master/install.sh | bash
 * source ~/.bash_profile
 * nvm install stable
 * npm install
 * 
 */