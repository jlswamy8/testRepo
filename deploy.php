<?php
namespace Deployer;

require 'recipe/yii2-app-advanced.php';
//This 
// Project name
set('application', 'basic');

// Project repository
set('repository', '');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('132.148.158.23')
    ->set('deploy_path', '~/var/www/html/apps/basic');    
    
// Tasks
task('test', function () {
    writeln('Hello');
});


task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');


