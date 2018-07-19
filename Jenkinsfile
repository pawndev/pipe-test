#!groovy
pipeline {
  agent { docker { image 'php:7.1-jessie' } }
  stages {
    //stage('Which branch') {
      //steps {
        //sh 'git branch'
      //}
    //}
    node {
      checkout scm
      sh 'echo $BRANCH_NAME'
    }
    //stage('Clone Repository') {
      //checkout scm
    //}

    stage('Build') {
      sh 'docker run --rm -v .:/app composer/composer install'
    }

    stage('Tests') {
      sh 'bin/phpunit'
    }
  }
}
