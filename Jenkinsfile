#!groovy
pipeline {
  agent none
  stages {
    stage('Clone Repository') {
      checkout scm
    }

    stage('Build') {
      sh 'sudo docker run --rm -v .:/app composer/composer install'
    }

    stage('Tests') {
      parallel 'Unit': {
        sh 'bin/phpunit'
      }
    }
  }
}
