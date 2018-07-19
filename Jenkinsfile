#!groovy
pipeline {
  agent { docker { image 'php:7.1-jessie' } }
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
