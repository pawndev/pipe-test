#!groovy

node {
  stage('Clone Repository') {
    checkout scm
  }

  stage('Build') {
    sh 'docker run --rm -v .:/app composer/composer install'
  }

  stage('Tests') {
    parallel 'Unit': {
      sh 'bin/phpunit'
    }
  }
}
