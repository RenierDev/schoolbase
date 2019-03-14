@servers(['hetzner' => 'equalayaek@equalily.com'])
@setup
$account = 'equalayaek';
@endsetup

@task('deploy:production', ['on' => 'hetzner'])
cd /usr/home/{{ $account }}/source

git pull origin master --force

php -dallow_url_fopen=1 composer.phar self-update

php -dallow_url_fopen=1 composer.phar install --prefer-dist --no-dev

cp -r /usr/home/{{ $account }}/source/public/. /usr/home/{{ $account }}/public_html/schoolbase/
@endtask