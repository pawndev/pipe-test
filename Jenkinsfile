#!groovy
pipeline {
  agent { docker { image 'thomsch98/php7-composer:7.1.15-fpm-composer-alpine' } }
  stages {
    //stage('Which branch') {
      //steps {
        //sh 'git branch'
      //}
    //}
    stage('checkout') {
      steps {
        checkout scm
        sh 'echo $BRANCH_NAME'
      }
    }
    //stage('Clone Repository') {
      //checkout scm
    //}

    stage('Build') {
      steps {
        sh 'composer install'
      }
    }

    stage('Tests') {
      steps {
        sh 'bin/phpunit'
      }
    }
  }
}
