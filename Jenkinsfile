#!groovy
pipeline {
  agent none
  node {
    try {
      stages {
        stage('Clone Repository') {
          checkout scm
        }

        stage('Build') {
          sh 'sudo docker run --rm -v .:/app composer/composer install'
          sh 'echo Bouloui'
        }

        stage('Tests') {
          parallel 'Unit': {
            sh 'bin/phpunit'
          }
        }
      }
    } catch (err) {
      currentBuild.result = 'FAILED'
      throw err
    }
  }
}
